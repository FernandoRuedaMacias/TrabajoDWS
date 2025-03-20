<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cliente>
 */
class ClienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     */
    public function definition(): array
    {
        return [
            "nombre"=>$this->faker->name(),
            "telefono"=>$this->faker->regexify('^[6789]\d{8}$'),
            "tarjeta_credito"=>$this->faker->regexify('^\d{13,19}$')
        ];
    }
}
