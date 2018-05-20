@extends('layouts.main') 
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md">
			<div class="card col-sm">
				<div class="card-header">
					<p align="center">Taarifa Binafsi za mtoto aliyezaliwa</p>
				</div>

				<div class="card-body">
					<form action="/reportRequest" method="post">

						{{csrf_field()}}

						<div class="row form-group">

							<!-- starts the left division -->

							<div class="col-md-5">
								<div class="row">
									<div class="col-md-6">
										<label>Tarehe ya kuandikishwa</label>
										<input type="date" class="form-control" name="tarehe_ya_kuandikishwa">
									</div>
									<div class="col-md-6">
										<label>Namba ya usajili wa vizazi</label>
										<input type="number" class="form-control" name="namba_ya_usajili_RITA" min="0">
									</div>
								</div>
								<br>
								<div class="row">
									<div class="col-md-8">
										<label>Jina la Mtoto</label>
										<input type="text" class="form-control" name="jina_la_mtoto" placeholder="Andika majina matatu ya mtoto">
									</div>

									<div class="col-md-4">
										<label>Namba ya mtoto</label>
										<input type="text" class="form-control" name="namba_ya_mtoto" placeholder="Namba">
									</div>
								</div>

								<br>
								<div class="row">


								</div>


							</div>

							<!-- ends left division -->

							<div class="col-md-1"></div>

							<!-- start right division -->

							<div class="col-md-6">

								<div class="row">
									<div class="col-md-4">
										<label>Jinsia</label>
										<select name="jinsia" class="form-control">
											<option value="" hidden=""></option>
											<option value="Msichana">Msichana</option>
											<option value="Mvulana">Mvulana</option>
										</select>
									</div>

									<div class="col-md-8">
										<label for="child_place">Mahali anapoishi mtoto</label>
										<input type="text" name="mahali_anapoishi_mtoto" id="child_place" class="form-control">
									</div>


								</div>

								<br>

								<div class="row">
									<div class="col-md-4">
										<label for="heid_no">Namba ya HEID</label>
										<input type="text" name="namba_ya_HEID" id="heid_no" class="form-control">
									</div>
									<div class="col-md-8">
										<label>Jina la mama</label>
										<input type="text" class="form-control" name="jina_la_mama" placeholder="Jina la mama wa mtoto">
									</div>
								</div>

							</div>
							<!-- end right division -->

							<div class="col-md-5"></div>
							<div class="col-md-2"><input type="submit" class="form-control btn-primary" name="subBtn"> </div>
							<div class="col-md-5"></div>

						</div>

					</form>
				</div>
			</div>

		</div>
	</div>

	</div
@endsection