<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Account>
 */
class AccountFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->company,
            'ruc' => $this->faker->unique()->numerify('###########'),
            'status' => $this->faker->randomElement(['active', 'inactive']),
            'account_type_id' => $this->faker->randomElement([1, 2]),
            'start_date' => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
