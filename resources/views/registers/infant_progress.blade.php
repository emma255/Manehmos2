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
                                        <input type="text" name="jina_la_mtoto" id="jina_la_mtoto" class="form-control">
                                    </div>

                                    <div class="col-md-5">
                                        <label>Namba ya mtoto</label>
                                        <input type="text" class="form-control" name="namba_ya_usajili">
                                    </div>

                                </div>

                                <br>

                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Mahudhurio</label>
                                        <select name="hudhurio" class="form-control">
                                            <option value="" hidden=""></option>
											<option value="Masaa 48">Masaa 48</option>
											<option value="Siku 3-7">Siku 3-7</option>
											<option value="Siku 8-28">Siku 8-28</option>
											<option value="Siku 29-42">Siku 29-42</option>
											<option value="hudhurio la mwezi">Mwezi</option>
                                        </select>
                                    </div>

                                    <div class="col-md-4">
                                        <label>Tarehe ya hudhurio</label>
                                        <input type="date" class="form-control" name="tarehe">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="tarehe_ya_kurudi">Tarehe ya kurudi</label>
                                        <input type="date" name="tarehe_ya_kurudi" id="tarehe_ya_kurudi" class="form-control">
                                    </div>
                                </div>

                                <br>

                                <div class="card">
                                    <div class="card-header"><label for="">VIPIMO NA HUDUMA MUHIMU</label></div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label for="uzito">Uzito (Gram)</label>
                                                <input type="number" name="uzito" id="uzito" class="form-control" min="0">
                                            </div>
                                            <div class="col-md-3">
                                                <label>Joto (&deg;C)</label>
                                                <input type="number" class="form-control" name="joto" min="0">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="kmc">Huduma ya kangaroo (KMC)</label>
                                                <select name="kmc" class="form-control">
                                                    <option value="" hidden=""></option>
                                                    <option value="Ndio">Ndio</option>
                                                    <option value="Hapana">Hapana</option>
                                                </select>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label for="hb">HB (g/dl)</label>
                                                <input type="number" name="hb" id="hb" class="form-control">
                                            </div>
                                            <div class="col-md-9">
                                                <label for="lishe">Lishe ya mtoto</label>
                                                <select name="lishe" class="form-control">
                                                    <option value="" hidden=""></option>
                                                    <option value="EBF">Maziwa ya mama pekee (EBF)</option>
                                                    <option value="RF">Maziwa mbadala (RF)</option>
                                                    <option value="MF">Maziwa ya mama na chakula kingine (MF)</option>
                                                </select>
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
                                                <select name="maambukizi_ngozini" class="form-control">
                                                    <option value="" hidden=""></option>
                                                    <option value="Ndio">Ndio</option>
                                                    <option value="Hapana">Hapana</option>
                                                </select>
                                            </div>

                                            <div class="col-md-6">
                                                <label for="uambukizo_mkali">Uambukizo mkali</label>
                                                <select name="uambukizo_mkali" class="form-control">
                                                    <option value="" hidden=""></option>
                                                    <option value="Ndio">Ndio</option>
                                                    <option value="Hapana">Hapana</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-md-6">
                                                <label>Uambukizi machoni</label>
                                                <select name="maambukizi_machoni" class="form-control">
                                                    <option value="" hidden=""></option>
                                                    <option value="Ndio">Ndio</option>
                                                    <option value="Hapana">Hapana</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <label>Uambukizi mdomoni</label>
                                                <select name="maambukizi_mdomoni" class="form-control">
                                                    <option value="" hidden=""></option>
                                                    <option value="Ndio">Ndio</option>
                                                    <option value="Hapana">Hapana</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-md-6">
                                                <label for="maambukizi_kitovu">Maambukizi kitovuni</label>
                                                <select name="maambukizi_kitovu" class="form-control">
                                                    <option value="" hidden=""></option>
                                                    <option value="Ndio">Ndio</option>
                                                    <option value="Hapana">Hapana</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="matatizo_mengine">Matatizo mengine</label>
                                                <input type="text" name="matatizo_mengine" id="matatizo_mengine" class="form-control">
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
                                                <input type="date" name="tarehe_BCG" id="tarehe_BCG" class="form-control">
                                            </div>

                                            <div class="col-md-6">
                                                <label>Tarehe aliyopata OPVO</label>
                                                <input type="date" name="tarehe_OPVO" id="tarehe_OPVO" class="form-control">
                                            </div>
                                            <div class="col-md-5">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end right division-->
                        </div>
                        <div class="row">
                            <div class="col-md-5"></div>
                            <div class="col-md-2"><input type="Submit" name="submit" class="btn btn-primary form-control" value="Hifadhi"></div>
                            <div class="col-md-5"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection