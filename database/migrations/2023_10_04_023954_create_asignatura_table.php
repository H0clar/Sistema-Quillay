<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsignaturaTable extends Migration
{
    public function up()
    {
        Schema::create('asignatura', function (Blueprint $table) {
            $table->id('AsignaturaID');
            $table->string('Nombre', 50);
            $table->unsignedBigInteger('CursoID');
            $table->foreign('CursoID')->references('CursoID')->on('cursos');
            // Puedes agregar otras columnas aquí si es necesario
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('asignatura');
    }
}
