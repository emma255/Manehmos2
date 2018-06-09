<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendDetails;

class RegistrationFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth.registrationForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function send(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'worker_id' => 'required|string|max:255',
            'position' => 'required|string|max:21',
            'email' => 'required|string|max:255', 
            'center' => 'required|string|max:255', 
            'district' => 'required|string|max:255', 
            'phone_no'=> 'required', 
            'password' => 'required|string|min:6',
        ]);
        \Mail::to('admin.register@mahehmos.co.tz')->send(new SendDetails($request));
    }
}