<?php

namespace App\Http\Controllers;
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        
        session()->flash('flash_message', 'Umefanikiwa kuingia kwenye manehmos. karibu!!');

        if (Auth::user()->position == 'Doctor') {

            return redirect('/progress');
        }
         elseif (Auth::user()->position == 'Clinical Attendant') {

            return view('home');
        }
        elseif (Auth::user()->position == 'System Administrator') {

            return redirect('admin/home');
        }
        else{

            Auth::logout();
            return view('error-view')->with('error_txt','You are not a valid user of Manehmos');
        }
    }
    //home
    public function home()
    {
        return view('home');
    }
}