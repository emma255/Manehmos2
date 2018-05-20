<?php

namespace App\Http\Controllers;

use PDF;

class ReportsController extends Controller
{

    public function testcase()
    {
        return view(request('reportType'), compact(request()));

    }

    // home
    public function index()
    {
        return view('reports.reportHome');
    }

    // ripoti ufuatliaji wa mtoto

    public function mtotoShow()
    {
        return view('reports.ufuatiliaji_mtoto');
    }

    public function mtotoPrint()
    {

        $pdf = PDF::loadview('reports.ufuatiliaji_mtoto');
        return $pdf->download('ufuatiliaji_mtoto.pdf');
    }

    // ripoti ya mama na mtoto baada ya kujifungua
    public function postnatalShow()
    {
        $date = date(DATE_RFC2822);

        return view('reports.postnatal', compact('date'));
    }

    public function postnatalPrint()
    {

        $pdf = PDF::loadview('reports.postnatal');
        return $pdf->download('postnatalShow.pdf');
    }

    // report on IVD activities
    public function IVDactivitiesShow()
    {
        return view('reports.IVD_activities');
    }

    public function IVDactivitiesPrint()
    {

        $pdf = PDF::loadview('reports.IVD_activities');
        return $pdf->download('IVD_activities.pdf');
    }

    // taarifa ya mwezi toka kliniki (ANC)
    public function antenatalShow()
    {
        return view('reports.antenatal');
    }

    public function antenatalPrint()
    {

        $pdf = PDF::loadview('reports.antenatal');
        return $pdf->download('antenatal.pdf');
    }
}
