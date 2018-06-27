<?php

namespace App\Http\Controllers;

use App\Infant;
use App\RegisterChild;
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
            'jina_la_mtoto' => 'required',
            'namba_ya_usajili' => 'required',
            'hudhurio' => 'required',
            'tarehe' => 'required',
            'joto' => 'required',
            'uzito' => 'required',
            'hb' => 'required',
            'lishe' => 'required',
            'kmc' => 'required',
            'maambukizi_kitovu' => 'required',
            'uambukizo_mkali' => 'required',
            'maambukizi_machoni' => 'required',
            'maambukizi_mdomoni' => 'required',
            'maambukizi_ngozini' => 'required',
            'tarehe_BCG' => 'required',
            'tarehe_OPVO' => 'required',
            'matatizo_mengine' => 'required',
            'tarehe_ya_kurudi' => 'required',

        ]);

        $test1 = RegisterChild::where('namba_ya_mtoto',request('namba_ya_usajili'))->first();

        $test2= RegisterChild::where('jina_la_mtoto',request('jina_la_mtoto'))->first();

        $test3= Infant::where('tarehe',request('tarehe'))->first();

        // $getNumber= RegisterChild::where('jina_la_mtoto',request('jina_la_mtoto'))->pluck('namba_ya_usajili');

        // if ($test1 or $test2 != null) {
        if ($test1 and $test2 != null) {
           
            if($test3 == null){
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
        else{
            return view('error-view')->with('error_txt','badilisha tarehe ya hudhurio, kwa sababu imejirudia');
        }
            
        } else {

            $error_txt = "Msajili kwanza ".request('jina_la_mtoto')." ndipo uhifadhi taarifa zake za kliniki";

            return view('error-view')->with('error_txt',$error_txt);
        }
        

        
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