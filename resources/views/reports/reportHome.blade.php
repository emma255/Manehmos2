@extends('layouts.main') 
@section('content')
<div class="container">
    <div class="card col-md-8 col-md-offset-5">
        <div class="card-header">Create Reports</div>
        <div class="card-body">
            <ul type='none'>
                <li>
                    <i class="fa fa-file-pdf"></i>
                    <a href="/antenatal">Taarifa ya mwezi toka kliniki (ANC)</a>
                </li>

                <li>
                    <i class="fa fa-file-pdf"></i>
                    <a href="/IVDactivities">Tanzania monthly health facility report on IVD activities</a>
                </li>
                <li>
                    <i class="fa fa-file-pdf">
                    </i><a href="/postnatal"> Taarifa ya mwezi mtoto na mama baada ya kujifungua</a>
                </li>
                <li>
                    <i class="fa fa-file-pdf"> </i>
                    <a href="/mtoto"> Ripoti ya mwezi ya ufuatiliaji wa mtoto</a>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection