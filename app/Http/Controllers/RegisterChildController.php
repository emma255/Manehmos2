<?php

namespace App\Http\Controllers;

use App\RegisterChild;
use App\Models\RegisterMaternal;
use Illuminate\Http\Request;

class RegisterChildController extends Controller
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
        return view('registration.child_register');
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
            'tarehe_ya_kuandikishwa' => 'required |before: tomorrow',
            'namba_ya_usajili_RITA' => 'required',
            'jina_la_mtoto' => 'required',
            'namba_ya_mtoto' => 'required',
            'jinsia' => 'required|max:8|string',
            'namba_ya_HEID' => 'required',
            'jina_la_mama' => 'required',
            'mahali_anapoishi_mtoto' => 'required',
        ]);

        $test1 = RegisterChild::where('namba_ya_mtoto', request('namba_ya_mtoto'))->first();

        $test2 = RegisterMaternal::where('namba_ya_usajili', request('jina_la_mama'))->first();

        if ($test1 == null) {
            if ($test2 != null) {

                RegisterChild::create(request([
                    'tarehe_ya_kuandikishwa',
                    'namba_ya_usajili_RITA',
                    'jina_la_mtoto',
                    'namba_ya_mtoto',
                    'jinsia',
                    'namba_ya_HEID',
                    'jina_la_mama',
                    'mahali_anapoishi_mtoto',
                ]));

                session()->flash('flash_message', 'Taarifa za usajili za mtoto zimeshahifadhiwa!');

                return view('registers.infant_progress');
            } else {

                return view('error-view')
                    ->with('error_txt', 'Hakuna taarifa za mama zinazoendana na taarifa za mtoto. Hakikisha namba ya mama ni sahihi');
            }
        } else {

            return view('error-view')->with('error_txt', 'Tahadhari, mtoto alishasajiliwa');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\RegisterChild  $registerChild
     * @return \Illuminate\Http\Response
     */
    public function show(RegisterChild $registerChild)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RegisterChild  $registerChild
     * @return \Illuminate\Http\Response
     */
    public function edit(RegisterChild $registerChild)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RegisterChild  $registerChild
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RegisterChild $registerChild)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RegisterChild  $registerChild
     * @return \Illuminate\Http\Response
     */
    public function destroy(RegisterChild $registerChild)
    {
        //
    }
}
