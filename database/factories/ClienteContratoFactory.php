<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ClienteContrato>
 */
class ClienteContratoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'logradouro' => fake()->sentence(1),
            'bairro' => fake()->sentence(1),
            'cidade' => fake()->sentence(1),
            'estado' => fake()->sentence(1),
            'cep' => fake()->sentence(1),
            'cartao' => fake()->sentence(1),
            'data_instalacao' => fake()->date(),
            'dia_vencimento' => fake()->date(),
            'numero' => fake()->sentence(1),
            'numero_serie' => fake()->sentence(1),
            'valor' => fake()->sentence(1),
            'observacao' => fake()->sentence(1),
        ];
    }
}
