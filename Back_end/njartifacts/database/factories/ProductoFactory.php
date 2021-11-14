<?php

namespace Database\Factories;

use App\Models\Producto;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Producto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //randomElement(['GTX 1060', 'ryzen 5 3600', 'CRUCIAL BALLISTIX ', 'i5 11400', '2TB WESTERN DIGITAL BLUE', 'SILLA GAMER AEROCOOL AC110 AIR ROJA', 'ASROCK/B550M', 'FUENTE REAL COOLER MASTER ELITE V3'])
            'nombre'=> $this->faker->unique()->randomElement(['GTX 1060', 'ryzen 5 3600', 'CRUCIAL BALLISTIX ', 'i5 11400', '2TB WESTERN DIGITAL BLUE', 'SILLA GAMER AEROCOOL AC110 AIR ROJA', 'ASROCK/B550M', 'FUENTE REAL COOLER MASTER ELITE V3']),
            'descripcion'=> $this->faker->paragraph(3),
            'valor'=> $this->faker->numberBetween(10000,1000000),
            'cantidad'=> $this->faker->randomNumber(2),
        ];
    }
}
