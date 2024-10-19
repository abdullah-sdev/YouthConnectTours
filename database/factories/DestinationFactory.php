<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Destination>
 */
class DestinationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'name' => fake()->country(),
            // 'description' => fake()->text(100),
            // 'image' => fake()->imageUrl(640, 480),
            'ideal_time_period' => fake()->numberBetween(1, 9),
            'ideal_time_to_visit' => "January - December",
        ];
    }
}
