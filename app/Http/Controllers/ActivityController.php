<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    //

    public function index()
    {
        $activities = Activity::all();
        $data = compact('activities');
        return view('activity.index')->with($data);
    }
    public function create()
    {
        $activities = Activity::all();
        $data = compact('activities');
        return view('activity.create')->with($data);
    }
    public function store(Request $request)
    {
        echo '<pre>';
        print_r($request->all());
        echo '</pre>';
        die();
    }


}
