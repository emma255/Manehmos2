@extends('layouts.main') 
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md card">

            <div class="card-header">
                <p>Taarifa Binafsi za mtuha namba 13 wakati wa kuanza postnatal</p>
            </div>

            <div class="card-body">

                <form action="/postnatal/store" method="post">
                    {{csrf_field()}}

                    <div class="form-group">
                        <!--first row-->
                        <div class="row">
                            <!--left division-->
                            <div class="col-md-6">

                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Tarehe ya kuandikishwa postnatal</label>
                                        <input required type="date" name="tarehe_ya_kuandikishwa" class="form-control{{ $errors->has('tarehe_ya_kuandikishwa') ? ' is-invalid' : '' }}">
                                        @if ($errors->has('tarehe_ya_kuandikishwa'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('tarehe_ya_kuandikishwa') }}</strong>
                                        </span> @endif
                                    </div>

                                    <div class="col-md-6">
                                        <label>Namba ya kadi RCH-4</label>
                                        <input required type="text" name="namba_ya_kadi_RCH4" class="form-control{{ $errors->has('namba_ya_kadi_RCH4') ? ' is-invalid' : '' }}">
                                        @if ($errors->has('namba_ya_kadi_RCH4'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('namba_ya_kadi_RCH4') }}</strong>
                                        </span> @endif
                                    </div>
                                </div>

                                <br>

                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Jina la mama</label>
                                        <input required type="text" name="jina_la_mama" class="form-control{{ $errors->has('jina_la_mama') ? ' is-invalid' : '' }}">
                                        @if ($errors->has('jina_la_mama'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('jina_la_mama') }}</strong>
                                        </span> @endif
                                    </div>
                                    <div class="col-md-6">
                                        <label>Kitongoji au Mtaa</label>
                                        <input required type="text" name="mtaa" class="form-control{{ $errors->has('mtaa') ? ' is-invalid' : '' }}">
                                        @if ($errors->has('mtaa'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('mtaa') }}</strong>
                                        </span> @endif
                                    </div>

                                </div>

                                <br>


                                <div class="row">
                                    <div class="col-md-5">
                                        <label>Tarehe ya kuzaliwa</label>
                                        <input required type="date" name="tarehe_ya_kuzaliwa" class="form-control{{ $errors->has('tarehe_ya_kuzaliwa') ? ' is-invalid' : '' }}">
                                        @if ($errors->has('tarehe_ya_kuzaliwa'))
                                        <span class="invalid-feedback">
											<strong>{{ $errors->first('tarehe_ya_kuzaliwa') }}</strong>
										</span> @endif
                                    </div>

                                    <div class="col-md-2">
                                        <label>Para</label>
                                        <input required type="number" name="para" min="0" class="form-control{{ $errors->has('para') ? ' is-invalid' : '' }}">
                                        @if ($errors->has('para'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('para') }}</strong>
                                        </span> @endif
                                    </div>
                                    <div class="col-md-5">
                                        <label for="lishe">Lishe ya mtoto</label>
                                        <select required name="lishe_ya_mtoto" class="form-control{{ $errors->has('lishe_ya_mtoto') ? ' is-invalid' : '' }}"> 
                                            <option value="" hidden=""></option>
                                            <option value="EBF">Maziwa ya mama (EBF)</option>
                                            <option value="RF">Maziwa mbadala (RF)</option>
                                        </select>@if ($errors->has('lishe_ya_mtoto'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('lishe_ya_mtoto') }}</strong>
                                        </span> @endif
                                    </div>
                                </div>

                                <br>

                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Tarehe ya kujifungua</label>
                                        <input required type="date" name="tarehe_ya_kujifungua" class="form-control{{ $errors->has('tarehe_ya_kujifungua') ? ' is-invalid' : '' }}">
                                        @if ($errors->has('tarehe_ya_kujifungua'))
                                        <span class="invalid-feedback">
											<strong>{{ $errors->first('tarehe_ya_kujifungua') }}</strong>
										</span> @endif
                                    </div>

                                    <div class="col-md-5">
                                        <label>Kada ya aliyemzalisha</label>
                                        <select required name="kada_ya_aliyemzalisha" class="form-control{{ $errors->has('kada_ya_aliyemzalisha') ? ' is-invalid' : '' }}"> 
                                            <option value="" hidden=""></option>
                                            <option value="Mhudumu wa afya">Mhudumu wa afya</option>
                                            <option value="Mkunga wa jadi (TBA)">Mkunga wa jadi (TBA)</option>
                                            <option value="Wengineo">Wengineo</option>
                                        </select>@if ($errors->has('kada_ya_aliyemzalisha'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('kada_ya_aliyemzalisha') }}</strong>
                                        </span> @endif
                                    </div>
                                    <div class="col-md-3">
                                        <label>Amepima VVU</label>
                                        <select required name="amepima_postnatal" class="form-control{{ $errors->has('amepima_postnatal') ? ' is-invalid' : '' }}"> 
                                            <option hidden></option>
                                            <option value="Ndio">Ndio</option>
                                            <option value="Hapana">Hapana</option>
                                        </select>@if ($errors->has('amepima_postnatal'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('amepima_postnatal') }}</strong>
                                        </span> @endif
                                    </div>
                                </div>

                                <br>

                            </div>
                            <!--end left division-->
                            <div class="col-md-1"></div>

                            <!--right division-->
                            <div class="col-md-5">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Mahali alipojifungulia</label>
                                        <select required name="mahali_alipojifungulia" class="form-control{{ $errors->has('mahali_alipojifungulia') ? ' is-invalid' : '' }}">
                                            <option value="" hidden=""></option>
                                            <option value="Nyumbani">Nyumbani</option>
                                            <option value="Hospitali">Hospitali</option>
                                            <option value="Njiani">Njiani</option>
                                        </select>@if ($errors->has('mahali_alipojifungulia'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('mahali_alipojifungulia') }}</strong>
                                        </span> @endif
                                    </div>


                                    <div class="col-md-6">
                                        <label>Hali ya mama</label>
                                        <select required name="hali_ya_mama" class="form-control{{ $errors->has('hali_ya_mama') ? ' is-invalid' : '' }}">
                                            <option value="" hidden=""></option>
                                            <option value="Hai">Hai</option>
                                            <option value="Amefariki">Amefariki</option>
                                        </select>@if ($errors->has('hali_ya_mama'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('hali_ya_mama') }}</strong>
                                        </span> @endif
                                    </div>

                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-5">
                                        <label>Hali ya mtoto</label>
                                        <select required name="hali_ya_mtoto" class="form-control{{ $errors->has('hali_ya_mtoto') ? ' is-invalid' : '' }}"> 
                                            <option value="" hidden=""></option>
                                            <option value="Hai">Hai</option>
                                            <option value="Amefariki">Amefariki</option>
                                        </select>@if ($errors->has('hali_ya_mtoto'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('hali_ya_mtoto') }}</strong>
                                        </span> @endif
                                    </div>
                                    <div class="col-md-7">
                                        <label>Unyonyeshaji ndani ya saa moja</label>
                                        <select required name="unyonyeshaji_ndani_ya_saa_1" class="form-control{{ $errors->has('unyonyeshaji_ndani_ya_saa_1') ? ' is-invalid' : '' }}">
                                            <option value="" hidden=""></option>
                                            <option value="Ndio">Ndio</option>
                                            <option value="Hapana">Hapana</option>
                                        </select>@if ($errors->has('unyonyeshaji_ndani_ya_saa_1'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('unyonyeshaji_ndani_ya_saa_1') }}</strong>
                                        </span> @endif
                                    </div>
                                </div>

                                <br>

                                <div class="card col-md-12">
                                    <div class="card-header">PMTCT</div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-7"><label>Hali ya VVU kama inavyoonekana kwenye kadi</label></div>
                                            <div class="col-md-5">
                                                <select required name="Hali_ya_VVU_kwenye_kadi" class="form-control{{ $errors->has('Hali_ya_VVU_kwenye_kadi') ? ' is-invalid' : '' }}"> 
                                                <option value="" hidden=""></option>
                                                <option value="Positive">Positive</option>
                                                <option value="Negative">Negative</option>
                                                <option value="Unknown">Unknown</option>
                                            </select>@if ($errors->has('Hali_ya_VVU_kwenye_kadi'))
                                                <span class="invalid-feedback">
                                                <strong>{{ $errors->first('Hali_ya_VVU_kwenye_kadi') }}</strong>
                                            </span> @endif
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-7"><label>Kipimo cha VVU wakati wa postnatal</label></div>
                                            <div class="col-md-5">
                                                <select required name="kipimo_vvu_wakati_wa_postnatal" class="form-control{{ $errors->has('kipimo_vvu_wakati_wa_postnatal') ? ' is-invalid' : '' }}"> 
                                                <option value="" hidden=""></option>
                                                <option value="Positive">Positive</option>
                                                <option value="Negative">Negative</option>
                                            </select>@if ($errors->has('kipimo_vvu_wakati_wa_postnatal'))
                                                <span class="invalid-feedback">
                                                <strong>{{ $errors->first('kipimo_vvu_wakati_wa_postnatal') }}</strong>
                                            </span> @endif
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!--end right division-->
                        </div>
                        <div class="row col-md-12">
                            <div class="col-md-5">
                            </div>
                            <div class="col-md-2"><input required type="Submit" name="submit" class="btn btn-primary form-control" value="Hifadhi"></div>
                            <div class="col-md-5"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection