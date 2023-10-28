<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComentarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Comentario')->insert([
            [
                'ComentarioID' => 1,
                'MaterialID' => 1,
                'UsuarioID' => 1,
                'Comentario' => 'Comentario 1',
                'FechaComentario' => '2023-10-06',
            ],
            [
                'ComentarioID' => 2,
                'MaterialID' => 2,
                'UsuarioID' => 2,
                'Comentario' => 'Comentario 2',
                'FechaComentario' => '2023-10-07',
            ],
            [
                'ComentarioID' => 3,
                'MaterialID' => 3,
                'UsuarioID' => 3,
                'Comentario' => 'Comentario 3',
                'FechaComentario' => '2023-10-08',
            ],
        ]);
    }
}
