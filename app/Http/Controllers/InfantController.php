<?php

namespace App\Http\Controllers;

use App\Infant;
use Illuminate\Http\Request;

class InfantController extends Controller
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
        return view('registers.infant_progress');
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
            'jina_la_mtoto',
            'namba_ya_usajili',
            'hudhurio',
            'tarehe',
            'joto',
            'uzito',
            'hb',
            'lishe',
            'kmc',
            'maambukizi_kitovu',
            'uambukizo_mkali',
            'maambukizi_machoni',
            'maambukizi_mdomoni',
            'maambukizi_ngozini',
            'tarehe_BCG',
            'tarehe_OPVO',
            'matatizo_mengine',
            'tarehe_ya_kurudi',

        ]);

        Infant::create(request([
            'jina_la_mtoto',
            'namba_ya_usajili',
            'hudhurio',
            'tarehe',
            'joto',
            'uzito',
            'hb',
            'lishe',
            'kmc',
            'maambukizi_kitovu',
            'uambukizo_mkali',
            'maambukizi_machoni',
            'maambukizi_mdomoni',
            'maambukizi_ngozini',
            'tarehe_BCG',
            'tarehe_OPVO',
            'matatizo_mengine',
            'tarehe_ya_kurudi',
        ]));
        
        session()->flash('flash_message', 'Taarifa za mtoto zimeshahifadhiwa');

        return view('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\infant  $infant
     * @return \Illuminate\Http\Response
     */
    public function show(infant $infant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\infant  $infant
     * @return \Illuminate\Http\Response
     */
    public function edit(infant $infant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\infant  $infant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, infant $infant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\infant  $infant
     * @return \Illuminate\Http\Response
     */
    public function destroy(infant $infant)
    {
        //
    }
}