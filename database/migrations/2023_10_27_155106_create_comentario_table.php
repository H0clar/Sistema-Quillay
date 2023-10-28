<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComentarioTable extends Migration
{
    public function up()
    {
        Schema::create('comentario', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('material_id');
            $table->unsignedBigInteger('usuario_id');
            $table->string('comentario', 255);
            $table->date('fecha_comentario');
            $table->timestamps();

            $table->foreign('material_id')->references('materialID')->on('material_educativo');
            $table->foreign('usuario_id')->references('usuarioID')->on('usuario');
        });
    }

    public function down()
    {
        Schema::dropIfExists('comentario');
    }
}
