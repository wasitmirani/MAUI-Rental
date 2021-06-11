<?php

namespace App\Http\Controllers;

use App\Models\User;
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
        // $this->middleware('auth');
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
            return view('member.pages.index');


    // }else{
    //     return redirect()->route('dashboard');

    // }

        // return view('home');
    }
}
