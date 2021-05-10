<?php

namespace App\Http\Controllers;

use App\Models\RegisterMaternal;
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
        return view('maternals.list', ['maternals' => RegisterMaternal::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('maternals.add');
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
            'tarehe_ya_kuandikishwa' => 'required|before: tomorrow',
            'namba_ya_usajili' => 'required',
            'jina_la_mama' => 'required|string|max:255',
            'tarehe_ya_kuzaliwa' => 'required|before:tarehe_ya_kuandikishwa',
            'BP' => 'required',
            'lnmp' => 'required|before:tarehe_ya_kuandikishwa',
            'urefu' => 'required',
            'jina_la_mume' => 'required',
            'mtaa' => 'required',
            'jina_la_mwenyekiti' => 'required|string',
            'mimba_ngapi' => 'required|numeric',
            'amezaa_mara_ngapi' => 'required|numeric',
            'watoto_walio_hai' => 'required|numeric',
            'mimba_zilizoharibika' => 'numeric|required',
            'kifo_cha_mtoto_wiki_1' => 'required',
            'umri_mtoto_wa_mwisho' => 'required|numeric',
        ]);

        if (RegisterMaternal::where('namba_ya_usajili', request('namba_ya_usajili'))->first()) {
            session()->flash('warning', 'Taarifa za usajili za mama mjamzito zimeshahifadhiwa!');
            return back();
        }

        $maternal = RegisterMaternal::create(request()->toArray());
        if (!$maternal) {
            session()->flash('error', 'Hamna taarifa zilizohifadhiwa za ' . request('namba'));
            return back();
        }

        session()->flash('success', 'Taarifa za mama zimejazwa, endelea na kujuha mtuha namba 7');
        return redirect()->route('register6', ['maternal' => $maternal]);
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
