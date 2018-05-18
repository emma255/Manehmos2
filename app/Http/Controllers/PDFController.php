<?php

namespace App\Http\Controllers;

use App\Tasks;
use PDF;

class PDFController extends Controller
{
    public function index()
    {
        // $tasks = Tasks::all();
        // // return view('pdf', compact('tasks'));
        // $pdf = PDF::loadview('pdf', ['tasks' => $tasks]);

        // return $pdf->download('tasks.pdf');
        $tasks = Tasks::all();
        // $pdf = PDF::loadview('invoice', compact(varname, 'data'));
        return view('pdf', compact('tasks'));
    }

    public function export()
    {

        $tasks = Tasks::all();
        $pdf = PDF::loadview('pdf', compact('tasks'));
        return $pdf->download('Tasks.pdf');

    }
}
