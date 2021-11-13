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
}
