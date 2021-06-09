<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use App\Models\Contact;
use App\Models\Package;
use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
        $packages=Package::join('tour_packages','tour_packages.package_id','=','packages.id')->select('tour_packages.price','packages.*')->latest()->with('tourPackages')->take(6)->get();
        $locations  = Location::all();

        return view('frontend.pages.index',compact('tours','packages', 'locations'));
    }

    public function bookNow(){

        return view('frontend.pages.booking');

    }
    public function packageDetail(){
        return view('frontend.pages.packagedetail');
    }

    public function aboutUs(){

        return view('frontend.pages.aboutus');
    }
    public function packages(){
        $packages=Package::join('tour_packages','tour_packages.package_id','=','packages.id')->select('tour_packages.price','packages.*')->latest()->with('tourPackages')->paginate(6);
        return view("frontend.pages.packages",compact('packages'));
    }

    public function contactus(){
        return view("frontend.pages.contactus");
    }

    public function sendMessage(Request $request){
     /*   $data = [];
        $data['name']  = $request->name;
        $data['email'] =  $request->email;
        $data['phone'] =  $request->phone;
        $data['message'] =  $request->message;
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required'],
            'message' => ['required'],

        ]);*/
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email'],
            'phone' => ['required'],
            'message' => ['required'],
    ]);

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

    public function searchPlaces(Request $request){

        return view('frontend.pages.search');


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
