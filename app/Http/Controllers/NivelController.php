<?php

namespace App\Http\Controllers;

use App\Models\NivelEducativo;
use Illuminate\Http\Request;

class NivelController extends Controller
{
    public function index()
    {
        $niveles = NivelEducativo::all();
        return view('Administracion.Nivel.index', compact('niveles'));
    }

    public function create()
    {
        return view('Administracion.Nivel.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|max:255',
            'abreviatura' => 'required|max:10',
        ]);

        NivelEducativo::create([
            'Nombre' => $request->input('nombre'),
            'Abreviatura' => $request->input('abreviatura'),
        ]);

        return redirect()->route('niveles.index')->with('success', 'Nivel educativo creado correctamente.');
    }

    public function edit($id)
    {
        $nivel = NivelEducativo::find($id);
        return view('Administracion.Nivel.edit', compact('nivel'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|max:255',
            'abreviatura' => 'required|max:10',
        ]);

        $nivel = NivelEducativo::find($id);

        if ($nivel) {
            $nivel->Nombre = $request->input('nombre');
            $nivel->Abreviatura = $request->input('abreviatura');
            $nivel->save();
            return redirect()->route('niveles.index')->with('success', 'Nivel educativo actualizado correctamente.');
        } else {
            return redirect()->route('niveles.index')->with('error', 'No se pudo encontrar el nivel educativo a actualizar.');
        }
    }

    public function destroy($id)
    {
        $nivel = NivelEducativo::find($id);

        if ($nivel) {
            // Eliminar registros relacionados en la tabla material_educativo
            $nivel->material_educativo->each(function ($material) {
                // Eliminar comentarios relacionados a cada material educativo
                $material->comentarios()->delete(); // Cambiar 'comentario()' a 'comentarios()'
            });

            // Luego elimina el nivel educativo
            $nivel->material_educativo()->delete();
            $nivel->delete();

            return redirect()->route('niveles.index')->with('success', 'Nivel educativo eliminado correctamente.');
        } else {
            return redirect()->route('niveles.index')->with('error', 'No se pudo encontrar el nivel educativo a eliminar.');
        }
    }

}
