<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformacionempresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informacionempresas', function (Blueprint $table) {
            $table->id ('id_InfEmpresa');
            $table->text('Descripcion');
            $table->text('Mision');
            $table->text('Vision');
            $table->text('CulturaOrganizacional');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('informacionempresas');
    }
}
