<?php

namespace App\Http\Controllers;

use App\Models\Asignatura;
use App\Models\Curso; // Asegúrate de importar el modelo Curso
use Illuminate\Http\Request;

class AsignaturaController extends Controller
{
    public function index()
    {
        $asignaturas = Asignatura::all();
        return view('Administracion.Asignatura.index', compact('asignaturas'));
    }

    public function create()
    {
        $cursos = Curso::all(); // Obtén la lista de cursos
        return view('Administracion.Asignatura.create', compact('cursos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|max:255',
            'curso_id' => 'required|exists:cursos,CursoID', // Asegúrate de que el curso exista
        ]);

        Asignatura::create([
            'Nombre' => $request->input('nombre'),
            'CursoID' => $request->input('curso_id'), // Almacena el CursoID
        ]);

        return redirect()->route('asignaturas.index')->with('success', 'Asignatura creada correctamente.');
    }

    public function edit($id)
    {
        $asignatura = Asignatura::find($id);
        $cursos = Curso::all(); // Obtén la lista de cursos
        return view('Administracion.Asignatura.edit', compact('asignatura', 'cursos'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|max:255',
            'curso_id' => 'required|exists:cursos,CursoID', // Asegúrate de que el curso exista
        ]);

        $asignatura = Asignatura::find($id);

        if ($asignatura) {
            $asignatura->Nombre = $request->input('nombre');
            $asignatura->CursoID = $request->input('curso_id'); // Actualiza el CursoID
            $asignatura->save();
            return redirect()->route('asignaturas.index')->with('success', 'Asignatura actualizada correctamente.');
        } else {
            return redirect()->route('asignaturas.index')->with('error', 'No se pudo encontrar la asignatura a actualizar.');
        }
    }

    public function destroy($id)
    {
        $asignatura = Asignatura::find($id);

        if ($asignatura) {
            $asignatura->delete();
            return redirect()->route('asignaturas.index')->with('success', 'Asignatura eliminada correctamente.');
        } else {
            return redirect()->route('asignaturas.index')->with('error', 'No se pudo encontrar la asignatura a eliminar.');
        }
    }
}
