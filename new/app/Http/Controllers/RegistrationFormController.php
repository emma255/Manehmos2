<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Mail\Registration;

class RegistrationFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

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
            'phone_no'=> 'required|numeric|min:10|max:10',
            'password' => 'required|string|min:6',
        ]);

        $to = User::where([['position','System Administrator'], ['center',request('center')],['status','active']])->first();

        if($to != null){

            try{
                \Mail::to($to->email)->send(new Registration($request));
            }

            catch(\Exception $e){

                return view('error-view')
                ->with('error_txt','Failed to submit your request,
                 make sure you have active internet connection or try again later,
                 if problem continues contact your system administrator for Manehmos');
            }
            return redirect('/login');
        }

        else{
            return view('error-view')->with('error_txt','The clinic you entered is not yet using Manehmos, go back');
        }

    }
}