<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Incident>
 */
class IncidentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'description' => $this->faker->text(100),
            'location' => $this->faker->text(10),
            'maintenance_category_id' => $this->faker->numberBetween(1, 5),
            'image_path' => $this->faker->imageUrl(640, 480),
            'user_id' => $this->faker->numberBetween(1, 10),
            'status_id' => $this->faker->numberBetween(1, 4),
            'start_date' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'location_id' => $this->faker->numberBetween(1, 5),
            'service_desk_id' => $this->faker->numberBetween(1, 5),
            'technical_id' => $this->faker->numberBetween(1, 5),
        ];
    }
}
