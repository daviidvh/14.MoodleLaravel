<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->id();
            $table -> string('nombre',45);
            $table -> string('apellidos',45);
            $table -> char('dni',9)->unique();
            $table -> date('fecha_nacimiento');
            $table -> string('numero_matricula',15);
            $table -> string('email',45);
            $table -> bigInteger('ciclo_id')->unsigned();

            $table->foreign('ciclo_id')->references('id')->on('ciclos');
            // $table -> bigInteger('alumno_id')->unsigned();

            // $table->foreign('alumno_id')->references('id')->on('users');

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
        Schema::dropIfExists('alumnos');
    }
}
