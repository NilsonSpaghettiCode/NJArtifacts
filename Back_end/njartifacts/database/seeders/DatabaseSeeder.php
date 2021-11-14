<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

//Imports para usar los factory de los modelos definidos
use App\Models\Categoria;
use App\Models\SolicitudesContacto;
use App\Models\Producto;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Categoria::factory(8)->create();
        SolicitudesContacto::factory(10)->create();
        Producto::factory(8)->create();
        
    }
}
