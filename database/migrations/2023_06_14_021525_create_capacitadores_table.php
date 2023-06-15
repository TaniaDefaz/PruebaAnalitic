<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCapacitadoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('capacitadores', function (Blueprint $table) {
            $table->id('id_Capacitador');
            $table->string('Nombre');
            $table->string('Telefono');
            $table->string('Direccion');
            $table->string('Email');
            $table->date('Fecha_nacimiento');
            $table->text('Solicitud');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('capacitadores');
    }
}
