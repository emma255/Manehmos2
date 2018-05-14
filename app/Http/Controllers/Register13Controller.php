<?php

namespace App\Http\Controllers;

use App\Register13;
use Illuminate\Http\Request;

class Register13Controller extends Controller
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
        return view('registers.register13');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $this->validate(request(), [
            'Namba_ya_kadi',
            'Jina_la_mama',
            'hudhurio',
            'tarehe_ya_hudhurio',
            'mama_BP',
            'mama_HB',
            'matiti',
            'tumbo_la_uzazi',
            'lochia',
            'hali_ya_msamba',
            'fistula',
            'akili_timamu',
            'aina_ya_dawa_nyongeza',
            'idadi_ya_dawa_nyongeza',
            'idadi_ya_dawa_vitaminA',
            'chanjo_ya_TT',
            'family_plan_usahuri_umetolewa',
            'family_plan_amepatiwa_kielelezo',
            'amepatiwa_family_plan_wakati_wa_ppc',
            'rufaa_kupata_family_plan',
            'rufaa_alikopelekwa',
            'rufaa_alikotoka',
            'rufaa_sababu_o_maoni',
        ]);

        Register13::create(request([
            'Namba_ya_kadi',
            'Jina_la_mama',
            'hudhurio',
            'tarehe_ya_hudhurio',
            'mama_BP',
            'mama_HB',
            'matiti',
            'tumbo_la_uzazi',
            'lochia',
            'hali_ya_msamba',
            'fistula',
            'akili_timamu',
            'aina_ya_dawa_nyongeza',
            'idadi_ya_dawa_nyongeza',
            'idadi_ya_dawa_vitaminA',
            'chanjo_ya_TT',
            'family_plan_usahuri_umetolewa',
            'family_plan_amepatiwa_kielelezo',
            'amepatiwa_family_plan_wakati_wa_ppc',
            'rufaa_kupata_family_plan',
            'rufaa_alikopelekwa',
            'rufaa_alikotoka',
            'rufaa_sababu_o_maoni',
        ]));
        return view('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\register13  $register13
     * @return \Illuminate\Http\Response
     */
    public function show(register13 $register13)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\register13  $register13
     * @return \Illuminate\Http\Response
     */
    public function edit(register13 $register13)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\register13  $register13
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, register13 $register13)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\register13  $register13
     * @return \Illuminate\Http\Response
     */
    public function destroy(register13 $register13)
    {
        //
    }
}
