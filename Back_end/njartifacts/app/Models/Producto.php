<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    //use HasMany;
    protected $table = "producto";
    protected $primaryKey = "id_producto";

    public function caracteristicas()
    {
        return $this->belongsToMany(Caracteristica::class, 'producto_caracteristica', 'id_productopk', 'id_caracteristicapk');
    }

    public function categorias()
    {
        return $this->belongsToMany(Categoria::class, 'categoria_producto', 'id_productofk','id_categoriafk');
    }

    public function imagenes()
    {
        return $this->hasMany(Imagen::class,'id_productopk','id_producto');
    }

    public function ordenes()
    {
        return $this->belongsToMany(Orden::class, 'orden_producto', 'id_ordenfk','id_productofk');
    }
}
