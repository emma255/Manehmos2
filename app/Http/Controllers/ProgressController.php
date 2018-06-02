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
    public function showChild()
    {
        return view('progressRecords.childChart');
    }

    public function showMaternal()
    {
        return view('progressRecords.maternal');
    }
}