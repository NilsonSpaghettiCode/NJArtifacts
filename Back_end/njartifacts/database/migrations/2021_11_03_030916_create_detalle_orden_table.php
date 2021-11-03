<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateDetalleOrdenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_orden', function (Blueprint $table) {
            $table->id('id_ordenD');

            $table->unsignedBigInteger('id_productofk');
            $table->unsignedBigInteger('id_ordenfk');

            $table->foreign('id_productofk')->references('id_producto')->on('producto');
            $table->foreign('id_ordenfk')->references('id_orden')->on('orden');
            

            $table->string('nombre_producto');
            $table->integer('valor_orden');
            $table->integer('cantidad');

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
        Schema::dropIfExists('detalle_orden');
    }
}
