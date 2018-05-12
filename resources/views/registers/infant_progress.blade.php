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

                <form action="{{ ('store') }}" method="post">
                    {{csrf_field()}}

                    <div class="form-group">
                        <!--first row-->
                        <div class="row">
                            <!--left division-->
                            <div class="col-md-6">

                                <div class="row">
                                    <div class="col-md-7">
                                        <label>Jina la mtoto</label>
                                        <input type="text" name="infant_name" id="infant_name" class="form-control">
                                    </div>

                                    <div class="col-md-5">
                                        <label>Namba ya mtoto</label>
                                        <input type="text" class="form-control" name="inftant_regno">
                                    </div>

                                </div>

                                <br>

                                <div class="row">
                                    <div class="col-md-7">
                                        <label>Mahudhurio</label>
                                        <select name="infant_attendance" class="form-control">
                                            <option value="" hidden=""></option>
                                            <option value="Hudhurio la kwanza">Hudhurio 1 (Ndani ya masaa 24)</option>
                                            <option value="Hudhurio la pili">Hudhurio 2 (Ndani ya siku 7)</option>
                                            <option value="Hudhurio la tatu">Hudhurio 3 (Ndani ya siku 28)</option>
                                            <option value="Hudhurio la nne">Hudhurio 4 (Ndani ya siku 42)</option>
                                        </select>
                                    </div>

                                    <div class="col-md-5">
                                        <label>Tarehe</label>
                                        <input type="date" class="form-control" name="intant_attend_date">
                                    </div>

                                </div>

                                <br>

                                <div class="row">
                                    <div class="col-md-3">
                                        <label>Joto (&deg;C)</label>
                                        <input type="number" class="form-control" name="mother_name" min="0">
                                    </div>

                                    <div class="col-md-4">
                                        <label for="infant_weight">Uzito (Gram)</label>
                                        <input type="number" name="infant_weight" id="infant_weight" class="form-control" min="0">
                                    </div>

                                    <div class="col-md-5">
                                        <label>Wekundu wa damu</label>
                                        <select name="infant_HB" class="form-control">
                                            <option value="" hidden=""></option>
                                            <option value="Ndio">Wekundu umepungua</option>
                                            <option value="Hapana">Kawaida</option>
                                        </select>
                                    </div>

                                </div>

                                <br>


                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Lishe ya mtoto</label>
                                        <select name="infant_nutrition" class="form-control">
                                            <option value="" hidden=""></option>
                                            <option value="EBF">Maziwa ya mama pekee (EBF)</option>
                                            <option value="RF">Maziwa mbadala (RF)</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6">
                                        <label>Kuchezacheza kwa mtoto</label>
                                        <select name="kuchezacheza_mtoto" class="form-control">
                                            <option value="" hidden=""></option>
                                            <option value="Kawaida">Kawaida</option>
                                            <option value="Kidogo kuliko Kawaida">Kidogo kuliko Kawaida</option>
                                        </select>
                                    </div>

                                </div>

                                <br>

                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Macho yanatoa uchafu</label>
                                        <select name="uchafu_machoni" class="form-control">
                                            <option value="" hidden=""></option>
                                            <option value="Ndio">Ndio</option>
                                            <option value="Hapana">Hapana</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6">
                                        <label>Mdomo una utando mweupe</label>
                                        <select name="utando_mdomoni" class="form-control">
                                            <option value="" hidden=""></option>
                                            <option value="Ndio">Ndio</option>
                                            <option value="Hapana">Hapana</option>
                                        </select>
                                    </div>
                                </div>

                                <br>

                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Ngozi ina vipele vyenye usaha</label>
                                        <select name="ngozi_vipele" class="form-control">
                                            <option value="" hidden=""></option>
                                            <option value="Ndio">Ndio</option>
                                            <option value="Hapana">Hapana</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6">
                                        <label>Ngozi imebadilika kuwa njano</label>
                                        <select name="ngozi_imebadilika" class="form-control">
                                            <option value="" hidden=""></option>
                                            <option value="Ndio">Ndio</option>
                                            <option value="Hapana">Hapana</option>
                                        </select>
                                    </div>
                                </div>

                                <br>

                            </div>
                            <!--end left division-->
                            <div class="col-md-1"></div>

                            <!--right division-->
                            <div class="col-md-5">

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
                                                <select name="harufu_kitovu" class="form-control">
                                                    <option value="" hidden=""></option>
                                                    <option value="Ndio">Ndio</option>
                                                    <option value="Hapana">Hapana</option>
                                                </select>
                                            </div>

                                            <div class="col-md-6"><label>Kinatoa usaha</label>
                                                <select name="usaha_kitovu" class="form-control">
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
                                                <input type="date" name="bcg_date" id="bcg_date" class="form-control">
                                            </div>

                                            <div class="col-md-6">
                                                <label>Tarehe aliyopata OPVO</label>
                                                <input type="date" name="opvo_date" id="opvo_date" class="form-control">
                                            </div>
                                            <div class="col-md-5">

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <br>

                                <div class="col-md-12 row">
                                    <div class="col-md-6">
                                        <label for="return_date">Tarehe ya kurudi</label>
                                        <input type="date" name="return_date" id="return_date" class="form-control">
                                    </div>

                                    <div class="col-md-6">
                                        <label for="other_problems">Matatizo mengine</label>
                                        <textarea name="other_problems" id="other_problems" rows="5" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!--end right division-->

            </div>

            <div class="row">
                <div class="col-md-5"></div>
                <div class="col-md-2"><input type="Submit" name="submit" class="btn btn-primary form-control"></div>
                <div class="col-md-5"></div>
            </div>
            </form>
            <br>

        </div>


    </div>

</div>

</div
@endsection