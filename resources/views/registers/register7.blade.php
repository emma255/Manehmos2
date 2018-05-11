@extends('layouts.main')

@section('content')
<div class="container">
   <div class="row">
<!-- 	<div class="col-md-2"></div>
 -->  <div class="col-md card">

        	<div class="card-header">
        		<p>Taarifa Binafsi za mtuha namba 7</p>
        	</div>

        	<div class="card-body">

        		<form action="{{ ('register7/store') }}" method="post">
        			{{csrf_field()}}

        			<div class="form-group">

        				<div class="row col-md-12">

        					<div class="col-md-3">

        						<label>Tarehe</label>

        						<input type="date" class="form-control" id="date" name="date">

        					</div>

        					<div class="col-md-3">

        						<label>Namba ya utambulisho</label>

        						<input type="text" class="form-control" id="date" name="date">

        					</div>

        					<div class="col-md-1">

        						<label>Mwaka</label>

        						<input type="text" class="form-control" id="year" name="year">

        					</div>

        					<div class="col-md-3">

        						<label>Namba ya usajili vizazi(BR)</label>

        						<input type="number" class="form-control" id="age" name="age" min="0">

        					</div>

        					<div class="col-md-2">

        						<label>Jina la mtaa</label>

        						<input type="text" class="form-control" id="street" name="street">

        					</div>

        				</div>
        				<hr>

        				<div class="row col-md-12">

        						<div class="col-md-5 card">
        							
        							<div class="card-header">Taarifa za mtoto</div>

        							<div class="card-body">

        								<div class="row">
        									<div class="col-md-4"><label>Jina la kwanza</label></div>
        									<div class="col-md-8"><input type="text" name="fname" class="form-control"></div>
        								</div>

			        					<br>
        								<div class="row">
        									<div class="col-md-4"><label>Jina la pili</label></div>
        									<div class="col-md-8"><input type="text" name="mname" class="form-control"></div>
        								</div>

			        					<br>
        								<div class="row">
        									<div class="col-md-4"><label>Jina la ukoo</label></div>
        									<div class="col-md-8"><input type="text" name="sname" class="form-control"></div>
        								</div>

			        					<br>

        								<div class="row">
        									<div class="col-md-5"><label>Tarehe ya kuzaliwa</label></div>
        									<div class="col-md-7"><input type="date" name="date" class="form-control"></div>
        								</div>

			        					<br>

        								<div class="row">
        									<div class="col-md-5"><label>Jinsia</label></div>

        									<div class="col-md-7">

											  <select name="card"  class="form-control">
							                    <option value="" hidden=""></option>
							                    <option value="mume">Mume</option>
							                    <option value="mke">Mke</option>
							                </select>

						            </div>

						            </div>

        							</div>
        						</div>

        						<div class="col-md-4 card">
        							
        							<div class="card-header">Taarifa za mama</div>

        							<div class="card-body">

        								<div class="row">
        									<div class="col-md-6"><label>Jina la kwanza</label></div>
        									<div class="col-md-6"><input type="text" name="fname" class="form-control"></div>
        								</div>

			        					<br>
        								<div class="row">
        									<div class="col-md-6"><label>Jina la pili</label></div>
        									<div class="col-md-6"><input type="text" name="mname" class="form-control"></div>
        								</div>

			        					<br>
        								<div class="row">
        									<div class="col-md-6"><label>Jina la ukoo</label></div>
        									<div class="col-md-6"><input type="text" name="sname" class="form-control"></div>
        								</div>

			        					<br>

        								<div class="row">
        									<div class="col-md-6"><label>Hali ya VVU</label></div>
        									<div class="col-md-6">
        										
										    <select name="card" class="form-control">
						                    <option value="" hidden=""></option>
						                    <option value="positive">Positive</option>
						                    <option value="negative">Negative</option>
						                    </select>

        									</div>
        								</div>

			        					<br>

        								<div class="row">
        									<div class="col-md-10"><label>Ana kinga ya pepopunda?TT2+</label></div>
        									<div class="col-md-2">

										    <select name="card" class="form-control">
						                    <option value="" hidden=""></option>
						                    <option value="ndio">Ndio</option>
						                    <option value="hapana">Hapana</option>
						                    </select>

						                </div>

        								</div>

        							</div>
        						</div>

        						<div class="col-md-3 card">
        							<div class="card-header">Albendazole</div>

        							<div class="card-body">
        								

        								<div class="row">
        									<div class="col-md-4"><label>Miezi</label></div>

        									<div class="col-md-4">

											  <select name="card"  class="form-control">
							                    <option value="" hidden=""></option>
							                    <option value="mume">Mume</option>
							                    <option value="mke">Mke</option>
							                </select>

						                    </div>
        									<div class="col-md-4">

											  <select name="card"  class="form-control">
							                    <option value="" hidden=""></option>
							                    <option value="ndio">Ndio</option>
							                    <option value="hapana">Hapana</option>
							                </select>

						                    </div>

						            </div>
						            <br>
						            <hr>
        								<div class="row">
        									<div class="col-md-6"><label>HEID no</label></div>

        									<div class="col-md-6">

											  <select name="card"  class="form-control">
							                    <option value="" hidden=""></option>
							                    <option value="mume">Mume</option>
							                    <option value="mke">Mke</option>
							                </select>

						                    </div>
						                </div>

						                <br>

        								<div class="row">
        									<div class="col-md-8"><label>Hati punguzo chandarua</label></div>

        									<div class="col-md-4">

											  <select name="card"  class="form-control">
							                    <option value="" hidden=""></option>
							                    <option value="ndio">ndio</option>
							                    <option value="hapana">hapana</option>
							                </select>

						                    </div>
						                </div>

        							</div>
        						</div>

        				</div>
        				<hr>

        				<div class="row col-md-12">
        					
        					<div class="col-md-6 card">
        						
        						<div class="card-header">Tarehe ya chanjo</div>

        						<div class="card-body">

        								<div class="row">
        									<div class="col-md-4"><label>BCG</label></div>
        									<div class="col-md-8"><input type="text" name="bcg" class="form-control"></div>
        								</div>
        								<br>

        								<div class="row">
        									<div class="col-md-4"><label>OPVO</label></div>
        									<div class="col-md-8"><input type="text" name="bcg" class="form-control"></div>
        								</div>

        								<br>

        								<div class="row">
        									<div class="col-md-2"><label>PENTA</label></div>

        									<div class="col-md-2">

											  <select name="card"  class="form-control">
							                    <option value="" hidden=""></option>
							                    <option value="1">1</option>
							                    <option value="2">2</option>
							                    <option value="3">3</option>
							                </select>

						                    </div>
        									<div class="col-md-2">Tarehe</div>
        									<div class="col-md-6"><input type="date" name="date" class="form-control"></div>
						            </div>
						            <br>
        								<div class="row">
        									<div class="col-md-2"><label>POLIO</label></div>

        									<div class="col-md-2">

											  <select name="card"  class="form-control">
							                    <option value="" hidden=""></option>
							                    <option value="1">1</option>
							                    <option value="2">2</option>
							                    <option value="3">3</option>
							                </select>

						                    </div>
        									<div class="col-md-2">Tarehe</div>
        									<div class="col-md-6"><input type="date" name="date" class="form-control"></div>
						            </div>

						            <br>
        								<div class="row">
        									<div class="col-md-3"><label>Pneumococcal (PCV13)</label></div>

        									<div class="col-md-1">

											  <select name="card"  class="form-control">
							                    <option value="" hidden=""></option>
							                    <option value="1">1</option>
							                    <option value="2">2</option>
							                    <option value="3">3</option>
							                </select>

						                    </div>
        									<div class="col-md-2">Tarehe</div>
        									<div class="col-md-6"><input type="date" name="date" class="form-control"></div>
						            </div>

						            <br>
        								<div class="row">
        									<div class="col-md-2"><label>ROTA</label></div>

        									<div class="col-md-2">

											  <select name="card"  class="form-control">
							                    <option value="" hidden=""></option>
							                    <option value="1">1</option>
							                    <option value="2">2</option>
							                    <option value="3">3</option>
							                </select>

						                    </div>
        									<div class="col-md-2">Tarehe</div>
        									<div class="col-md-6"><input type="date" name="date" class="form-control"></div>
						            </div>

						            <br>
        								<div class="row">
        									<div class="col-md-2"><label>SURUA</label></div>

        									<div class="col-md-2">

											  <select name="card"  class="form-control">
							                    <option value="" hidden=""></option>
							                    <option value="1">1</option>
							                    <option value="2">2</option>
							                    <option value="3">3</option>
							                </select>

						                    </div>
        									<div class="col-md-2">Tarehe</div>
        									<div class="col-md-6"><input type="date" name="date" class="form-control"></div>
						            </div>
        						</div>
        					</div>
        					
        					<div class="col-md-4 card">
        						
        						<div class="card-header">Ukuaji wa mtoto</div>
        						<div class="card-body">

        								<div class="row">
        									<div class="col-md-2"><label>Miezi</label></div>

        									<div class="col-md-2">

											  <select name="card"  class="form-control">
							                    <option value="" hidden=""></option>
							                    <option value="9">9</option>
							                    <option value="18">18</option>
							                    <option value="36">36</option>
							                    <option value="48">48</option>
							                </select>

						                    </div>
        									<div class="col-md-5">Uzito/Umri</div>
        									<div class="col-md-3"><input type="text" name="date" class="form-control"></div>
        									<div class="col-md-4"></div><div class="col-md-5">Uzito/Urefu</div>
        									<div class="col-md-3"><input type="text" name="date" class="form-control"></div>
        									<div class="col-md-4"></div><div class="col-md-5">Urefu/Umri</div>
        									<div class="col-md-3"><input type="text" name="date" class="form-control"></div>
						            </div>
						            <hr>

						            <p><b>Ulishaji wa mtoto</b></p>

        								<div class="row">
        									<div class="col-md-8"><label>Maziwa ya mama</label></div>
        									<div class="col-md-4">

										    <select name="card" class="form-control">
						                    <option value="" hidden=""></option>
						                    <option value="ndio">Ndio</option>
						                    <option value="hapana">Hapana</option>
						                    </select>

						                </div>

        								</div>

        								<br>
        								<div class="row">
        									<div class="col-md-8"><label>Maziwa mbadala</label></div>
        									<div class="col-md-4">

										    <select name="card" class="form-control">
						                    <option value="" hidden=""></option>
						                    <option value="ndio">Ndio</option>
						                    <option value="hapana">Hapana</option>
						                    </select>

						                </div>

        								</div>
        								<hr>
        								<p><b>Rufaa</b></p>

        								<div class="row">
        									<div class="col-md-7"><label>Kituo alikotoka</label></div>
        									<div class="col-md-5"><input type="text" name="hcenter" class="form-control"></div>
        								</div>
        								<br>
        								<div class="row">
        									<div class="col-md-7"><label>Kituo alikopelekwa</label></div>
        									<div class="col-md-5"><input type="text" name="dcenter" class="form-control"></div>
        								</div>
        								<br>
        								<div class="row">
        									<div class="col-md-7"><label>Sababu ya rufaa</label></div>
        									<div class="col-md-5"><input type="text" name="reason" class="form-control"></div>
        								</div>
        								<br>
        						</div>
        					</div>

        					<div class="col-md-2 card">
        						
        						<div class="card-header">Vitamin A</div>

        						<div class="card-body">

        								<div class="row">
        									<div class="col-md-6"><label>Miezi 6</label></div>

        									<div class="col-md-6">

											  <select name="card"  class="form-control">
							                    <option value="" hidden=""></option>
							                    <option value="1">1</option>
							                    <option value="2">2</option>
							                    <option value="3">3</option>
							                </select>
						            </div>
						        </div>
        								<div class="row">
        									<div class="col-md-6"><label>Chini ya mwaka</label></div>

        									<div class="col-md-6">

											  <select name="card"  class="form-control">
							                    <option value="" hidden=""></option>
							                    <option value="1">1</option>
							                    <option value="2">2</option>
							                    <option value="3">3</option>
							                </select>
						            </div>
						        </div>
						        <br>
        								<div class="row">
        									<div class="col-md-6"><label>Mwaka 1-5</label></div>

        									<div class="col-md-6">

											  <select name="card"  class="form-control">
							                    <option value="" hidden=""></option>
							                    <option value="1">1</option>
							                    <option value="2">2</option>
							                    <option value="3">3</option>
							                </select>
						            </div>
						        </div>
        								<hr>
        								<p><b>Maoni</b></p>
        								<div class="row">
        									<textarea name="maoni" class="form-control" minlength="4" cols="30" rows="9" placeholder="Andika hapa maoni yako">
        										
        									</textarea>
						            </div>
						            <br 

        								<div>
        									<input type="submit" name="submit" class="form-control btn btn-primary">
						            </div>
						        </div>
						        <br>

        						</div>

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