<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnosHasGrupos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos_has_grupos', function (Blueprint $table) {
            $table -> bigInteger('alumnos_id')->unsigned();
            $table -> bigInteger('grupos_id')->unsigned();
            $table -> bigInteger('asignaturas_id')->unsigned();
            $table->timestamps();

            
            $table->foreign('alumnos_id')->references('id')->on('profesores');
            $table->foreign('grupos_id')->references('id')->on('grupos');
            $table->foreign('asignaturas_id')->references('id')->on('asignaturas');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumnos_has_grupos');
    }
}
