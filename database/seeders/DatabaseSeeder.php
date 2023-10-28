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
        $this->call(TipoCambioSeeder::class);
        $this->call(NivelEducativoSeeder::class);  // Asegurarse de que NivelEducativoSeeder se ejecute antes que CursosSeeder
        $this->call(CursosSeeder::class);  // CursosSeeder debe ejecutarse después de NivelEducativoSeeder
        $this->call(AsignaturaSeeder::class);  // AsignaturaSeeder debe ejecutarse después de CursosSeeder
        $this->call(UsuarioSeeder::class);  // UsuarioSeeder debe ejecutarse después de TipoUsuarioSeeder
        $this->call(MaterialEducativoSeeder::class);
        $this->call(ComentarioSeeder::class);  // ComentarioSeeder debe ejecutarse después de MaterialEducativoSeeder
        $this->call(RespuestaSeeder::class);  // RespuestaSeeder debe ejecutarse después de ComentarioSeeder
    }
}
