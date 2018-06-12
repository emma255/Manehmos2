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
					<form action="/child/store" method="post">

						{{csrf_field()}}

						<div class="row form-group">

							<!-- starts the left division -->

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
										<label>Namba ya usajili wa vizazi</label>
										<input required type="number" name="namba_ya_usajili_RITA" min="0" class="form-control{{ $errors->has('namba_ya_usajili_RITA') ? ' is-invalid' : '' }}"
										 name="namba_ya_usajili_RITA"> @if ($errors->has('namba_ya_usajili_RITA'))
										<span class="invalid-feedback">
											<strong>{{ $errors->first('namba_ya_usajili_RITA') }}</strong>
										</span> @endif
									</div>
								</div>
								<br>
								<div class="row">
									<div class="col-md-8">
										<label>Jina la Mtoto</label>
										<input required type="text" name="jina_la_mtoto" placeholder="Andika majina matatu ya mtoto" class="form-control{{ $errors->has('jina_la_mtoto') ? ' is-invalid' : '' }}"
										 name="jina_la_mtoto"> @if ($errors->has('jina_la_mtoto'))
										<span class="invalid-feedback">
											<strong>{{ $errors->first('jina_la_mtoto') }}</strong>
										</span> @endif
									</div>

									<div class="col-md-4">
										<label>Namba ya mtoto</label>
										<input required type="text" name="namba_ya_mtoto" placeholder="Namba" class="form-control{{ $errors->has('namba_ya_mtoto') ? ' is-invalid' : '' }}"
										 name="namba_ya_mtoto"> @if ($errors->has('namba_ya_mtoto'))
										<span class="invalid-feedback">
											<strong>{{ $errors->first('namba_ya_mtoto') }}</strong>
										</span> @endif
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
										<select required name="jinsia" class="form-control{{ $errors->has('jinsia') ? ' is-invalid' : '' }}" name="jinsia"> 
											<option value="" hidden=""></option>
											<option value="Msichana">Msichana</option>
											<option value="Mvulana">Mvulana</option>
										</select>@if ($errors->has('jinsia'))
										<span class="invalid-feedback">
											<strong>{{ $errors->first('jinsia') }}</strong>
										</span> @endif
									</div>

									<div class="col-md-8">
										<label for="child_place">Mahali anapoishi mtoto</label>
										<input required type="text" name="mahali_anapoishi_mtoto" id="child_place" class="form-control{{ $errors->has('mahali_anapoishi_mtoto') ? ' is-invalid' : '' }}"
										 name="mahali_anapoishi_mtoto"> @if ($errors->has('mahali_anapoishi_mtoto'))
										<span class="invalid-feedback">
											<strong>{{ $errors->first('mahali_anapoishi_mtoto') }}</strong>
										</span> @endif
									</div>


								</div>

								<br>

								<div class="row">
									<div class="col-md-4">
										<label for="heid_no">Namba ya HEID</label>
										<input required type="text" name="namba_ya_HEID" id="heid_no" class="form-control{{ $errors->has('namba_ya_HEID') ? ' is-invalid' : '' }}"
										 name="namba_ya_HEID"> @if ($errors->has('namba_ya_HEID'))
										<span class="invalid-feedback">
											<strong>{{ $errors->first('namba_ya_HEID') }}</strong>
										</span> @endif
									</div>

									<div class="col-md-8">
										<label>Jina la mama</label>
										<input required type="text" name="jina_la_mama" placeholder="Jina la mama wa mtoto" class="form-control{{ $errors->has('jina_la_mama') ? ' is-invalid' : '' }}"
										 name="jina_la_mama"> @if ($errors->has('jina_la_mama'))
										<span class="invalid-feedback">
											<strong>{{ $errors->first('jina_la_mama') }}</strong>
										</span> @endif
									</div>
								</div>

							</div>
							<!-- end right division -->

							<div class="col-md-5"></div>
							<div class="col-md-2"><input type="submit" class="form-control btn-primary" name="subBtn" value="Hifadhi"> </div>
							<div class="col-md-5"></div>

						</div>

					</form>
				</div>
			</div>

		</div>
	</div>

	</div
@endsection