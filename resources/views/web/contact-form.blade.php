<!-- SECCIÓN FORMULARIO DE CONTACTO -->
<section id="section_form">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center subtitle-page" style="color: var(--white);">CONTÁCTAME</h2>
            </div>
        </div>

        <!-- Mensajes de éxito/error -->
        @if ($errors->any())
            <div class="row mb-3" style="margin-top:20px;">
                <div class="col-12">
                    <div class="alert alert-danger alert-dismissible fade show" role="alert" style="background-color: #f8d7da; border-color: #f5c6cb; color: #721c24;">
                        <strong>Error en el formulario:</strong>
                        <ul class="mb-0" style="margin-top: 10px;">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            </div>
        @endif

        @if (session('success'))
            <div class="row mb-3" style="margin-top:20px;">
                <div class="col-12">
                    <div class="alert alert-success alert-dismissible fade show" role="alert" style="background-color: #d4edda; border-color: #c3e6cb; color: #155724;">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            </div>
        @endif

        @if (session('error'))
            <div class="row mb-3" style="margin-top:20px;">
                <div class="col-12">
                    <div class="alert alert-danger alert-dismissible fade show" role="alert" style="background-color: #f8d7da; border-color: #f5c6cb; color: #721c24;">
                        {{ session('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            </div>
        @endif

        <div class="row mb-3" style="margin-top:30px;">
            <div class="col-12 col-sm-6">
                <form id="contactForm" method="POST" action="{{ route('contact.send') }}">
                    @csrf
                    <input type="hidden" id="gRecaptchaResponse" name="g-recaptcha-response">
                    <div class="form-group-custom">
                        <label for="nombre" class="visually-hidden">Tu nombre:</label>
                        <input type="text" id="nombre" name="nombre" placeholder="Tu nombre" value="{{ old('nombre') }}" required>
                    </div>
                    <div class="form-group-custom">
                        <label for="correo" class="visually-hidden">Correo electrónico:</label>
                        <input type="email" id="correo" name="correo" placeholder="Correo electrónico" value="{{ old('correo') }}" required>
                    </div>
                </form>
            </div>
            <div class="col-12 col-sm-6">
                <form id="contactForm2" style="display: none;"></form>
                <div class="form-group-custom">
                    <label for="telefono" class="visually-hidden">Teléfono:</label>
                    <input type="tel" id="telefono" name="telefono" placeholder="Teléfono" value="{{ old('telefono') }}" form="contactForm">
                </div>
                <div class="form-group-custom">
                    <label for="asunto" class="visually-hidden">Asunto:</label>
                    <input type="text" id="asunto" name="asunto" placeholder="Asunto" value="{{ old('asunto') }}" form="contactForm">
                </div>
            </div>
        </div>
        <div class="row" style="margin-bottom:30px;">
            <div class="col-12">
                <div class="form-group-custom">
                    <label for="mensaje" class="visually-hidden">Tu mensaje:</label>
                    <textarea id="mensaje" name="mensaje" placeholder="Tu mensaje" required form="contactForm">{{ old('mensaje') }}</textarea>
                </div>
                <div>
                    <button type="submit" class="form-btn text-gral-bold center-on-mobile" style="font-size:17px;" id="submitBtn" form="contactForm">
                        <i class="fa-solid fa-paper-plane"></i> Enviar
                    </button>
                </div>
            </div>
        </div>

        {{-- <div class="row">
            <div class="col-xs-12 text-gral text-center" style="color: var(--white);">
                <strong>Aviso de publicidad 1234567890123456</strong>
            </div>
        </div> --}}
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const submitBtn = document.getElementById('submitBtn');
        const contactForm = document.getElementById('contactForm');
        const recaptchaField = document.getElementById('gRecaptchaResponse');
        
        // Si el formulario ya fue enviado y hay errores, asegurarnos de que recargue el reCAPTCHA
        @if($errors->any())
            if (typeof grecaptcha !== 'undefined' && grecaptcha.enterprise) {
                grecaptcha.enterprise.ready(function() {
                    grecaptcha.enterprise.reset();
                });
            }
        @endif
        
        contactForm.addEventListener('submit', async function (e) {
            e.preventDefault();
            
            // Solo ejecutar reCAPTCHA si no estamos en entorno local
            @if(!app()->environment('local'))
                try {
                    await grecaptcha.enterprise.ready(async () => {
                        const token = await grecaptcha.enterprise.execute(
                            '{{ config('services.recaptcha.site_key') }}',
                            { action: 'contact' }
                        );
                        
                        // Asignar el token al campo hidden
                        recaptchaField.value = token;
                        
                        // Enviar el formulario
                        contactForm.submit();
                    });
                } catch (error) {
                    console.error('reCAPTCHA error:', error);
                    alert('Error al verificar reCAPTCHA. Por favor, recarga la página e intenta de nuevo.');
                }
            @else
                // En local, enviar directamente
                contactForm.submit();
            @endif
        });
    });
</script>