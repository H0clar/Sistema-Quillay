<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NivelEducativoSeeder extends Seeder
{
    public function run()
    {
        DB::table('Nivel_Educativo')->insert([
            ['NivelEducativoID' => 1, 'Nombre' => 'Nivel 1 EDUCACION ESPECIAL TRASTORNOS ESPECIFICOS DEL LENGUAJE', 'Abreviatura' => 'N1'],
            ['NivelEducativoID' => 2, 'Nombre' => 'Nivel 2 EDUCACION PARVULARIA', 'Abreviatura' => 'N2'],
            ['NivelEducativoID' => 3, 'Nombre' => 'Nivel 3 ENSEÑANZA BÁSICA', 'Abreviatura' => 'N3'],
        ]);
    }
}
