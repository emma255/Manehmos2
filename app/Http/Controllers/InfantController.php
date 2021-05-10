<?php

namespace App\Http\Controllers;

use App\Models\Infant;
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
            'tarehe' => 'required|before:tomorrow',
            'joto' => 'required|numeric',
            'uzito' => 'required|numeric',
            'hb' => 'required|numeric',
            'lishe' => 'required',
            'kmc' => 'required',
            'maambukizi_kitovu' => 'required',
            'uambukizo_mkali' => 'required',
            'maambukizi_machoni' => 'required',
            'maambukizi_mdomoni' => 'required',
            'maambukizi_ngozini' => 'required',
            'tarehe_BCG' => 'required|before:tomorrow',
            'tarehe_OPVO' => 'required|before:tomorrow',
            'matatizo_mengine' => 'required',
            'tarehe_ya_kurudi' => 'required|after:tarehe',

        ]);

        $test1 = RegisterChild::where('namba_ya_mtoto', request('namba_ya_usajili'))->first();

        $test2 = RegisterChild::where('jina_la_mtoto', request('jina_la_mtoto'))->first();

        $test3 = Infant::where([['tarehe', request('tarehe')], ['namba_ya_usajili', request('namba_ya_usajili')]])->first();

        // $getNumber= RegisterChild::where('jina_la_mtoto',request('jina_la_mtoto'))->pluck('namba_ya_usajili');

        // if ($test1 or $test2 != null) {
        if ($test1 and $test2 != null) {

            $aina;
            if (request()->hudhurio != 'hudhurio la mwezi') {
                $aina = 'awali';
            } else {
                $aina = 'mwezi';
            }

            if ($test3 == null) {
                Infant::create([
                    'jina_la_mtoto' => request()->jina_la_mtoto,
                    'namba_ya_usajili' => request()->namba_ya_usajili,
                    'hudhurio' => request()->hudhurio,
                    'tarehe' => request()->tarehe,
                    'joto' => request()->joto,
                    'uzito' => request()->uzito,
                    'hb' => request()->hb,
                    'lishe' => request()->lishe,
                    'kmc' => request()->kmc,
                    'maambukizi_kitovu' => request()->maambukizi_kitovu,
                    'uambukizo_mkali' => request()->uambukizo_mkali,
                    'maambukizi_machoni' => request()->maambukizi_machoni,
                    'maambukizi_mdomoni' => request()->maambukizi_mdomoni,
                    'maambukizi_ngozini' => request()->maambukizi_ngozini,
                    'tarehe_BCG' => request()->tarehe_BCG,
                    'tarehe_OPVO' => request()->tarehe_OPVO,
                    'matatizo_mengine' => request()->matatizo_mengine,
                    'tarehe_ya_kurudi' => request()->tarehe_ya_kurudi,
                    'aina' => $aina,
                ]);

                session()->flash('flash_message', 'Taarifa za mtoto zimeshahifadhiwa');

                return view('home');
            } else {
                return view('error-view')->with('error_txt', 'badilisha tarehe ya hudhurio, kwa sababu imejirudia');
            }
        } else {

            $error_txt = "Msajili kwanza " . request('jina_la_mtoto') . " ndipo uhifadhi taarifa zake za kliniki";

            return view('error-view')->with('error_txt', $error_txt);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Infant:  $infant
     * @return \Illuminate\Http\Response
     */
    public function show(infant $infant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Infant:  $infant
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
     * @param  \App\Models\Infant:  $infant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, infant $infant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Infant:  $infant
     * @return \Illuminate\Http\Response
     */
    public function destroy(infant $infant)
    {
        //
    }
}
