@extends('layouts.main')

@section('content')
<div class="container">
<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-10">
        <div class="card">
        	<div class="card-header">
        		<p>Taarifa Binafsi za mume au mwenzi</p>
        	</div>
        	<div class="card-body">
        		<form action="{{ ('store') }}" method="post">

        		{{csrf_field()}}

		<div class="row form-group">

        	<div class="col-sm-6">
        		<br>

        		  <div>
				    <label>Jina la kwanza</label>
				    <input type="text" class="form-control" id="first_name" placeholder="Andika jina la kwanza">
				  </div>
				  <br>
				  <div>
				    <label>Jina la pili</label>
				    <input type="text" class="form-control" id="second_name" placeholder="Andika jina la pili">
				  </div>
				  <br>

				 <div>
				    <label>Jina la ukoo</label>
				    <input type="text" class="form-control" id="surname" placeholder="Andika jina la ukoo">
				 </div>
				 <br>


        	</div>

        	<div class="col-md-6">
				<div>
				    <label>tarehe ya kuzaliwa</label>
				    <input type="date" class="form-control" id="date_of_birth" placeholder="Andika jina la kwanza">
				</div>

				<br>

				  <div>
				    <label>Elimu</label>
				    <input type="text" class="form-control" id="education" placeholder="Elimu">
				  </div> 
				  <br>

				  <div>
				    <label>Kazi</label>
				    <input type="text" class="form-control" id="job" placeholder="Kazi">
				  </div>
				  <br>

                    <div class="dropdown show dropdown-toggle-primary form-control">
                      <a class="dropdown-toggle" role="button" id="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ __('Mahali anapoishi') }}
                      </a>

                      <div class="dropdown-menu">
						  <div>
							<div class="row">
								<div class="col-md-3"><label>&nbsp;Mtaa</label></div>

								<div class="col-md-9">
									<input type="text" class="form-control" id="street" name="street" placeholder="Mtaa">
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-md-3"><label>&nbsp;Kijiji</label></div>

								<div class="col-md-9">
									<input type="text" class="form-control" id="village" name="village" placeholder="Kijiji">
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-md-3"><label>&nbsp;Kitongoji</label></div>

								<div class="col-md-9">
									<input type="text" class="form-control" id="street2" name="street2" placeholder="Kitongoji">
								</div>
							</div>
                      </div>
                    </div>
                </div>
				  <br>

				  
					<div class="row">
						<div class="col-md-9"></div>

						<div class="col-md-3">
							<input type="submit" class="form-control btn btn-primary" value="hifadhi">
						</div>
					</div>

        	</div>

        				

				</form>
        	</div>
        </div>
		
	</div>
</div>

</div
@endsection