<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $destinations = Destination::all();
        $data = compact('destinations');
        return view('destinations.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('destinations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // echo '<pre>';
        // print_r($request->all());
        // echo '</pre>';
        // die();

        $validated = $request->validate([
            'name' => 'required|string',
            'ideal_time_period' => 'required|integer',
            'session_start' => 'required|date_format:Y-m-d',
            'session_end' => 'required|date_format:Y-m-d',
        ]);

        $date1 = date_parse($validated['session_start']);
        $date2 = date_parse($validated['session_end']);
        $start_month = date('F', mktime(0, 0, 0, $date1['month'], 10));
        $end_month = date('F', mktime(0, 0, 0, $date2['month'], 10));

        
        $ideal_time_to_visit = "Months: ".$start_month." - ".$end_month;
        

        $destination = Destination::create([
            'name' => $validated['name'],
            'ideal_time_period' => $validated['ideal_time_period'],
            'ideal_time_to_visit' => $ideal_time_to_visit
        ]);


        return redirect()->route('destination.index');
       
    }

    /**
     * Display the specified resource.
     */
    public function show(Destination $destination)
    {
        //
        // echo $destination;
        // echo '<pre>';
        // print_r($destination);
        // die();
        $destination = Destination::with('attractions')->findOrFail($destination->id);
        $data = compact('destination');
        return view('destinations.show')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Destination $destination)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Destination $destination)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Destination $destination)
    {
        //
    }
}
