<?php

namespace App\Http\Controllers\Profesor;

use App\Http\Controllers\Controller;
use App\Models\MaterialEducativo;
use Illuminate\Support\Facades\Auth;

class MaterialProfeController extends Controller
{
    public function index()
    {
        // Asegurémonos de que el usuario esté autenticado
        if (Auth::check()) {
            // Obtén el ID del usuario autenticado
            $usuarioID = Auth::user()->UsuarioID;

            // Obtén los materiales para el profesor actualmente autenticado
            $materialesProfe = MaterialEducativo::where('UsuarioID', $usuarioID)->get();

            // Retorna la vista con la variable $materialesProfe
            return view('Profesor.Material.index', compact('materialesProfe'));
        } else {
            // Redirecciona o toma alguna acción si el usuario no está autenticado
            return redirect()->route('login');
        }
    }

    // Otras funciones que puedas necesitar en el controlador...



    public function create()
    {
        // Lógica para obtener datos necesarios para la creación
        $cursos = Curso::all();
        $asignaturas = Asignatura::all();
        $nivelesEducativos = NivelEducativo::all();
        $tiposArchivo = TipoArchivo::all();

        return view('Profesor.Material.create', compact('cursos', 'asignaturas', 'nivelesEducativos', 'tiposArchivo'));
    }

    // Agrega las funciones necesarias para la creación, edición y eliminación según tus necesidades
    // ...
}
