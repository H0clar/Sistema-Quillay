<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RespuestaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Respuesta')->insert([
            [
                'RespuestaID' => 1,
                'ComentarioID' => 1,
                'UsuarioID' => 1,
                'Respuesta' => 'Respuesta 1',
                'FechaRespuesta' => '2023-10-06',
            ],
            [
                'RespuestaID' => 2,
                'ComentarioID' => 2,
                'UsuarioID' => 2,
                'Respuesta' => 'Respuesta 2',
                'FechaRespuesta' => '2023-10-07',
            ],
            [
                'RespuestaID' => 3,
                'ComentarioID' => 3,
                'UsuarioID' => 3,
                'Respuesta' => 'Respuesta 3',
                'FechaRespuesta' => '2023-10-08',
            ],
        ]);
    }
}
