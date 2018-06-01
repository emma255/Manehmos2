@extends('layouts.main') 
@section('content')
<div class="container">
	<div class="row">
		<!-- 	<div class="col-sm-2"></div>
 -->
		<div class="col-sm card">

			<div class="card-header">
				<p>Taarifa Binafsi za mtuha namba 13</p>
			</div>

			<div class="card-body">

				<form action="/register13/store" method="post">
					{{csrf_field()}}

					<div class="form-group">
						<!--first row-->
						<div class="row">
							<!--left division-->
							<div class="col-sm-5">

								<div class="row">

									<div class="col-sm-6">
										<label>Namba ya kadi RCH4</label>
										<input type="text" class="form-control" name="Namba_ya_kadi">
									</div>

									<div class="col-sm-6">
										<label>Jina la mama</label>
										<input type="text" class="form-control" name="Jina_la_mama">
									</div>
								</div>

								<br>

								<div class="row">
									<div class="col-sm-6">
										<label>Hudhurio</label>
										<select name="hudhurio" class="form-control dropdown-toggle-primary show">
											<option value="" hidden=""></option>
											<option value="Masaa 48">Masaa 48</option>
											<option value="Siku 3-7">Siku 3-7</option>
											<option value="Siku 8-28">Siku 8-28</option>
											<option value="Siku 29-42">Siku 29-42</option>
											<option value="mengineyo">mengineyo</option>
				                        </select>
									</div>

									<div class="col-sm-6">
										<label>Tarehe ya hudhurio</label>
										<input type="date" name="tarehe_ya_hudhurio" class="form-control">
									</div>
								</div>

								<br>

								<div class="row">
									<div class="col-sm-6">
										<label>Vipimo (mama)</label>
										<div class="dropdown show dropdown-toggle-primary form-control">
											<a class="dropdown-toggle" role="button" id="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					                        {{ __('') }}
					                      </a>

											<div class="dropdown-menu form-control">
												<div>
													<div class="row">
														<div class="col-sm-5"><label>&nbsp;BP(mmHG)</label></div>

														<div class="col-sm-7">
															<input type="text" class="form-control" id="bp" name="mama_BP" placeholder="BP" min="0">
														</div>
													</div>
													<br>
													<div class="row">
														<div class="col-sm-6"><label>&nbsp;HB (g/dl)</label></div>

														<div class="col-sm-6">
															<input type="number" class="form-control" id="hb" name="mama_HB" placeholder="HB" min="0">
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

									<div class="col-sm-6">
										<div>
											<label>Matiti</label>
											<select name="matiti" class="form-control">
						                    <option value="" hidden=""></option>
						                    <option value="Chuchu zimechanika">Chuchu zimechanika</option>
						                    <option value="Mastitis">Yana uambukizo</option>
						                    <option value="Yana uambukizo">Jipu</option>
						                    <option value="Normal">Limenywea vizuri</option>
						                </select>
										</div>
									</div>
								</div>
								<br>

								<div class="row">
									<div class="col-sm-6">

										<div>
											<label>Tumbo la uzazi</label>
											<select name="tumbo_la_uzazi" class="form-control">
						                    <option value="" hidden=""></option>
						                    <option value="Kawaida">Kawaida</option>
						                    <option value="Maumivu">Maumivu</option>
						                    <option value="Kutonywea vizuri">Kutonywea vizuri</option>
						                </select>
										</div>
									</div>

									<div class="col-sm-6">
										<div>
											<label>Hali ya lochia (Rangi)</label>
											<input type="text" name="lochia" class="form-control">
										</div>
									</div>
								</div>
								<br>

							</div>
							<!--end left division-->
							<div class="col-sm-1"></div>



							<!--right division-->
							<div class="col-sm-6">
								<div class="row">
									<div class="col-sm-6">
										<div>
											<label>Hali ya msamba</label>
											<select name="hali_ya_msamba" class="form-control">
												<option value="" hidden=""></option>
												<option value="Mshono umeunga">Mshono umeunga</option>
												<option value="Mshono umeachia">Mshono umeachia</option>
						                	</select>
										</div>
									</div>

									<div class="col-sm-6">

										<div>
											<label>Fistula</label>
											<select name="fistula" class="form-control">
						                    <option value="" hidden=""></option>
						                    <option value="Ndio">Ndio</option>
						                    <option value="Hapana">Hapana</option>
						                </select>
										</div>
									</div>
								</div>

								<br>
								<div class="row">
									<div class="col-sm-4">
										<div>
											<label>Akili timamu</label>
											<select name="akili_timamu" class="form-control">
						                    <option value="" hidden=""></option>
						                    <option value="Ndio">Ndio</option>
						                    <option value="Hapana">Hapana</option>
						                </select>
										</div>
									</div>


									<div class="col-sm-8">
										<label>Dawa za nyongeza</label>
										<div class="dropdown show dropdown-toggle-primary form-control">
											<a class="dropdown-toggle" role="button" id="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					                        {{ __('Alizopewa mama') }}
					                      </a>

											<div class="dropdown-menu form-control">
												<div>
													<div class="row">
														<div class="col-sm-10">
															<p><b>&nbsp;Iron/Folic Acid I, F, au IFA</b></p>
														</div>
													</div>
													<div class="row">
														<div class="col-sm-6"><label>&nbsp;Aina ya dawa</label></div>

														<div class="col-sm-6">
															<input type="text" class="form-control" id="aina_ya_dawa_nyongeza" name="aina_ya_dawa_nyongeza" placeholder="Aina">
														</div>
													</div>
													<br>
													<div class="row">
														<div class="col-sm-6"><label>&nbsp;Idadi ya dawa</label></div>

														<div class="col-sm-6">
															<input type="number" class="form-control" id="idadi_ya_dawa_nyongeza" name="idadi_ya_dawa_nyongeza" placeholder="Idadi" min="0">
														</div>
													</div>
													<br>

													<div class="row">
														<div class="col-sm-10">
															<p><b>&nbsp;Vitamin A</b></p>
														</div>
													</div>
													<div class="row">
														<div class="col-sm-6"><label>&nbsp;Idadi ya dawa</label></div>

														<div class="col-sm-6">
															<input type="number" class="form-control" id="idadi_ya_dawa_vitaminA" name="idadi_ya_dawa_vitaminA" placeholder="Idadi" min="0">
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<br>

								<div class="row">
									<div class="col-sm-4">
										<label>Chanjo ya TT</label>
										<select name="chanjo_ya_TT" class="form-control">
											<option value="" hidden=""></option>
											<option value="Masaa 48">Masaa 48</option>
											<option value="Siku 3-7">Siku 3-7</option>
											<option value="Siku 8-28">Siku 8-28</option>
											<option value="Siku 29-42">Siku 29-42</option>
				                        </select>
									</div>

									<div class="col-sm-8">
										<label>Uzazi wa mpango</label>
										<div class="dropdown show dropdown-toggle-primary form-control">
											<a class="dropdown-toggle" role="button" id="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					                        {{ __('') }}
					                      </a>

											<div class="dropdown-menu form-control">
												<div class="row">
													<div class="col-sm-8"><label>&nbsp;Ushauri umetolewa</label></div>
													<div class="col-sm-4"><input type="checkbox" name="family_plan_usahuri_umetolewa" value="ndio"></div>
												</div>
												<div class="row">
													<div class="col-sm-8"><label>&nbsp;Amepatiwa kielelezo</label></div>
													<div class="col-sm-4"><input type="checkbox" name="family_plan_amepatiwa_kielelezo" value="ndio"></div>
												</div>
												<div class="row">
													<div class="col-sm-8"><label>&nbsp;Amepatiwanjia ya uzazi wa mpango wakati wa PPC</label></div>
													<div class="col-sm-4"><input type="checkbox" name="amepatiwa_family_plan_wakati_wa_ppc" value="ndio"></div>
												</div>
												<div class="row">
													<div class="col-sm-8"><label>&nbsp;Amepata rufaa kupata njia ya uzazi wa mpango</label></div>
													<div class="col-sm-4"><input type="checkbox" name="rufaa_kupata_family_plan" value="ndio"></div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<br>

								<div class="row">
									<div class="col-sm-2"><label>Rufaa</label></div>
									<div class="col-sm-10">
										<div class="dropdown show dropdown-toggle-primary form-control">
											<a class="dropdown-toggle" role="button" id="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					                        {{ __('Rufaa') }}
					                      </a>

											<div class="dropdown-menu form-control">
												<div class="row">
													<div class="col-sm-4"><label>&nbsp;Alikopelekwa</label></div>
													<div class="col-sm-7">
														<input type="text" name="rufaa_alikopelekwa" placeholder="Alikopelekwa" class="form-control">
													</div>
												</div>
												<br>
												<div class="row">
													<div class="col-sm-4"><label>&nbsp;Alikotoka</label></div>
													<div class="col-sm-7">
														<input type="text" name="rufaa_alikotoka" value="{{Auth::user()->center}}" placeholder="Alikotoka" class="form-control">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<br>
								<div class="row">
									<div class="col-sm-3">
										<label>Sababu ya rufaa / Maoni</label>
									</div>
									<div class="col-sm-9">
										<textarea name="rufaa_sababu_o_maoni" class="form-control" minlength="4" rows="3" placeholder="Andika maoni au sababu hapa"
										 required></textarea>
									</div>
								</div>
							</div>
							<!--end right division-->
						</div>
						<br>
						<div class="row">
							<div class="col-sm-5"></div>
							<div class="col-sm-2"><input type="Submit" name="submit" class="btn btn-primary form-control" value="Hifadhi"></div>
							<div class="col-sm-5"></div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection