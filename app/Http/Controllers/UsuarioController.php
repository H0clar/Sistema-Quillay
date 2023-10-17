<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index()
    {
        return view('Administracion.Usuario.index');
    }

    public function create()
    {
        return view('Administracion.Usuario.create');
    }

    public function edit($id)
    {
        return view('Administracion.Usuario.edit', ['id' => $id]);
    }

    public function destroy($id)
    {
        // Similar a la función edit, puedes pasar solo el ID a la vista.
        return view('Administracion.Usuario.delete', ['id' => $id]);
    }
}
