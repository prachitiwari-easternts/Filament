<?php

namespace Database\Factories;

use App\Models\Country;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\State>
 */
class StateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->state(),
            'country_id' => Country::inRandomOrder()->first()->id,
        ];
    }
}
