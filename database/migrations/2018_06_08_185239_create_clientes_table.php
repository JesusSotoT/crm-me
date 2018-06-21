<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('id_tipo_cliente');
            $table->string('email');
            $table->string('telefono');
            $table->string('direccion');
            $table->string('id_ciudad');
            $table->string('id_estado');
            $table->string('id_pais');
            $table->string('estatus');
            $table->string('detalles');
            $table->string('id_usuario');
            $table->string('id_tipo_compania');
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
        Schema::dropIfExists('clientes');
    }
}
