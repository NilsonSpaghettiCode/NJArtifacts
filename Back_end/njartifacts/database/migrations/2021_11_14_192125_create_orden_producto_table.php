<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdenProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orden_producto', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_ordenfk');
            $table->unsignedBigInteger('id_productofk');

            $table->foreign('id_ordenfk')->references('id_orden')->on('orden');
            $table->foreign('id_productofk')->references('id_producto')->on('producto');
            
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
        Schema::dropIfExists('orden_producto');
    }
}
