@extends('layouts.main') 
@section('content')
<div class="container col-xs-offset-3">
    <div class="card col-sm-8">
        <div class="card-header">Create Reports</div>
        <div class="card-body">
            <!-- select -->
            <form action="/report/request" method="post">
                {{csrf_field()}}
                <div class="form-group col-md-9">
                    <label>Select report</label>
                    <select class="form-control" name="reportType">
                    <option value="reports.antenatal">Taarifa ya mwezi toka kliniki (ANC)</option>
                    <option value="reports.IVD_activities">Tanzania monthly health facility report on IVD activities</option>
                    <option value="reports.postnatal">Taarifa ya mwezi mtoto na mama baada ya kujifungua</option>
                    <option value="reports.ufuatiliaji_mtoto">Ripoti ya mwezi ya ufuatiliaji wa mtoto</option>
                </select>
                </div>
                <div class="row col-md-9">
                    <div class="col-md-4">
                        <label for="month">Mwezi</label>
                        <select class="form-control" name="month" required>
                        <option value="january">january</option>
                        <option value="february">february</option>
                        <option value="march">march</option>
                        <option value="april">April</option>
                        <option value="may">may</option>
                        <option value="june">june</option>
                        <option value="july">july</option>
                        <option value="august">august</option>
                        <option value="september">september</option>
                        <option value="october">october</option>
                        <option value="november">november</option>
                        <option value="december">december</option>
                    </select>
                    </div>
                    <div class="col-md-4">
                        <label for="year">Mwaka</label>
                        <input type="number" name="year" id="year" class="form-control" max="20100" min="1900" required>
                    </div>

                    <div class="col-md-4">
                        <label for="date">Mwaka</label>
                        <input type="date" name="date" id="date" class="form-control" required>
                    </div>
                    <div class="col-md-4">
                        <label for=""></label>
                        <input type="submit" value="Andaa ripoti" class="form-control btn btn-secondary">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
 {{--
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
                    </i><a href="/postnatal/report"> Taarifa ya mwezi mtoto na mama baada ya kujifungua</a>
    </li>
    <li>
        <i class="fa fa-file-pdf"> </i>
        <a href="/mtoto"> Ripoti ya mwezi ya ufuatiliaji wa mtoto</a>
    </li>
</ul> --}}