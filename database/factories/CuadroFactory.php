<?php

namespace Database\Factories;

use App\Models\Cuadro;
use Illuminate\Database\Eloquent\Factories\Factory;

class CuadroFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cuadro::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre'  => $this->faker->sentence(),
            'imagen'  => $this->faker->imageURL(),
            'precio' => $this->faker->randomElement([350,1200, 735, 2480, 856, 456, 659, 360, 875, 1570]),
            'fecha_entrada' => $this->faker->date(), 
            'autor' => $this->faker->sentence()

        ];
    }
}
