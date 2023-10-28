<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoCambioTable extends Migration
{
    public function up()
    {
        Schema::create('tipo_cambio', function (Blueprint $table) {
            $table->increments('TipoCambioID');
            $table->string('TipoCambio', 50);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tipo_cambio');
    }
}
