<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compras', function (Blueprint $table) {
            $table->increments('id_compra');
            $table->string('nombreCliente');
            $table->string('apellidoCliente');
            $table->string('nombreProd');
            $table->string('marca');
            $table->integer('cantidad');
            $table->unsignedInteger('precio');
            $table->string('tipo');
            $table->string('subtipo');
            $table->unsignedInteger('id_domCliente');
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
        Schema::dropIfExists('compras');
    }
}
