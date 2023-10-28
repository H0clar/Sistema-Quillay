<?php

namespace App\Http\Controllers;

use App\Models\Respuesta;
use Illuminate\Http\Request;

class RespuestaController extends Controller
{
    public function index()
    {
        $respuestas = Respuesta::all();
        return view('Administracion.respuesta.index', compact('respuestas'));
    }

    public function create()
    {
        return view('Administracion.respuesta.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'contenido' => 'required|max:255',
            'ComentarioID' => 'required|exists:Comentario,ComentarioID',
        ]);

        Respuesta::create([
            'Respuesta' => $request->input('contenido'),
            'ComentarioID' => $request->input('ComentarioID'),
        ]);

        return redirect()->route('Administracion.respuesta.index')->with('success', 'Respuesta creada correctamente.');
    }

    public function edit($id)
    {
        $respuesta = Respuesta::find($id);
        return view('Administracion.respuesta.edit', compact('respuesta'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'contenido' => 'required|max:255',
            'ComentarioID' => 'required|exists:Comentario,ComentarioID',
        ]);

        $respuesta = Respuesta::find($id);

        if ($respuesta) {
            $respuesta->Respuesta = $request->input('contenido');
            $respuesta->ComentarioID = $request->input('ComentarioID');
            $respuesta->save();
            return redirect()->route('Administracion.respuesta.index')->with('success', 'Respuesta actualizada correctamente.');
        } else {
            return redirect()->route('Administracion.respuesta.index')->with('error', 'No se pudo encontrar la respuesta a actualizar.');
        }
    }

    public function destroy($id)
    {
        $respuesta = Respuesta::find($id);

        if ($respuesta) {
            $respuesta->delete();
            return redirect()->route('Administracion.respuesta.index')->with('success', 'Respuesta eliminada correctamente.');
        } else {
            return redirect()->route('Administracion.respuesta.index')->with('error', 'No se pudo encontrar la respuesta a eliminar.');
        }
    }
}
