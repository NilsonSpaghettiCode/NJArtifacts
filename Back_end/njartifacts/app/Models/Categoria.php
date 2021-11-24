<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;


    protected $table = "categoria";
    protected $primaryKey = "id_categoria";

    function getPrimaryKey()
    {
        return $this->primaryKey;
    }

    public function productos()
    {
        return $this->belongsToMany(Producto::class,'categoria_producto','id_productofk','id_categoriafk');
    }

}
