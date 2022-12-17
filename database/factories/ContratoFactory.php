<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contrato>
 */
class ContratoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'contrato' => fake()->sentence(1),
            'nome' => fake()->name(),
            'valor' => fake()->numberBetween(1, 500),
            'status' => fake()->sentence(3)
        ];
    }
}
