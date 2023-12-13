<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Google\Client;
use Google\Service\Drive;
use App\Models\MaterialEducativo;
use App\Models\TipoArchivo;
use Illuminate\Support\Facades\File;

use Google\Service\Drive\DriveFileList;



use App\Models\Usuario;
use App\Models\Asignatura;
use App\Models\Curso;
use App\Models\NivelEducativo;
use Illuminate\Support\Facades\Auth;


class MaterialController extends Controller
{
    public function index(Request $request)
    {
        $userInfo = session('user_info');

        if ($userInfo['tipoUsuario'] === 'Profesor') {
            return $this->indexForProfesor($request);
        } elseif ($userInfo['tipoUsuario'] === 'Trabajador_UTP') {
            return view('Trabajador_UTP.Material.index'); 
        } elseif ($userInfo['tipoUsuario'] === 'Administrador') {
            return $this->indexForAdministrador($request);
        } else {
            return redirect()->route('home')->with('error', 'No tienes permisos para acceder a esta página.');
        }
    }

    private function indexForProfesor(Request $request)
    {
        $usuario = Auth::user();

        $materialesProfe = MaterialEducativo::with('tipoArchivo', 'asignatura', 'curso', 'nivelEducativo')
            ->where('UsuarioID', $usuario->UsuarioID)
            ->get();

        return view('Profesor.Material.index', compact('materialesProfe'));
    }

    private function indexForAdministrador(Request $request)
    {
        $tipoArchivoFilter = $request->input('tipoArchivo');
        $usuarioFilter = $request->input('usuario');
        $asignaturaFilter = $request->input('asignatura');
        $nivelEducativoFilter = $request->input('nivelEducativo');
        $cursoFilter = $request->input('curso');
        $fechaFilter = $request->input('fecha');

        $tiposArchivo = TipoArchivo::all();
        $usuarios = Usuario::all();
        $asignaturas = Asignatura::all();
        $nivelesEducativos = NivelEducativo::all();
        $cursos = Curso::all();

        $query = MaterialEducativo::with('usuario', 'asignatura', 'curso', 'nivelEducativo', 'tipoArchivo');

        if ($tipoArchivoFilter) {
            $query->whereHas('tipoArchivo', function ($q) use ($tipoArchivoFilter) {
                $q->where('Tipo', $tipoArchivoFilter);
            });
        }


        $materiales = $query->get();

        return view('Administracion.Material.index', compact('materiales', 'tiposArchivo', 'tipoArchivoFilter', 'usuarios', 'usuarioFilter', 'asignaturas', 'asignaturaFilter', 'nivelesEducativos', 'nivelEducativoFilter', 'cursos', 'cursoFilter', 'fechaFilter'));
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
            'ProfesorID' => 'required',
            'AsignaturaID' => 'required',
            'CursoID' => 'required',
            'NivelEducativoID' => 'required',
            'Estado' => 'required',
        ]);

        $archivoSubido = $request->file('archivo');
        $nombreDelArchivoGuardado = Str::random(40) . '.' . $archivoSubido->getClientOriginalExtension();

        // Crea una instancia del cliente de Google
        $client = new Client();
        $client->setApplicationName('phpQuillay');
        $client->setScopes([Drive::DRIVE_FILE]);

        // Carga las credenciales
        // Carga las credenciales
        $client->setAuthConfig('C:\Users\julio\Desktop\Quillay\credenciales.json');

        $driveService = new Drive($client);

        // ID de la carpeta en Google Drive
        $folderId = '14u1s-SkZqVoBAkkWxv2j3I8G1bgRJZ_b';

        // Subir el archivo a Google Drive en la carpeta compartida
        $fileMetadata = new \Google\Service\Drive\DriveFile([
            'name' => $nombreDelArchivoGuardado,
            'parents' => [$folderId]
        ]);

        try {
            $content = file_get_contents($archivoSubido->getRealPath());

            $file = $driveService->files->create($fileMetadata, [
                'data' => $content,
                'mimeType' => 'application/pdf',
                'uploadType' => 'multipart',
            ]);

            $estado = $request->input('Estado') === 'Activo' ? true : false;

            $material = new MaterialEducativo([
                'TipoArchivoID' => $request->input('TipoArchivoID'),
                'UsuarioID' => $request->input('ProfesorID'),
                'AsignaturaID' => $request->input('AsignaturaID'),
                'CursoID' => $request->input('CursoID'),
                'NivelEducativoID' => $request->input('NivelEducativoID'),
                'Estado' => $estado,
                'RutaGoogleDrive' => $file->id,  // Almacena el ID del archivo en Google Drive
                'FechaSubida' => now()->format('Y-m-d'),
            ]);

            $material->save();

            return redirect()->route('materiales.index')->with('success', 'Material educativo agregado correctamente.');
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }















    public function destroy($id)
    {
        $material = MaterialEducativo::find($id);

        if ($material) {
            $material->Estado = false;
            $material->save();

            return redirect()->route('materiales.index')->with('success', 'Material educativo ocultado correctamente.');
        } else {
            return redirect()->route('materiales.index')->with('error', 'No se pudo encontrar el material educativo a ocultar.');
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

    public function getCursosByNivelEducativo($nivelEducativoID)
    {
        $cursos = Curso::where('NivelEducativoID', $nivelEducativoID)->get();

        return response()->json($cursos);
    }

    public function getAsignaturasByCurso($cursoID)
    {
        $asignaturas = Asignatura::where('CursoID', $cursoID)->get();

        return response()->json($asignaturas);
    }
}
