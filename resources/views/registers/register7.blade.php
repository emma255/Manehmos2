@extends('layouts.main') 
@section('content')

<div class="container">
	<div class="row">
		<div class="col-md card">

			<div class="card-header">
				<p>Taarifa Binafsi za chanjo kwa mtoto</p>
			</div>

			<div class="card-body">

				<form action="/register7/store" method="post">
					{{csrf_field()}}

					<div class="form-group">

						<div class="row col-md-12">
							<div class="col-md-2"></div>
							<div class="col-md-4">
								<div class="row form-group">
									<div class="col-md-5">
										<label>Namba ya mtoto</label>
									</div>
									<div class="col-md-6">
										<input type="text" name="namba_ya_usajili" class="form-control{{ $errors->has('namba_ya_usajili') ? ' is-invalid' : '' }}">
										@if ($errors->has('namba_ya_usajili'))
										<span class="invalid-feedback">
											<strong>{{ $errors->first('namba_ya_usajili') }}</strong>
										</span> @endif
									</div>
								</div>
								<div class="row form-group">
									<div class="col-md-5">
										<label>Tarehe</label>
									</div>
									<div class="col-md-6">
										<input type="date" name="tarehe" class="form-control{{ $errors->has('tarehe') ? ' is-invalid' : '' }}">
										@if ($errors->has('tarehe'))
										<span class="invalid-feedback">
											<strong>{{ $errors->first('tarehe') }}</strong>
										</span> @endif
									</div>
								</div>
								<div class="row card col-md-12 form-group">
									<div class="card-header">Vitamin A</div>
									<div class="card-body">
										<div class="row">
											<div class="col-md-6">
												<label>Umri wa mtoto</label>
												<select name="vitamin_A_umri" class="form-control{{ $errors->has('vitamin_A_umri') ? ' is-invalid' : '' }}">
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
												<select name="amepata_vitamin_A" id="amepata_vitaminA" class="form-control{{ $errors->has('amepata_vitamin_A') ? ' is-invalid' : '' }}"> 
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
												<select name="mebendazole_albendazole_umri" id="age_mebendazole" class="form-control{{ $errors->has('mebendazole_albendazole_umri') ? ' is-invalid' : '' }}"> 
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
												<select name="amepata_mebendazole_albendazole" id="amepata_mebendazole" class="form-control{{ $errors->has('amepata_mebendazole_albendazole') ? ' is-invalid' : '' }}"> 
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
										<select name="Surua" class="form-control{{ $errors->has('Surua') ? ' is-invalid' : '' }}"> 
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
										<input type="date" name="Surua_tarehe" id="Surua_date" class="form-control{{ $errors->has('Surua_tarehe') ? ' is-invalid' : '' }}">
										@if ($errors->has('Surua_tarehe'))
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
												<select name="PENTA" class="form-control{{ $errors->has('PENTA') ? ' is-invalid' : '' }}"> 
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
												<input type="date" name="penta_tarehe" id="penta_date" class="form-control{{ $errors->has('penta_tarehe') ? ' is-invalid' : '' }}">
												@if ($errors->has('penta_tarehe'))
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
												<select name="Polio" class="form-control{{ $errors->has('Polio') ? ' is-invalid' : '' }}">
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
												<input type="date" name="Polio_tarehe" id="Polio_date" class="form-control{{ $errors->has('Polio_tarehe') ? ' is-invalid' : '' }}">
												@if ($errors->has('Polio_tarehe'))
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
												<select name="PCV13" class="form-control{{ $errors->has('PCV13') ? ' is-invalid' : '' }}">
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
												<input type="date" name="PCV13_tarehe" id="PCV13_date" class="form-control{{ $errors->has('PCV13_tarehe') ? ' is-invalid' : '' }}">
												@if ($errors->has('PCV13_tarehe'))
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
												<select name="Rota" class="form-control{{ $errors->has('Rota') ? ' is-invalid' : '' }}"> 
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
												<input type="date" name="Rota_tarehe" id="Rota_date" class="form-control{{ $errors->has('Rota_tarehe') ? ' is-invalid' : '' }}">
												@if ($errors->has('Rota_tarehe'))
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