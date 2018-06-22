@extends('layouts.main') 
@section('content')
<div class="container col-xs-offset-3">
    <div class="card col-sm-8">
        <div class="card-header">Tengeneza ripoti</div>
        <div class="card-body">
            <!-- select -->
            <form action="/report/request" method="post">
                {{csrf_field()}}
                <div class="form-group col-md-9">
                    <label>Chagua aina ya ripoti ripoti</label>
                    <select class="form-control" name="reportType">
                    <option value="antenatal">Taarifa ya mwezi toka kliniki (ANC)</option>
                    {{-- <option value="ivd">Tanzania monthly health facility report on IVD activities</option> --}}
                    <option value="postnatalReport">Taarifa ya mwezi mtoto na mama baada ya kujifungua</option>
                    {{-- <option value="ufuatiliaji_mtoto">Ripoti ya mwezi ya ufuatiliaji wa mtoto</option> --}}
                </select>
                </div>
                <div class="row col-md-9">
                    <div class="col-md-4">
                        <label for="month">Mwezi</label>
                        <select class="form-control" name="month" required>
                        <option value="1">January</option>
                        <option value="2">February</option>
                        <option value="3">March</option>
                        <option value="4">April</option>
                        <option value="5">May</option>
                        <option value="6">June</option>
                        <option value="7">July</option>
                        <option value="8">August</option>
                        <option value="9">September</option>
                        <option value="10">October</option>
                        <option value="11">November</option>
                        <option value="12">December</option>
                    </select>
                    </div>
                    <div class="col-md-4">
                        <label for="year">Mwaka</label>
                        <input type="number" name="year" id="year" class="form-control" max="20100" min="1900" required>
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