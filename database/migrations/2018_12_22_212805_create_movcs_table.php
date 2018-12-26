<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMovcsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movcs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('almacen_id');
            $table->integer('proveedor_id');
            $table->integer('cliente_id');
            $table->char('cod_doc');
            $table->char('tipmov');
            $table->char('nummov');
            $table->string('condicion_pago');
            $table->integer('referencia');
            $table->string('glosa');
            $table->char('moneda');
            $table->double('cambio');
            $table->char('estado');
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
        Schema::dropIfExists('movcs');
    }
}
