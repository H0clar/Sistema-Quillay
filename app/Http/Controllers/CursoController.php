<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        return view('Administracion.curso.index');
    }

    public function create()
    {
        return view('Administracion.curso.create');
    }

    public function edit($id)
    {
        return view('Administracion.curso.edit', ['id' => $id]);
    }

    public function destroy($id)
    {
        return view('Administracion.curso.delete', ['id' => $id]);
    }
}
