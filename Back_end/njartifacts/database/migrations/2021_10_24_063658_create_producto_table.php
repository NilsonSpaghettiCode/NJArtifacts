
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto', function (Blueprint $table) {

            $table->id('id_producto');
            
            $table->string('nombre');
            $table->text('descripcion');
            $table->Integer('valor');
            $table->integer('cantidad');

            $table->string('images_list');//Cambiar implementacion
            
            
            //$table->timestamps('fecha_insercion', 4); 

            $table->timestamps();//created_at //updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('producto');
    }
}