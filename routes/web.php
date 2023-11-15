<?php

use App\Http\Controllers\CursoController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\NotificacionesController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\NivelController;
use App\Http\Controllers\AsignaturaController;
use App\Http\Controllers\ComentarioController;
use App\Http\Controllers\RespuestaController;
use App\Http\Controllers\CambioController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Login.login');
});

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/login/google', [LoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('/login/google/callback', [LoginController::class, 'handleGoogleCallback']);
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    // Aquí puedes colocar las rutas que requieren autenticación
    Route::get('/dashboard', function () {
        // Ruta de ejemplo para usuarios autenticados
    })->name('dashboard');
});

// Rutas para la gestión de usuarios
Route::resource('usuarios', UsuarioController::class);

// Rutas para la gestión de niveles
Route::resource('niveles', NivelController::class);

// Rutas para la gestión de cursos
Route::resource('cursos', CursoController::class);

// Rutas para la gestión de asignaturas
Route::resource('asignaturas', AsignaturaController::class);

// Rutas para la gestión de materiales
Route::resource('materiales', MaterialController::class);

// Rutas para la gestión de comentarios y respuestas
Route::resource('comentarios', ComentarioController::class);
Route::resource('respuestas', RespuestaController::class);

// Rutas para la gestión de cambios
Route::resource('cambios', CambioController::class);

// Rutas adicionales...

// Rutas para la gestión de notificaciones
Route::get('/notificaciones', [NotificacionesController::class, 'index'])->name('notificaciones.index');
