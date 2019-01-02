<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stocks', function (Blueprint $table) {
            $table->char('almacen_id',4);
            $table->foreign('almacen_id')->references('almacen')->on("almacens");
            $table->char('articulo_id',20);
            $table->foreign('articulo_id')->references('codigo')->on("articulos");
            $table->unsignedInteger('empresa_id');
            $table->foreign('empresa_id')->references('id')->on("empresas");
            $table->double('stock')->default(0);
            $table->timestamps();
            $table->primary(["almacen_id","articulo_id","empresa_id"]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stocks');
    }
}
