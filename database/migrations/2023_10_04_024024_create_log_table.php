<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogTable extends Migration
{
    public function up()
    {
        Schema::create('Log', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('UsuarioID');
            $table->unsignedBigInteger('MaterialID');
            $table->unsignedBigInteger('TipoCambioID');
            $table->date('FechaCambio');
            $table->timestamps();
            
            $table->foreign('UsuarioID')->references('UsuarioID')->on('Usuario');
            $table->foreign('MaterialID')->references('MaterialID')->on('Material_Educativo');
            $table->foreign('TipoCambioID')->references('TipoCambioID')->on('Tipo_Cambio');
        });
    }

    public function down()
    {
        Schema::dropIfExists('Log');
    }
}
