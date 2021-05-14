@extends('layouts.main')
@section('content')
<div class="card col-sm">
    <div class="card-header text-center">
        <p>Taarifa Binafsi za mtoto aliyezaliwa</p>
    </div>

    <div class="card-body">
        <form action="{{ route('child.store') }}" method="post">
            @csrf
            <div class="row justify-content-between">
                <!-- starts the left division -->
                <div class="col-md-5">
                    <div class="row form-group">
                        <label class="text-right col-md-6">Namba ya mtoto</label>
                        <div class="col-md-6">
                            <input required type="text" name="namba_ya_mtoto" placeholder="" class="form-control{{ $errors->has('namba_ya_mtoto') ? ' is-invalid' : '' }}">
                            @if ($errors->has('namba_ya_mtoto'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('namba_ya_mtoto') }}</strong>
                            </span> @endif
                        </div>
                    </div>
                    <div class="row form-group">
                        <label class="text-right col-md-6">Tarehe ya kuandikishwa</label>
                        <div class="col-md-6">
                            <input required type="date" name="tarehe_ya_kuandikishwa" class="form-control{{ $errors->has('tarehe_ya_kuandikishwa') ? ' is-invalid' : '' }}">
                            @if ($errors->has('tarehe_ya_kuandikishwa'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('tarehe_ya_kuandikishwa') }}</strong>
                            </span> @endif
                        </div>
                    </div>
                    <div class="row form-group">
                        <label class="text-right col-md-6">Namba ya usajili wa vizazi</label>
                        <div class="col-md-6">
                            <input type="text" name="namba_ya_usajili_RITA" min="0" class="form-control{{ $errors->has('namba_ya_usajili_RITA') ? ' is-invalid' : '' }}">
                            @if ($errors->has('namba_ya_usajili_RITA'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('namba_ya_usajili_RITA') }}</strong>
                            </span> @endif
                        </div>
                    </div>

                    <div class="row">
                        <label for="maternal_id" class="text-right col-md-6">Namba ya kadi ya mama</label>
                        <div class="col-md-6">
                            <input required type="text" name="maternal_id" class="form-control{{ $errors->has('maternal_id') ? ' is-invalid' : '' }}">
                            @if ($errors->has('maternal_id'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('maternal_id') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                </div>
                <!-- ends left division -->

                <!-- start right division -->
                <div class="col-md-6">
                    <div class="row form-group">
                        <label for="heid_no" class="text-right col-md-4">Namba ya HEID</label>
                        <div class="col-md-3">
                            <input required type="text" name="namba_ya_HEID" id="heid_no" class="form-control{{ $errors->has('namba_ya_HEID') ? ' is-invalid' : '' }}">
                            @if ($errors->has('namba_ya_HEID'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('namba_ya_HEID') }}</strong>
                            </span> @endif
                        </div>
                        <label class="text-right col-md-2">Jinsia</label>
                        <div class="col-md-3">
                            <select required name="jinsia" class="form-control{{ $errors->has('jinsia') ? ' is-invalid' : '' }}">
                                <option value="" hidden=""></option>
                                <option value="Msichana">Msichana</option>
                                <option value="Mvulana">Mvulana</option>
                            </select>@if ($errors->has('jinsia'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('jinsia') }}</strong>
                            </span> @endif
                        </div>
                    </div>

                    <div class="row form-group">
                        <label class="text-right col-md-4">Jina la Mtoto</label>
                        <div class="col-md-8">
                            <input required type="text" name="jina_la_mtoto" placeholder="Andika majina matatu ya mtoto" class="form-control{{ $errors->has('jina_la_mtoto') ? ' is-invalid' : '' }}">
                            @if ($errors->has('jina_la_mtoto'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('jina_la_mtoto') }}</strong>
                            </span> @endif
                        </div>
                    </div>
                    <div class="row form-group">
                        <label for="child_place" class="text-right col-md-4">Mahali anapoishi mtoto</label>
                        <div class="col-md-8">
                            <input required type="text" name="mahali_anapoishi_mtoto" id="child_place" class="form-control{{ $errors->has('mahali_anapoishi_mtoto') ? ' is-invalid' : '' }}">
                            @if ($errors->has('mahali_anapoishi_mtoto'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('mahali_anapoishi_mtoto') }}</strong>
                            </span> @endif
                        </div>
                    </div>
                    <div class="float-right col-md-8">
                        <button type="submit" class="btn btn-primary btn-block">Hifadhi</button>
                    </div>
                </div>
                <!-- end right division -->
            </div>
        </form>
    </div>
</div>
@endsection
