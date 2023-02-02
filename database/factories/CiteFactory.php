<?php

namespace Database\Factories;

use App\Models\Barber;
use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cite>
 */
class CiteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'date' => fake()->date(),
            'time' => fake()->time(),
            'barber_id' => Barber::all()->random()->id,
            'client_id' => Client::all()->random()->id
        ];
    }
}
