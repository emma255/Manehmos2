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
					<form action="/maternal/store" method="post">

						{{csrf_field()}}

						<div class="row form-group">

							<!-- start left division -->
							<div class="col-md-5">
								<div class="row">
									<div class="col-md-6">
										<label>Tarehe ya kuandikishwa</label>
										<input required type="date" name="tarehe_ya_kuandikishwa" class="form-control{{ $errors->has('tarehe_ya_kuandikishwa') ? ' is-invalid' : '' }}"
										 name="tarehe_ya_kuandikishwa"> @if ($errors->has('tarehe_ya_kuandikishwa'))
										<span class="invalid-feedback">
											<strong>{{ $errors->first('tarehe_ya_kuandikishwa') }}</strong>
										</span> @endif
									</div>

									<div class="col-md-6">
										<label for="tarehe_ya_kuzaliwa">tarehe ya kuzaliwa</label>
										<input required type="date" name="tarehe_ya_kuzaliwa" class="form-control{{ $errors->has('tarehe_ya_kuzaliwa') ? ' is-invalid' : '' }}"
										 name="tarehe_ya_kuzaliwa"> @if ($errors->has('tarehe_ya_kuzaliwa'))
										<span class="invalid-feedback">
											<strong>{{ $errors->first('tarehe_ya_kuzaliwa') }}</strong>
										</span> @endif
									</div>
								</div>
								<br>
								<div class="row">
									<div class="col-md-7">
										<label>Jina la mama mjamzito</label>
										<input required type="text" placeholder="Andika jina kamili" name="jina_la_mama" class="form-control{{ $errors->has('jina_la_mama') ? ' is-invalid' : '' }}"
										 name="jina_la_mama"> @if ($errors->has('jina_la_mama'))
										<span class="invalid-feedback">
											<strong>{{ $errors->first('jina_la_mama') }}</strong>
										</span> @endif
									</div>

									<div class="col-md-5">
										<label>Namba ya usajili</label>
										<input required type="number" name="namba_ya_usajili" placeholder="Namba" min="1" class="form-control{{ $errors->has('namba_ya_usajili') ? ' is-invalid' : '' }}"
										 name="namba_ya_usajili"> @if ($errors->has('namba_ya_usajili'))
										<span class="invalid-feedback">
											<strong>{{ $errors->first('namba_ya_usajili') }}</strong>
										</span> @endif
									</div>
								</div>

								<br>
								<div class="row">
									<div class="col-md-6">
										<label for="BP">Shinikizo la damu (BP)</label>
										<select required name="BP" class="form-control{{ $errors->has('BP') ? ' is-invalid' : '' }}" name="BP">
								<option value="" hidden=""></option>
								<option value="Ndio">Ndio</option>
								<option value="Hapana">Hapana</option>
							</select> @if ($errors->has('BP'))
										<span class="invalid-feedback">
											<strong>{{ $errors->first('BP') }}</strong>
										</span> @endif
									</div>

									<div class="col-md-6">
										<label>Tarehe ya LNMP</label>
										<input type="date" required name="lnmp" class="form-control{{ $errors->has('lnmp') ? ' is-invalid' : '' }}" name="lnmp">@if ($errors->has('lnmp'))
										<span class="invalid-feedback">
											<strong>{{ $errors->first('lnmp') }}</strong>
										</span> @endif
									</div>
								</div>

								<br>

								<div class="row">
									<div class="col-md-5">
										<label>Urefu wa mama (CM)</label>
										<input required type="number" name="urefu" placeholder="Urefu" min="1" class="form-control{{ $errors->has('urefu') ? ' is-invalid' : '' }}"
										 name="urefu"> @if ($errors->has('urefu'))
										<span class="invalid-feedback">
											<strong>{{ $errors->first('urefu') }}</strong>
										</span> @endif
									</div>
									<div class="col-md-7">
										<labe>Jina la mume / mwenzi</label>
											<input required type="text" name="jina_la_mume" placeholder="Jina la mume au mwenzi" class="form-control{{ $errors->has('jina_la_mume') ? ' is-invalid' : '' }}"
											 name="jina_la_mume"> @if ($errors->has('jina_la_mume'))
											<span class="invalid-feedback">
												<strong>{{ $errors->first('jina_la_mume') }}</strong>
											</span> @endif
									</div>
								</div>
							</div>

							<!-- end right division -->

							<!-- start right division -->

							<div class="col-md-7">
								<div class="row">
									<div class="col-md-6">
										<label>Kijiji / Mtaa / Kitongoji</label>
										<input required type="text" placeholder="Andika mahali anapoishi" name="mtaa" class="form-control{{ $errors->has('mtaa') ? ' is-invalid' : '' }}"
										 name="mtaa"> @if ($errors->has('mtaa'))
										<span class="invalid-feedback">
											<strong>{{ $errors->first('mtaa') }}</strong>
										</span> @endif
									</div>

									<div class="col-md-6">
										<label>JIna la mwenyekiti</label>
										<input required type="text" placeholder="mwenyekiti wa mahali" name="jina_la_mwenyekiti" class="form-control{{ $errors->has('jina_la_mwenyekiti') ? ' is-invalid' : '' }}"
										 name="jina_la_mwenyekiti"> @if ($errors->has('jina_la_mwenyekiti'))
										<span class="invalid-feedback">
											<strong>{{ $errors->first('jina_la_mwenyekiti') }}</strong>
										</span> @endif
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

											<div class="col-sm-3"><input required type="number" min="1" name="mimba_ngapi" class="form-control{{ $errors->has('mimba_ngapi') ? ' is-invalid' : '' }}"
												 name="mimba_ngapi"> @if ($errors->has('mimba_ngapi'))
												<span class="invalid-feedback">
													<strong>{{ $errors->first('mimba_ngapi') }}</strong>
												</span> @endif
											</div>

											<div class="col-md-3"><label>Amezaa mara ngapi</label></div>

											<div class="col-md-3"><input required type="number" min="0" name="amezaa_mara_ngapi" class="form-control{{ $errors->has('amezaa_mara_ngapi') ? ' is-invalid' : '' }}"
												 name="amezaa_mara_ngapi"> @if ($errors->has('amezaa_mara_ngapi'))
												<span class="invalid-feedback">
													<strong>{{ $errors->first('amezaa_mara_ngapi') }}</strong>
												</span> @endif
											</div>
										</div>

										<br>

										<div class="row">
											<div class="col-md-3"><label>Watoto walio hai</label></div>

											<div class="col-md-3"><input required type="number" min="0" name="watoto_walio_hai" class="form-control{{ $errors->has('watoto_walio_hai') ? ' is-invalid' : '' }}"
												 name="watoto_walio_hai"> @if ($errors->has('watoto_walio_hai'))
												<span class="invalid-feedback">
													<strong>{{ $errors->first('watoto_walio_hai') }}</strong>
												</span> @endif
											</div>

											<div class="col-md-3"><label>Mimba zilizoharibika</label></div>

											<div class="col-md-3"><input required type="number" min="0" name="mimba_zilizoharibika" onkeydown="calculateDifference()" class="form-control{{ $errors->has('mimba_zilizoharibika') ? ' is-invalid' : '' }}"
												 name="mimba_zilizoharibika"> @if ($errors->has('mimba_zilizoharibika'))
												<span class="invalid-feedback">
													<strong>{{ $errors->first('mimba_zilizoharibika') }}</strong>
												</span> @endif</div>
										</div>

										<br>

										<div class="row">
											<div class="col-md-3">Kifo cha mtoto katika wiki moja</div>
											<div class="col-md-3">
												<select required name="kifo_cha_mtoto_wiki_1" class="form-control{{ $errors->has('kifo_cha_mtoto_wiki_1') ? ' is-invalid' : '' }}"
												 name="kifo_cha_mtoto_wiki_1">
												<option value="" hidden=""></option>
												<option value="Ndio">Ndio</option>
												<option value="Hapana">Hapana</option>
												</select>@if ($errors->has('kifo_cha_mtoto_wiki_1'))
												<span class="invalid-feedback">
													<strong>{{ $errors->first('kifo_cha_mtoto_wiki_1') }}</strong>
												</span> @endif
											</div>

											<div class="col-md-3">Umri wa mtoto wa mwisho</div>
											<div class="col-md-3"><input required type="number" min="0" placeholder="Miezi" name="umri_mtoto_wa_mwisho" class="form-control{{ $errors->has('umri_mtoto_wa_mwisho') ? ' is-invalid' : '' }}"
												 name="umri_mtoto_wa_mwisho"> @if ($errors->has('umri_mtoto_wa_mwisho'))
												<span class="invalid-feedback">
												<strong>{{ $errors->first('umri_mtoto_wa_mwisho') }}</strong>
											</span> @endif
											</div>
										</div>
									</div>
								</div>
								<br>

							</div>

							<div class="col-md-5"></div>
							<div class="col-md-2"><input required type="submit" class="form-control btn-primary " name="save_mat" value="hifadhi"> </div>
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
	<select required name="card" class="form-control">
	<option value="" hidden=""></option>
	<option value="chni ya miaka 20">&lt;miaka 20</option>
	<option value="zaidi ya miaka 35">&gt;miaka 35</option>
</select>
</div> -->