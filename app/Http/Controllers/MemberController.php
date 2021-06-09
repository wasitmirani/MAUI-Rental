<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use App\Models\User;
use App\Models\BookingTour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MemberController extends Controller
{
    //

    public function index(){

        $totalTours = Tour::count();


        return view('member.pages.index',compact('totalTours'));
    }

    public function getTours(){
        $tours = Tour::with('tourDetails')->paginate(10);
        
        return view('member.pages.tourlist',compact('tours'));
    }
    public function getBookings(){

        $bookings = BookingTour::with('package')->with('tours')->with('user')->paginate(10);

        return view('member.pages.bookings',compact('bookings'));
    }
    public function upcomingTours(){
        $tours = Tour::paginate(10);
        return view('member.pages.upcoming',compact('tours'));
    }

    public function profile(){
        $user = Auth::user();

        return view('member.pages.profile',compact('user'));
    }

    public function updateProfile(Request $request){

        $id = Auth::user()->id;

        $path = 'images/no-thumbnail.jpeg';
        if($request->has('image')){
          $extension = ".".$request->image->getClientOriginalExtension();
          $name = basename($request->image->getClientOriginalName(), $extension).time();
          $name = $name.$extension;
          $path = $request->image->storeAs('images', $name, 'public');
       }


        $update = User::where('id',$id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'image' => $path
                ]);

                if($update){

                    return redirect()->back()->with('message','Record Updated Successfully');

                }else{
                    return redirect()->back()->with('message','Failed To Update Record');

                }

    }
}

