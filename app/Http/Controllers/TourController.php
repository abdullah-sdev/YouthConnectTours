<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Http\Request;

class TourController extends Controller
{
    //
    public function index()
    {
        return view('tour');
    }

    public function show($tour)
    {

        return view('detail', ['tour' => $tour]);
    }

    public function create()
    {
        
        return view('admin.tour.create');
        // return view('');
    }

    public function store(Request $request)
    {
        // Store Func
        // echo '<pre>';
        // print_r($request->all());
        // echo '</pre>';
        // die();

        $request->validate([
            'name' => 'required',
            'location' => 'required',
            'session_start' => 'required',
            'session_end' => 'required',
            'duration' => 'required',
            'tags' => 'required',
            // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // $imageName = time() . '.' . $request->image->extension();
        // $request->image->move(public_path('images'), $imageName);

        /**
         * tags is in comma separated values
         * convert them into an array then store it in the data base
         */

        $tags = explode(',', $request->tags);
        $tags = array_map('trim', $tags);

        
        echo '<pre>';
        print_r($tags);
        die();

        $data = [
            'name' => $request->name,
            'price' => $request->price,
            // 'image' => $imageName,
        ];

        $tour = new Tour();
        $tour->create($data);
        return redirect()->route('adminsa.tour.create')->with('success', 'Tour created successfully.');

    }
}
