<?php

namespace Database\Seeders;

use App\Models\Attraction;
use App\Models\Destination;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// use Faker\Factory as Faker;

class DestinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Destination::factory()->create([
            'name' => 'Dubai',
            'ideal_time_period' => fake()->numberBetween(1, 9),
            'ideal_time_to_visit' => "January - December",
        ]);
        Destination::factory()->create([
            'name' => 'Sharjah',
            'ideal_time_period' => fake()->numberBetween(1, 9),
            'ideal_time_to_visit' => "January - December",
        ]);
        Destination::factory()->create([
            'name' => 'Al Ain',
            'ideal_time_period' => fake()->numberBetween(1, 9),
            'ideal_time_to_visit' => "January - December",
        ]);
        Destination::factory()->create([
            'name' => 'Abu Dhabi',
            'ideal_time_period' => fake()->numberBetween(1, 9),
            'ideal_time_to_visit' => "January - December",
        ]);


        // $destinations = Destination::select('name')->get()->toArray();


        // $faker = Faker::create();

        
    }
}
