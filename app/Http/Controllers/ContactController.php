<?php namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
class ContactController extends Controller {
    public function sendContact(Request $request) {
        $rules = [
            'nombre'   => 'required|string|max:100',
            'correo'   => 'required|email|max:100',
            'telefono' => 'nullable|string|max:20',
            'asunto'   => 'nullable|string|max:100',
            'mensaje'  => 'required|string|max:1000',
        ];

        // Solo exigir captcha fuera de local
        if (!app()->environment('local')) {
            $rules['g-recaptcha-response'] = 'required';
        }

        // Validar formulario
        $validated = $request->validate($rules, [
            'nombre.required' => 'El nombre es requerido',
            'correo.required' => 'El correo es requerido',
            'correo.email'    => 'El correo no es válido',
            'mensaje.required' => 'El mensaje es requerido',
            'g-recaptcha-response.required' => 'Por favor verifica que no eres un bot',
        ]);

        if (!app()->environment('local')) {
            // Verificar reCAPTCHA
            try {
                $recaptchaResponse = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
                    'secret' => config('services.recaptcha.secret_key'),
                    'response' => $request->input('g-recaptcha-response'),
                ]);

                $recaptchaData = $recaptchaResponse->json();

                // Log para debugging
                Log::info('reCAPTCHA response:', $recaptchaData);

                // Validar respuesta de reCAPTCHA
                if (!$recaptchaData['success'] || $recaptchaData['score'] < config('services.recaptcha.threshold', 0.5)) {
                    return redirect()
                        ->to(url()->previous() . '#section_form')
                        ->withErrors('Verificación de reCAPTCHA fallida. Por favor intenta nuevamente.')
                        ->withInput();
                }
            } catch (\Exception $e) {
                Log::error('Error al verificar reCAPTCHA: ' . $e->getMessage());
                return redirect()
                    ->to(url()->previous() . '#section_form')
                    ->withErrors('Error al verificar reCAPTCHA. Por favor intenta nuevamente.')
                    ->withInput();
            }
        }

        // Preparar datos para el email
        $data = [
            'nombre' => $validated['nombre'],
            'correo' => $validated['correo'],
            'telefono' => $validated['telefono'],
            'asunto' => $validated['asunto'],
            'mensaje' => $validated['mensaje'],
        ];

        // Enviar email
        try {
            Mail::send('emails.contact', $data, function ($message) use ($data) {
                $recipients = array_filter([
                    env('CONTACT_EMAIL'),
                    env('CONTACT_EMAIL_2'),
                ]);

                $message->to($recipients)
                    ->replyTo($data['correo'], $data['nombre'])
                    ->subject('Nuevo mensaje de contacto: ' . ($data['asunto'] ?? 'Sin asunto'));
            });

            return redirect()
            ->to(url()->previous() . '#section_form')
            ->with('success', 'Tu mensaje ha sido enviado correctamente. Nos pondremos en contacto pronto.');
        } catch (\Exception $e) {
            Log::error('Error al enviar email de contacto: ' . $e->getMessage());
            /* return back()->with('error', 'Hubo un error al enviar tu mensaje. Por favor intenta nuevamente.'); */
            return redirect()
            ->to(url()->previous() . '#section_form')
            ->withErrors('Hubo un error al enviar tu mensaje. Por favor intenta nuevamente.')
            ->withInput();
        }
    }
}