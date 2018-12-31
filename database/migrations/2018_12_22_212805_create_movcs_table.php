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
            $table->char('almacen_id',4);
            $table->char('cod_doc',1);
            $table->char('numdoc',14);
            $table->integer('proveedor_id');
            $table->integer('cliente_id');
            $table->char('tipmov');
            $table->integer('docref');
            $table->string('glosa');
            $table->char('moneda',2);
            $table->double('cambio');
            $table->char('estado',1);
            $table->double('igv',1);
            $table->double('porcigv');
            $table->double('total');
            $table->timestamps();
            $table->primary(['almacen_id', 'cod_doc','numdoc']);
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
