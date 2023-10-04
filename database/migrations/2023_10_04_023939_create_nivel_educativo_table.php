<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNivelEducativoTable extends Migration
{
    public function up()
    {
        Schema::create('nivel_educativo', function (Blueprint $table) {
            $table->id('NivelEducativoID');
            $table->string('Nombre', 50);
            // Puedes agregar otras columnas aquí si es necesario
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('nivel_educativo');
    }
}
