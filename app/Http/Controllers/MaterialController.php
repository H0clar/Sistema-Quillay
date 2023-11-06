<?php

namespace App\Http\Controllers;

use App\Models\MaterialEducativo;
use App\Models\Curso;
use App\Models\Asignatura;
use App\Models\Usuario;
use App\Models\NivelEducativo;
use App\Models\TipoArchivo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class MaterialController extends Controller
{
    public function index()
    {
        $materiales = MaterialEducativo::with('usuario', 'asignatura', 'curso', 'nivelEducativo', 'tipoArchivo')->get();
        return view('Administracion.Material.index', compact('materiales'));
    }

    public function create()
    {
        $cursos = Curso::all();
        $asignaturas = Asignatura::all();
        $profesores = Usuario::where('TipoUsuarioID', 1)->get();
        $nivelesEducativos = NivelEducativo::all();
        $tiposArchivo = TipoArchivo::all();

        return view('Administracion.Material.create', compact('cursos', 'asignaturas', 'profesores', 'nivelesEducativos', 'tiposArchivo'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'TipoArchivoID' => 'required',
            'archivo' => 'required|mimes:pdf',
            'FechaSubida' => 'required',
            'ProfesorID' => 'required',
            'AsignaturaID' => 'required',
            'CursoID' => 'required',
            'NivelEducativoID' => 'required',
            'Estado' => 'required',
        ]);

        $archivoSubido = $request->file('archivo');
        $nombreDelArchivoGuardado = Str::random(40) . '.' . $archivoSubido->getClientOriginalExtension();
        $archivoSubido->move(public_path('storage'), $nombreDelArchivoGuardado);

        $estado = $request->input('Estado') === 'Activo' ? true : false;

        $material = new MaterialEducativo([
            'TipoArchivoID' => $request->input('TipoArchivoID'),
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

    public function edit($id)
    {
        $material = MaterialEducativo::find($id);
        $cursos = Curso::all();
        $asignaturas = Asignatura::all();
        $profesores = Usuario::where('TipoUsuarioID', 1)->get();
        $nivelesEducativos = NivelEducativo::all();
        $tiposArchivo = TipoArchivo::all();

        if ($material) {
            return view('Administracion.Material.edit', compact('material', 'cursos', 'asignaturas', 'profesores', 'nivelesEducativos', 'tiposArchivo'));
        } else {
            return redirect()->route('materiales.index')->with('error', 'No se pudo encontrar el material educativo para editar.');
        }
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'TipoArchivoID' => 'required',
            'FechaSubida' => 'required',
            'ProfesorID' => 'required',
            'AsignaturaID' => 'required',
            'CursoID' => 'required',
            'NivelEducativoID' => 'required',
            'Estado' => 'required',
        ]);

        $material = MaterialEducativo::find($id);

        if ($material) {
            if ($request->hasFile('archivo')) {
                $archivoSubido = $request->file('archivo');
                $nombreDelArchivoGuardado = Str::random(40) . '.' . $archivoSubido->getClientOriginalExtension();
                $archivoSubido->move(public_path('storage'), $nombreDelArchivoGuardado);
                $material->RutaGoogleDrive = 'storage/' . $nombreDelArchivoGuardado;
            }

            $estado = $request->input('Estado') === 'Activo' ? true : false;

            $material->TipoArchivoID = $request->input('TipoArchivoID');
            $material->UsuarioID = $request->input('ProfesorID');
            $material->AsignaturaID = $request->input('AsignaturaID');
            $material->CursoID = $request->input('CursoID');
            $material->NivelEducativoID = $request->input('NivelEducativoID');
            $material->Estado = $estado;
            $material->FechaSubida = $request->input('FechaSubida');

            $material->save();

            return redirect()->route('materiales.index')->with('success', 'Material educativo actualizado correctamente.');
        } else {
            return redirect()->route('materiales.index')->with('error', 'No se pudo encontrar el material educativo para editar.');
        }
    }

    public function show($id)
    {
        $material = MaterialEducativo::find($id);

        if ($material) {
            return view('Administracion.Material.show', compact('material'));
        } else {
            return redirect()->route('materiales.index')->with('error', 'No se pudo encontrar el material educativo.');
        }
    }
}
