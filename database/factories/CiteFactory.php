<?php

namespace Database\Factories;

use App\Models\Barber;
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
            'name' => fake()->firstNameMale(),
            'surname' => fake()->lastName(),
            'phone_number' => fake()->phoneNumber(),
            'date' => fake()->date(),
            'time' => fake()->time(),
            'barber_id' => Barber::all()->random()->id
        ];
    }
}
