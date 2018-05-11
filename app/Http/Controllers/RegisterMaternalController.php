<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterMaternalController extends Controller
{
    protected function store(){
        return view('registration.husband_register');
    }
}
