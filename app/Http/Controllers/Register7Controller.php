<?php

namespace App\Http\Controllers;

use App\Register7;
use App\RegisterChild;
use Illuminate\Http\Request;

class Register7Controller extends Controller
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
        return view('registers.register7');
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
            'namba_ya_usajili' =>'required',
            'tarehe' =>'required',
            'vitamin_A_umri' =>'required',
            'amepata_vitamin_A' =>'required',
            'mebendazole_albendazole_umri' =>'required',
            'amepata_mebendazole_albendazole' =>'required',
            'PENTA' =>'required_with:penta_tarehe',
            'penta_tarehe' =>'before:tomorrow|required_with:PENTA',
            'Polio' =>'required_with:Polio_tarehe',
            'Polio_tarehe' =>'before:tomorrow|required_with:Polio',
            'PCV13' =>'required_with:PCV13_tarehe',
            'PCV13_tarehe' =>'before:tomorrow|required_with:PCV13',
            'Rota' =>'required_with:Rota_tarehe',
            'Rota_tarehe' =>'before:tomorrow|required_with:Rota',
            'Surua' =>'required_with:Surua_tarehe',
            'Surua_tarehe' =>'before:tomorrow|required_with:Surua',
        ]);

        $test1 = RegisterChild::where('namba_ya_mtoto',request('namba_ya_usajili'))->first();
        $test3 = Register7::where([['tarehe',request('tarehe')],['tarehe',request('tarehe')]])->first();


        if($test1 != null){
            if($test3 == null){
                        
                Register7::create(request([
                    'namba_ya_usajili',
                    'tarehe',
                    'vitamin_A_umri',
                    'amepata_vitamin_A',
                    'mebendazole_albendazole_umri',
                    'amepata_mebendazole_albendazole',
                    'PENTA',
                    'penta_tarehe',
                    'Polio',
                    'Polio_tarehe',
                    'PCV13',
                    'PCV13_tarehe',
                    'Rota',
                    'Rota_tarehe',
                    'Surua',
                    'Surua_tarehe',
                ]));
                    session()->flash('flash_message', 'Taarifa za mtuha namba 7 zimeshahifadhiwa!');

                    return view('home');
            }

            else {
                return view('error-view')->with('error_txt','Tahadhali, taarifa za chanjo za mtoto zilishahifadhiwa');
            }
        }
        else {
            return view('error-view')->with('error_txt','Tafadhali, msajili kwanza mtoto ndipo uweze kujaza taarifa zake za chanjo');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\register7  $register7
     * @return \Illuminate\Http\Response
     */
    public function show(register7 $register7)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\register7  $register7
     * @return \Illuminate\Http\Response
     */
    public function edit(register7 $register7)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\register7  $register7
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, register7 $register7)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\register7  $register7
     * @return \Illuminate\Http\Response
     */
    public function destroy(register7 $register7)
    {
        //
    }
}