<?php

namespace App\Http\Controllers;

use App\RegisterChild;
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
            'tarehe_ya_kuandikishwa',
            'namba_ya_usajili_RITA',
            'jina_la_mtoto',
            'namba_ya_mtoto',
            'jinsia',
            'namba_ya_HEID',
            'jina_la_mama',
            'mahali_anapoishi_mtoto',
        ]);

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

        return view('registers.infant_progress');
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
