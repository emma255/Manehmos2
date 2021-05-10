<?php

namespace App\Http\Controllers;

use App\Models\Register6;
use App\Models\RegisterMaternal;
use Illuminate\Http\Request;

class Register6Controller extends Controller
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
    public function create(RegisterMaternal $maternal)
    {
        return view('registers.register6', ['maternal' => $maternal]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegisterMaternal $maternal)
    {
        $this->validate(request(), [
            'matokeo_stds_mume' => 'required',
            'mume_ametibiwa' => 'required',
            'matokeo_stds_mke' => 'required',
            'mke_ametibiwa' => 'required',
            'damu_HB' => 'required|numeric',
            'BP' => 'required',
            'sukari_kwenye_mkojo' => 'required',
            'kaswende_mume' => 'required',
            'mume_ametibiwa_kaswende' => 'required',
            'kaswende_mke' => 'required',
            'mke_ametibiwa_kaswende' => 'required',
            'mume_tayari_ana_VVU' => 'required',
            'mume_tarehe_ya_unasihi' => 'required',
            'mume_amepima_VVU' => 'required',
            'mume_tarehe_ya_kipimo' => 'required',
            'mume_kipimo1_VVU' => 'required',
            'mume_unasihi_baada_ya_kipimo_1' => 'required',
            'mke_tayari_ana_VVU' => 'required',
            'mke_tarehe_ya_unasihi' => 'required',
            'mke_amepima_VVU' => 'required',
            'mke_tarehe_ya_kipimo' => 'required',
            'mke_kipimo1_VVU' => 'required',
            'mke_unasihi_baada_ya_kipimo_1' => 'required',
            'hana_matatizo' => 'required_without_all:Anaemia,Protenuria,high_BP,kutoongezeka_uzito,damu_ukeni,mlalo_mbaya_wa_mtoto',
            'Anaemia' => 'required_without_all:hana_matatizo,Protenuria,high_BP,kutoongezeka_uzito,damu_ukeni,mlalo_mbaya_wa_mtoto',
            'Protenuria' => 'required_without_all:hana_matatizo,Anaemia,high_BP,kutoongezeka_uzito,damu_ukeni,mlalo_mbaya_wa_mtoto',
            'high_BP' => 'required_without_all:hana_matatizo,Anaemia,Protenuria,kutoongezeka_uzito,damu_ukeni,mlalo_mbaya_wa_mtoto',
            'kutoongezeka_uzito' => 'required_without_all:hana_matatizo,Anaemia,Protenuria,high_BP,damu_ukeni,mlalo_mbaya_wa_mtoto',
            'damu_ukeni' => 'required_without_all:hana_matatizo,Anaemia,Protenuria,high_BP,kutoongezeka_uzito,mlalo_mbaya_wa_mtoto',
            'mlalo_mbaya_wa_mtoto' => 'required_without_all:hana_matatizo,Anaemia,Protenuria,high_BP,kutoongezeka_uzito,damu_ukeni',
            'albendazole_mebendazole' => 'required',
            'vidonge_vya_I_FA' => 'required',
            'mrdt_o_bs' => 'required',
            'llin' => 'required',
            'ipt' => 'required',
            'tarehe_ya_ipt' => 'required |before:tomorrow',
            'maoni' => 'required',
            'tarehe_rufaa' => 'required |before:tomorrow',
            'rufaa_alikopelekwa' => 'required',
            'sababu_ya_rufaa' => 'required',
            'TT' => 'required',
            'tarehe_ya_marudio' => 'required|after:tarehe_ya_hudhurio',
            'tarehe_ya_hudhurio' => 'required|before:tomorrow',
            'tarehe_ya_TT' => 'required|before:tomorrow',
            'hudhurio' => 'required',
            'mume_kipimo_aina' => 'required',
            'mke_kipimo_aina' => 'required',
            'uzito' => 'required|numeric',
        ]);

        if (!$maternal) {
            session()->flash('error', 'Tafadhali, msajili kwanza mama ndipo uweze kujaza taarifa zake za maendeleo baada ya ujauzito');
            return back();
        }

        if (count($maternal->attendings->where('tarehe_ya_hudhurio', request('tarehe_ya_hudhurio')))) {
            return session()->flash('error', 'Tahadhali, taarifa za rudio hili la mama zilishahifadhiwa');
        }

        $register6 = $maternal->attendings()->create(request()->toArray());

        if (!$register6) {
            session()->flash('error', 'Imeshindwa kuhifadhi taarifa, tafadhali jaribu tena.');
            return back();
        }

        session()->flash('success', 'Taarifa za mtuha namba 6 zimeshahifadhiwa!');
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Register6  $register6
     * @return \Illuminate\Http\Response
     */
    public function show(register6 $register6)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Register6  $register6
     * @return \Illuminate\Http\Response
     */
    public function edit(register6 $register6)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Register6  $register6
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, register6 $register6)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Register6  $register6
     * @return \Illuminate\Http\Response
     */
    public function destroy(register6 $register6)
    {
        //
    }
}
