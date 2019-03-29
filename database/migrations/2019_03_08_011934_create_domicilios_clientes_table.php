<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDomiciliosClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('domicilios_clientes', function (Blueprint $table) {
            $table->increments('id_domcli');
            $table->string('calle');
            $table->string('numeroCasa');
            $table->string('colonia');
            $table->string('municipio');
            $table->unsignedInteger('codigoPostal');
            $table->string('estado');
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
        Schema::dropIfExists('domicilios_clientes');
    }
}
