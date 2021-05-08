<?php

namespace Database\Factories;

use App\Models\Empleado;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmpleadoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Empleado::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->sentence(),
            'nif' => $this->faker->sentence(),
            'email' => $this->faker->unique()->safeEmail,
            'profesion' => $this->faker->randomElement(['Escritora', 'Programadora', 'Diseñador', 'Peluquero', 'Profesor', 'Ingeniero', 'Abogada'])
        ];
    }
}
