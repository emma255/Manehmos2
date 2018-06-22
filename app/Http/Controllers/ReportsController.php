<?php

namespace App\Http\Controllers;

use PDF;
use App\Maelezo_view;
use App\Alipojifungua_view;

class ReportsController extends Controller
{
    public function __construct()
    {
        $this->middleware('clinician');
    }

    // home
    public function index()
    {
        return view('reports.reportHome');
    }

    //check the name of the report
    public function testcase()
    {
        $vals = request();
        return redirect()->route(request()->reportType, ['month'=> request()->month, 'year'=>request()->year, 'uses'=>'ReportsController@postanatal']);
    }

// print the postnatal report
    public function postnatal()
    {
        $file_name = 'postnatal_report_'.date(" F ", mktime(0, 0, 0, request('month'), 10)).'_'.request('year').'.pdf';
        $pdf = PDF::loadview('reports.postnatal');
        $pdf->save(storage_path('/reports/postnatal/'.$file_name));
        session()->flash('flash_message', 'Ripoti imeshaandaliwa!');
        return redirect('homepage');
    }

//print the ivd activities report
    public function ivd_activities()
    {
        return view('reports.IVD_activities');
    }

//print ufuatiliaji mtoto report
    public function ufuatiliaji_mtoto()
    {
        return view('reports.ufuatiliaji_mtoto');
    }

//print antenatal report
    public function antenatal()
    {
        $file_name = 'antenatal_report_'.date(" F ", mktime(0, 0, 0, request('month'), 10)).'_'.request('year').'.pdf';
        $pdf = PDF::loadview('reports.antenatal');
        $pdf->save(storage_path('/reports/antenatal/'.$file_name));
        session()->flash('flash_message', 'Ripoti imeshaandaliwa!');
        return redirect('homepage');
    }
}