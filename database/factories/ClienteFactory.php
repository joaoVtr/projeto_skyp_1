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
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nome' => fake()->sentence(1),
            'cpf' => fake()->sentence(1),
            'email' => fake()->email(),
            'telefone1' => fake()->sentence(1),
            'telefone2' => fake()->sentence(1),
            'telefone3' => fake()->sentence(1)
        ];
    }
}
