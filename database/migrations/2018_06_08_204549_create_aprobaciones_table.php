<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAprobacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aprobaciones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_cotizacion');
            $table->string('tipo_aprobacion');
            $table->string('id_cliente');
            $table->string('id_usuario_aprueba');
            $table->string('id_usuario');
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
        Schema::dropIfExists('aprobaciones');
    }
}
