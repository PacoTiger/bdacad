<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCuotasAlumnos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuotas_alumnos', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('alumno_id');
            $table->string('mes', 2);
            $table->string('año', 4);
            $table->float('cantidad', 6, 2);
            $table->date('fecha');
            $table->boolean('activo');
            $table->string('insercion',15);
            $table->string('modificacion',15);

            $table->timestamps();
            $table->softDeletes();

            $table->foreign('alumno_id')->references('id')->on('alumnos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cuotas_alumnos');
    }
}
