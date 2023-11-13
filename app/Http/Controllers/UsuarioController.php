<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Models\TipoUsuario;
use App\Models\Asignatura;
use App\Models\Log;

use App\Models\MaterialEducativo;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuarios = Usuario::with('tipoUsuario', 'asignatura')->get();
        return view('Administracion.Usuario.index', compact('usuarios'));
    }

    public function create()
    {
        $tiposUsuario = TipoUsuario::all();
        $asignaturas = Asignatura::all();

        return view('Administracion.Usuario.create', compact('tiposUsuario', 'asignaturas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|max:50',
            'apellido' => 'required|max:50',
            'tipo_usuario_id' => 'required|exists:TipoUsuario,TipoUsuarioID',
            'rut' => 'required|max:20', // Validación para el nuevo campo Rut
        ]);

        Usuario::create([
            'Nombre' => $request->input('nombre'),
            'Apellido' => $request->input('apellido'),
            'Rut' => $request->input('rut'), // Nuevo campo Rut
            'TipoUsuarioID' => $request->input('tipo_usuario_id'),
        ]);

        return redirect()->route('usuarios.index')->with('success', 'Usuario creado correctamente.');
    }

    public function edit($id)
    {
        $usuario = Usuario::find($id);
        $tiposUsuario = TipoUsuario::all();
        $asignaturas = Asignatura::all();

        return view('Administracion.Usuario.edit', compact('usuario', 'tiposUsuario', 'asignaturas'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|max:50',
            'apellido' => 'required|max:50',
            'tipo_usuario_id' => 'required|exists:TipoUsuario,TipoUsuarioID',
        ]);

        $usuario = Usuario::find($id);

        if ($usuario) {
            $usuario->Nombre = $request->input('nombre');
            $usuario->Apellido = $request->input('apellido');
            $usuario->TipoUsuarioID = $request->input('tipo_usuario_id');
            $usuario->save();
            return redirect()->route('usuarios.index')->with('success', 'Usuario actualizado correctamente.');
        } else {
            return redirect()->route('usuarios.index')->with('error', 'No se pudo encontrar el usuario a actualizar.');
        }
    }

    public function destroy($id)
    {
        $usuario = Usuario::find($id);

        if ($usuario) {
            // Eliminar registros relacionados en la tabla Log
            Log::where('UsuarioID', $id)->delete();

            // Eliminar registros relacionados en la tabla material_educativo
            Material_Educativo::where('UsuarioID', $id)->delete();

            // Ahora puedes eliminar el usuario
            $usuario->delete();

            return redirect()->route('usuarios.index')->with('success', 'Usuario eliminado correctamente.');
        } else {
            return redirect()->route('usuarios.index')->with('error', 'No se pudo encontrar el usuario a eliminar.');
        }
    }

}
