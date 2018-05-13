@extends('layouts.main') 
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md">
			<div class="card col-md-12">
				<div class="card-header">
					<p>Taarifa Binafsi za mama mjamzito</p>
				</div>
				<div class="card-body">
					<form action="{{ ('store') }}" method="post">

						{{csrf_field()}}

						<div class="row form-group">

							<!-- start left division -->
							<div class="col-md-5">
								<div class="row">
									<div class="col-md-6">
										<label>Tarehe</label>
										<input type="date" name="Tarehe_ya_kuandikishwa" class="form-control">
									</div>

									<div class="col-md-6">
										<label>Namba ya usajili</label>
										<input type="number" name="namba_ya_usajili" class="form-control" placeholder="Namba" min="1">
									</div>
								</div>
								<br>
								<div class="row">
									<div class="col-md-7">
										<label>Jina la mama mjamzito</label>
										<input type="text" class="form-control" placeholder="Andika jina kamili" name="jina_la_mama">
									</div>

									<div class="col-md-5">
										<label>tarehe ya kuzaliwa</label>
										<input type="date" class="form-control" placeholder="Andika jina la kwanza" name="tarehe_ya_kuzaliwa">
									</div>
								</div>

								<br>
								<div class="row">
									<div class="col-md-6">
										<label>Shinikizo la damu (BP)</label>
										<select name="BP" class="form-control">
								<option value="" hidden=""></option>
								<option value="Ndio">Ndio</option>
								<option value="Hapana">Hapana</option>
							</select>
									</div>

									<div class="col-md-6">
										<label>Kujifungua kwa CS</label>
										<select name="kujifungua_kwa_cs" class="form-control">
								<option value="" hidden=""></option>
								<option value="Ndio">Ndio</option>
								<option value="Hapana">Hapana</option>
							</select>
									</div>
								</div>

								<br>

								<div class="row">
									<div class="col-md-5">
										<label>Urefu wa mama (CM)</label>
										<input type="number" name="urefu" class="form-control" placeholder="Urefu" min="1">
									</div>
									<div class="col-md-7">
										<labe>Jina la mume / mwenzi</label>
											<input type="text" name="jina_la_mume" class="form-control" placeholder="Jina la mume au mwenzi">
									</div>
								</div>

								<div class="row"></div>

							</div>

							<!-- end right division -->

							<!-- <div class="col-md-1"></div> -->

							<!-- start right division -->

							<div class="col-md-7">
								<div class="row">
									<div class="col-md-6">
										<label>Kijiji / Mtaa / Kitongoji</label>
										<input type="text" class="form-control" placeholder="Andika mahali anapoishi" name="mtaa">
									</div>

									<div class="col-md-6">
										<label>JIna la mwenyekiti</label>
										<input type="text" class="form-control" placeholder="mwenyekiti wa mahali" name="jina_la_mwenyekiti">
									</div>
								</div>

								<br>

								<div class="col-md-12 card">
									<div class="card-header">
										<p>Taarifa ya Mimba Zilizopita</p>
									</div>

									<div class="card-body">

										<div class="row">
											<div class="col-sm-3"><label>Mimba ya ngapi</label></div>

											<div class="col-sm-3"><input type="number" min="1" class="form-control" name="mimba_ngapi" placeholder=""></div>

											<div class="col-md-3"><label>Amezaa mara ngapi</label></div>

											<div class="col-md-3"><input type="number" min="0" class="form-control" name="amezaa_mara_ngapi" placeholder=""></div>
										</div>

										<br>

										<div class="row">
											<div class="col-md-3"><label>Watoto walio hai</label></div>

											<div class="col-md-3"><input type="number" min="0" class="form-control" name="watoto_walio_hai" placeholder=""></div>

											<div class="col-md-3"><label>Mimba zilizoharibika</label></div>

											<div class="col-md-3"><input type="number" min="0" class="form-control" name="mimba_zilizoharibika" placeholder=""></div>
										</div>

										<br>

										<div class="row">
											<div class="col-md-3">Kifo cha mtoto katika wiki moja</div>
											<div class="col-md-3">
												<select name="kifo_cha_mtoto_wiki_1" class="form-control">
										<option value="" hidden=""></option>
										<option value="Ndio">Ndio</option>
										<option value="Hapana">Hapana</option>
									</select>
											</div>

											<div class="col-md-3">Umri wa mtoto wa mwisho</div>
											<div class="col-md-3"><input type="number" min="0" class="form-control" placeholder="Miezi" name="umri_mtoto_wa_mwisho"> </div>
										</div>
									</div>
								</div>
								<br>

							</div>

							<div class="col-md-5"></div>
							<div class="col-md-2"><input type="submit" class="form-control btn-primary " name="save_mat"> </div>
							<div class="col-md-5"></div>

						</div>

					</form>
				</div>

			</div>
		</div>

	</div>

</div
@endsection
 <!-- <div class="row">
<div class="col-md-8"><label>Mimba ya kwanza</label></div>
<div class="col-md-4">
	<select name="card" class="form-control">
	<option value="" hidden=""></option>
	<option value="chni ya miaka 20">&lt;miaka 20</option>
	<option value="zaidi ya miaka 35">&gt;miaka 35</option>
</select>
</div> -->