<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursosTable extends Migration
{
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->id('CursoID');
            $table->string('Nombre', 50);
            $table->unsignedBigInteger('NivelEducativoID');
            $table->foreign('NivelEducativoID')->references('NivelEducativoID')->on('nivel_educativo');
            // Puedes agregar otras columnas aquí si es necesario
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cursos');
    }
}

