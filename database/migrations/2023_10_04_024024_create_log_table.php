<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogTable extends Migration
{
    public function up()
    {
        Schema::create('log', function (Blueprint $table) {
            $table->id('LogID');
            $table->unsignedBigInteger('UsuarioID');
            $table->unsignedBigInteger('MaterialID');
            $table->unsignedBigInteger('TipoCambioID');
            $table->date('FechaCambio');
            $table->foreign('UsuarioID')->references('UsuarioID')->on('usuario');
            $table->foreign('MaterialID')->references('MaterialID')->on('material_educativo');
            $table->foreign('TipoCambioID')->references('TipoCambioID')->on('tipo_cambio');
            // Puedes agregar otras columnas aquí si es necesario
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('log');
    }
}
