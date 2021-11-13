<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductoCaracteristicaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto_caracteristica', function (Blueprint $table) {
            
            $table->id();
            
            $table->unsignedBigInteger('id_productopk');
            $table->unsignedBigInteger('id_caracteristicapk');
            
            $table->foreign('id_productopk')->references('id_producto')->on('producto');
            $table->foreign('id_caracteristicapk')->references('id_caracteristica')->on('caracteristica');
            
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
        Schema::dropIfExists('producto_caracteristica');
    }
}
