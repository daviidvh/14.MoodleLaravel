<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documentos', function (Blueprint $table) {
            $table->id();
            $table -> string('nombre',45);
            $table -> string('extension',45);
            $table -> string('ubicacion',45);
            $table -> bigInteger('entregas_id')->unsigned();
            $table -> bigInteger('user_id')->unsigned();
            $table->timestamps();

            $table->foreign('entregas_id')->references('id')->on('entregas');
            $table->foreign('user_id')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('documentos');
    }
}
