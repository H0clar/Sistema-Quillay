<?php

use App\Http\Controllers\CursoController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\NotificacionesController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\NivelController;
use App\Http\Controllers\AsignaturaController;
use App\Http\Controllers\ComentarioController;
use App\Http\Controllers\RespuestaController;
use Illuminate\Support\Facades\Route;

// Ruta para mostrar la página principal (el home)
Route::get('/', function () {
    return view('home');
})->name('home');

// Rutas para la gestión de usuarios
Route::get('/usuarios', [UsuarioController::class, 'index'])->name('usuarios.index');
Route::get('/usuarios/create', [UsuarioController::class, 'create'])->name('usuarios.create');
Route::get('/usuarios/{id}/edit', [UsuarioController::class, 'edit'])->name('usuarios.edit');
Route::put('/usuarios/{id}', [UsuarioController::class, 'update'])->name('usuarios.update');
Route::delete('/usuarios/{id}', [UsuarioController::class, 'destroy'])->name('usuarios.destroy');

// Rutas para la gestión de niveles
Route::get('/niveles', [NivelController::class, 'index'])->name('niveles.index');
Route::get('/niveles/create', [NivelController::class, 'create'])->name('niveles.create');
Route::post('/niveles', [NivelController::class, 'store'])->name('niveles.store');
Route::get('/niveles/{id}/edit', [NivelController::class, 'edit'])->name('niveles.edit');
Route::put('/niveles/{id}', [NivelController::class, 'update'])->name('niveles.update');
Route::delete('/niveles/{id}', [NivelController::class, 'destroy'])->name('niveles.destroy');

// Rutas para la gestión de cursos
Route::get('/cursos', [CursoController::class, 'index'])->name('cursos.index');
Route::get('/cursos/create', [CursoController::class, 'create'])->name('cursos.create');
Route::post('/cursos', [CursoController::class, 'store'])->name('cursos.store');
Route::get('/cursos/{id}/edit', [CursoController::class, 'edit'])->name('cursos.edit');
Route::delete('/cursos/{id}', [CursoController::class, 'destroy'])->name('cursos.destroy');
Route::put('/cursos/{id}', [CursoController::class, 'update'])->name('cursos.update');








// Rutas para la gestión de asignaturas
Route::get('/asignaturas', [AsignaturaController::class, 'index'])->name('asignaturas.index');
Route::get('/asignaturas/create', [AsignaturaController::class, 'create'])->name('asignaturas.create');
Route::post('/asignaturas', [AsignaturaController::class, 'store'])->name('asignaturas.store');
Route::get('/asignaturas/{id}/edit', [AsignaturaController::class, 'edit'])->name('asignaturas.edit');
Route::put('/asignaturas/{id}', [AsignaturaController::class, 'update'])->name('asignaturas.update');
Route::delete('/asignaturas/{id}', [AsignaturaController::class, 'destroy'])->name('asignaturas.destroy');

// Rutas para la gestión de materiales
Route::get('/materiales', [MaterialController::class, 'index'])->name('materiales.index');
Route::get('/materiales/create', [MaterialController::class, 'create'])->name('materiales.create');
Route::get('/materiales/{id}/edit', [MaterialController::class, 'edit'])->name('materiales.edit');
Route::put('/materiales/{id}', [MaterialController::class, 'update'])->name('materiales.update');
Route::delete('/materiales/{id}', [MaterialController::class, 'destroy'])->name('materiales.destroy');

// Rutas para la gestión de comentarios y respuestas en la misma vista
Route::get('/comentarios', [ComentarioController::class, 'index'])->name('comentarios.index');
Route::get('/comentarios/create', [ComentarioController::class, 'create'])->name('comentarios.create');
Route::post('/comentarios', [ComentarioController::class, 'store'])->name('comentarios.store');
Route::get('/comentarios/{id}/edit', [ComentarioController::class, 'edit'])->name('comentarios.edit');
Route::put('/comentarios/{id}', [ComentarioController::class, 'update'])->name('comentarios.update');
Route::delete('/comentarios/{id}', [ComentarioController::class, 'destroy'])->name('comentarios.destroy');

// Rutas para la gestión de respuestas
Route::get('/respuestas/create', [RespuestaController::class, 'create'])->name('respuestas.create');
Route::post('/respuestas', [RespuestaController::class, 'store'])->name('respuestas.store');
Route::get('/respuestas/{id}/edit', [RespuestaController::class, 'edit'])->name('respuestas.edit');
Route::put('/respuestas/{id}', [RespuestaController::class, 'update'])->name('respuestas.update');
Route::delete('/respuestas/{id}', [RespuestaController::class, 'destroy'])->name('respuestas.destroy');

//Rutas para la gestion de cambios
Route::get('/cambios', [CambioController::class, 'index'])->name('cambios.index');
Route::get('/cambios/create', [CambioController::class, 'create'])->name('cambios.create');
Route::post('/cambios', [CambioController::class, 'store'])->name('cambios.store');
Route::get('/cambios/{id}/edit', [CambioController::class, 'edit'])->name('cambios.edit');
Route::put('/cambios/{id}', [CambioController::class, 'update'])->name('cambios.update');
Route::delete('/cambios/{id}', [CambioController::class, 'destroy'])->name('cambios.destroy');


// Rutas para la gestión de notificaciones
Route::get('/notificaciones', [NotificacionesController::class, 'index'])->name('notificaciones.index');
