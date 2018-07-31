<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
     */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'worker_id' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'center' => 'required|string|max:255',
            'district' => 'required|string|max:255',
            'phone_no' => 'required|numeric|min:10|max:10',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {

        // $test = User::where('worker_id', $data['worker_id'])->first();

        // if($test == null){
                
            return User::create([
                'name' => $data['name'],
                'worker_id' => $data['worker_id'],
                'position' => $data['position'],
                'phone_no' => $data['phone_no'],
                'email' => $data['email'],
                'center' => $data['center'],
                'district' => $data['district'],
                'password' => Hash::make($data['password']),
            ]);
        //}
        // else {
        //     return view('error-view')->with('error_txt','Warning! User already exists');
        // }
    }
}