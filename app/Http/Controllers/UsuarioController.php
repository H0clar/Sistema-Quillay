<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index()
    {
        // No necesitas recuperar los usuarios aquí, ya que estás controlando solo las rutas y vistas.
        return view('usuario.index');
    }

    public function create()
    {
        return view('usuario.create');
    }

    public function edit($id)
    {
        return view('usuario.edit');
    }

    public function destroy($id)
    {
        return view('usuario.delete');
    }
}
