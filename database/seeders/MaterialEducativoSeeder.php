<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MaterialEducativoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Material_Educativo')->insert([
            [
                'MaterialID' => 1,
                'TipoArchivo' => 'Guía',
                'NombreArchivo' => 'ruta_guia1.pdf',
                'ProfesorID' => 1,
                'AsignaturaID' => 1,
                'CursoID' => 1,
                'NivelEducativoID' => 1,
                'Estado' => true,
                'Visible' => true,
                'RutaGoogleDrive' => 'ruta_guia1.pdf',
                'FechaSubida' => '2023-10-06',
            ],
            [
                'MaterialID' => 2,
                'TipoArchivo' => 'Prueba',
                'NombreArchivo' => 'ruta_prueba1.pdf',
                'ProfesorID' => 2,
                'AsignaturaID' => 2,
                'CursoID' => 2,
                'NivelEducativoID' => 2,
                'Estado' => true,
                'Visible' => true,
                'RutaGoogleDrive' => 'ruta_prueba1.pdf',
                'FechaSubida' => '2023-10-07',
            ],
            [
                'MaterialID' => 3,
                'TipoArchivo' => 'Planificación',
                'NombreArchivo' => 'ruta_planificacion1.pdf',
                'ProfesorID' => 3,
                'AsignaturaID' => 3,
                'CursoID' => 3,
                'NivelEducativoID' => 3,
                'Estado' => true,
                'Visible' => true,
                'RutaGoogleDrive' => 'ruta_planificacion1.pdf',
                'FechaSubida' => '2023-10-08',
            ],
        ]);
    }
}
