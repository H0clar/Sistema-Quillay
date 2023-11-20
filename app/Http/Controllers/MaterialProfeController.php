<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;

class MaterialProfeController extends Controller
{
    public function index()
    {
        $userInfo = session('user_info');

        // Verificar el tipo de usuario
        if ($userInfo['tipoUsuario'] === 'Profesor') {
            return view('Profesor.Material.index'); // Vista para profesores
        } else {
            return view('Administracion.Material.index'); // Vista para administradores
        }
    }
}
