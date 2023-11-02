<?php

namespace App\Http\Controllers;

use App\Models\MaterialEducativo;
use App\Models\Curso;
use App\Models\Asignatura;
use App\Models\Usuario;
use App\Models\NivelEducativo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MaterialController extends Controller
{
    public function index()
    {
        $materiales = MaterialEducativo::all();
        return view('Administracion.Material.index', compact('materiales'));
    }

    public function create()
    {
        $cursos = Curso::all();
        $asignaturas = Asignatura::all();
        $profesores = Usuario::where('TipoUsuarioID', 1)->get(); // Filtra por tipo de usuario (profesor)
        $nivelesEducativos = NivelEducativo::all();

        return view('Administracion.Material.create', compact('cursos', 'asignaturas', 'profesores', 'nivelesEducativos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'TipoArchivo' => 'required',
            'archivo' => 'required|mimes:pdf',
            'FechaSubida' => 'required',
            'ProfesorID' => 'required',
            'AsignaturaID' => 'required',
            'CursoID' => 'required',
            'NivelEducativoID' => 'required',
            'Estado' => 'required',
        ]);

        $archivoSubido = $request->file('archivo');
        $nombreDelArchivoGuardado = uniqid() . '.' . $archivoSubido->getClientOriginalExtension();
        $archivoSubido->move(public_path('storage'), $nombreDelArchivoGuardado);

        $estado = $request->input('Estado') === 'Activo' ? true : false;

        $material = new MaterialEducativo([
            'TipoArchivo' => $request->input('TipoArchivo'),
            'UsuarioID' => $request->input('ProfesorID'),
            'AsignaturaID' => $request->input('AsignaturaID'),
            'CursoID' => $request->input('CursoID'),
            'NivelEducativoID' => $request->input('NivelEducativoID'),
            'Estado' => $estado,
            'RutaGoogleDrive' => 'storage/' . $nombreDelArchivoGuardado,
            'FechaSubida' => $request->input('FechaSubida'),
        ]);

        $material->save();

        return redirect()->route('materiales.index')->with('success', 'Material educativo agregado correctamente.');
    }

    public function destroy($id)
    {
        $material = MaterialEducativo::find($id);

        if ($material) {
            $material->delete();
            return redirect()->route('materiales.index')->with('success', 'Material educativo eliminado correctamente.');
        } else {
            return redirect()->route('materiales.index')->with('error', 'No se pudo encontrar el material educativo a eliminar.');
        }
    }
}
