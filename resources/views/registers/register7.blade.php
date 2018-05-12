@extends('layouts.main') 
@section('content')

<div class="container">
	<div class="row">
		<div class="col-md card">

			<div class="card-header">
				<p>Taarifa Binafsi za mtuha namba 7</p>
			</div>

			<div class="card-body">

				<form action="{{ ('register7/store') }}" method="post">
					{{csrf_field()}}

					<div class="form-group">

						<div class="row col-md-12">

							<div class="col-md-4">
								<div class="row card col-md-12">
									<div class="col-md-12 card-body">
										<label>Jina la mtoto</label>
										<input type="text" name="infant_name" id="infant_name" class="form-control">
									</div>
								</div>

								<br>
								<div class="row card col-md-12">
									<div class="card-header">Vitamin A</div>
									<div class="card-body">
										<div class="row">
											<div class="col-md-6"><label>Umri wa mtoto</label>
												<select name="child_age_vitamin_A" class="form-control">
							                    <option value="" hidden=""></option>
							                    <option value="Miezi 6">Miezi 6</option>
							                    <option value="Mwaka 1">Mwaka 1</option>
							                    <option value="Miaka 1.5">Mwaka 1.5</option>
							                    <option value="Miaka 2">Mwaka 2</option>
							                    <option value="Miaka 2.5">Mwaka 2.5</option>
							                    <option value="Miaka 3">Mwaka 3</option>
							                    <option value="Miaka 3.5">Mwaka 3.5</option>
							                    <option value="Miaka 4">Mwaka 4</option>
							                    <option value="Miaka 4.5">Mwaka 4.5</option>
							                    <option value="Miaka 5">Mwaka 5</option>
							                </select>

											</div>
											<div class="col-md-6">
												<label for="amepata_vitaminA">Amepata</label>
												<select name="amepata_vitaminA" id="amepata_vitaminA" class="form-control">
													<option value="" hidden=""></option>
													<option value="ndio">Ndio</option>
													<option value="hapana">Hapana</option>
												</select>
											</div>
										</div>
									</div>
								</div>

								<br>

								<div class="row card col-md-12">
									<div class="card-header">Ukuaji wa mtoto</div>
									<div class="card-body">
										<div class="row">
											<div class="col-md-6">
												<label for="child_weight">Uzito wa mtoto</label>
												<input type="number" name="child_weight" id="child_weight" class="form-control">
											</div>

											<div class="col-md-6">
												<label for="child_heigh">Urefu wa mtoto</label>
												<input type="number" name="child_heigh" id="child_heigh" class="form-control">
											</div>
										</div>
									</div>
								</div>

								<br>

								<div class="row card col-md-12">
									<div class="card-header">Mebendazole / Albendazole <small>Kila miezi 6</small></div>
									<div class="card-body">
										<div class="row">
											<div class="col-md-6">
												<label for="child_age">Umri wa mtoto</label>
												<select name="age_mebendazole" id="age_mebendazole" class="form-control">
													<option value="" hidden=""></option>
													<option value="Miezi 12">Miezi 12</option>
													<option value="Miezi 18">Miezi 18</option>
													<option value="Miezi 18">Miezi 24</option>
													<option value="Miezi 18">Miezi 30</option>
												</select>
											</div>
											<div class="col-md-6">
												<label for="amepata_mebendazole">Amepata dawa</label>
												<select name="amepata_mebendazole" id="amepata_mebendazole" class="form-control">
													<option value="" hidden=""></option>
													<option value="Ndio">Ndio</option>
													<option value="Hapana">Hapana</option>
												</select>
											</div>
										</div>
									</div>
								</div>

							</div>

							<div class="col-md-5">
								<div class="row card col-md-12">
									<div class="card-header">Chanjo za mtoto</div>
									<div class="card-body">
										<div class="row">
											<div class="col-md-5"><label>Namba ya PENTA</label>
												<select name="penta_number" class="form-control">
													<option value="" hidden=""></option>
													<option value="PENTA 1">PENTA 1</option>
													<option value="PENTA 2">PENTA 2</option>
													<option value="PENTA 3">PENTA 3</option>
												</select>
											</div>

											<div class="col-md-7">
												<label for="penta_date">Tarehe ya chanjo ya  PENTA</label>
												<input type="date" name="penta_date" id="penta_date" class="form-control">
											</div>
										</div>

										<br>

										<div class="row">
											<div class="col-md-5"><label>Namba ya Polio</label>
												<select name="Polio_number" class="form-control">
													<option value="" hidden=""></option>
													<option value="Polio 1">Polio 1</option>
													<option value="Polio 2">Polio 2</option>
													<option value="Polio 3">Polio 3</option>
												</select>
											</div>

											<div class="col-md-7">
												<label for="Polio_date">Tarehe ya chanjo ya Polio</label>
												<input type="date" name="Polio_date" id="Polio_date" class="form-control">
											</div>
										</div>


										<br>

										<div class="row">
											<div class="col-md-5"><label>Namba ya PCV13</label>
												<select name="PCV13_number" class="form-control">
													<option value="" hidden=""></option>
													<option value="PCV13 1">PCV13 1</option>
													<option value="PCV13 2">PCV13 2</option>
													<option value="PCV13 3">PCV13 3</option>
												</select>
											</div>

											<div class="col-md-7">
												<label for="PCV13_date">Tarehe ya chanjo ya PCV13</label>
												<input type="date" name="PCV13_date" id="PCV13_date" class="form-control">
											</div>
										</div>

										<br>

										<div class="row">
											<div class="col-md-5"><label>Namba ya Rota</label>
												<select name="Rota_number" class="form-control">
													<option value="" hidden=""></option>
													<option value="Rota 1">Rota 1</option>
													<option value="Rota 2">Rota 2</option>
												</select>
											</div>

											<div class="col-md-7">
												<label for="Rota_date">Tarehe ya chanjo ya Rota</label>
												<input type="date" name="Rota_date" id="Rota_date" class="form-control">
											</div>
										</div>

										<br>

										<div class="row">
											<div class="col-md-5"><label>Namba ya Surua</label>
												<select name="Surua_number" class="form-control">
													<option value="" hidden=""></option>
													<option value="Surua 1">Surua 1</option>
													<option value="Surua 2">Surua 2</option>
												</select>
											</div>

											<div class="col-md-7">
												<label for="Surua_date">Tarehe ya chanjo ya Surua</label>
												<input type="date" name="Surua_date" id="Surua_date" class="form-control">
											</div>
										</div>
									</div>
								</div>

							</div>

							{{-- rufaa --}}
							<div class="col-md-3">
								<div class="row card">
									<div class="col-md-12 card-body">
										<label>Namba ya mtoto</label>
										<input type="text" class="form-control" name="inftant_regno">
									</div>
								</div>
								<br>
								<div class="card row">
									<div class="card-header">Rufaa</div>
									<div class="col-md-12">
										<label for="home_center">Kituo alikotoka</label>
										<input type="text" name="home_center" id="home_center" class="form-control">
									</div>

									<br>

									<div class="col-md-12">
										<label for="deatin_center">Kituo alikopelekwa</label>
										<input type="text" name="deatin_center" id="deatin_center" class="form-control">
									</div>

									<br>

									<div class="col-md-12">
										<label for="referal_reason">Sababu ya rufaa</label>
										<textarea name="referal_reason" id="referal_reason" cols="30" rows="2" class="form-control"></textarea>

									</div>


									<br>

									<div class="col-md-12">
										<label for="maelezo_mengine">Maelezo mengine / Maoni</label>
										<textarea name="maelezo_mengine" id="maelezo_mengine" cols="30" rows="2" class="form-control"></textarea>

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