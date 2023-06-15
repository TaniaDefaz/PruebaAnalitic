<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->id('id_Cursos');
            $table->string('Nombre_curso');
            $table->text('Descripcion_curso');
            $table->string('Duracion_curso');
            $table->date('Fecha_curso');
            $table->date('Fecha_Fin_curso');
            $table->string('Instructor_curso');
            $table->string('Lugar_curso');
            $table->string('Precio_curso');
            $table->integer('CuposMaximos_curso');
            $table->integer('CuposDisponibles_curso');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cursos');
    }
}
