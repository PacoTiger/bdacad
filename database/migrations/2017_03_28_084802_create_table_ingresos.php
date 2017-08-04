<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableIngresos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingresos', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('alumno_id')->unsigned();
            $table->string('mes', 2);
            $table->string('año', 4);
            $table->float('total', 6, 2);
            $table->float('descuento', 6, 2);
            $table->float('cantidad', 6, 2);
            $table->boolean('asignado');
            $table->date('fecha');
            $table->string('comentario', 150);
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
        Schema::dropIfExists('ingresos');
    }
}
