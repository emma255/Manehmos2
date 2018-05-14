<?php

namespace App\Http\Controllers;

use App\RegisterMaternal;
use Illuminate\Http\Request;

class RegisterMaternalController extends Controller
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
        return view('registration.maternal_register');
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
            'namba_ya_usajili',
            'jina_la_mama',
            'tarehe_ya_kuzaliwa',
            'BP',
            'kujifungua_kwa_cs',
            'urefu',
            'jina_la_mume',
            'mtaa',
            'jina_la_mwenyekiti',
            'mimba_ngapi',
            'amezaa_mara_ngapi',
            'watoto_walio_hai',
            'mimba_zilizoharibika',
            'kifo_cha_mtoto_wiki_1',
            'umri_mtoto_wa_mwisho',
        ]);

        RegisterMaternal::create(request([
            'tarehe_ya_kuandikishwa',
            'namba_ya_usajili',
            'jina_la_mama',
            'tarehe_ya_kuzaliwa',
            'BP',
            'kujifungua_kwa_cs',
            'urefu',
            'jina_la_mume',
            'mtaa',
            'jina_la_mwenyekiti',
            'mimba_ngapi',
            'amezaa_mara_ngapi',
            'watoto_walio_hai',
            'mimba_zilizoharibika',
            'kifo_cha_mtoto_wiki_1',
            'umri_mtoto_wa_mwisho',
        ]));

        return view('registers.register6');
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
