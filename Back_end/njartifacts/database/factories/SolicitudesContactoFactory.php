<?php

namespace Database\Factories;

use App\Models\SolicitudesContacto;
use Illuminate\Database\Eloquent\Factories\Factory;

class SolicitudesContactoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SolicitudesContacto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //Definicion de factory para solicitudes de contacto
            'nombre' => $this->faker->name(),
            'apellido' => $this->faker->lastName(),
            'correo_electronico' => $this->faker->unique()->safeEmail(),
            'mensaje' => $this->faker->paragraph(3),
            'contactado' => 0,
        ];
    }
}
