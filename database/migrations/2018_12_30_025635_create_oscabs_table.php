<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOscabsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oscabs', function (Blueprint $table) {
            $table->char('numdoc',10);
            $table->integer('cliente_id');
            $table->string('glosa');
            $table->char('moneda');
            $table->double('cambio');
            $table->char('estado',1);
            $table->double('total');
            $table->timestamps();
            $table->primary(['numdoc']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('oscabs');
    }
}
