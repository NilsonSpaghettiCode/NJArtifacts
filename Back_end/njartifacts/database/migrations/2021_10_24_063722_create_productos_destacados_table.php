<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosDestacadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos_destacados', function (Blueprint $table) {
            $table->id('id_productoD');

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
        Schema::dropIfExists('productos_destacados');
    }
}