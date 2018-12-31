<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulos', function (Blueprint $table) {
            $table->char('codigo',20);
            $table->string('descripcion');
            $table->string('descripcion2');
            $table->double('precio1')->default(0);
            $table->double('precio2')->default(0);
            $table->double('precio3')->default(0);
            $table->double('precio4')->default(0);
            $table->double('precio5')->default(0);
            $table->double('precio6')->default(0);
            $table->double('alerta_stock')->nullable();
            $table->integer('usuario_id_crea');
            $table->integer('usuario_id_actualiza');
            $table->timestamps();
            $table->primary(['codigo']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articulos');
    }
}
