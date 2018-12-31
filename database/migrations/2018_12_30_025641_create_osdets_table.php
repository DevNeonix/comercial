<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOsdetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('osdets', function (Blueprint $table) {
            $table->char('numdoc',14);
            $table->integer('nlinea');
            $table->integer('articulo_id');
            $table->string('descripcion');
            $table->double('cantidad');
            $table->double('preciomn');
            $table->double('preciodl');
            $table->string('glosa');
            $table->char('moneda');
            $table->double('cambio');
            $table->timestamps();
            $table->primary(["numdoc","nlinea"]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('osdets');
    }
}
