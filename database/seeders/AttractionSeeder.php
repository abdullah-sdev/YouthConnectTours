<?php

namespace Database\Seeders;

use App\Models\Attraction;
use App\Models\Destination;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

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
                ['name' => 'Sky View EDGE Walk', 'display_picture' => '8eab3d94-d2e2-44de-b869-0187cbc69c1a\destination01.jpg'],
                ['name' => 'Motion Gate', 'display_picture' => '8eab3d94-d2e2-44de-b869-0187cbc69c1a\destination02.jpg'],
                ['name' => 'Global Village', 'display_picture' => '8eab3d94-d2e2-44de-b869-0187cbc69c1a\destination03.jpg'],
                ['name' => 'Dubai Mall Aquarium & Underwater Zoo', 'display_picture' => '8eab3d94-d2e2-44de-b869-0187cbc69c1a\destination04.jpg'],
                ['name' => 'Lost Chambers Aquarium', 'display_picture' => '8eab3d94-d2e2-44de-b869-0187cbc69c1a\destination05.jpg'],
                ['name' => 'Miracle Garden', 'display_picture' => '8eab3d94-d2e2-44de-b869-0187cbc69c1a\destination06.jpg'],
                ['name' => 'SKI Dubai', 'display_picture' => '8eab3d94-d2e2-44de-b869-0187cbc69c1a\destination07.jpg'],
                ['name' => 'Museum of Future', 'display_picture' => '8eab3d94-d2e2-44de-b869-0187cbc69c1a\destination08.jpg'],
                ['name' => 'Dolphinarium Dubai', 'display_picture' => '8eab3d94-d2e2-44de-b869-0187cbc69c1a\destination09.jpg'],
                //
                ['name' => 'Burj Al Arab', 'display_picture' => '8eab3d94-d2e2-44de-b869-0187cbc69c1a\destination01.jpg'],
                ['name' => 'Burj Khalifa', 'display_picture' => '8eab3d94-d2e2-44de-b869-0187cbc69c1a\destination02.jpg'],
                ['name' => 'Dubai Frame', 'display_picture' => '8eab3d94-d2e2-44de-b869-0187cbc69c1a\destination03.jpg'],
                ['name' => 'Yacht Marina', 'display_picture' => '8eab3d94-d2e2-44de-b869-0187cbc69c1a\destination04.jpg'],
                ['name' => 'Dhow Cruise Marina', 'display_picture' => '8eab3d94-d2e2-44de-b869-0187cbc69c1a\destination05.jpg'],
                ['name' => 'Dubai Night Tour', 'display_picture' => '8eab3d94-d2e2-44de-b869-0187cbc69c1a\destination08.jpg'],
                ['name' => 'Wonder Bus Tour', 'display_picture' => '8eab3d94-d2e2-44de-b869-0187cbc69c1a\destination09.jpg'],
                ['name' => 'Jet Ski Dubai', 'display_picture' => '8eab3d94-d2e2-44de-b869-0187cbc69c1a\destination10.jpg'],
                //
                ['name' => 'Morning Desert Safari', 'display_picture' => '8eab3d94-d2e2-44de-b869-0187cbc69c1a\destination01.jpg'],
                ['name' => 'Evening Desert Safari', 'display_picture' => '8eab3d94-d2e2-44de-b869-0187cbc69c1a\destination02.jpg'],
                ['name' => 'Overnight Desert Safari', 'display_picture' => '8eab3d94-d2e2-44de-b869-0187cbc69c1a\destination03.jpg'],
                ['name' => 'Hummer Desert Safari', 'display_picture' => '8eab3d94-d2e2-44de-b869-0187cbc69c1a\destination04.jpg'],
                ['name' => 'Premium Desert Safari', 'display_picture' => '8eab3d94-d2e2-44de-b869-0187cbc69c1a\destination05.jpg'],
                ['name' => 'Camel Caravan With Breakfast', 'display_picture' => '8eab3d94-d2e2-44de-b869-0187cbc69c1a\destination06.jpg'],
                ['name' => 'Private Desert Safari', 'display_picture' => '8eab3d94-d2e2-44de-b869-0187cbc69c1a\destination07.jpg'],
                ['name' => 'VIP Desert Safari', 'display_picture' => '8eab3d94-d2e2-44de-b869-0187cbc69c1a\destination08.jpg'],
                ['name' => 'BBQ Dinner in Desert Safari', 'display_picture' => '8eab3d94-d2e2-44de-b869-0187cbc69c1a\destination09.jpg'],
                ['name' => 'Quad Bike Drive', 'display_picture' => '8eab3d94-d2e2-44de-b869-0187cbc69c1a\destination10.jpg'],
                ['name' => 'Buggy Adventure', 'display_picture' => '8eab3d94-d2e2-44de-b869-0187cbc69c1a\destination11.jpg'],
                ['name' => 'Couple Private Desert Safari', 'display_picture' => '8eab3d94-d2e2-44de-b869-0187cbc69c1a\destination12.jpg'],
            ],
            'Sharjah' => [
                ['name' => 'Sharjah Ajman City Tour', 'display_picture' => '8eab3d94-d2e2-44de-b869-0187cbc69c1a\destination07.jpg'],
            ],
            'Al Ain' => [
                // You can add Al Ain attractions here if needed
            ],
            'Abu Dhabi' => [
                ['name' => 'Warner Bros. World', 'display_picture' => '8eab3d94-d2e2-44de-b869-0187cbc69c1a\destination12.jpg'],
                ['name' => 'Ferrari World', 'display_picture' => '8eab3d94-d2e2-44de-b869-0187cbc69c1a\destination12.jpg'],
                ['name' => 'IMG Worlds of Adventure', 'display_picture' => '8eab3d94-d2e2-44de-b869-0187cbc69c1a\destination12.jpg'],
            ],
        ];

        // $attractions = [
        //     'Dubai' => [
        //         ['name' => 'Sky View EDGE Walk', 'display_picture' => '/path/to/images/sky_view_edge_walk.jpg'],
        //         ['name' => 'Motion Gate', 'display_picture' => '/path/to/images/motion_gate.jpg'],
        //         // Add other attractions here...
        //     ],
        //     'Sharjah' => [
        //         ['name' => 'Sharjah Ajman City Tour', 'display_picture' => '/path/to/images/sharjah_ajman_tour.jpg'],
        //     ],
        //     'Abu Dhabi' => [
        //         ['name' => 'Warner Bros. World', 'display_picture' => '/path/to/images/warner_bros_world.jpg'],
        //         // Add other attractions here...
        //     ],
        // ];

        foreach ($attractions as $destinationName => $attractionNames) {
            $destination = Destination::firstWhere('name', $destinationName);
            if ($destination) {
                foreach ($attractionNames as $name) {
                    // // Generate file path
                    // $filePath = public_path($name['display_picture']);
                    // // Get file size in bytes
                    // $fileSizeBytes = file_exists($filePath) ? filesize($filePath) : 0;

                    // Assuming the image is stored locally and you have the full path
                    $originalPath = public_path($name['display_picture']);

                    // Define a new path for storage
                    $newPath = 'display_picture/' . basename($name['display_picture']);

                    // Store the file in the public disk
                    // Store the file in the public disk
                    // The putFileAs method stores the file in the specified disk (in this case, the 'public' disk)
                    // and returns the path to the stored file. The second argument is the contents of the file,
                    // which is an instance of Illuminate\Http\File. The third argument is the filename to use
                    // when storing the file.
                    $newPath = Storage::disk('public')->putFileAs('display_picture', new \Illuminate\Http\File($originalPath), basename($name['display_picture']));

                    // Get the file size in bytes
                    $fileSizeBytes = file_exists($originalPath) ? filesize($originalPath) : 0;

                    Attraction::create([
                        'name' => $name['name'],
                        // 'rating_overall' => fake()->numberBetween(1, 5),
                        'display_picture' => $newPath,
                        'destination_id' => $destination->id,
                    ]);
                }
            }
        }


        // foreach ($attractions as $destinationName => $attractionNames) {
        //     $destination = Destination::firstWhere('name', $destinationName);
        //     foreach ($attractionNames as $name) {
        //         Attraction::create([
        //             'name' => $name['name'],
        //             // 'rating_overall' => fake()->numberBetween(1, 5),
        //             'display_picture' => $name['display_picture'],
        //             'destination_id' => $destination->id,
        //         ]);
        //     }
        // }
    }
}
