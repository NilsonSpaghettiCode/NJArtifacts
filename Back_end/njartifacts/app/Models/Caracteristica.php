<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Caracteristica extends Model
{
    use HasFactory;

    protected $table = "caracteristica";
    protected $primaryKey = "id_caracteristica";

    public function productos()
    {
        return $this->belongsToMany(Producto::class, 'producto_caracterisca', 'id_productopk','id_caracteristicapk');
    }
}