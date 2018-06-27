<?php

namespace App\Http\Controllers;

use App\RegisterMaternal;
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
            'Namba_ya_kadi' => 'required',
            'Jina_la_mama' => 'required',
            'hudhurio' => 'required',
            'tarehe_ya_hudhurio' => 'required |before:tomorrow',
            'mama_BP' => 'required',
            'mama_HB' => 'required',
            'matiti' => 'required',
            'tumbo_la_uzazi' => 'required',
            'lochia' => 'required',
            'hali_ya_msamba' => 'required',
            'fistula' => 'required',
            'akili_timamu' => 'required',
            'aina_ya_dawa_nyongeza' => 'required',
            'idadi_ya_dawa_nyongeza' => 'required',
            'idadi_ya_dawa_vitaminA' => 'required',
            'chanjo_ya_TT' => 'required',
            'family_plan_usahuri_umetolewa' => 'required_without_all:family_plan_amepatiwa_kielelezo,amepatiwa_family_plan_wakati_wa_ppc,rufaa_kupata_family_plan',
            'family_plan_amepatiwa_kielelezo' => 'required_without_all:family_plan_usahuri_umetolewa,amepatiwa_family_plan_wakati_wa_ppc,rufaa_kupata_family_plan',
            'amepatiwa_family_plan_wakati_wa_ppc' => 'required_without_all:family_plan_usahuri_umetolewa,family_plan_amepatiwa_kielelezo,rufaa_kupata_family_plan',
            'rufaa_kupata_family_plan' => 'required_without_all:family_plan_usahuri_umetolewa,family_plan_amepatiwa_kielelezo,amepatiwa_family_plan_wakati_wa_ppc',
            'rufaa_alikopelekwa' => 'required',
            'rufaa_alikotoka' => 'required',
            'rufaa_sababu_o_maoni' => 'required',
        ]);

        $test1 = RegisterMaternal::where('namba_ya_usajili',request('Namba_ya_kadi'))->first();
        $test2 = RegisterMaternal::where('jina_la_mama',request('Jina_la_mama'))->first();
        $test3 = Register13::where([['Namba_ya_kadi',request('Namba_ya_kadi')],['tarehe_ya_hudhurio',request('tarehe_ya_hudhurio')]])->first();


        if($test1 and $test2 != null){
            if($test3 == null){

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

            session()->flash('flash_message', 'Taarifa za mtuha namba 13 zimeshahifadhiwa!');

            return view('home');
        }

        else {
            return view('error-view')->with('error_txt','Tahadhari, taarifa za marudio za mama zilishahifadhiwa');
        }
    }
    else {
        return view('error-view')->with('error_txt','Tafadhali, msajili kwanza mama ndipo uweze kujaza taarifa zake za maendeleo baada ya kujifungua');
    }
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