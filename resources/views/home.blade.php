@extends('layouts.main') 
@section('content')
<div class="row justify-content-center p-3 mb-2 bg-light text-black">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-5">
                <div class="form-group">KARIBU {{ Auth::user()->name }},<br>Kwa kuanza kutumia Manehmos, bonyeza taarifa husika katika mwanzo. kurudi
                    katika ukurasa huu, bonyeza kitufe cha mwanzo.</div>
                <div class="row">
                    <div class="col-md-1">
                        <img src="/imgs/register.png" class="img img-thumbnail img">
                    </div>
                    <div class="col-md-11">
                        <label>SAJILI</label>
                        <P>Jaza taarifa zinazomhusu au kumtambulisha mama mjamzito, mtoto na mwenza wa mjamzito</P>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-1"><i style="font-size:40px">🔎</i></div>
                    <div class="col-md-11">
                        <label>TAFUTA REKODI</label>
                        <P>Angalia taarifa zilizohifadhiwa na maendeleo ya kliniki ya mama mjamzito au mtoto</P>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-1"><i style="font-size:40px">📝</i></div>
                    <div class="col-md-11">
                        <label>JAZA TAARIFA</label>
                        <P>Jaza rekodi za maendeleo ya kliniki ya mama au mtoto kila hudhurio la kliniki katika mtuha husika.</P>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-1"><i style="font-size:40px">📊</i></div>
                    <div class="col-md-11">
                        <label>MAENDELEO</label>
                        <P>Angalia graph ya maendeleo ya mama na mtoto</P>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-1"><i style="font-size:40px">🗒</i></div>
                    <div class="col-md-11">
                        <label>RIROTI</label>
                        <P>Andaa ripoti. Pia angalia ripoti za nyuma ambazo ziliandaliwa hapa.</P>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection