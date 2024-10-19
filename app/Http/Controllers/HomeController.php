<?php

namespace App\Http\Controllers;

use App\Mail\TourBBooking;
use App\Models\Attraction;
use App\Models\Destination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    //

    public function index()
    {
        //
        $attractions = Attraction::with('destination', 'galleries', 'tags')->take(3)->get();
        $destinations = Destination::take(4)->get();
        $custom = [
            ['title' => 'Weekend Getaways', 'link' => '#'], 
            ['title' => 'Micro Adventures', 'link' => '#'], 
            ['title' => 'Girls Weekend Club', 'link' => '#'], 
            ['title' => 'Corporate Adventure Retreat', 'link' => '#']
            // ['title' => 'Morning Desert Safari Tours', 'link' => '#'],
            // ['title' => 'Evening Desert Safari', 'link' => '#'],
            // ['title' => 'Private VIP luxury Desert Safari Tour', 'link' => '#'],
            // ['title' => 'Dubai City Tour', 'link' => '#'],
            // ['title' => 'Ajman & Sharjah City Tour', 'link' => '#'],
            // ['title' => 'Buggy & Quad Bike Adventure Drive', 'link' => '#'],
            // ['title' => 'Dhow Cruise Marina Tour', 'link' => '#'],
            // ['title' => 'Jet Ski Adventure', 'link' => '#'],
            // ['title' => 'Burj Khalifa Tour', 'link' => '#'],
        ];
        // echo "<pre>";
        // print_r($attractions);
        // die();
        return view('home', compact('attractions', 'destinations', 'custom'));
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
        $attractions = Attraction::all();

        $previousStep = $request->old('currentStep') ?: 0;
        $currentStep = $previousStep + 1;
        if ($request->session()->get('errors')) {
            $currentStep = $previousStep;
        }

        return view('make-a-tour', compact('states', 'currentStep', 'attractions'));
    }

    public function requestTour(Request $request)
    {
        // Fetch all states again if necessary 
        $states = Destination::all();
        $currentStep = $request->input('currentStep', 1);

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
                'states' => 'required|array|min:1', // Ensure at least one state is selected
                'states.*' => 'integer|exists:destinations,id', // Validate each selected state
                'attractions' => 'required|array|min:1', // Ensure at least one attraction is selected
                'attractions.*' => 'integer|exists:attractions,id', // Validate each selected attraction
            ]);
            // Store step 2 data in session
            session(['step2_data' => $validatedData]);
        } elseif ($currentStep == 3) {
            // Handle final submission, combine all data
            $finalData = array_merge(session('step1_data'), session('step2_data'), $request->all());
            // Handle final submission (e.g., save data)

            Mail::to('info@youthconnecttours.com')->send(new TourBBooking(
                session('step1_data')['name'],
                session('step1_data')['email'],
                session('step1_data')['whatsapp'],
                session('step2_data')['start'],
                collect(session('step2_data')['states'])->map(function ($state) {
                    return Destination::findOrFail($state)->name;
                })->implode(', '),
                collect(session('step2_data')['attractions'])->map(function ($attraction) {
                    return Attraction::findOrFail($attraction)->name;
                })->implode(', ')
            ));
            return redirect()->route('home'); // Example route after submission
        }

        // Return back to the form with old input and updated step 
        return back()->withInput()->with(compact('states', 'currentStep'));
    }
}
