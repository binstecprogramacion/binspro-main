<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PersonalEntry>
 */
class PersonalEntryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'job_position_id' => $this->faker->numberBetween(1, 5),
            'monthly' => $this->faker->numberBetween(1000, 2000),
            'budget_id' => $this->faker->numberBetween(1, 3),
        ];
    }
}
