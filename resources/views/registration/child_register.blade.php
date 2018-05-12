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
					<form action="{{ ('store') }}" method="post">

						{{csrf_field()}}

						<div class="row form-group">

							<!-- starts the left division -->

							<div class="col-md-5">
								<div class="row">
									<div class="col-md-6">
										<label>Tarehe ya kuandikishwa</label>
										<input type="date" class="form-control" name="child_postnatal_date">
									</div>
									<div class="col-md-6">
										<label>Namba ya usajili wa vizazi</label>
										<input type="number" class="form-control" name="birth_regno" min="0">
									</div>
								</div>
								<br>
								<div class="row">
									<div class="col-md-8">
										<label>Jina la Mtoto</label>
										<input type="text" class="form-control" name="child_name" placeholder="Andika majina matatu ya mtoto">
									</div>

									<div class="col-md-4">
										<label>Namba ya mtoto</label>
										<input type="text" class="form-control" name="child_no" placeholder="Namba">
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
										<select name="child_gender" class="form-control">
											<option value="" hidden=""></option>
											<option value="Msichana">Msichana</option>
											<option value="Mvulana">Mvulana</option>
										</select>
									</div>

									<div class="col-md-8">
										<label for="child_place">Mahali anapoishi mtoto</label>
										<input type="text" name="child_place" id="child_place" class="form-control">
									</div>


								</div>

								<br>

								<div class="row">
									<div class="col-md-4">
										<label for="heid_no">Namba ya HEID</label>
										<input type="text" name="heid_no" id="heid_no" class="form-control">
									</div>
									<div class="col-md-8">
										<label>Jina la mama</label>
										<input type="text" class="form-control" name="mother_name" placeholder="Jina la mama wa mtoto">
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