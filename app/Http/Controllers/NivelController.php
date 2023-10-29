<?php

namespace App\Http\Controllers;

use App\Models\NivelEducativo;
use Illuminate\Http\Request;

class NivelController extends Controller
{
    public function index()
    {
        $niveles = NivelEducativo::all(); // Obtén todos los niveles educativos
        return view('Administracion.Nivel.index', compact('niveles'));
    }

    public function create()
    {
        return view('Administracion.Nivel.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'abreviatura' => 'required',
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
        if ($nivel) {
            return view('Administracion.Nivel.edit', compact('nivel'));
        } else {
            return redirect()->route('niveles.index')->with('error', 'Nivel educativo no encontrado.');
        }
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required',
            'abreviatura' => 'required',
        ]);

        $nivel = NivelEducativo::find($id);

        if ($nivel) {
            $nivel->update([
                'Nombre' => $request->input('nombre'),
                'Abreviatura' => $request->input('abreviatura'),
            ]);

            return redirect()->route('niveles.index')->with('success', 'Nivel educativo actualizado correctamente.');
        } else {
            return redirect()->route('niveles.index')->with('error', 'Nivel educativo no encontrado.');
        }
    }

    public function destroy($id)
    {
        $nivel = NivelEducativo::find($id);

        if ($nivel) {
            $nivel->delete();

            return redirect()->route('niveles.index')->with('success', 'Nivel educativo eliminado correctamente.');
        } else {
            return redirect()->route('niveles.index')->with('error', 'Nivel educativo no encontrado.');
        }
    }

}
