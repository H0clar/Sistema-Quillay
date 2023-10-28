<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AsignaturaSeeder extends Seeder
{
    public function run()
    {
        DB::table('asignatura')->insert([
            ['Nombre' => 'Comunicación integral', 'CursoID' => 1],
            ['Nombre' => 'Formación Personal y Social', 'CursoID' => 1],
            ['Nombre' => 'Integración y Comprensión con el Entorno', 'CursoID' => 1],
            ['Nombre' => 'Plan Específico', 'CursoID' => 1],
            ['Nombre' => 'Taller de Psicomotricidad', 'CursoID' => 1],
            ['Nombre' => 'Comunicación integral', 'CursoID' => 2],
            ['Nombre' => 'Formación Personal y Social', 'CursoID' => 2],
            ['Nombre' => 'Integración y Comprensión con el Entorno', 'CursoID' => 2],
            ['Nombre' => 'Taller de Psicomotricidad', 'CursoID' => 2],
            ['Nombre' => 'Taller Inglés', 'CursoID' => 2],
            ['Nombre' => 'Comunicación integral', 'CursoID' => 3],
            ['Nombre' => 'Formación Personal y Social', 'CursoID' => 3],
            ['Nombre' => 'Integración y Comprensión con el Entorno', 'CursoID' => 3],
            ['Nombre' => 'Plan Específico', 'CursoID' => 3],
            ['Nombre' => 'Taller de Psicomotricidad', 'CursoID' => 3],
            ['Nombre' => 'Taller Inglés', 'CursoID' => 3],
            ['Nombre' => 'Comunicación integral', 'CursoID' => 4],
            ['Nombre' => 'Formación Personal y Social', 'CursoID' => 4],
            ['Nombre' => 'Integración y Comprensión con el Entorno', 'CursoID' => 4],
            ['Nombre' => 'Taller de Psicomotricidad', 'CursoID' => 4],
            ['Nombre' => 'Taller Inglés', 'CursoID' => 4],
            ['Nombre' => 'Comunicación integral', 'CursoID' => 5],
            ['Nombre' => 'Formación Personal y Social', 'CursoID' => 5],
            ['Nombre' => 'Integración y Comprensión con el Entorno', 'CursoID' => 5],
            ['Nombre' => 'Taller de Psicomotricidad', 'CursoID' => 5],
            ['Nombre' => 'Taller Inglés', 'CursoID' => 5],
            ['Nombre' => 'Artes Visuales', 'CursoID' => 6],
            ['Nombre' => 'Ciencias Naturales', 'CursoID' => 6],
            ['Nombre' => 'Educación Física y Salud', 'CursoID' => 6],
            ['Nombre' => 'Historia, Geografía y Ciencias Sociales', 'CursoID' => 6],
            ['Nombre' => 'Idioma Extranjero, Inglés', 'CursoID' => 6],
            ['Nombre' => 'Lenguaje y Comunicación', 'CursoID' => 6],
            ['Nombre' => 'Matemáticas', 'CursoID' => 6],
            ['Nombre' => 'Música', 'CursoID' => 6],
            ['Nombre' => 'Orientación', 'CursoID' => 6],
            ['Nombre' => 'Religión', 'CursoID' => 6],
            ['Nombre' => 'Tecnología', 'CursoID' => 6],
            ['Nombre' => 'Artes Visuales', 'CursoID' => 7],
            ['Nombre' => 'Ciencias Naturales', 'CursoID' => 7],
            ['Nombre' => 'Educación Física y Salud', 'CursoID' => 7],
            ['Nombre' => 'Historia, Geografía y Ciencias Sociales', 'CursoID' => 7],
            ['Nombre' => 'Idioma Extranjero, Inglés', 'CursoID' => 7],
            ['Nombre' => 'Lenguaje y Comunicación', 'CursoID' => 7],
            ['Nombre' => 'Matemáticas', 'CursoID' => 7],
            ['Nombre' => 'Música', 'CursoID' => 7],
            ['Nombre' => 'Orientación', 'CursoID' => 7],
            ['Nombre' => 'Religión', 'CursoID' => 7],
            ['Nombre' => 'Tecnología', 'CursoID' => 7],
            ['Nombre' => 'Artes Visuales', 'CursoID' => 8],
            ['Nombre' => 'Ciencias Naturales', 'CursoID' => 8],
            ['Nombre' => 'Educación Física y Salud', 'CursoID' => 8],
            ['Nombre' => 'Historia, Geografía y Ciencias Sociales', 'CursoID' => 8],
            ['Nombre' => 'Idioma Extranjero, Inglés', 'CursoID' => 8],
            ['Nombre' => 'Lenguaje y Comunicación', 'CursoID' => 8],
            ['Nombre' => 'Matemáticas', 'CursoID' => 8],
            ['Nombre' => 'Música', 'CursoID' => 8],
            ['Nombre' => 'Orientación', 'CursoID' => 8],
            ['Nombre' => 'Religión', 'CursoID' => 8],
            ['Nombre' => 'Taller', 'CursoID' => 8],
            ['Nombre' => 'Taller Lenguaje', 'CursoID' => 8],
            ['Nombre' => 'Taller Matemáticas', 'CursoID' => 8],
            ['Nombre' => 'Tecnología', 'CursoID' => 8],
        ]);
    }
}
