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
        // $maelezo = Maelezo_view::whereyear('tarehe_ya_hudhurio', $year)->wheremonth('tarehe_ya_hudhurio', $month)->get();
        $file_name = 'postnatal_report_'.date(" F ", mktime(0, 0, 0, request('month'), 10)).'_'.request('year').'.pdf';
        session()->flash('flash_message', 'Ripoti imeshaandaliwa!');

        $pdf = PDF::loadview('reports.postnatal');
        return $pdf->download($file_name);

    }

//print the ivd activities report
    public function ivd_activities()
    {
        echo 'ivd activities';
    }

//print ufuatiliaji mtoto report
    public function ufuatiliaji_mtoto()
    {
        echo 'ufuatiliaji mtoto';
    }

//print antenatal report
    public function antenatal()
    {
        echo 'antenatal';
    }
















    // ripoti ufuatliaji wa mtoto
    public function mtotoPrint()
    {

        $pdf = PDF::loadview('reports.ufuatiliaji_mtoto');
        return $pdf->download('ufuatiliaji_mtoto.pdf');
    }

    // ripoti ya mama na mtoto baada ya kujifungua
    public function postnatalPrint()
    {
        $values = request();

        $pdf = PDF::loadview('templates.postnatal', compact('values'));
        return $pdf->download('postnatalShow.pdf');
        
    }

    // report on IVD activities
    public function IVDactivitiesPrint()
    {
        $pdf = PDF::loadview('reports.IVD_activities');
        return $pdf->download('IVD_activities.pdf');
    }

    // taarifa ya mwezi toka kliniki (ANC)
    public function antenatalPrint()
    {

        $pdf = PDF::loadview('reports.antenatal');
        return $pdf->download('antenatal.pdf');
    }
}        // $maelezo = Maelezo_view::whereyear('tarehe_ya_hudhurio', $year)->wheremonth('tarehe_ya_hudhurio', $month)->get();
