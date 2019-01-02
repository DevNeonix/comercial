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
            $table->bigIncrements('movc_id');
            $table->unsignedInteger('empresa_id');
            $table->foreign('empresa_id')->references("id")->on("empresas");
            $table->char('almacen_id',4);
            $table->foreign('almacen_id')->references('almacen')->on('almacens');
            $table->char('cod_doc',2);
            $table->char('numdoc',14);
            $table->integer('cliente_id')->nullable();
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
