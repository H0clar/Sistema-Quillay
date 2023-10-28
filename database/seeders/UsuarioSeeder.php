<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuarioSeeder extends Seeder
{
    public function run()
    {
        DB::table('Usuario')->insert([
            ['Nombre' => 'admin1', 'Apellido' => 'admin1', 'CorreoElectronico' => 'admin1@example.com', 'TipoUsuarioID' => 1, 'AsignaturaID' => 1],
            ['Nombre' => 'profe1', 'Apellido' => 'profe1', 'CorreoElectronico' => 'profe1@example.com', 'TipoUsuarioID' => 1, 'AsignaturaID' => 2],
            ['Nombre' => 'utp1', 'Apellido' => 'utp1', 'CorreoElectronico' => 'utp1@example.com', 'TipoUsuarioID' => 2, 'AsignaturaID' => 3],
        ]);
    }
}
