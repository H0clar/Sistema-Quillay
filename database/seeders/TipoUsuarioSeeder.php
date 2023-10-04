<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoUsuarioSeeder extends Seeder
{
    public function run()
    {
        // Insertar registros en la tabla tipo_usuario
        DB::table('tipo_usuario')->insert([
            ['Tipo' => 'Profesor'],
            ['Tipo' => 'Trabajador_UTP'],
            ['Tipo' => 'Administrador'],
        ]);
    }
}
