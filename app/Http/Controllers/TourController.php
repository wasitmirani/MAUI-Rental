<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Http\Request;

class TourController extends Controller
{
    public function index()
    {
        $tours=Tour::latest()->with('tourDetails')->take(10)->get();
        return view('frontend.pages.tours',compact('tours'));


    }
}
