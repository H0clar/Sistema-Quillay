<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NivelEducativoSeeder extends Seeder
{
    public function run()
    {
        DB::table('nivel_educativo')->insert([
            ['NivelEducativoID' => 1, 'Nombre' => 'Nivel 1'],
            ['NivelEducativoID' => 2, 'Nombre' => 'Nivel 2'],
            ['NivelEducativoID' => 3, 'Nombre' => 'Nivel 3'],
        ]);
    }
}