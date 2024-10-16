<?php

namespace App\Http\Controllers;

use App\Models\Attraction;
use App\Models\Destination;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index()
    {
        //
        $attractions = Attraction::with('destination', 'galleries', 'tags')->take(3)->get();
        $destinations = Destination::get();
        // echo "<pre>";
        // print_r($attractions);
        // die();
        return view('home', compact('attractions', 'destinations'));
        // return view('home');
    }
    public function about()
    {
        return view('about');
    }
    public function destination()
    {
        return view('destination');
    }
    public function vaccations()
    {
        $attractions = Attraction::with('destination', 'tags')->get();
        return view('vaccations', compact('attractions'));
    }
    public function terms()
    {
        return view('terms');
    }
}
