<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResponsabilidadsocialesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('responsabilidadsociales', function (Blueprint $table) {
            $table->id('id_responsabilidad_social');
            $table->string('Servicio');
            $table->string('CursoCapacitacion');
            $table->date('FechaInicio_curso');
            $table->date('FechaFin_curso');
            $table->date('Fecha_nacimiento');
            $table->decimal('Costo', 10, 0);
            $table->text('Campo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('responsabilidadsociales');
    }
}
