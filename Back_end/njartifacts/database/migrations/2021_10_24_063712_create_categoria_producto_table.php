<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriaProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categoria_producto', function (Blueprint $table) {
            $table->id('id_categoriaProducto');

            $table->unsignedBigInteger('id_productofk');
            $table->unsignedBigInteger('id_categoriafk');
            $table->foreign('id_productofk')->references('id_producto')->on('producto');
            $table->foreign('id_categoriafk')->references('id_categoria')->on('categoria');
            
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
        Schema::dropIfExists('categoria_producto');
    }
}