<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orden', function (Blueprint $table) {

            $table->id('id_orden');

            $table->string('nombre');
            $table->string('correo_electronico');
            $table->bigInteger('valor_total');
            $table->integer('cantidad_productos');
            $table->boolean('cancelado');
            $table->timestamp('fecha_orden');

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
        Schema::dropIfExists('orden');
    }
}
