@extends('layouts.main') 
@section('content')

<div class="container">
	<div class="row">
		<div class="col-md card">

			<div class="card-header">
				<p>Taarifa Binafsi za mtuha namba 7</p>
			</div>

			<div class="card-body">

				<form action="/register7/store" method="post">
					{{csrf_field()}}

					<div class="form-group">

						<div class="row col-md-12">
							<div class="col-md-2"></div>
							<div class="col-md-4">
								<div class="row col-md-12 form-group">
									<div class="col-md-6">
										<label>Namba ya mtoto</label>
									</div>
									<div class="col-md-6">
										<input type="text" name="namba_ya_usajili" class="form-control{{ $errors->has('namba_ya_usajili') ? ' is-invalid' : '' }}"
										 name="namba_ya_usajili"> @if ($errors->has('namba_ya_usajili'))
										<span class="invalid-feedback">
											<strong>{{ $errors->first('namba_ya_usajili') }}</strong>
										</span> @endif
									</div>
								</div>
								<div class="row card col-md-12 form-group">
									<div class="card-header">Vitamin A</div>
									<div class="card-body">
										<div class="row">
											<div class="col-md-6">
												<label>Umri wa mtoto</label>
												<select name="vitamin_A_umri" class="form-control{{ $errors->has('vitamin_A_umri') ? ' is-invalid' : '' }}" name="vitamin_A_umri">
													<option value="" hidden=""></option>
													<option value="Miezi 9">Miezi 9</option>
													<option value="Miezi 15">Miezi 15</option>
													<option value="Miezi 21">Miezi 21</option>
													<option value="Miezi 27">Miezi 27</option>
													<option value="Miezi 33">Miezi 33</option>
													<option value="Miezi 39">Miezi 39</option>
													<option value="Miezi 45">Miezi 45</option>
													<option value="Miezi 51">Miezi 51</option>
													<option value="Miezi 57">Miezi 57</option>
												</select>@if ($errors->has('vitamin_A_umri'))
												<span class="invalid-feedback">
													<strong>{{ $errors->first('vitamin_A_umri') }}</strong>
												</span> @endif

											</div>
											<div class="col-md-6">
												<label for="amepata_vitaminA">Amepata</label>
												<select name="amepata_vitamin_A" id="amepata_vitaminA" class="form-control{{ $errors->has('amepata_vitamin_A') ? ' is-invalid' : '' }}"
												 name="amepata_vitamin_A"> 
													<option value="" hidden=""></option>
													<option value="ndio">Ndio</option>
													<option value="hapana">Hapana</option>
												</select>@if ($errors->has('amepata_vitamin_A'))
												<span class="invalid-feedback">
													<strong>{{ $errors->first('amepata_vitamin_A') }}</strong>
												</span> @endif
											</div>
										</div>
									</div>
								</div>

								<div class="row card col-md-12 form-group">
									<div class="card-header">Mebendazole / Albendazole
										<small>Kila miezi 6</small>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-md-6">
												<label for="child_age">Umri wa mtoto</label>
												<select name="mebendazole_albendazole_umri" id="age_mebendazole" class="form-control{{ $errors->has('mebendazole_albendazole_umri') ? ' is-invalid' : '' }}"
												 name="mebendazole_albendazole_umri"> 
													<option value="" hidden=""></option>
													<option value="Miezi 15">Miezi 15</option>
													<option value="Miezi 21">Miezi 21</option>
													<option value="Miezi 27">Miezi 27</option>
													<option value="Miezi 33">Miezi 33</option>
													<option value="Miezi 39">Miezi 39</option>
													<option value="Miezi 45">Miezi 45</option>
													<option value="Miezi 51">Miezi 51</option>
													<option value="Miezi 57">Miezi 57</option>
												</select>@if ($errors->has('mebendazole_albendazole_umri'))
												<span class="invalid-feedback">
													<strong>{{ $errors->first('mebendazole_albendazole_umri') }}</strong>
												</span> @endif
											</div>
											<div class="col-md-6">
												<label for="amepata_mebendazole">Amepata dawa</label>
												<select name="amepata_mebendazole_albendazole" id="amepata_mebendazole" class="form-control{{ $errors->has('amepata_mebendazole_albendazole') ? ' is-invalid' : '' }}"
												 name="amepata_mebendazole_albendazole"> 
													<option value="" hidden=""></option>
													<option value="Ndio">Ndio</option>
													<option value="Hapana">Hapana</option>
												</select>@if ($errors->has('amepata_mebendazole_albendazole'))
												<span class="invalid-feedback">
													<strong>{{ $errors->first('amepata_mebendazole_albendazole') }}</strong>
												</span> @endif
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<label>Chanjo ya Surua</label>
										<select name="Surua" class="form-control{{ $errors->has('Surua') ? ' is-invalid' : '' }}" name="Surua"> 
											<option value="" hidden=""></option>
											<option value="Surua 1">Surua 1</option>
											<option value="Surua 2">Surua 2</option>
										</select>@if ($errors->has('Surua'))
										<span class="invalid-feedback">
											<strong>{{ $errors->first('Surua') }}</strong>
										</span> @endif
									</div>

									<div class="col-md-6">
										<label for="Surua_date">Tarehe ya chanjo</label>
										<input type="date" name="Surua_tarehe" id="Surua_date" class="form-control{{ $errors->has('Surua_tarehe') ? ' is-invalid' : '' }}"
										 name="Surua_tarehe"> @if ($errors->has('Surua_tarehe'))
										<span class="invalid-feedback">
											<strong>{{ $errors->first('Surua_tarehe') }}</strong>
										</span> @endif
									</div>
								</div>
							</div>

							<div class="col-md-6">
								<div class="col-md-12">
									<div class="card form-group">
										<div class="row col-md-12 card-body">
											<div class="col-md-6">
												<label>Chanjo ya PENTA</label>
												<select name="PENTA" class="form-control{{ $errors->has('PENTA') ? ' is-invalid' : '' }}" name="PENTA"> 
													<option value="" hidden=""></option>
													<option value="PENTA 1">PENTA 1</option>
													<option value="PENTA 2">PENTA 2</option>
													<option value="PENTA 3">PENTA 3</option>
												</select>@if ($errors->has('PENTA'))
												<span class="invalid-feedback">
													<strong>{{ $errors->first('PENTA') }}</strong>
												</span> @endif
											</div>

											<div class="col-md-6">
												<label for="penta_date">Tarehe ya chanjo</label>
												<input type="date" name="penta_tarehe" id="penta_date" class="form-control{{ $errors->has('penta_tarehe') ? ' is-invalid' : '' }}"
												 name="penta_tarehe"> @if ($errors->has('penta_tarehe'))
												<span class="invalid-feedback">
													<strong>{{ $errors->first('penta_tarehe') }}</strong>
												</span> @endif
											</div>
										</div>
									</div>
									<div class="card form-group">
										<div class="row col-md-12 card-body">
											<div class="col-md-6">
												<label>Chanjo ya Polio</label>
												<select name="Polio" class="form-control{{ $errors->has('Polio') ? ' is-invalid' : '' }}" name="Polio">
													<option value="" hidden=""></option>
													<option value="Polio 1">Polio 1</option>
													<option value="Polio 2">Polio 2</option>
													<option value="Polio 3">Polio 3</option>
												</select> @if ($errors->has('Polio'))
												<span class="invalid-feedback">
													<strong>{{ $errors->first('Polio') }}</strong>
												</span> @endif
											</div>

											<div class="col-md-6">
												<label for="Polio_date">Tarehe ya chanjo</label>
												<input type="date" name="Polio_tarehe" id="Polio_date" class="form-control{{ $errors->has('Polio_tarehe') ? ' is-invalid' : '' }}"
												 name="Polio_tarehe"> @if ($errors->has('Polio_tarehe'))
												<span class="invalid-feedback">
													<strong>{{ $errors->first('Polio_tarehe') }}</strong>
												</span> @endif
											</div>
										</div>
									</div>
									<div class="card form-group">
										<div class="row col-md-12 card-body">
											<div class="col-md-6">
												<label>Chanjo ya PCV13</label>
												<select name="PCV13" class="form-control{{ $errors->has('PCV13') ? ' is-invalid' : '' }}" name="PCV13">
													<option value="" hidden=""></option>
													<option value="PCV13 1">PCV13 1</option>
													<option value="PCV13 2">PCV13 2</option>
													<option value="PCV13 3">PCV13 3</option>
												</select> @if ($errors->has('PCV13'))
												<span class="invalid-feedback">
													<strong>{{ $errors->first('PCV13') }}</strong>
												</span> @endif
											</div>

											<div class="col-md-6">
												<label for="PCV13_date">Tarehe ya chanjo</label>
												<input type="date" name="PCV13_tarehe" id="PCV13_date" class="form-control{{ $errors->has('PCV13_tarehe') ? ' is-invalid' : '' }}"
												 name="PCV13_tarehe"> @if ($errors->has('PCV13_tarehe'))
												<span class="invalid-feedback">
													<strong>{{ $errors->first('PCV13_tarehe') }}</strong>
												</span> @endif
											</div>
										</div>
									</div>
									<div class="card  form-group">
										<div class="row col-md-12 card-body">
											<div class="col-md-6">
												<label>Chanjo ya Rota</label>
												<select name="Rota" class="form-control{{ $errors->has('Rota') ? ' is-invalid' : '' }}" name="Rota"> 
													<option value="" hidden=""></option>
													<option value="Rota 1">Rota 1</option>
													<option value="Rota 2">Rota 2</option>
												</select>@if ($errors->has('Rota'))
												<span class="invalid-feedback">
													<strong>{{ $errors->first('Rota') }}</strong>
												</span> @endif
											</div>

											<div class="col-md-6">
												<label for="Rota_date">Tarehe ya chanjo</label>
												<input type="date" name="Rota_tarehe" id="Rota_date" class="form-control{{ $errors->has('Rota_tarehe') ? ' is-invalid' : '' }}"
												 name="Rota_tarehe"> @if ($errors->has('Rota_tarehe'))
												<span class="invalid-feedback">
													<strong>{{ $errors->first('Rota_tarehe') }}</strong>
												</span> @endif
											</div>
										</div>
									</div>
									<div class="col-md-5">
										<input type="submit" class="form-control btn-primary" name="save6" value="Hifadhi">
									</div>
								</div>
							</div>
						</div>
					</div>

				</form>

			</div>

		</div>
	</div>
</div>
@endsection
 {{-- rufaa
<div class="col-md-3">
	<br>
	<div class="card row">
		<div class="card-header">Rufaa</div>
		<div class="col-md-12">
			<label for="home_center">Kituo alikotoka</label>
			<input type="text" name="rufaa_alikotoka" value="{{Auth::user()->center}}" id="rufaa_alikotoka" class="form-control{{ $errors->has('kutoongezeka_uzito') ? ' is-invalid' : '' }}"
			 name="kutoongezeka_uzito"> @if ($errors->has('kutoongezeka_uzito'))
			<span class="invalid-feedback">
													<strong>{{ $errors->first('kutoongezeka_uzito') }}</strong>
												</span> @endif
		</div>

		<br>

		<div class="col-md-12">
			<label for="deatin_center">Kituo alikopelekwa</label>
			<input type="text" name="rufaa_alikopelekwa" id="rufaa_alikopelekwa" class="form-control{{ $errors->has('kutoongezeka_uzito') ? ' is-invalid' : '' }}"
			 name="kutoongezeka_uzito"> @if ($errors->has('kutoongezeka_uzito'))
			<span class="invalid-feedback">
													<strong>{{ $errors->first('kutoongezeka_uzito') }}</strong>
												</span> @endif
		</div>

		<br>

		<div class="col-md-12">
			<label for="referal_reason">Sababu ya rufaa</label>
			<textarea name="rufaa_sababu" id="rufaa_sababu" cols="30" rows="2" class="form-control{{ $errors->has('kutoongezeka_uzito') ? ' is-invalid' : '' }}"
			 name="kutoongezeka_uzito"> @if ($errors->has('kutoongezeka_uzito'))
												<span class="invalid-feedback">
													<strong>{{ $errors->first('kutoongezeka_uzito') }}</strong>
												</span> @endif</textarea>

		</div>


		<br>

		<div class="col-md-12">
			<label for="maelezo_mengine">Maelezo mengine / Maoni</label>
			<textarea name="Maoni_o_maelezo_mengine" id="Maoni_o_maelezo_mengine" cols="30" rows="2" class="form-control{{ $errors->has('kutoongezeka_uzito') ? ' is-invalid' : '' }}"
			 name="kutoongezeka_uzito"> @if ($errors->has('kutoongezeka_uzito'))
												<span class="invalid-feedback">
													<strong>{{ $errors->first('kutoongezeka_uzito') }}</strong>
												</span> @endif</textarea>

		</div>
	</div>
</div>--}}