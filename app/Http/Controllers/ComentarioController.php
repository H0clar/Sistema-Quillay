<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComentarioController extends Controller
{
    public function index()
    {
        return view('Administracion.comentario.index');
    }

    public function create()
    {
        return view('Administracion.comentario.create');
    }

    public function edit($id)
    {
        return view('Administracion.comentario.edit', ['id' => $id]);
    }

    public function destroy($id)
    {
        return view('Administracion.comentario.delete', ['id' => $id]);
    }
}
