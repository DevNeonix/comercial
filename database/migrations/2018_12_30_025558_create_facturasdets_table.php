<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacturasdetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturasdets', function (Blueprint $table) {
            $table->char('almacen_id',4);
            $table->char('numdoc',14);
            $table->integer('nlinea');
            $table->integer('articulo_id');
            $table->string('descripcion');
            $table->double('cantidad');
            $table->double('preciomn');
            $table->double('preciodl');
            $table->double('pordesc');
            $table->double('descuento');
            $table->double('igv');
            $table->double('porcigv');
            $table->string('glosa');
            $table->char('moneda');
            $table->double('cambio');
            $table->char('control_stock');
            $table->timestamps();
            $table->primary(["almacen_id","numdoc","nlinea"]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('facturasdets');
    }
}
