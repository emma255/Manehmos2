<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('clinician');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        session()->flash('flash_message', 'Umefanikiwa kuingia kwenye manehmos. karibu!!');

        return view('home');
    }
    //home
    public function home()
    {
        return view('home');
    }
}