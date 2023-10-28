<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema\DB;

class CreateDatabaseTables extends Migration
{
    public function up()
    {
        // Crear tabla TipoUsuario
        Schema::create('TipoUsuario', function (Blueprint $table) {
            $table->id('TipoUsuarioID');
            $table->string('Tipo', 50);
        });

        // Crear tabla Nivel_Educativo
        Schema::create('Nivel_Educativo', function (Blueprint $table) {
            $table->id('NivelEducativoID');
            $table->string('Nombre', 255);
            $table->string('Abreviatura', 10);
        });

        // Crear tabla Cursos
        Schema::create('Cursos', function (Blueprint $table) {
            $table->id('CursoID');
            $table->string('Nombre', 50);
            $table->unsignedBigInteger('NivelEducativoID');
            $table->string('Abreviatura', 10);
            $table->foreign('NivelEducativoID')->references('NivelEducativoID')->on('Nivel_Educativo');
        });

        // Crear tabla Asignatura
        Schema::create('Asignatura', function (Blueprint $table) {
            $table->id('AsignaturaID');
            $table->string('Nombre', 50);
            $table->unsignedBigInteger('CursoID');
            $table->foreign('CursoID')->references('CursoID')->on('Cursos');
        });

        // Crear tabla Tipo_Cambio
        Schema::create('Tipo_Cambio', function (Blueprint $table) {
            $table->id('TipoCambioID');
            $table->string('TipoCambio', 50);
        });

        // Crear tabla Usuario
        Schema::create('Usuario', function (Blueprint $table) {
            $table->id('UsuarioID');
            $table->string('Nombre', 50);
            $table->string('Apellido', 50);
            $table->string('CorreoElectronico', 100);
            $table->unsignedBigInteger('TipoUsuarioID');
            $table->unsignedBigInteger('AsignaturaID')->nullable();
            $table->foreign('TipoUsuarioID')->references('TipoUsuarioID')->on('TipoUsuario');
            $table->foreign('AsignaturaID')->references('AsignaturaID')->on('Asignatura');
        });

        // Crear tabla Material_Educativo
        Schema::create('Material_Educativo', function (Blueprint $table) {
            $table->id('MaterialID');
            $table->string('TipoArchivo', 50);
            $table->string('NombreArchivo', 255);
            $table->unsignedBigInteger('ProfesorID');
            $table->unsignedBigInteger('AsignaturaID');
            $table->unsignedBigInteger('CursoID');
            $table->unsignedBigInteger('NivelEducativoID');
            $table->boolean('Estado');
            $table->boolean('Visible');
            $table->string('RutaGoogleDrive', 255);
            $table->date('FechaSubida');
            $table->foreign('ProfesorID')->references('UsuarioID')->on('Usuario');
            $table->foreign('AsignaturaID')->references('AsignaturaID')->on('Asignatura');
            $table->foreign('CursoID')->references('CursoID')->on('Cursos');
            $table->foreign('NivelEducativoID')->references('NivelEducativoID')->on('Nivel_Educativo');
        });

        // Crear tabla Log para registro de cambios
        Schema::create('Log', function (Blueprint $table) {
            $table->id('LogID');
            $table->unsignedBigInteger('UsuarioID');
            $table->unsignedBigInteger('MaterialID');
            $table->unsignedBigInteger('TipoCambioID');
            $table->date('FechaCambio');
            $table->foreign('UsuarioID')->references('UsuarioID')->on('Usuario');
            $table->foreign('MaterialID')->references('MaterialID')->on('Material_Educativo');
            $table->foreign('TipoCambioID')->references('TipoCambioID')->on('Tipo_Cambio');
        });

        // Crear tabla Comentario
        Schema::create('Comentario', function (Blueprint $table) {
            $table->id('ComentarioID');
            $table->unsignedBigInteger('MaterialID');
            $table->unsignedBigInteger('UsuarioID');
            $table->string('Comentario', 255);
            $table->date('FechaComentario');
            $table->foreign('MaterialID')->references('MaterialID')->on('Material_Educativo');
            $table->foreign('UsuarioID')->references('UsuarioID')->on('Usuario');
        });

        // Crear tabla Respuesta
        Schema::create('Respuesta', function (Blueprint $table) {
            $table->id('RespuestaID');
            $table->unsignedBigInteger('ComentarioID');
            $table->unsignedBigInteger('UsuarioID');
            $table->string('Respuesta', 255);
            $table->date('FechaRespuesta');
            $table->foreign('ComentarioID')->references('ComentarioID')->on('Comentario');
            $table->foreign('UsuarioID')->references('UsuarioID')->on('Usuario');
        });
    }

    public function down()
    {
        Schema::dropIfExists('Respuesta');
        Schema::dropIfExists('Comentario');
        Schema::dropIfExists('Log');
        Schema::dropIfExists('Material_Educativo');
        Schema::dropIfExists('Usuario');
        Schema::dropIfExists('Tipo_Cambio');
        Schema::dropIfExists('Asignatura');
        Schema::dropIfExists('Cursos');
        Schema::dropIfExists('Nivel_Educativo');
        Schema::dropIfExists('TipoUsuario');
    }
}
