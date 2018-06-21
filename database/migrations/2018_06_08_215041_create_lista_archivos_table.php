<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListaArchivosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lista_archivos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_cotizacion');
            $table->string('estatus');
            $table->string('url');
            $table->string('nombre');
            $table->date('id_usuario');
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
        Schema::dropIfExists('lista_archivos');
    }
}
