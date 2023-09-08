<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cost>
 */
class CostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'operating_costs' => $this->faker->numberBetween(1000, 5000),
            'indirect_costs' => $this->faker->numberBetween(1000, 5000),
            'budget_id' => $this->faker->numberBetween(1, 3),
        ];
    }
}
