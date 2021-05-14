<?php

namespace App\Http\Controllers;

use App\Models\RegisterChild;
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
        return view('children.infants', ['infants' => RegisterChild::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('children.add');
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

        if (RegisterChild::where('namba_ya_mtoto', request('namba_ya_mtoto'))->first()) {
            session()->flash('error', 'Tahadhari, mtoto alishasajiliwa');
        } else {
            $maternal = RegisterMaternal::where('namba_ya_usajili', request('maternal_id'))->first();

            if (!$maternal) {
                session()->flash('error', 'Hakuna taarifa za mama zinazoendana na taarifa za mtoto. Hakikisha namba ya mama ni sahihi');
            } else {
                $child = $maternal->children()->create(request()->toArray());
                if ($child) {
                    session()->flash('success', 'Taarifa za usajili za mtoto zimeshahifadhiwa!');
                    return redirect()->route();
                } else {
                    session()->flash('error', 'Taarifa za usajili za mtoto hazijahifadhiwa, jaribu tena!');
                }
            }
        }
        return back();
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
