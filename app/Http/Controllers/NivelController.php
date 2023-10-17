<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NivelController extends Controller
{
    public function index()
    {
        return view('Administracion.nivel.index');
    }

    public function create()
    {
        return view('Administracion.nivel.create');
    }

    public function edit($id)
    {
        return view('Administracion.nivel.edit', ['id' => $id]);
    }

    public function destroy($id)
    {
        return view('Administracion.nivel.delete', ['id' => $id]);
    }
}
