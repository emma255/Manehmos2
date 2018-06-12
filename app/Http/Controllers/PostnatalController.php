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
        $this->middleware('clinician');
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
            'tarehe_ya_kuandikishwa' => 'required | before:tomorrow',
            'namba_ya_kadi_RCH4' => 'required',
            'jina_la_mama' => 'required',
            'mtaa' => 'required',
            'tarehe_ya_kuzaliwa' => 'required |before:tarehe_ya_kuandikishwa',
            'para' => 'required',
            'tarehe_ya_kujifungua' => 'required |after:tarehe_ya_kuzaliwa',
            'kada_ya_aliyemzalisha' => 'required',
            'mahali_alipojifungulia' => 'required',
            'hali_ya_mama' => 'required',
            'hali_ya_mtoto' => 'required',
            'unyonyeshaji_ndani_ya_saa_1' => 'required',
            'Hali_ya_VVU_kwenye_kadi' => 'required',
            'kipimo_vvu_wakati_wa_postnatal' => 'required',
            'amepima_postnatal' => 'required',
            'lishe_ya_mtoto' => 'required',

        ]);

        Postnatal::create(request([
            'tarehe_ya_kuandikishwa',
            'namba_ya_kadi_RCH4',
            'jina_la_mama',
            'mtaa',
            'tarehe_ya_kuzaliwa',
            'para',
            'tarehe_ya_kujifungua',
            'kada_ya_aliyemzalisha',
            'mahali_alipojifungulia',
            'hali_ya_mama',
            'hali_ya_mtoto',
            'unyonyeshaji_ndani_ya_saa_1',
            'Hali_ya_VVU_kwenye_kadi',
            'kipimo_vvu_wakati_wa_postnatal',
            'amepima_postnatal',
            'lishe_ya_mtoto',
        ]));
        session()->flash('flash_message', 'rekodi ya uzazi imeshahifadhiwa');

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