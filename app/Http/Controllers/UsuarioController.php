<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Models\TipoUsuario;
use App\Models\Asignatura;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuarios = Usuario::with('tipoUsuario', 'asignatura')->get(); // Cargar relaciones TipoUsuario y Asignatura
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
            'correo_electronico' => 'required|email|unique:Usuario,CorreoElectronico',
            'tipo_usuario_id' => 'required|exists:TipoUsuario,TipoUsuarioID',
            'asignatura_id' => 'exists:Asignatura,AsignaturaID',
        ]);

        Usuario::create([
            'Nombre' => $request->input('nombre'),
            'Apellido' => $request->input('apellido'),
            'CorreoElectronico' => $request->input('correo_electronico'),
            'TipoUsuarioID' => $request->input('tipo_usuario_id'),
            'AsignaturaID' => $request->input('asignatura_id'),
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
            'correo_electronico' => 'required|email|unique:Usuario,CorreoElectronico,' . $id,
            'tipo_usuario_id' => 'required|exists:TipoUsuario,TipoUsuarioID',
            'asignatura_id' => 'exists:Asignatura,AsignaturaID',
        ]);

        $usuario = Usuario::find($id);

        if ($usuario) {
            $usuario->Nombre = $request->input('nombre');
            $usuario->Apellido = $request->input('apellido');
            $usuario->CorreoElectronico = $request->input('correo_electronico');
            $usuario->TipoUsuarioID = $request->input('tipo_usuario_id');
            $usuario->AsignaturaID = $request->input('asignatura_id');
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
            $usuario->delete();
            return redirect()->route('usuarios.index')->with('success', 'Usuario eliminado correctamente.');
        } else {
            return redirect()->route('usuarios.index')->with('error', 'No se pudo encontrar el usuario a eliminar.');
        }
    }
}
