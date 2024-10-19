<?php

namespace Database\Seeders;

use App\Models\Attraction;
use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $attractions = Attraction::all();

        foreach ($attractions as $attraction) {
            for ($i = 0; $i < 3; $i++) { // Create 3 reviews per attraction
                Review::create([
                    'author' => fake()->name(),
                    'profile_pic' => fake()->imageUrl(),
                    'content' => fake()->paragraph(),
                    'rating' => fake()->numberBetween(1, 5),
                    // 'should_display' => fake()->boolean(),
                    'attraction_id' => $attraction->id,
                ]);
            }
        }
    }
}
