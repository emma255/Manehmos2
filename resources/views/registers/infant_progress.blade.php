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
                        <div class="row">
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
                                    <div class="col-md-5">
                                        <label>Mahudhurio</label>
                                        <select name="hudhurio" class="form-control">
                                            <option value="" hidden=""></option>
											<option value="Masaa 48">Ndani ya Masaa 48</option>
											<option value="Siku 3-7">Ndani ya Siku 3-7</option>
											<option value="Siku 8-28">Ndani ya Siku 8-28</option>
											<option value="Siku 29-42">Ndani ya Siku 29-42</option>
                                        </select>
                                    </div>

                                    <div class="col-md-4">
                                        <label>Tarehe</label>
                                        <input type="date" class="form-control" name="tarehe">
                                    </div>

                                    <div class="col-md-3">
                                        <label>Joto (&deg;C)</label>
                                        <input type="number" class="form-control" name="joto" min="0">
                                    </div>
                                </div>

                                <br>

                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="uzito">Uzito (Gram)</label>
                                        <input type="number" name="uzito" id="uzito" class="form-control" min="0">
                                    </div>
                                    <div class="col-md-5">
                                        <label>Utando mweupe mdomoni</label>
                                        <select name="utando_mweupe_mdomoni" class="form-control">
                                            <option value="" hidden=""></option>
                                            <option value="Ndio">Ndio</option>
                                            <option value="Hapana">Hapana</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Kuchezacheza mtoto</label>
                                        <select name="kuchezacheza_mtoto" class="form-control">
                                            <option value="" hidden=""></option>
                                            <option value="Kawaida">Kawaida</option>
                                            <option value="Kidogo kuliko Kawaida">Kidogo</option>
                                        </select>
                                    </div>
                                </div>

                                <br>


                                <div class="row">

                                </div>

                                <br>

                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Uchafu machoni</label>
                                        <select name="macho_yanatoa_uchafu" class="form-control">
                                            <option value="" hidden=""></option>
                                            <option value="Ndio">Ndio</option>
                                            <option value="Hapana">Hapana</option>
                                        </select>
                                    </div>

                                    <div class="col-md-4">
                                        <label>Wekundu wa damu</label>
                                        <select name="wekundu_wa_damu" class="form-control">
                                            <option value="" hidden=""></option>
                                            <option value="Ndio">Umepungua</option>
                                            <option value="Hapana">Kawaida</option>
                                        </select>
                                    </div>

                                    <div class="col-md-4">
                                        <label>Vipele vyenye usaha</label>
                                        <select name="ngozi_ina_vipele_vyenye_usaha" class="form-control">
                                            <option value="" hidden=""></option>
                                            <option value="Ndio">Ndio</option>
                                            <option value="Hapana">Hapana</option>
                                        </select>
                                    </div>
                                </div>

                                <br>

                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Ngozi imebadilika kuwa njano</label>
                                        <select name="ngozi_njano" class="form-control">
                                            <option value="" hidden=""></option>
                                            <option value="Ndio">Ndio</option>
                                            <option value="Hapana">Hapana</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="matatizo_mengine">Matatizo mengine</label>
                                        <textarea name="matatizo_mengine" id="matatizo_mengine" rows="1" class="form-control"></textarea>
                                    </div>
                                </div>

                                <br>

                            </div>
                            <!--end left division-->
                            <div class="col-md-1"></div>

                            <!--right division-->
                            <div class="col-md-5">
                                <div class="col-md-12 row">
                                    <div class="col-md-3">
                                        <label for="hb">HB (g/dl)</label>
                                        <input type="number" name="hb" id="hb" class="form-control">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="lishe">Lishe</label>
                                        <select name="lishe" class="form-control">
                                            <option value="" hidden=""></option>
                                            <option value="EBF">EBF</option>
                                            <option value="RF">RF</option>
                                            <option value="MF">MF</option>
                                        </select>
                                    </div>
                                    <div class="col-md-5">
                                        <label for="tarehe_ya_kurudi">Tarehe ya kurudi</label>
                                        <input type="date" name="tarehe_ya_kurudi" id="tarehe_ya_kurudi" class="form-control">
                                    </div>
                                </div>
                                <br>
                                <div class="card col-md-12">
                                    <div class="card-header">KITOVU</div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6"><label>Kimepona</label>
                                                <select name="kitovu_kimepona" class="form-control">
                                                    <option value="" hidden=""></option>
                                                    <option value="Ndio">Ndio</option>
                                                    <option value="Hapana">Hapana</option>
                                                </select>
                                            </div>

                                            <div class="col-md-6"><label>Chekundu</label>
                                                <select name="kitovu_chekundu" class="form-control">
                                                    <option value="" hidden=""></option>
                                                    <option value="Ndio">Ndio</option>
                                                    <option value="Hapana">Hapana</option>
                                                </select>
                                            </div>
                                            <div class="col-md-5">

                                            </div>
                                        </div>

                                        <br>

                                        <div class="row">
                                            <div class="col-md-6"><label>Kinatoa harufu</label>
                                                <select name="kitovu_kinatoa_harufu" class="form-control">
                                                    <option value="" hidden=""></option>
                                                    <option value="Ndio">Ndio</option>
                                                    <option value="Hapana">Hapana</option>
                                                </select>
                                            </div>

                                            <div class="col-md-6"><label>Kinatoa usaha</label>
                                                <select name="kitovu_kinatoa_usaha" class="form-control">
                                                    <option value="" hidden=""></option>
                                                    <option value="Ndio">Ndio</option>
                                                    <option value="Hapana">Hapana</option>
                                                </select>
                                            </div>
                                            <div class="col-md-5">

                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <br>

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

                        </div>
                    </div>
                    <!--end right division-->

            </div>

            <div class="row">
                <div class="col-md-5"></div>
                <div class="col-md-2"><input type="Submit" name="submit" class="btn btn-primary form-control" value="Hifadhi"></div>
                <div class="col-md-5"></div>
            </div>
            </form>
            <br>

        </div>


    </div>

</div>

</div
@endsection