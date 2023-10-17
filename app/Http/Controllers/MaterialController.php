<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MaterialController extends Controller

{
    public function index()
    {
        return view('Administracion.material.index');
    }

    public function create()
    {
        return view('Administracion.material.create');
    }

    public function edit($id)
    {
        return view('Administracion.material.edit', ['id' => $id]);
    }

    public function destroy($id)
    {
        return view('Administracion.material.delete', ['id' => $id]);
    }
}
