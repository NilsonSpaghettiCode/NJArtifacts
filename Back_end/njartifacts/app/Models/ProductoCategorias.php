<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductoCategorias extends Model
{
    use HasFactory;
    protected $table = 'categoria_producto';
    protected $primaryKey = 'id_categoriaProducto';
}
