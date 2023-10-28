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
            $table->string('Nombre', 255);
            $table->string('Abreviatura', 10);
            $table->timestamps(); // Esto agrega las columnas created_at y updated_at para el registro de fechas de creación y actualización.
        });
    }

    public function down()
    {
        Schema::dropIfExists('nivel_educativo');
    }
}
