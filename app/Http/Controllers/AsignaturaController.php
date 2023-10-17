<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AsignaturaController extends Controller

{
    public function index()
    {
        return view('Administracion.asignatura.index');
    }

    public function create()
    {
        return view('Administracion.asignatura.create');
    }

    public function edit($id)
    {
        return view('Administracion.asignatura.edit', ['id' => $id]);
    }

    public function destroy($id)
    {
        return view('Administracion.asignatura.delete', ['id' => $id]);
    }
}
