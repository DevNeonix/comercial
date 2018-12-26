<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMovdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movds', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('almacen_id');
            $table->char('cod_doc');
            $table->char('nummov');
            $table->integer('nlinea');
            $table->integer('articulo_id');
            $table->string('descripcion');
            $table->double('cantidad');
            $table->double('preciomn');
            $table->double('preciodl');
            $table->double('pordesc');
            $table->double('descuento');
            $table->string('glosa');
            $table->char('moneda');
            $table->double('cambio');
            $table->char('control_stock');
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
        Schema::dropIfExists('movds');
    }
}
