<?php

namespace App\Http\Controllers;

use App\Models\Log;
use Illuminate\Http\Request;

class CambioController extends Controller
{
    public function index()
    {
        // Recupera los registros de cambio con las relaciones definidas (usuario, material, tipoCambio)
        $registrosCambio = Log::with(['usuario', 'material', 'tipoCambio'])->get();

        return view('Administracion.cambio.index', compact('registrosCambio'));
    }

    public function create()
    {
        // Aquí podrías agregar lógica para crear nuevos registros de cambio si es aplicable
    }

    public function edit($id)
    {
        // Esto dependerá de cómo planeas permitir la edición de registros de cambio (si es necesario)
    }

    public function destroy($id)
    {
        $registroCambio = Log::find($id);

        if ($registroCambio) {
            $registroCambio->delete();
            return redirect()->route('cambios.index')->with('success', 'Registro de cambio eliminado correctamente.');
        } else {
            return redirect()->route('cambios.index')->with('error', 'No se pudo encontrar el registro de cambio a eliminar.');
        }
    }

    // Nueva función para obtener la descripción del cambio
    public function obtenerDescripcionCambio($log) {
        $usuarioNombre = $log->usuario->Nombre . ' ' . $log->usuario->Apellido;
        $materialNombre = $log->material->NombreArchivo;
        $tipoCambio = $log->tipoCambio->TipoCambio;
        $fechaCambio = $log->FechaCambio;

        $descripcion = "{$usuarioNombre} ha realizado un cambio en el material educativo '{$materialNombre}' (Tipo: {$tipoCambio}) el {$fechaCambio}";

        return $descripcion;
    }
}
