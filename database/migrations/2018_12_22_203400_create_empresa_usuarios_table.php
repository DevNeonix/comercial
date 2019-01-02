<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpresaUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresa_usuarios', function (Blueprint $table) {
            $table->unsignedInteger('usuario_id');
            $table->foreign('usuario_id')->references("id")->on("usuarios");
            $table->unsignedInteger('empresa_id');
            $table->foreign('empresa_id')->references("id")->on("empresas");
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
        Schema::dropIfExists('empresa_usuarios');
    }
}
