<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
     */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = '/';
    protected function authenticated(Request $request, $user)
    {
        if ($user->position == 'Doctor') {
            return redirect('/progress');
        }
         elseif ($user->position == 'Clinical Attendant') {
            return redirect('/');
        }
        elseif ($user->position == 'System Administrator') {
            return redirect('admin/home');
        }
        else{
            Auth::logout();
            return view('error-view')->with('error_txt','You are not a valid user of Manehmos');
        }

    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}