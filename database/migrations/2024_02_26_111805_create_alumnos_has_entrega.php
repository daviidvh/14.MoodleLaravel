<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnosHasEntrega extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos_has_entrega', function (Blueprint $table) {
            $table -> date('fecha_entrega');
            $table -> integer ('calificacion');
            $table -> bigInteger('alumnos_id')->unsigned();
            $table -> bigInteger('entregas_id')->unsigned();
            $table->timestamps();

            $table->foreign('alumnos_id')->references('id')->on('alumnos');
            $table->foreign('entregas_id')->references('id')->on('entregas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumnos_has_entrega');
    }
}
