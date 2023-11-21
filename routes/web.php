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
use App\Http\Controllers\MaterialProfeController;
use App\Http\Controllers\MaterialTrabajadorUTPController;


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
    // Rutas generales aquí...

    // Rutas específicas para Trabajador UTP
    Route::prefix('trabajador_utp')->group(function () {
        Route::get('/material', [MaterialTrabajadorUTPController::class, 'index'])->name('material.trabajador_utp.index');
        // Agrega otras rutas específicas para Trabajador UTP según sea necesario
    });

    // Otras rutas generales aquí...
    
    // Ruta común para la gestión de material
    Route::get('/material', [MaterialController::class, 'index'])->name('material');
});

// Rutas para la gestión de usuarios, niveles, cursos, asignaturas, etc.

// Rutas AJAX y otras rutas específicas
Route::resource('usuarios', UsuarioController::class);
Route::resource('niveles', NivelController::class);
Route::resource('cursos', CursoController::class);
Route::resource('asignaturas', AsignaturaController::class);
Route::resource('materiales', MaterialController::class);
Route::resource('comentarios', ComentarioController::class);
Route::resource('respuestas', RespuestaController::class);
Route::resource('cambios', CambioController::class);

Route::get('/notificaciones', [NotificacionesController::class, 'index'])->name('notificaciones.index');
Route::get('/cursos-por-nivel-educativo/{nivelEducativoID}', [MaterialController::class, 'getCursosByNivelEducativo']);
Route::get('/asignaturas-por-curso/{cursoID}', [MaterialController::class, 'getAsignaturasByCurso']);
Route::get('/asignaturas-por-profesor/{profesorID}', [MaterialController::class, 'getAsignaturasByProfesor']);
Route::get('/cursos-por-profesor/{profesorID}', [MaterialController::class, 'getCursosByProfesor']);

// Rutas para el controlador MaterialProfeController utilizando Route::resource
Route::resource('materialprofe', MaterialProfeController::class);

// Rutas específicas para el profesor fuera de Route::resource
Route::get('/materialProfe/create', [MaterialProfeController::class, 'create'])->name('materialProfe.create');
Route::post('/materialProfe', [MaterialProfeController::class, 'store'])->name('materialProfe.store');




Route::prefix('profesor')->middleware(['auth', 'profesor'])->group(function () {
    Route::resource('materialProfe', MaterialProfeController::class);
});

