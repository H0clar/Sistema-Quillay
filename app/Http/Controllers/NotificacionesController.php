<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificacionesController extends Controller
{
    public function index()
    {
        return view('Notificaciones.index');
    }

    public function create()
    {
        // Agregar lógica para mostrar el formulario de creación de notificaciones si es necesario.
    }

    public function store(Request $request)
    {
        // Agregar lógica para guardar una nueva notificación en la base de datos si es necesario.
    }

    // Puedes agregar más métodos según tus necesidades.

}
