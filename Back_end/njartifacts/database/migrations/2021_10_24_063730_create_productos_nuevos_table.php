<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosNuevosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos_nuevos', function (Blueprint $table) {
            $table->id('id_productoN');

            $table->string('descripcion');

            $table->unsignedBigInteger('id_productofk');
            $table->foreign('id_productofk')->references('id_producto')->on('producto');
            
            
            $table->string('nombre');

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
        Schema::dropIfExists('productos_nuevos');
    }
}