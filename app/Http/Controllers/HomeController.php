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
     * @return \Illuminate\Http\Renderable
     */
    public function index()
    {
        if (Auth::user()->position == 'Doctor') {
            return redirect('/progress');
        } elseif (Auth::user()->position == 'Clinical Attendant') {
            return view('home');
        } elseif (Auth::user()->position == 'System Administrator') {
            return redirect('admin/home');
        } else {
            Auth::logout();

            request()->session()->invalidate();

            request()->session()->regenerateToken();
            return redirect('homepage');
        }
    }

    public function home()
    {
        return view('home');
    }
}
