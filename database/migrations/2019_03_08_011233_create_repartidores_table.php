<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepartidoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repartidores', function (Blueprint $table) {
          $table->increments('id_repartidor');
          $table->string('nombre');
          $table->string('apellidos');
          $table->unsignedInteger('telefono');
          $table->Unsignedinteger('edad');
          $table->string('email');
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
        Schema::dropIfExists('repartidores');
    }
}
