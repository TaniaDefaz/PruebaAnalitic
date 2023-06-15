<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAliadoempresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aliadoempresas', function (Blueprint $table) {
            $table->id('id_aliadoEmpresa');
            $table->string('Nombre');
            $table->string('Titulo');
            $table->string('Rol');
            $table->text('Experiencia');
            $table->text('Funciones');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aliadoempresas');
    }
}
