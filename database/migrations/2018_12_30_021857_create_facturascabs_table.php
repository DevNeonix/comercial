<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacturascabsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturascabs', function (Blueprint $table) {
            $table->char('almacen_id',4);
            $table->char('numdoc',10);
            $table->integer('cliente_id');
            $table->char('tipmov',1);
            $table->string('condicion_pago');
            $table->integer('referencia');
            $table->string('glosa');
            $table->char('moneda',2);
            $table->double('cambio');
            $table->char('estado',1);
            $table->char('cdr',1);
            $table->double('igv');
            $table->double('porcigv');
            $table->double('total');
            $table->timestamps();
            $table->primary(['almacen_id','numdoc']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('facturascabs');
    }
}
