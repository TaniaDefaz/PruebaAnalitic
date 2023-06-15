<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultoresexternosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultoresexternos', function (Blueprint $table) {
            $table->id('id_consultores');
            $table->string('Nombre');
            $table->string('Titulo');
            $table->text('Experiencia');
            $table->text('Descripcion');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('consultoresexternos');
    }
}
