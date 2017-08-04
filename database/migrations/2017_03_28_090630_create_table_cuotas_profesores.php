<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCuotasProfesores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuotas_profesores', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('matricula_id');
            $table->string('mes', 2);
            $table->string('año', 4);
            $table->float('cantidad', 6, 2);
            $table->date('fecha');
            $table->string('insercion',15);
            $table->string('modificacion',15);

            $table->timestamps();
            $table->softDeletes();

            $table->foreign('matricula_id')->references('id')->on('matricula');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cuotas_profesores');
    }
}
