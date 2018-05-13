@extends('layouts.main') 
@section('content')
<div class="container">
    <div class="row">
        <!-- 	<div class="col-md-2"></div>
 -->
        <div class="col-md card">

            <div class="card-header">
                <p>Taarifa Binafsi za mtuha namba 13 wakati wa kuanza postnatal</p>
            </div>

            <div class="card-body">

                <form action="{{ ('postnatal/store') }}" method="post">
                    {{csrf_field()}}

                    <div class="form-group">
                        <!--first row-->
                        <div class="row">
                            <!--left division-->
                            <div class="col-md-6">

                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Tarehe ya kuandikishwa postnatal</label>
                                        <input type="date" class="form-control" name="tarehe_ya_kuandikishwa">
                                    </div>

                                    <div class="col-md-6">
                                        <label>Namba ya kadi RCH-4</label>
                                        <input type="text" class="form-control" name="namba_ya_kadi_RCH4">
                                    </div>
                                </div>

                                <br>

                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Jina la mama</label>
                                        <input type="text" class="form-control" name="jina_la_mama">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Kitongoji au Mtaa</label>
                                        <input type="text" class="form-control" name="mtaa">
                                    </div>

                                </div>

                                <br>


                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Tarehe ya kuzaliwa</label>
                                        <input type="date" name="tarehe_ya_kuzaliwa" class="form-control">
                                    </div>

                                    <div class="col-md-6">
                                        <label>Amejifungua mara ngapi (Para)</label>
                                        <input type="number" name="amejifungua_mara_ngapi" class="form-control" min="0">
                                    </div>
                                </div>

                                <br>

                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Tarehe ya kujifungua</label>
                                        <input type="date" name="tarehe_ya_kujifugua" class="form-control">
                                    </div>

                                    <div class="col-md-6">
                                        <label>Kada ya aliyemzalisha</label>
                                        <input type="text" name="kada_ya_aliyemzalisha" class="form-control">
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
                                        <select name="mahali_alipojifungulia" class="form-control">
                                                <option value="" hidden=""></option>
                                                <option value="Nyumbani">Nyumbani</option>
                                                <option value="Hospitali">Hospitali</option>
                                                <option value="Njiani">Njiani</option>
                                            </select>
                                    </div>


                                    <div class="col-md-6">
                                        <label>Hali ya mama</label>
                                        <select name="hali_ya_mama" class="form-control">
                                                <option value="" hidden=""></option>
                                                <option value="Hai">Hai</option>
                                                <option value="Amefariki">Amefariki</option>
                                            </select>
                                    </div>

                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-5">
                                        <label>Hali ya mtoto</label>
                                        <select name="hali_ya_mtoto" class="form-control">
                                                <option value="" hidden=""></option>
                                                <option value="Hai">Hai</option>
                                                <option value="Amefariki">Amefariki</option>
                                            </select>
                                    </div>
                                    <div class="col-md-7">
                                        <label>Unyonyeshaji ndani ya saa moja</label>
                                        <select name="unyonyeshaji_ndani_ya_saa_1" class="form-control">
                                            <option value="" hidden=""></option>
                                            <option value="Ndio">Ndio</option>
                                            <option value="Hapana">Hapana</option>
                                        </select>
                                    </div>
                                </div>

                                <br>

                                <div class="card col-md-12">
                                    <div class="card-header">PMTCT</div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-7"><label>Hali ya VVU kama inavyoonekana kwenye kadi</label></div>
                                            <div class="col-md-5">
                                                <select name="Hali_ya_VVU_kwenye_kadi" class="form-control">
                                                <option value="" hidden=""></option>
                                                <option value="Positive">Positive</option>
                                                <option value="Negative">Negative</option>
                                                <option value="Unknown">Unknown</option>
                                            </select>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-7"><label>Kipimo cha VVU wakati wa postnatal</label></div>
                                            <div class="col-md-5">
                                                <select name="kipimo_vvu_wakati_wa_postnatal" class="form-control">
                                                <option value="" hidden=""></option>
                                                <option value="Positive">Positive</option>
                                                <option value="Negative">Negative</option>
                                            </select>
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