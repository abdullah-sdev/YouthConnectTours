<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TourController extends Controller
{
    //
    public function index()
    {
        return view('tour');
    }

    public function detail($tour)
    {
        return view('detail', ['tour' => $tour]);
    }

}
