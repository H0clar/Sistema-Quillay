<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoCambioTable extends Migration
{
    public function up()
    {
        Schema::create('tipo_cambio', function (Blueprint $table) {
            $table->id('TipoCambioID');
            $table->string('TipoCambio', 50);
            // Puedes agregar otras columnas aquí si es necesario
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tipo_cambio');
    }
}
