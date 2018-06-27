@extends('layouts.main')
@section('content')
<div class="container">
    <div class="row justify-content-center p-3 mb-2 bg-light text-black">
        <div class="container-fluid">


            <div>KARIBU {{ Auth::user()->name }},<br>Kwa kuanza kutumia Manehmos, bonyeza taarifa husika katika mwanzo. kurudi
                katika ukurasa huu, bonyeza kitufe cha mwanzo.<br>Kwa msaada zaidi wa matumizi ya mfumo nenda kwenye kitufe
                cha msaada.</div>
            <br>
            <div class="row">
                <div class="col-md-1">
                    <img src="/imgs/register.png" class="img img-thumbnail">
                </div>
                <div class="col-md-6">
                    <label>SAJILI</label>
                    <P>Jaza taarifa zinazomhusu au kumtambulisha mama mjamzito, mtoto na mwenza wa mjamzito</P>
                </div>

            </div>
            <div class="row">
                <div class="col-md-1">
                    <!-- <i class="fas fa-search fa-3x"></i> -->
                    <img src="/imgs/search.png" class="img img-thumbnail">
                </div>
                <div class="col-md-6">
                    <label>TAFUTA REKODI</label>
                    <P>Angalia taarifa zilizohifadhiwa na maendeleo ya kliniki ya mama mjamzito au mtoto</P>
                </div>

            </div>
            <div class="row">
                <div class="col-md-1">
                    <img src="/imgs/fillInfo.png" class="img img-thumbnail">
                </div>
                <div class="col-md-6">
                    <label>JAZA TAARIFA</label>
                    <P>Jaza rekodi za maendeleo ya kliniki ya mama au mtoto kila hudhurio la kliniki katika mtuha husika.</P>
                </div>

            </div>
            <div class="row">
                <div class="col-md-1">
                    <img src="/imgs/report.png" class="img img-thumbnail">
                </div>
                <div class="col-md-6">
                    <label>RIROTI</label>
                    <P>Andaa ripoti. Pia angalia ripoti za nyuma ambazo ziliandaliwa hapa.</P>
                </div>

            </div>

            <div class="row">
                <div class="col-md-1">
                    <img src="/imgs/help.png" class="img img-thumbnail">
                </div>
                <div class="col-md-6">
                    <label>MSAADA</label>
                    <P>Kama kuna tatizo lolote katika mfumo huu hapa utapata msaada wa awali pamoja na namna ya kutumia mfumo
                        huu
                    </P>
                </div>

            </div>

            <div class="row">
                <div class="col-md-1">
                    <img src="/imgs/changepswd.png" class="img img-thumbnail">
                </div>
                <div class="col-md-6">
                    <label>Badilisha alama ya siri</label>
                    <P>Kama umesahau alama ya siri au unataka kubadiliisha</P>
                </div>

            </div>

        </div>
    </div>
</div>
@endsection