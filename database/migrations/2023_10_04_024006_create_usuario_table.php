<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarioTable extends Migration 
{
    public function up()
    {
        Schema::create('tipo_usuario', function (Blueprint $table) { 
            $table->id();
            $table->string('Nombre', 50);
            $table->string('Apellido', 50);
            $table->string('CorreoElectronico', 100);
            $table->unsignedBigInteger('TipoUsuarioID');
            $table->unsignedBigInteger('AsignaturaID')->nullable();

            $table->foreign('TipoUsuarioID')->references('TipoUsuarioID')->on('tipo_usuario');
            $table->foreign('AsignaturaID')->references('AsignaturaID')->on('asignatura');
            $table->timestamps();

            
        });
    }

    public function down()
    {
        Schema::dropIfExists('Usuario');
    }
}
