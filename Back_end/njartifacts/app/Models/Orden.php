<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orden extends Model
{
    use HasFactory;

    protected $table = "orden";
    protected $primaryKey = "id_orden";

    public function productos()
    {
        return $this->belongsToMany(Producto::class, 'orden_producto','id_ordenfk','id_productofk');
    }
}
