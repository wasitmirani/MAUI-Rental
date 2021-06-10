<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Tour;
use App\Models\User;
use App\Models\BookingTour;
use Illuminate\Support\Str;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MemberController extends Controller
{
    //

    public function index(){
        $id = Auth::user()->id;

        $dt = new DateTime();
        $from = $date = date('Y-m-d');

        $dt->modify( '+10 days' );
        $to = $dt->format( 'dS M, Y (D)' );


        $upcommings = BookingTour::with('tour')->with('package')->with('user')->whereBetween('start_booking_date', [$from, $to])->get();

        $totalBookings = BookingTour::where('user_id',$id)->count();
        $totalTours = Tour::count();
      //  $upcoming = BookingTour::whereBetween('start_booking_date',[$now, ])



        return view('member.pages.index',compact('totalBookings','totalTours','upcommings'));
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
        $dateObj = new DateTime();
        $from = $date = date('Y-m-d');

        $dateObj->modify( '+10 days' );
        $to =  $dateObj->format( 'dS M, Y (D)' );


        $upcommings = BookingTour::with('tour')->with('package')->with('user')->whereBetween('start_booking_date', [$from, $to])->get();


        $tours = Tour::all();
        return view('member.pages.upcoming',compact('upcommings'));
    }

    public function profile(){
        $user = Auth::user();

        return view('member.pages.profile',compact('user'));
    }

    public function updateProfile(Request $request){

        $id = Auth::user()->id;

        $name = 'no-thumbnail.png';

        if ($request->hasfile('image')) {
            $name = !empty($request->name) ? $request->name : config('app.name');

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

