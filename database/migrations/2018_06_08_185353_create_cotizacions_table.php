<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCotizacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cotizacions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('asunto');
            $table->string('estatus');
            $table->string('idmoneda');
            $table->string('total');
            $table->string('id_usuario');
            $table->date('expiracion_apartado');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->string('id_cliente');
            $table->string('id_lista');
            $table->string('detalles');
            $table->string('id_lista_archivos');
            $table->string('condiciones');
            $table->string('comentarios');
            $table->string('descuento');
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
        Schema::dropIfExists('cotizacions');
    }
}
