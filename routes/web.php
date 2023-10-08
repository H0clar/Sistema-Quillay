<?php

use App\Http\Controllers\UsuarioController;
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
