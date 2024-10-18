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
        $destinations = Destination::get();
        return view('destination', compact('destinations'));
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


    // public function makeATour()
    // {
    //     return view('make-a-tour');
    // }
    public function bookATour()
    {
        return view('book-a-tour');
    }
    public function makeATour(Request $request)
    {
        $states = Destination::all();

        $previousStep = $request->old('currentStep') ?: 0;
        $currentStep = $previousStep + 1;
        if ($request->session()->get('errors')) {
            $currentStep = $previousStep;
        }

        return view('make-a-tour', compact('states', 'currentStep'));
    }

    public function requestTour(Request $request)
    {
        // Fetch all states again if necessary 
        $states = Destination::all();
        $currentStep = $request->input('currentStep', 1);

        // echo '<pre>';
        // print_r($request->all());
        // echo '</pre>';
        // die();

        // Validation based on current step 
        if ($currentStep == 1) {
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'whatsapp' => 'required|string|max:255',
            ]);
            // Store validated data in session
            session(['step1_data' => $validatedData]);
        } elseif ($currentStep == 2) {
            $validatedData = $request->validate([
                'start' => 'required|date',
                'state' => 'required|integer|exists:destinations,id',
                'attractions' => 'array',
            ]);
            // Store step 2 data in session
            session(['step2_data' => $validatedData]);
        } elseif ($currentStep == 3) {
            // Handle final submission, combine all data
            $finalData = array_merge(session('step1_data'), session('step2_data'), $request->all());
            // Handle final submission (e.g., save data)
            return redirect()->route('thank.you'); // Example route after submission
        }

        // Return back to the form with old input and updated step 
        return back()->withInput()->with(compact('states', 'currentStep'));
    }
}
