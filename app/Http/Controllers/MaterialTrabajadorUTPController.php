<?php



namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;

class MaterialTrabajadorUTPController extends Controller
{
    public function index()
    {
        // Verificar si el usuario tiene el rol correcto
        if (auth()->check() && auth()->user()->tipoUsuario === 'Trabajador_UTP') {
            return view('Trabajador_UTP.Material.index');
        } else {
            return redirect()->route('home')->with('error', 'No tienes permisos para acceder a esta página.');
        }
    }
}
