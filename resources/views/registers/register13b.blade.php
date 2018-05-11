@extends('layouts.main')

@section('content')
<div class="container">
   <div class="row">
<!-- 	<div class="col-md-2"></div>
 -->  <div class="col-md card">

        	<div class="card-header">
        		<p>Taarifa Binafsi za mtuha namba 13</p>
        	</div>

        	<div class="card-body">

        		<form action="{{ ('register13/store') }}" method="post">
        			{{csrf_field()}}

        			<div class="form-group">

        				<div class="row">

        					<div class="col-md-2">

        						<label>Namba ya kadi RCH4</label>

        						<input type="text" class="form-control" id="date" name="date">

        					</div>


        					<div class="col-md-3">

        						<label>Tarehe ya kuandikishwa postnatal</label>

        						<input type="date" class="form-control" id="date" name="date">

        					</div>

        					<div class="col-md-2">

        						<label>Umri</label>

        						<input type="number" class="form-control" id="age" name="age" min="0">

        					</div>

        					<div class="col-md-3">

        						<label>Jina la mtaa</label>

        						<input type="text" class="form-control" id="street" name="street">

        					</div>

        				</div>

        				<div class="row">

        						<div class="col-md-7 card">
        							
        							<div class="card-header">Taarifa za mama</div>

        							<div class="card-body">
        								
										<div class="row">
											<div class="col-md-3"><label>Amejifungua mara ngapi?</label></div>
										    <div class="col-md-2">
										    	<select name="card" class="form-control">
													<option value="" hidden=""></option>
													<option value="ndio">Ndio</option>
													<option value="hapana">Hapana</option>
						                        </select>
										    </div>

												<div class="col-md-2"><label>Tarehe</label></div>
											    <div class="col-md-5"><input type="date" id="date" name="date" size="3" class="form-control"></div>
										    
										</div>
			        					<br>

			        					<div class="row">
			        						<div class="col-md-3"><label>Mahali alipojifungulia</label></div>
			        						<div class="col-md-3">
			        						<select name="card" class="form-control">
						                    <option value="" hidden=""></option>
						                    <option value="ndio">Ndio</option>
						                    <option value="hapana">Hapana</option>
						                    </select>
			        						</div>

											<div class="col-md-3"><label>Kada ya aliyemzalisha</label></div>
											<div class="col-md-3"><input type="text" name="dplace" id="dplace" class="form-control"></div>
			        					</div>
			        					
			        					<br>

			        					<div class="row">
			        						<div class="col-md-3"><label>Hali ya mama</label></div>
			        						<div class="col-md-3">
			        						<select name="card" class="form-control">
						                    <option value="" hidden=""></option>
						                    <option value="ndio">Ndio</option>
						                    <option value="hapana">Hapana</option>
						                    </select>
			        						</div>

											<div class="col-md-3"><label>BP(mmHg)</label></div>
											<div class="col-md-3"><input type="text" name="bp" id="bp" class="form-control"></div>
			        					</div>

										<br>

										<div class="row">
										
										<div class="col-md-4"><label>Unyonyeshaji ndani ya saa moja</label></div>
			        						<div class="col-md-3">
			        						<select name="card" class="form-control">
						                    <option value="" hidden=""></option>
						                    <option value="ndio">Ndio</option>
						                    <option value="hapana">Hapana</option>
						                    </select>
			        						</div>

											<div class="col-md-2"><label>HB (g/dl)</label></div>
											<div class="col-md-2"><input type="text" name="hb" id="hb" class="form-control"></div>
			        					
										</div>

										<br>

										<div class="row">
										
										 <div class="col-md-4"><label>Tumbo la uzazi</label></div>
			        						<div class="col-md-3">
			        						<select name="card" class="form-control">
						                    <option value="" hidden=""></option>
						                    <option value="ndio">Ndio</option>
						                    <option value="hapana">Hapana</option>
						                    </select>
			        						</div>

											<div class="col-md-2"><label>Matiti</label></div>
											<div class="col-md-3">
												<select name="card" class="form-control">
												<option value="" hidden=""></option>
												<option value="ndio">Ndio</option>
												<option value="hapana">Hapana</option>
												</select>
											</div>
			        					
										</div>

										<br>

										<div class="row">
										
										 <div class="col-md-3"><label>Rangi ya lochia</label></div>
			        						<div class="col-md-3">
			        						<select name="card" class="form-control">
						                    <option value="" hidden=""></option>
						                    <option value="ndio">Ndio</option>
						                    <option value="hapana">Hapana</option>
						                    </select>
			        						</div>

											<div class="col-md-3"><label>Ulishaji mtoto</label></div>
											<div class="col-md-3">
												<select name="card" class="form-control">
												<option value="" hidden=""></option>
												<option value="ndio">Ndio</option>
												<option value="hapana">Hapana</option>
												</select>
											</div>
			        					
										</div>

										<br>

										<div class="row">
										
										 <div class="col-md-5"><label>Aina ya dawa za nyongeza alizopewa mama</label></div>
			        						<div class="col-md-2">
			        						<select name="card" class="form-control">
						                    <option value="" hidden=""></option>
						                    <option value="ndio">Ndio</option>
						                    <option value="hapana">Hapana</option>
						                    </select>
			        						</div>

											<div class="col-md-2"><label>Idadi ya dawa</label></div>
											<div class="col-md-3">
												<select name="card" class="form-control">
												<option value="" hidden=""></option>
												<option value="ndio">Ndio</option>
												<option value="hapana">Hapana</option>
												</select>
											</div>
			        					
										</div>

			        					<br>
        							</div>
        						</div>

        						<div class="col-md-5">
        							<div class="card">
        								<div class="card-header">PMTCT</div>
        								<div class="card-body">

        								   <div class="row">
											<div class="col-md-7"><label>Hali ya vvu kama inavyoonekana kwenye kadi</label></div>
											<div class="col-md-3">
												<select name="card" class="form-control">
												<option value="" hidden=""></option>
												<option value="ndio">Ndio</option>
												<option value="hapana">Hapana</option>
												</select>
											</div>
        								  </div>

        								  <br>

        								  <div class="row">
        								  	
											<div class="col-md-7"><label>Kipimo cha VVU wakati wa postnatal</label></div>
											<div class="col-md-3">
												<select name="card" class="form-control">
												<option value="" hidden=""></option>
												<option value="ndio">Ndio</option>
												<option value="hapana">Hapana</option>
												</select>
											</div>
        								  </div>


        								</div>
        							</div>

        							<br>

        							<div class="card">
        								<div class="card-header">Mahudhurio</div>
        								<div class="card-body">

        								  <div class="row">
        								  	<div class="col-md-6"><label>Siku</label></div>
											<div class="col-md-6">
												<select name="card" class="form-control">
												<option value="" hidden=""></option>
												<option value="ndio">Ndio</option>
												<option value="hapana">Hapana</option>
												</select>
											</div>
        								  </div>

        								  <br>

        								  <div class="row">
        										<div class="col-md-6">Tarehe ya mahudhurio</div>
											    <div class="col-md-6"><input type="date" name="date" class="form-control"></div>
        								  </div>
											

    									
        								</div>
        							</div>

        						</div>

        				</div>

        				<hr>

        				<div class="row">
        					
        					<div class="col-md-5 card">
        						
        						<div class="card-header">Huduma kwa mtoto</div>

        						<div class="card-body">
        							
										<div class="row">
											<div class="col-md-2"><label>Jinsia</label></div>

											<div class="col-md-3">
											    <select name="card" class="form-control">
							                    <option value="" hidden=""></option>
							                    <option value="mume">Mume</option>
							                    <option value="mke">Mke</option>
							                   </select>
							               </div>

							               <div class="col-md-4"><label>Joto la mtoto</label></div>
							               <div class="col-md-3"><input type="number" name="temperature" class="form-control" min="0"></div>

										</div>

        								<br>
										<div class="row">

											<div class="col-md-2"><label>Chanjo</label></div>

										<div class="col-md-5"><input type="text" name="vaccination" class="form-control"></div>

						               <div class="col-md-2"><label>Uzito</label></div>

						               <div class="col-md-3"><input type="number" id="weight" name="weight" class="form-control"></div>
						           </div>

        								<br>
								   <div class="row">

										<div class="col-md-2"><label>HB(g/dl)</label></div>

										<div class="col-md-3"><input type="text" name="vaccination" class="form-control"></div>

						               <div class="col-md-3"><label>Siku za hudhurio</label></div>

						               <div class="col-md-4">
						               	
											    <select name="card" class="form-control">
							                    <option value="" hidden=""></option>
							                    <option value="mume">Mume</option>
							                    <option value="mke">Mke</option>
							                   </select>
						               </div>
						           </div>
        								<br>
								   <div class="row">

										<div class="col-md-2"><label>KMC</label></div>

										<div class="col-md-3"><input type="text" name="vaccination" class="form-control"></div>

						               <div class="col-md-3	"><label>Tarehe ya hudhurio</label></div>

						               <div class="col-md-4"><input type="date" name="date" class="form-control"></div>
						           </div>

        								<br>
								   <div class="row">
								   	<label>Maoni</label>
						             <textarea name="maoni" minlength="4" class="form-control" cols="29" rows="8" placeholder="Andika maoni hapa"></textarea>
						           </div>



        						</div>
        					</div>

							
        					<div class="col-md-3 card">
        						
        						<div class="card-header">Uzazi wa mpango</div>

        						<div class="card-body">


        						<div class="row">
        							<label>Ushauri umetolewa?</label>
        							
        								<select name="card" class="form-control">
						                    <option value="" hidden=""></option>
						                    <option value="ndio">Ndio</option>
						                    <option value="hapana">Hapana</option>
						                </select>
						         </div>

						         <br>
        						<div class="row">
        							<label>Amepatiwa kielelezo?</label>
        								<select name="card" class="form-control">
						                    <option value="" hidden=""></option>
						                    <option value="ndio">Ndio</option>
						                    <option value="hapana">Hapana</option>
						                </select>
						         </div>

						         <br>
        						<div class="row">
        							<label>Amepata njia ya uzazi wa mpango wakati wa PPC?s</label>
        							
        							
        								<select name="card" class="form-control">
						                    <option value="" hidden=""></option>
						                    <option value="ndio">Ndio</option>
						                    <option value="hapana">Hapana</option>
						                </select>
						         
						         </div>

						         <br>
        						<div class="row">
        							<label>Amepata rufaa kupata uzazi wa mpango?</label>
        							
        								<select name="card" class="form-control">
						                    <option value="" hidden=""></option>
						                    <option value="ndio">Ndio</option>
						                    <option value="hapana">Hapana</option>
						                </select>
						         </div>
        						</div>

        					</div>


        					<div class="col-md-4">
        						<div class="card">
        							<div class="card-header">ARV prophlaxis</div>

        							<div class="card-body row">
        								<div class="col-md-4"><label>ARV</label></div>
        								<div class="col-md-8"><input type="text" name="arv" class="form-control"></div>
        							</div>

        							<div class="card-body row">
        								<div class="col-md-4"><label>Muda</label></div>
        								<div class="col-md-8"><input type="text" name="time" class="form-control"></div>
        							</div>

        							<div class="card-body row">
        								<div class="col-md-4"><label>Tarehe</label></div>
        								<div class="col-md-8"><input type="date" name="date" class="form-control"></div>
        							</div>
        						</div>

        						<br>

        						<div class="card">
        							<div class="card-header">Rufaa</div>

        							<div class="card-body row">
        								<div class="col-md-4"><label>Alikopelekwa</label></div>
        								<div class="col-md-8"><input type="text" name="dest" class="form-control"></div>
        							</div>

        							<div class="card-body row">
        								<div class="col-md-4"><label>Alikotoka</label></div>
        								<div class="col-md-8"><input type="text" name="home" class="form-control"></div>
        							</div>

        							<div class="card-body row">
        								<div class="col-md-4"><label>Sababu ya rufaa</label></div>
        								<div class="col-md-8"><input type="text" name="date" class="form-control"></div>
        							</div>
        						</div>
        						
        					</div>

        				</div>
        				<br>

        				<div class="row">
        					<div class="col-md-8"></div>
        					<div class="col-md-2"><input type="Submit" name="submit" class="btn btn-primary form-control"></div>
        				</div>

        			</div>

        		</form>

        	</div>

        </div>

    </div>

</div>

</div
@endsection