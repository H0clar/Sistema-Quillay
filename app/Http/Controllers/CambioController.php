<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CambioController extends Controller
{
    public function index()
    {
        return view('Administracion.cambio.index');
    }

    public function create()
    {
        return view('Administracion.cambio.create');
    }

    public function edit($id)
    {
        return view('Administracion.cambio.edit', ['id' => $id]);
    }

    public function destroy($id)
    {
        return view('Administracion.cambio.delete', ['id' => $id]);
    }
}
