<?php use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/test', function () { return view('test'); });

Route::get('/', function () { return view('web.index'); });

// Ruta para enviar formulario de contacto
Route::post('/contact/send', [ContactController::class, 'sendContact'])->name('contact.send');