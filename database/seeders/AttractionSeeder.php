<?php

namespace Database\Seeders;

use App\Models\Attraction;
use App\Models\Destination;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttractionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        // Define attractions for each destination
        $attractions = [
            'Dubai' => [
                // Theme Parks
                'Sky View EDGE Walk',
                'Motion Gate',
                'Global Village',
                'Dubai Mall Aquarium & Underwater Zoo',
                'Lost Chambers Aquarium',
                'Miracle Garden',
                'SKI Dubai',
                'Museum of Future',
                'Dolphinarium Dubai',
                // City Tours
                'Burj Al Arab',
                'Burj Khalifa',
                'Dubai Frame',
                'Yacht Marina',
                'Dhow Cruise Marina',
                'Dubai Night Tour',
                'Wonder Bus Tour',
                'Jet Ski Dubai',
                // Desert Safaris
                'Morning Desert Safari',
                'Evening Desert Safari',
                'Overnight Desert Safari',
                'Hummer Desert Safari',
                'Premium Desert Safari',
                'Camel Caravan With Breakfast',
                'Private Desert Safari',
                'VIP Desert Safari',
                'BBQ Dinner in Desert Safari',
                'Quad Bike Drive',
                'Buggy Adventure',
                'Couple Private Desert Safari',
            ],
            'Sharjah' => [
                'Sharjah Ajman City Tour',
            ],
            'Al Ain' => [
                // You can add Al Ain attractions here if needed
            ],
            'Abu Dhabi' => [
                'Warner Bros. World',
                'Ferrari World',
                'IMG Worlds of Adventure',
            ],
        ];

        foreach ($attractions as $destinationName => $attractionNames) {
            $destination = Destination::firstWhere('name', $destinationName);
            foreach ($attractionNames as $name) {
                Attraction::create([
                    'name' => $name,
                    // 'rating_overall' => fake()->numberBetween(1, 5),
                    'display_picture' => fake()->imageUrl(),
                    'destination_id' => $destination->id,
                ]);
            }
        }
    }
}
