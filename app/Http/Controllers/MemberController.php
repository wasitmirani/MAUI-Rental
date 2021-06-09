<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use App\Models\User;
use App\Models\BookingTour;
use Illuminate\Support\Str;
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

        $bookings = BookingTour::with('tour')->with('package')->with('user')->paginate(10);

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
        $name = !empty($request->name) ? $request->name : config('app.name');
        if ($request->hasfile('image')) {
            $name = Str::slug($name, '-')  . "-" . time() . '.' . $request->image->extension();

            $request->image->move(public_path("/admin/img/users/"), $name);
        }


        $update = User::where('id',$id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'image' => $name
                ]);

                if($update){

                    return redirect()->back()->with('message','Record Updated Successfully');

                }else{
                    return redirect()->back()->with('message','Failed To Update Record');

                }

    }
}

