<?php

namespace Database\Factories;

use App\Models\Caracteristica;
use Illuminate\Database\Eloquent\Factories\Factory;

class CaracteristicaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Caracteristica::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'nombre' => $this->faker->randomElement(['Capacidad','Tamaño','Cantidad','Color']),
            'descripcion' => $this->faker->randomElement(['30GB','Rojo','Verde','Azul','Negro','8'])
        ];
    }
}
