<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnoHasDocumento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumno_has_documento', function (Blueprint $table) {
            $table -> bigInteger('usuario_id')->unsigned();
            $table -> bigInteger('documento_id')->unsigned();
            $table->foreign('usuario_id')->references('id')->on('users');
            $table->foreign('documento_id')->references('id')->on('documentos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumno_has_documento');
    }
}
