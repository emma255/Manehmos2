<?php

namespace App\Http\Controllers;

use App\Postnatal;
use Illuminate\Http\Request;

class PostnatalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('registers.postnatal');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate(request(), [
            'tarehe_ya_kuandikishwa',
            'namba_ya_kadi_RCH4',
            'jina_la_mama',
            'mtaa',
            'tarehe_ya_kuzaliwa',
            'amejifungua_mara_ngapi',
            'tarehe_ya_kujifugua',
            'kada_ya_aliyemzalisha',
            'mahali_alipojifungulia',
            'hali_ya_mama',
            'hali_ya_mtoto',
            'unyonyeshaji_ndani_ya_saa_1',
            'Hali_ya_VVU_kwenye_kadi',
            'kipimo_vvu_wakati_wa_postnatal',

        ]);

        Postnatal::create(request([
            'tarehe_ya_kuandikishwa',
            'namba_ya_kadi_RCH4',
            'jina_la_mama',
            'mtaa',
            'tarehe_ya_kuzaliwa',
            'amejifungua_mara_ngapi',
            'tarehe_ya_kujifugua',
            'kada_ya_aliyemzalisha',
            'mahali_alipojifungulia',
            'hali_ya_mama',
            'hali_ya_mtoto',
            'unyonyeshaji_ndani_ya_saa_1',
            'Hali_ya_VVU_kwenye_kadi',
            'kipimo_vvu_wakati_wa_postnatal',
        ]));

        return view('registers.register13');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
