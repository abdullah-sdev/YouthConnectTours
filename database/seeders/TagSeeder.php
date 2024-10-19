<?php

namespace Database\Seeders;

use App\Models\Attraction;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // $faker = Faker::create();

        // Create some tags
        $tags = ['Family', 'Adventure', 'Nature', 'Cultural', 'Thrilling', 'Relaxing'];

        foreach ($tags as $tagName) {
            $tag = Tag::create(['name' => $tagName]);
            
            // Attach tags to random attractions
            $attractions = Attraction::all()->random(3); // Randomly select 3 attractions
            foreach ($attractions as $attraction) {
                $attraction->tags()->attach($tag->id);
            }
        }
    }
}
