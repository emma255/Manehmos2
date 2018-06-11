<?php

namespace App\Http\Controllers;

class ProgressController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('experts');
    }

    public function showChild()
    {
         return view('progressRecords.childChart');
    }

    public function showMaternal()
    {
        return view('progressRecords.main');
    }
}