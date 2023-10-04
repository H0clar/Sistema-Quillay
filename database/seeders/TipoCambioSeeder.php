<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoCambioSeeder extends Seeder
{
    public function run()
    {
        DB::table('tipo_cambio')->insert([
            ['TipoCambioID' => 1, 'TipoCambio' => 'Inserción'],
            ['TipoCambioID' => 2, 'TipoCambio' => 'Actualización'],
            ['TipoCambioID' => 3, 'TipoCambio' => 'Eliminación'],
        ]);
    }
}
