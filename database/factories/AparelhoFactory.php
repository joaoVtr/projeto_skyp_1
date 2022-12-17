<?php

namespace Database\Factories;

use App\Models\Contrato;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Aparelho>
 */
class AparelhoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "modelo" => fake()->sentence(1),
            "observacao" => fake()->sentence(2),
        ];
    }

    // public function setContrato()
    // {
    //     return $this->state(fn () => [
    //         'contrato_id' => Contrato::all()->unique()->id
    //     ]);
    // }
}
