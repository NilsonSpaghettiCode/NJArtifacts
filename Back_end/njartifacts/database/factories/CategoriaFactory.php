<?php

namespace Database\Factories;

use App\Models\Categoria;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoriaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Categoria::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition() //Devuelve la definicion de una funcion que Fabrica Categorias
    {
        return [
            //
            'nombre' => $this->faker->unique()->randomElement(['Todo','GPU','CPU','RAM','Perifericos','Discos','Fuentes de poder', 'Placa Madre']), 
            'descripcion' => $this->faker->paragraph(2)
        ];
    }
}
