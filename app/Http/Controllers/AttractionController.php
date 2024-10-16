<?php

namespace App\Http\Controllers;

use App\Models\Attraction;
use App\Models\Destination;
use App\Models\Gallery;
use App\Models\Tag;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class AttractionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $attractions = Attraction::with('tags', 'galleries')->get();
        $data = compact('attractions');
        return view('attractions.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($destination_id)
    {
        //
        $destination = Destination::findOrFail($destination_id);
        return view('attractions.create', compact('destination'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        echo '<pre>';
        // print_r($request->all());
        // echo '</pre>';
        // die();

        $validated = $request->validate([
            'name' => 'required|string',
            'display_picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'tags' => 'required',
            'destination_id' => 'required',
            'gallery' => 'required|array',
            'gallery.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        // print_r($validated);
        // die();

        $tags = $validated['tags'];
        $tags = explode(',', $tags);
        $tags = array_map('trim', $tags);
        // print_r($tags);
        // die();

        // foreach ($tags as $tag) {
        //     Tag::firstOrCreate(['name' => $tag]);
        // }        

        $attraction = Attraction::create([
            'name' => $validated['name'],
            'display_picture' => $request->file('display_picture')->store('display_picture', ['disk' => 'public']),
            'destination_id' => $validated['destination_id'],
        ]);

        foreach ($tags as $tag) {
            $attraction->tags()->attach(Tag::firstOrCreate(['name' => $tag])->id);
        }

        foreach ($validated['gallery'] as $image) {
            $path_gallery = $image->store('gallery', ['disk' => 'public']);
            Gallery::create([
                'name' => $attraction->name,
                'attraction_id' => $attraction->id,
                'image' => $path_gallery,
            ]);
        }

        return redirect()->route('destination.attraction.show', ['destination' => $attraction->destination->id, 'attraction' => $attraction->id]);
    }


    /**
     * Display the specified resource.
     */
    public function show($destination, $attraction)
    {
        //
        // echo $destination;
        // echo '<pre>';
        // print_r($attraction);
        // echo '</pre>';

        // die();
        $attraction = Attraction::with('tags', 'galleries')->findOrFail($attraction);
        // echo '<pre>';
        // print_r($attraction);
        // die();
        $data = compact('attraction');
        return view('attractions.show')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Destination $destination, Attraction $attraction)
    {
        //  

        $attraction = Attraction::with('tags', 'galleries')->findOrFail($attraction->id);
        $destination = Destination::findOrFail($destination->id);
        // $attraction = Attraction::with('tags', 'galleries')->findOrFail($attraction->id)->toArray();
        // $destination = Destination::findOrFail($destination->id)->toArray();
        // echo '<pre>';
        // print_r($attraction);
        // print_r($destination);
        // die();
        $data = compact('attraction', 'destination');
        return view('attractions.edit')->with($data);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $destination, $attraction)
    {
        //
   

        $destination = Destination::findOrFail($destination)->toArray();

        $attraction = Attraction::where('destination_id', $destination['id'])->findOrFail($attraction)->toArray();
        $validated = $request->validate([
            'name' => 'required|string',
            // 'display_picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'tags' => 'required',
            // 'gallery' => 'required|array',
            // 'gallery.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        echo '<pre>';
        // echo 'Destination: '.$destination;
        // echo '<br>';
        // echo 'Attraction: '.$attraction;
        // die();
        print_r($request->all());
        print_r($destination);
        print_r($attraction);
        echo '</pre>';
        die();

        $tags = $validated['tags'];
        $tags = explode(',', $tags);
        $tags = array_map('trim', $tags);

        foreach ($tags as $tag) {
            $attraction->tags()->syncWithoutDetaching(Tag::firstOrCreate(['name' => $tag])->id);
        }

        // foreach ($validated['gallery'] as $image) {
        //     $path_gallery = $image->store('gallery', ['disk' => 'public']);
        //     Gallery::create([
        //         'name' => $attraction->name,
        //         'attraction_id' => $attraction->id,
        //         'image' => $path_gallery,
        //     ]);
        // }

        $attraction->update([
            'name' => $validated['name'],
            // 'display_picture' => $request->file('display_picture')->store('display_picture', ['disk' => 'public']),
        ]);

        return redirect()->route('destination.attraction.show', ['destination' => $destination->id, 'attraction' => $attraction->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Attraction $attraction)
    {
        //
    }
}
