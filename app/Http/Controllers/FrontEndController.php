<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use App\Models\Contact;
use App\Models\Package;
use App\Models\Location;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tours=Tour::latest()->with('tourDetails')->take(10)->get();
        $packages=Package::latest()->with('tourPackages')->take(10)->get();
        $locations  = Location::all();
     
        return view('frontend.pages.index',compact('tours','packages', 'locations'));
    }

    public function aboutUs(){

        return view('frontend.pages.aboutus');
    }
    public function packages(){

        return view("frontend.pages.packages");
    }

    public function contactus(){
        return view("frontend.pages.contactus");
    }

    public function sendMessage(Request $request){

       $message = Contact::create([
           'name' =>  $request->name,
           'email' =>  $request->email,
           'phone' =>  $request->phone,
           'message' =>  $request->message,
       ]);
       if($message){
           return redirect()->back();
       }

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
