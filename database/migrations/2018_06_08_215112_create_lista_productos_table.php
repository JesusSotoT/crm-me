<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListaProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lista_productos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_producto');
            $table->string('estatus');
            $table->string('id_cotizacion');
            $table->string('id_usuario');
            $table->string('comentarios');
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
        Schema::dropIfExists('lista_productos');
    }
}
