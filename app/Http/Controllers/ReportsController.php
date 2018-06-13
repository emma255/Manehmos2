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

    public function testcase()
    {
        $vals = request();

        return redirect()->route(request()->reportType, ['month'=> request()->month, 'year'=>request()->year, 'uses'=>'ReportsController@postanatal']);
    }



    public function postanatal()
    {
        // $maelezo = Maelezo_view::whereyear('tarehe_ya_hudhurio', $year)->wheremonth('tarehe_ya_hudhurio', $month)->get();

        return view('reports.postnatal');

    }


    public function ivd_activities()
    {
        echo 'ivd activities';
    }


    public function ufuatiliaji_mtoto()
    {
        echo 'ufuatiliaji mtoto';
    }


    public function antenatal()
    {
        echo 'antenatal';
    }
















    // home
    public function index()
    {
        return view('reports.reportHome');
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

        // $pdf = PDF::loadview('templates.postnatal', compact('values'));
        // return $pdf->download('postnatalShow.pdf');
        
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
}