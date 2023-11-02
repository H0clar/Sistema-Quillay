<?php

namespace App\Http\Controllers;

use App\Models\Usuario; // Importa el modelo Usuario
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index()
    {
        // Obtén la lista de usuarios y pasa a la vista
        $usuarios = Usuario::all();
        return view('Administracion.Usuario.index', compact('usuarios'));
    }

    public function create()
    {
        // Puedes crear un nuevo usuario, por ejemplo, mostrar un formulario vacío
        return view('Administracion.Usuario.create');
    }

    public function store(Request $request)
    {
        // Valida los datos del formulario y guarda el nuevo usuario
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'correo_electronico' => 'required|email',
            // Agrega más reglas de validación según tus necesidades
        ]);

        Usuario::create([
            'Nombre' => $request->input('nombre'),
            'Apellido' => $request->input('apellido'),
            'CorreoElectronico' => $request->input('correo_electronico'),
            // Agrega más campos aquí según tus necesidades
        ]);

        return redirect()->route('usuarios.index')->with('success', 'Usuario creado correctamente.');
    }

    public function edit($id)
    {
        // Obtén el usuario por su ID y pasa a la vista de edición
        $usuario = Usuario::find($id);
        return view('Administracion.Usuario.edit', compact('usuario'));
    }

    public function update(Request $request, $id)
    {
        // Valida los datos del formulario y actualiza el usuario existente
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'correo_electronico' => 'required|email',
            // Agrega más reglas de validación según tus necesidades
        ]);

        $usuario = Usuario::find($id);

        if ($usuario) {
            $usuario->update([
                'Nombre' => $request->input('nombre'),
                'Apellido' => $request->input('apellido'),
                'CorreoElectronico' => $request->input('correo_electronico'),
                // Actualiza más campos aquí según tus necesidades
            ]);

            return redirect()->route('usuarios.index')->with('success', 'Usuario actualizado correctamente.');
        } else {
            return redirect()->route('usuarios.index')->with('error', 'No se pudo encontrar el usuario a actualizar.');
        }
    }

    public function destroy($id)
    {
        // Elimina el usuario por su ID
        $usuario = Usuario::find($id);

        if ($usuario) {
            $usuario->delete();
            return redirect()->route('usuarios.index')->with('success', 'Usuario eliminado correctamente.');
        } else {
            return redirect()->route('usuarios.index')->with('error', 'No se pudo encontrar el usuario a eliminar.');
        }
    }
}
