<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CursosSeeder extends Seeder
{
    public function run()
    {
        DB::table('cursos')->insert([
            ['Nombre' => 'Medio mayor', 'NivelEducativoID' => 1, 'Abreviatura' => 'MM'],
            ['Nombre' => 'Primer nivel de transición (prekinder)', 'NivelEducativoID' => 1, 'Abreviatura' => 'NT1'],
            ['Nombre' => 'Segundo nivel de transición', 'NivelEducativoID' => 1, 'Abreviatura' => 'NT2'],
            ['Nombre' => 'Primer nivel de transición (prekinder)', 'NivelEducativoID' => 2, 'Abreviatura' => 'PK1'],
            ['Nombre' => 'Segundo nivel de Kinder', 'NivelEducativoID' => 2, 'Abreviatura' => 'K2'],
            ['Nombre' => 'Primero básico', 'NivelEducativoID' => 3, 'Abreviatura' => '1B'],
            ['Nombre' => 'Segundo básico', 'NivelEducativoID' => 3, 'Abreviatura' => '2B'],
            ['Nombre' => 'Tercero básico', 'NivelEducativoID' => 3, 'Abreviatura' => '3B'],
            ['Nombre' => 'Cuarto básico', 'NivelEducativoID' => 3, 'Abreviatura' => '4B'],
            ['Nombre' => 'Quinto básico', 'NivelEducativoID' => 3, 'Abreviatura' => '5B'],
            ['Nombre' => 'Sexto básico', 'NivelEducativoID' => 3, 'Abreviatura' => '6B'],
            ['Nombre' => 'Séptimo básico', 'NivelEducativoID' => 3, 'Abreviatura' => '7B'],
            ['Nombre' => 'Octavo básico', 'NivelEducativoID' => 3, 'Abreviatura' => '8B'],
        ]);
    }
}
