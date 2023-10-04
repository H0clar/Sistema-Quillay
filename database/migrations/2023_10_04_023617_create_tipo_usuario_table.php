<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoUsuarioTable extends Migration
{
    public function up()
    {
        Schema::create('tipo_usuario', function (Blueprint $table) {
            $table->id('TipoUsuarioID');
            $table->string('Tipo', 50);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tipo_usuario');
    }
}

