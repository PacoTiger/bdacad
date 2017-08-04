<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMatricula extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matricula', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('alumno_id');
            $table->unsignedInteger('asignatura_id');
            $table->unsignedInteger('profesor_id');
            $table->unsignedInteger('grupo_id');
            $table->date('fecha_alta');
            $table->date('fecha_baja');
            $table->float('num_horas_mes_a', 3, 1);
            $table->float('num_horas_mes', 3, 1);
            $table->float('num_horas_mes_b', 3, 1);
            $table->string('nota', 20);
            $table->string('comentario', 150);
            $table->date('fecha');
            $table->string('insercion',15);
            $table->string('modificacion',15);

            $table->timestamps();
            $table->softDeletes();

            $table->foreign('alumno_id')->references('id')->on('alumnos');
            $table->foreign('profesor_id')->references('id')->on('profesores');
            $table->foreign('asignatura_id')->references('id')->on('asignaturas');
            $table->foreign('grupo_id')->references('id')->on('grupos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matricula');
    }
}
