<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Aparelho;
use App\Models\Cliente;
use App\Models\Contrato;
use App\Models\Estoque;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Cliente::factory()->count(10)->create();
        Contrato::factory()->count(10)->create();
        Aparelho::factory()->count(5)->state(new Sequence(
            ['contrato_id' => 1],
            ['contrato_id' => 2],
            ['contrato_id' => 3],
            ['contrato_id' => 4],
            ['contrato_id' => 5],
        ))->create();
        Estoque::factory()->count(5)->state(new Sequence(
            ['aparelho_id' => 1],
            ['aparelho_id' => 2],
            ['aparelho_id' => 3],
            ['aparelho_id' => 4],
            ['aparelho_id' => 5],
        ))->create();


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
