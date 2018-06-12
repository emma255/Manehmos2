@extends('layouts.main') 
@section('content')
<div class="container">
    <div class="row">
        <!-- 	<div class="col-md-2"></div>
 -->
        <div class="col-md card">

            <div class="card-header">
                <p>Ufuatiliaji wa mtoto mchanga siku 0-42</p>
            </div>

            <div class="card-body">

                <form action="/infant/store" method="post">
                    {{csrf_field()}}

                    <div class="form-group">
                        <!--first row-->
                        <div class="row form-group">
                            <!--left division-->
                            <div class="col-md-6">

                                <div class="row">
                                    <div class="col-md-7">
                                        <label>Jina la mtoto</label>
                                        <input required type="text" name="jina_la_mtoto" id="jina_la_mtoto" class="form-control{{ $errors->has('jina_la_mtoto') ? ' is-invalid' : '' }}"
                                            name="jina_la_mtoto"> @if ($errors->has('jina_la_mtoto'))
                                        <span class="invalid-feedback">
											<strong>{{ $errors->first('jina_la_mtoto') }}</strong>
										</span> @endif
                                    </div>

                                    <div class="col-md-5">
                                        <label>Namba ya mtoto</label>
                                        <input required type="text" name="namba_ya_usajili" class="form-control{{ $errors->has('namba_ya_usajili') ? ' is-invalid' : '' }}"
                                            name="namba_ya_usajili"> @if($errors->has('namba_ya_usajili'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('namba_ya_usajili') }}</strong>
                                        </span> @endif
                                    </div>

                                </div>

                                <br>

                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Mahudhurio</label>
                                        <select required name="hudhurio" class="form-control{{ $errors->has('hudhurio') ? ' is-invalid' : '' }}" name="hudhurio">
                                            <option value="" hidden=""></option>
											<option value="Masaa 48">Masaa 48</option>
											<option value="Siku 3-7">Siku 3-7</option>
											<option value="Siku 8-28">Siku 8-28</option>
											<option value="Siku 29-42">Siku 29-42</option>
											<option value="hudhurio la mwezi">Mwezi</option>
                                        </select>@if ($errors->has('hudhurio'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('hudhurio') }}</strong>
                                        </span> @endif
                                    </div>

                                    <div class="col-md-4">
                                        <label>Tarehe ya hudhurio</label>
                                        <input required type="date" name="tarehe" class="form-control{{ $errors->has('tarehe') ? ' is-invalid' : '' }}" name="tarehe">                                        @if($errors->has('tarehe'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('tarehe') }}</strong>
                                        </span> @endif
                                    </div>
                                    <div class="col-md-4">
                                        <label for="tarehe_ya_kurudi">Tarehe ya kurudi</label>
                                        <input required type="date" name="tarehe_ya_kurudi" id="tarehe_ya_kurudi" class="form-control{{ $errors->has('tarehe_ya_kurudi') ? ' is-invalid' : '' }}"
                                            name="tarehe_ya_kurudi"> @if ($errors->has('tarehe_ya_kurudi'))
                                        <span class="invalid-feedback">
											<strong>{{ $errors->first('tarehe_ya_kurudi') }}</strong>
										</span> @endif
                                    </div>
                                </div>

                                <br>

                                <div class="card">
                                    <div class="card-header"><label for="">VIPIMO NA HUDUMA MUHIMU</label></div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label for="uzito">Uzito (Gram)</label>
                                                <input required type="number" name="uzito" id="uzito" min="0" class="form-control{{ $errors->has('uzito') ? ' is-invalid' : '' }}"
                                                    name="uzito"> @if ($errors->has('uzito'))
                                                <span class="invalid-feedback">
                                                    <strong>{{ $errors->first('uzito') }}</strong>
                                                </span> @endif
                                            </div>

                                            <div class="col-md-3">
                                                <label>Joto (&deg;C)</label>
                                                <input required type="number" name="joto" min="0" class="form-control{{ $errors->has('joto') ? ' is-invalid' : '' }}" name="joto">                                                @if($errors->has('joto'))
                                                <span class="invalid-feedback">
                                                    <strong>{{ $errors->first('joto') }}</strong>
                                                </span> @endif
                                            </div>
                                            <div class="col-md-6">
                                                <label for="kmc">Huduma ya kangaroo (KMC)</label>
                                                <select required name="kmc" class="form-control{{ $errors->has('kmc') ? ' is-invalid' : '' }}" name="kmc"> 
                                                    <option value="" hidden=""></option>
                                                    <option value="Ndio">Ndio</option>
                                                    <option value="Hapana">Hapana</option>
                                                </select>@if ($errors->has('kmc'))
                                                <span class="invalid-feedback">
                                                    <strong>{{ $errors->first('kmc') }}</strong>
                                                </span> @endif
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label for="hb">HB (g/dl)</label>
                                                <input required type="number" name="hb" id="hb" class="form-control{{ $errors->has('hb') ? ' is-invalid' : '' }}" name="hb">                                                @if ($errors->has('hb'))
                                                <span class="invalid-feedback">
											<strong>{{ $errors->first('hb') }}</strong>
										</span> @endif
                                            </div>
                                            <div class="col-md-9">
                                                <label for="lishe">Lishe ya mtoto</label>
                                                <select required name="lishe" class="form-control{{ $errors->has('lishe') ? ' is-invalid' : '' }}" name="lishe"> 
                                                    <option value="" hidden=""></option>
                                                    <option value="EBF">Maziwa ya mama pekee (EBF)</option>
                                                    <option value="RF">Maziwa mbadala (RF)</option>
                                                    <option value="MF">Maziwa ya mama na chakula kingine (MF)</option>
                                                </select>@if ($errors->has('lishe'))
                                                <span class="invalid-feedback">
                                                    <strong>{{ $errors->first('lishe') }}</strong>
                                                </span> @endif
                                            </div>
                                        </div>
                                        <br>
                                    </div>
                                </div>

                            </div>
                            <!--end left division-->
                            <div class="col-md-1"></div>

                            <!--right division-->
                            <div class="col-md-5">
                                <div class="card form-group">
                                    <div class="card-header">MAAMBUKIZI KWA MTOTO</div>
                                    <div class="card-body">
                                        <div class="row form-group">
                                            <div class="col-md-6">
                                                <label>Uambukizo ngozini</label>
                                                <select required name="maambukizi_ngozini" class="form-control{{ $errors->has('maambukizi_ngozini') ? ' is-invalid' : '' }}"
                                                    name="maambukizi_ngozini">
                                                    <option value="" hidden=""></option>
                                                    <option value="Ndio">Ndio</option>
                                                    <option value="Hapana">Hapana</option>
                                                </select>@if ($errors->has('maambukizi_ngozini'))
                                                <span class="invalid-feedback">
                                                    <strong>{{ $errors->first('maambukizi_ngozini') }}</strong>
                                                </span> @endif
                                            </div>

                                            <div class="col-md-6">
                                                <label for="uambukizo_mkali">Uambukizo mkali</label>
                                                <select required name="uambukizo_mkali" class="form-control{{ $errors->has('uambukizo_mkali') ? ' is-invalid' : '' }}" name="uambukizo_mkali">
                                                    <option value="" hidden=""></option>
                                                    <option value="Ndio">Ndio</option>
                                                    <option value="Hapana">Hapana</option>
                                                </select>@if ($errors->has('uambukizo_mkali'))
                                                <span class="invalid-feedback">
                                                    <strong>{{ $errors->first('uambukizo_mkali') }}</strong>
                                                </span> @endif
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-md-6">
                                                <label>Uambukizi machoni</label>
                                                <select required name="maambukizi_machoni" class="form-control{{ $errors->has('maambukizi_machoni') ? ' is-invalid' : '' }}"
                                                    name="maambukizi_machoni">
                                                    <option value="" hidden=""></option>
                                                    <option value="Ndio">Ndio</option>
                                                    <option value="Hapana">Hapana</option>
                                                </select>@if ($errors->has('maambukizi_machoni'))
                                                <span class="invalid-feedback">
                                                    <strong>{{ $errors->first('maambukizi_machoni') }}</strong>
                                                </span> @endif
                                            </div>
                                            <div class="col-md-6">
                                                <label>Uambukizi mdomoni</label>
                                                <select required name="maambukizi_mdomoni" class="form-control{{ $errors->has('maambukizi_mdomoni') ? ' is-invalid' : '' }}"
                                                    name="maambukizi_mdomoni"> 
                                                    <option value="" hidden=""></option>
                                                    <option value="Ndio">Ndio</option>
                                                    <option value="Hapana">Hapana</option>
                                                </select>@if ($errors->has('maambukizi_mdomoni'))
                                                <span class="invalid-feedback">
                                                    <strong>{{ $errors->first('maambukizi_mdomoni') }}</strong>
                                                </span> @endif
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-md-6">
                                                <label for="maambukizi_kitovu">Maambukizi kitovuni</label>
                                                <select required name="maambukizi_kitovu" class="form-control{{ $errors->has('maambukizi_kitovu') ? ' is-invalid' : '' }}"
                                                    name="maambukizi_kitovu"> 
                                                    <option value="" hidden=""></option>
                                                    <option value="Ndio">Ndio</option>
                                                    <option value="Hapana">Hapana</option>
                                                </select>@if ($errors->has('maambukizi_kitovu'))
                                                <span class="invalid-feedback">
                                                    <strong>{{ $errors->first('maambukizi_kitovu') }}</strong>
                                                </span> @endif
                                            </div>
                                            <div class="col-md-6">
                                                <label for="matatizo_mengine">Matatizo mengine</label>
                                                <input required type="text" name="matatizo_mengine" id="matatizo_mengine" class="form-control{{ $errors->has('matatizo_mengine') ? ' is-invalid' : '' }}"
                                                    name="matatizo_mengine">                                                @if ($errors->has('matatizo_mengine'))
                                                <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('matatizo_mengine') }}</strong>
                                                    </span> @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card col-md-12">
                                    <div class="card-header">CHANJO</div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Tarehe aliyopata BCG</label>
                                                <input required type="date" name="tarehe_BCG" id="tarehe_BCG" class="form-control{{ $errors->has('tarehe_BCG') ? ' is-invalid' : '' }}"
                                                    name="tarehe_BCG"> @if ($errors->has('tarehe_BCG'))
                                                <span class="invalid-feedback">
											<strong>{{ $errors->first('tarehe_BCG') }}</strong>
										</span> @endif
                                            </div>

                                            <div class="col-md-6">
                                                <label>Tarehe aliyopata OPVO</label>
                                                <input required type="date" name="tarehe_OPVO" id="tarehe_OPVO" class="form-control{{ $errors->has('tarehe_OPVO') ? ' is-invalid' : '' }}"
                                                    name="tarehe_OPVO"> @if ($errors->has('tarehe_OPVO'))
                                                <span class="invalid-feedback">
                                                    <strong>{{ $errors->first('tarehe_OPVO') }}</strong>
                                                </span> @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end right division-->
                        </div>
                        <div class="row">
                            <div class="col-md-5"></div>
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