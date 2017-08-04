<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAlumnos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->increments('id');

            $table->string('nombre', 30);
            $table->string('apellidos', 50);
            $table->string('dni', 9);
            $table->date('fecha_nac')->nullable();
            $table->string('direccion', 60);
            $table->string('cp', 5);
            $table->string('poblacion', 30);
            $table->string('provincia', 15);
            $table->string('tfijo', 20);
            $table->string('tmovil', 20);
            $table->string('email', 100);
            $table->string('tutor', 50);
            $table->boolean('activo');
            $table->boolean('domiciliacion');
            $table->string('ccc', 23);
            $table->boolean('especial');
            $table->boolean('legal');
            $table->text('comentario');
            $table->date('fecha');
            $table->string('insercion',15);
            $table->string('modificacion',15);

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumnos');
    }
}
