<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterialEducativoTable extends Migration
{
    public function up()
    {
        Schema::create('material_educativo', function (Blueprint $table) {
            $table->id('MaterialID');
            $table->unsignedBigInteger('ProfesorID');
            $table->unsignedBigInteger('AsignaturaID');
            $table->unsignedBigInteger('CursoID');
            $table->unsignedBigInteger('NivelEducativoID');
            $table->boolean('Estado');
            $table->boolean('Visible');
            $table->string('RutaGoogleDrive', 255);
            $table->date('FechaSubida');
            $table->foreign('ProfesorID')->references('UsuarioID')->on('usuario');
            $table->foreign('AsignaturaID')->references('AsignaturaID')->on('asignatura');
            $table->foreign('CursoID')->references('CursoID')->on('cursos');
            $table->foreign('NivelEducativoID')->references('NivelEducativoID')->on('nivel_educativo');
            // Puedes agregar otras columnas aquí si es necesario
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('material_educativo');
    }
}

