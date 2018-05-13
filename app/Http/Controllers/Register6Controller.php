<?php

namespace App\Http\Controllers;

use App\Register6;
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
        return view('registers.register6');
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
            'jina_la_mama',
            'namba_ya_usajili',
            'matokeo_stds_mume',
            'mume_ametibiwa',
            'matokeo_stds_mke',
            'mke_ametibiwa',
            'damu_HB',
            'BP',
            'sukari_kwenye_mkojo',
            'kaswende_mume',
            'mume_ametibiwa_kaswende',
            'kaswende_mke',
            'mke_ametibiwa_kaswende',
            'mume_tayari_ana_VVU',
            'mume_tarehe_ya_unasihi',
            'mume_amepima_VVU',
            'mume_tarehe_ya_kipimo',
            'mume_kipimo1_VVU',
            'mume_unasihi_baada_ya_kipimo_1',
            'mume_kipimo_2_VVU',
            'mke_tayari_ana_VVU',
            'mke_tarehe_ya_unasihi',
            'mke_amepima_VVU',
            'mke_tarehe_ya_kipimo',
            'mke_kipimo1_VVU',
            'mke_unasihi_baada_ya_kipimo_1',
            'mke_kipimo_2_VVU',
            'hana_matatizo',
            'kuharibika_mimba_mfululizo',
            'Anaemia',
            'Protenuria',
            'high_BP',
            'kutoongezeka_uzito',
            'damu_ukeni',
            'mlalo_mbaya_wa_mtoto',
            'mimba_ya_nne+',
            'kuzaa_kwa_operesheni',
            'vacuum_extraction',
            'albendazole_mebendazole',
            'vidonge_vya_I_FA',
            'mrdt_o_bs',
            'llin',
            'ipt',
            'tarehe_ya_ipt',
            'maoni',
            'tarehe_rufaa',
            'rufaa_alipotoka',
            'rufaa_alikopelekwa',
            'sababu_ya_rufaa',
            'ana_kadi',
            'TT',
            'tarehe_ya_TT',

        ]);

        Register6::create(request([
            'jina_la_mama',
            'namba_ya_usajili',
            'matokeo_stds_mume',
            'mume_ametibiwa',
            'matokeo_stds_mke',
            'mke_ametibiwa',
            'damu_HB',
            'BP',
            'sukari_kwenye_mkojo',
            'kaswende_mume',
            'mume_ametibiwa_kaswende',
            'kaswende_mke',
            'mke_ametibiwa_kaswende',
            'mume_tayari_ana_VVU',
            'mume_tarehe_ya_unasihi',
            'mume_amepima_VVU',
            'mume_tarehe_ya_kipimo',
            'mume_kipimo1_VVU',
            'mume_unasihi_baada_ya_kipimo_1',
            'mume_kipimo_2_VVU',
            'mke_tayari_ana_VVU',
            'mke_tarehe_ya_unasihi',
            'mke_amepima_VVU',
            'mke_tarehe_ya_kipimo',
            'mke_kipimo1_VVU',
            'mke_unasihi_baada_ya_kipimo_1',
            'mke_kipimo_2_VVU',
            'hana_matatizo',
            'kuharibika_mimba_mfululizo',
            'Anaemia',
            'Protenuria',
            'high_BP',
            'kutoongezeka_uzito',
            'damu_ukeni',
            'mlalo_mbaya_wa_mtoto',
            'mimba_ya_nne+',
            'kuzaa_kwa_operesheni',
            'vacuum_extraction',
            'albendazole_mebendazole',
            'vidonge_vya_I_FA',
            'mrdt_o_bs',
            'llin',
            'ipt',
            'tarehe_ya_ipt',
            'maoni',
            'tarehe_rufaa',
            'rufaa_alipotoka',
            'rufaa_alikopelekwa',
            'sababu_ya_rufaa',
            'ana_kadi',
            'TT',
            'tarehe_ya_TT',
        ]));

        return view('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\register6  $register6
     * @return \Illuminate\Http\Response
     */
    public function show(register6 $register6)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\register6  $register6
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
     * @param  \App\register6  $register6
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, register6 $register6)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\register6  $register6
     * @return \Illuminate\Http\Response
     */
    public function destroy(register6 $register6)
    {
        //
    }
}
