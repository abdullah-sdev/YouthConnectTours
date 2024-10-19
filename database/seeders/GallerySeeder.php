<?php

namespace Database\Seeders;

use App\Models\Attraction;
use App\Models\Gallery;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $attractions = Attraction::all();

        foreach ($attractions as $attraction) {
            for ($i = 0; $i < 3; $i++) { // Create 3 images per attraction
                Gallery::create([
                    'name' => fake()->word(),
                    'image' => fake()->imageUrl(),
                    'attraction_id' => $attraction->id,
                ]);
            }
        }
    }
}
