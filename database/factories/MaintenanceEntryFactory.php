<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MaintenanceEntry>
 */
class MaintenanceEntryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'maintenance' => $this->faker->text(50),
            'quantity' => $this->faker->numberBetween(1, 10),
            'frequency' => $this->faker->randomElement(['monthly', 'bimonthly', 'quarterly', 'semiannual', 'annual']),
            'monthly' => $this->faker->numberBetween(1500, 5000),
            'budget_id' => $this->faker->numberBetween(1, 3),
        ];
    }
}
