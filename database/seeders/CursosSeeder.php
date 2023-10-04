<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CursosSeeder extends Seeder
{
    public function run()
    {
        DB::table('cursos')->insert([
            ['CursoID' => 1, 'Nombre' => 'Curso 1', 'NivelEducativoID' => 1],
            ['CursoID' => 2, 'Nombre' => 'Curso 2', 'NivelEducativoID' => 1],
            ['CursoID' => 3, 'Nombre' => 'Curso 3', 'NivelEducativoID' => 2],
        ]);
    }
}
