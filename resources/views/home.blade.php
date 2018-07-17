@extends('layouts.main')
@section('content')
<div class="container">
    <div class="row justify-content-center p-3 mb-2 bg-light text-black">
        <div class="container-fluid">


            <div>KARIBU {{ Auth::user()->name }},<br>Kwa kuanza kutumia Manehmos, bonyeza taarifa husika katika mwanzo. kurudi
                katika ukurasa huu, bonyeza kitufe cha mwanzo. <br>
            <br>
            <div class="row">
                <div class="col-md-1">
                    <img src="{{ asset('/imgs/register.png')}}" class="img img-thumbnail">
                </div>
                <div class="col-md-6">
                    <label>SAJILI</label>
                    <P>Jaza taarifa zinazomhusu au kumtambulisha mama mjamzito, mtoto na mwenza wa mjamzito</P>
                </div>

            </div>
            <div class="row">
                <div class="col-md-1">
                    <!-- <i class="fas fa-search fa-3x"></i> -->
                    <img src="{{ asset('/imgs/search.png')}}" class="img img-thumbnail">
                </div>
                <div class="col-md-6">
                    <label>MAENDELEO</label>
                    <P>Angalia mwenendo wa uzito ya mama mjamzito au mtoto katika grafu</P>
                </div>

            </div>
            <div class="row">
                <div class="col-md-1">
                    <img src="{{ asset('/imgs/fillInfo.png')}}" class="img img-thumbnail">
                </div>
                <div class="col-md-6">
                    <label>JAZA TAARIFA</label>
                    <P>Jaza rekodi za maendeleo ya kliniki ya mama au mtoto kila hudhurio la kliniki katika mtuha husika.</P>
                </div>

            </div>
            <div class="row">
                <div class="col-md-1">
                    <img src="{{ asset('/imgs/report.png')}}" class="img img-thumbnail">
                </div>
                <div class="col-md-6">
                    <label>RIROTI</label>
                    <P>Andaa ripoti za mwisho wa mwezi za kliniki.</P>
                </div>

            </div>

            <div class="row">
                <div class="col-md-1">
                    <img src="{{ asset('/imgs/changepswd.png')}}" class="img img-thumbnail">
                </div>
                <div class="col-md-6">
                    <label>Badilisha alama ya siri</label>
                    <P>Kama umesahau alama ya siri au unataka kubadilisha. Mtumie ujumbe Admin wa kuomba
                        kubadilishiwa password za akaunti yako kwenye mfumo huu</P>
                </div>

            </div>

        </div>
    </div>
</div>
@endsection