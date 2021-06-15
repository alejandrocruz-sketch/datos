<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateA2019DatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('a2019_datos', function (Blueprint $table) {
            $table->id();
            $table->integer('id_factura')->nullable();
            $table->integer('id_cliente')->nullable();
            $table->integer('total_factura')->nullable();
            $table->dateTime('fecha_factura')->nullable();
            $table->integer('id_almacen')->nullable();
            $table->string('usuario')->nullable();
            $table->dateTime('fecha_creacion')->nullable();
            $table->string('numero_factura')->nullable();
            $table->integer('numero_boletas')->nullable();
            $table->integer('total_facturado')->nullable();
            $table->string('almacen')->nullable();
            $table->string('medio_pago')->nullable();
            $table->string('tipo_entrada')->nullable();
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
        Schema::dropIfExists('a2019_datos');
    }
}
