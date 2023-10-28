<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRespuestaTable extends Migration
{
    public function up()
    {
        Schema::create('respuesta', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('comentario_id');
            $table->unsignedBigInteger('usuario_id');
            $table->string('respuesta', 255);
            $table->date('fecha_respuesta');
            $table->timestamps();

            $table->foreign('comentario_id')->references('comentarioID')->on('comentario');
            $table->foreign('usuario_id')->references('usuarioID')->on('usuario');
        });
    }

    public function down()
    {
        Schema::dropIfExists('respuesta');
    }
}
