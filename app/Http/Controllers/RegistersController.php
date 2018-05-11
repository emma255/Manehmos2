<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistersController extends Controller
{
    
    protected function showform(){

    	return view('child_register');
    }



}
