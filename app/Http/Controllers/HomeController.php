<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // if(Auth::user()->role_id == 1){
            $user=User::where('id',1)->first();
            Auth::loginUsingId( $user->id);
            return redirect()->route('member.dashboard');


    // }else{
    //     return redirect()->route('dashboard');

    // }

        // return view('home');
    }
}
