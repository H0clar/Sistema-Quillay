<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        $cursos = Curso::all();
        return view('Administracion.curso.index', compact('cursos'));
    }

    public function create()
    {
        return view('Administracion.curso.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'Nombre' => 'required',
            'NivelEducativoID' => 'required',
            'Abreviatura' => 'required',
            // Agrega más reglas de validación según tus necesidades
        ]);

        Curso::create([
            'Nombre' => $request->input('Nombre'),
            'NivelEducativoID' => $request->input('NivelEducativoID'),
            'Abreviatura' => $request->input('Abreviatura'),
            // Agrega más campos aquí según tus necesidades
        ]);

        return redirect()->route('cursos.index');
    }

    public function edit($id)
    {
        $curso = Curso::find($id);
        return view('Administracion.curso.edit', compact('curso'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'Nombre' => 'required',
            'NivelEducativoID' => 'required',
            'Abreviatura' => 'required',
            // Agrega más reglas de validación según tus necesidades
        ]);

        $curso = Curso::find($id);
        $curso->update([
            'Nombre' => $request->input('Nombre'),
            'NivelEducativoID' => $request->input('NivelEducativoID'),
            'Abreviatura' => $request->input('Abreviatura'),
            // Agrega más campos aquí según tus necesidades
        ]);

        return redirect()->route('cursos.index');
    }

    public function destroy($id)
    {
        $curso = Curso::find($id);
        $curso->delete();
        return redirect()->route('cursos.index');
    }
}
