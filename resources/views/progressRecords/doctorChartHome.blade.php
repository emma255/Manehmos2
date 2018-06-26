@extends('layouts.app') 
@section('content')
<div class="container">
    <div class="col-md-7 card">
        <div class="card-header form-group">Angalia maendeleo ya ukuaji</div>
        <div class="card-body form-group">
            <br>
            <form action="/request/progress" method="get">
                <div class="input-group">
                    <div class="col-md-12 row form-group">
                        <div class="col-md-3 form-group">
                            <label for="chart_for">Maendeleo ya </label>
                        </div>
                        <div class="col-md-4 form-group">
                            <select name="type" id="type" class="form-control{{ $errors->has('type') ? ' is-invalid' : '' }}"> 
                                <option></option>
                                <option value="mtoto">Mtoto</option>
                                <option value="mjamzito">Mjamzito</option>
                            </select> @if ($errors->has('type'))
                            <span class="invalid-feedback">
                                   <strong>{{ $errors->first('type') }}</strong>
                               </span> @endif
                        </div>
                        <div class="col-md-5 form-group">
                            <div class="input-group form-group">
                                <input type="search" placeholder="namba" class="form-control{{ $errors->has('namba') ? ' is-invalid' : '' }}" name="namba">
                                <span class="input-group-btn">
                                    <button type="submit" name="search" class="btn form-control"><i style="font-size:20px">🔎</i>
                                    </button>
                                </span> @if ($errors->has('namba'))
                                <span class="invalid-feedback">
                                   <strong>{{ $errors->first('namba') }}</strong>
                               </span> @endif
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection