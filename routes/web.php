<?php

use App\Http\Controllers\CursoController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\NotificacionesController;
use App\Http\Controllers\CambioController;
use App\Http\Controllers\ComentarioController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\NivelController;
use App\Http\Controllers\AsignaturaController;
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

// Rutas para la gestión de niveles educativos
Route::get('/niveles', [NivelController::class, 'index'])->name('niveles.index');
Route::get('/niveles/create', [NivelController::class, 'create'])->name('niveles.create');
Route::get('/niveles/{id}/edit', [NivelController::class, 'edit'])->name('niveles.edit');
Route::put('/niveles/{id}', [NivelController::class, 'update'])->name('niveles.update');
Route::delete('/niveles/{id}', [NivelController::class, 'destroy'])->name('niveles.destroy');



// Rutas para la gestión de cursos
Route::get('/cursos', [CursoController::class, 'index'])->name('cursos.index');
Route::get('/cursos/create', [CursoController::class, 'create'])->name('cursos.create');
Route::get('/cursos/{id}/edit', [CursoController::class, 'edit'])->name('cursos.edit');
Route::put('/cursos/{id}', [CursoController::class, 'update'])->name('cursos.update');
Route::delete('/cursos/{id}', [CursoController::class, 'destroy'])->name('cursos.destroy');


// Rutas para la gestión de asignaturas

Route::get('/asignaturas', [AsignaturaController::class, 'index'])->name('asignaturas.index');
Route::get('/asignaturas/create', [AsignaturaController::class, 'create'])->name('asignaturas.create');
Route::get('/asignaturas/{id}/edit', [AsignaturaController::class, 'edit'])->name('asignaturas.edit');
Route::put('/asignaturas/{id}', [AsignaturaController::class, 'update'])->name('asignaturas.update');
Route::delete('/asignaturas/{id}', [AsignaturaController::class, 'destroy'])->name('asignaturas.destroy');



// Rutas para la gestión de materiales
Route::get('/materiales', [MaterialController::class, 'index'])->name('materiales.index');
Route::get('/materiales/create', [MaterialController::class, 'create'])->name('materiales.create');
Route::get('/materiales/{id}/edit', [MaterialController::class, 'edit'])->name('materiales.edit');
Route::put('/materiales/{id}', [MaterialController::class, 'update'])->name('materiales.update');
Route::delete('/materiales/{id}', [MaterialController::class, 'destroy'])->name('materiales.destroy');


// Rutas para la gestión de cambios

Route::get('/cambios', [CambioController::class, 'index'])->name('cambios.index');
Route::get('/cambios/create', [CambioController::class, 'create'])->name('cambios.create');
Route::get('/cambios/{id}/edit', [CambioController::class, 'edit'])->name('cambios.edit');
Route::put('/cambios/{id}', [CambioController::class, 'update'])->name('cambios.update');
Route::delete('/cambios/{id}', [CambioController::class, 'destroy'])->name('cambios.destroy');


// Rutas para la gestión de comentarios

Route::get('/comentarios', [ComentarioController::class, 'index'])->name('comentarios.index');
Route::get('/comentarios/create', [ComentarioController::class, 'create'])->name('comentarios.create');
Route::get('/comentarios/{id}/edit', [ComentarioController::class, 'edit'])->name('comentarios.edit');
Route::put('/comentarios/{id}', [ComentarioController::class, 'update'])->name('comentarios.update');
Route::delete('/comentarios/{id}', [ComentarioController::class, 'destroy'])->name('comentarios.destroy');



// Rutas para la gestión de notificaciones

Route::get('/notificaciones', [NotificacionesController::class, 'index'])->name('notificaciones.index');
