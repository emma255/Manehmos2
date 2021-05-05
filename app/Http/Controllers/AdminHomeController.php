<?php

namespace App\Http\Controllers;

use App\Models\Tasks;

class AdminHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        return view('admin.adminHome', ['tasks' => Tasks::take(3)->get()]);
    }
}
