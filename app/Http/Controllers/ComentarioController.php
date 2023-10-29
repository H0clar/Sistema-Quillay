<?php

namespace App\Http\Controllers;

use App\Models\Comentario;
use Illuminate\Http\Request;

class ComentarioController extends Controller
{
    public function index()
    {
        $comentarios = Comentario::all();
        return view('Administracion.comentario.index', compact('comentarios'));
    }

    public function create()
    {
        return view('Administracion.comentario.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'contenido_comentario' => 'required|max:255',
            'MaterialID' => 'required|exists:Material_Educativo,MaterialID',
        ]);

        Comentario::create([
            'Comentario' => $request->input('contenido_comentario'),
            'MaterialID' => $request->input('MaterialID'),
        ]);

        return redirect()->route('comentarios.index')->with('success', 'Comentario creado correctamente.');
    }

    public function edit($id)
    {
        $comentario = Comentario::find($id);
        return view('Administracion.comentario.edit', compact('comentario'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'contenido_comentario' => 'required|max:255',
            'contenido_respuesta' => 'required|max:255',
            'MaterialID' => 'required|exists:Material_Educativo,MaterialID',
        ]);

        $comentario = Comentario::find($id);

        if ($comentario) {
            $comentario->Comentario = $request->input('contenido_comentario');
            $comentario->MaterialID = $request->input('MaterialID');
            $comentario->save();

            // Actualizar respuesta si existe
            if ($comentario->respuestas->count() > 0) {
                $respuesta = $comentario->respuestas[0];
                $respuesta->Respuesta = $request->input('contenido_respuesta');
                $respuesta->save();
            }

            return redirect()->route('comentarios.index')->with('success', 'Comentario actualizado correctamente.');
        } else {
            return redirect()->route('comentarios.index')->with('error', 'No se pudo encontrar el comentario a actualizar.');
        }
    }

    public function destroy($id)
    {
        $comentario = Comentario::find($id);

        if ($comentario) {
            // Eliminar respuestas relacionadas
            $comentario->respuestas()->delete();

            // Ahora puedes eliminar el comentario
            $comentario->delete();

            return redirect()->route('comentarios.index')->with('success', 'Comentario eliminado correctamente.');
        } else {
            return redirect()->route('comentarios.index')->with('error', 'No se pudo encontrar el comentario a eliminar.');
        }
    }
}
