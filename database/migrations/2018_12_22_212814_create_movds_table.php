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
            $table->unsignedBigInteger('movc_id');
            $table->foreign('movc_id')->references('movc_id')->on('movcs');
            $table->integer('nlinea');
            $table->char('articulo_id',20);
            $table->foreign('articulo_id')->references('codigo')->on('articulos');
            $table->string('descripcion');
            $table->double('cantidad');
            $table->double('preciomn');
            $table->double('preciodl');
            $table->double('pordesc');
            $table->double('descuento');
            $table->string('glosa');
            $table->char('moneda');
            $table->double('cambio');
            $table->double('igv');
            $table->double('porcigv');
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
