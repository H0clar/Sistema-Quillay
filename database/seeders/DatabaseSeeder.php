<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(TipoUsuarioSeeder::class);
        $this->call(NivelEducativoSeeder::class);
        $this->call(CursosSeeder::class);
        $this->call(TipoCambioSeeder::class);

        

        // También puedes agregar llamadas a otros seeders aquí si los tienes.
    }
}
