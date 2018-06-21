<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdenTrabajosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orden_trabajos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_cotizacion');
            $table->string('estatus');
            $table->string('id_lista');
            $table->string('detalles');
            $table->string('id_cliente');
            $table->string('id_usuario');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->string('condiciones');
            $table->string('archivado');
            $table->string('total');
            $table->string('tipo_moneda');
            $table->string('id_lista_archivos');
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
        Schema::dropIfExists('orden_trabajos');
    }
}
