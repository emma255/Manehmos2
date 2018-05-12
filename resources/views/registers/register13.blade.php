@extends('layouts.main') 
@section('content')
<div class="container">
	<div class="row">
		<!-- 	<div class="col-md-2"></div>
 -->
		<div class="col-md card">

			<div class="card-header">
				<p>Taarifa Binafsi za mtuha namba 13</p>
			</div>

			<div class="card-body">

				<form action="{{ ('register13/store') }}" method="post">
					{{csrf_field()}}

					<div class="form-group">
						<!--first row-->
						<div class="row">
							<!--left division-->
							<div class="col-md-5">

								<div class="row">

									<div class="col-md-6">
										<label>Namba ya kadi RCH4</label>
										<input type="text" class="form-control" name="rch4_no">
									</div>

									<div class="col-md-6">
										<label>Jina la mama</label>
										<input type="text" class="form-control" name="mother_name">
									</div>
								</div>

								<br>

								<div class="row">
									<div class="col-md-6">
										<label>Hudhurio</label>
										<select name="hudhurio" class="form-control dropdown-toggle-primary show">
											<option value="" hidden=""></option>
											<option value="Masaa 48">Masaa 48</option>
											<option value="Siku 3-7">Siku 3-7</option>
											<option value="Siku 8-28">Siku 8-28</option>
											<option value="Siku 29-42">Siku 29-42</option>
				                        </select>
									</div>

									<div class="col-md-6">
										<label>Tarehe ya hudhurio</label>
										<input type="date" name="date" class="form-control">
									</div>
								</div>

								<br>

								<div class="row">
									<div class="col-md-6">
										<label>Vipimo (mama)</label>
										<div class="dropdown show dropdown-toggle-primary form-control">
											<a class="dropdown-toggle" role="button" id="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					                        {{ __('') }}
					                      </a>

											<div class="dropdown-menu form-control">
												<div>
													<div class="row">
														<div class="col-md-6"><label>&nbsp;BP(mmHG)</label></div>

														<div class="col-md-6">
															<input type="number" class="form-control" id="bp" name="bp" placeholder="BP" min="0">
														</div>
													</div>
													<br>
													<div class="row">
														<div class="col-md-6"><label>&nbsp;HB (g/dl)</label></div>

														<div class="col-md-6">
															<input type="number" class="form-control" id="hb" name="hb" placeholder="HB" min="0">
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

									<div class="col-md-6">
										<div>
											<label>Matiti</label>
											<select name="Matiti" class="form-control">
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
									<div class="col-md-6">

										<div>
											<label>Tumbo la uzazi</label>
											<select name="tumbo" class="form-control">
						                    <option value="" hidden=""></option>
						                    <option value="Kawaida">Kawaida</option>
						                    <option value="Maumivu">Maumivu</option>
						                    <option value="Kutonywea vizuri">Kutonywea vizuri</option>
						                </select>
										</div>
									</div>

									<div class="col-md-6">
										<div>
											<label>Hali ya lochia (Rangi)</label>
											<input type="text" name="lochia" class="form-control">
										</div>
									</div>
								</div>
								<br>
								<div class="row">
									<div class="col-md-6">

										<div>
											<label>Hali ya msamba</label>
											<select name="msamba" class="form-control">
						                    <option value="" hidden=""></option>
						                    <option value="Mshono umeunga">Mshono umeunga</option>
						                    <option value="Mshono umeachia">Mshono umeachia</option>
						                </select>
										</div>
									</div>

									<div class="col-md-6">

										<div>
											<label>Fistula</label>
											<select name="Fistula" class="form-control">
						                    <option value="" hidden=""></option>
						                    <option value="Ndio">Ndio</option>
						                    <option value="Hapana">Hapana</option>
						                </select>
										</div>
									</div>
								</div>

								<br>
								<div class="row">
									<div class="col-md-4">
										<div>
											<label>Akili timamu</label>
											<select name="mentality" class="form-control">
						                    <option value="" hidden=""></option>
						                    <option value="Ndio">Ndio</option>
						                    <option value="Hapana">Hapana</option>
						                </select>
										</div>
									</div>


									<div class="col-md-8">
										<label>Dawa za nyongeza</label>
										<div class="dropdown show dropdown-toggle-primary form-control">
											<a class="dropdown-toggle" role="button" id="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					                        {{ __('Alizopewa mama') }}
					                      </a>

											<div class="dropdown-menu form-control">
												<div>
													<div class="row">
														<div class="col-md-10">
															<p><b>&nbsp;Iron/Folic Acid I, F, au IFA</b></p>
														</div>
													</div>
													<div class="row">
														<div class="col-md-6"><label>&nbsp;Aina ya dawa</label></div>

														<div class="col-md-6">
															<input type="text" class="form-control" id="aina_dawa" name="aina_dawa" placeholder="Aina">
														</div>
													</div>
													<br>
													<div class="row">
														<div class="col-md-6"><label>&nbsp;Idadi ya dawa</label></div>

														<div class="col-md-6">
															<input type="number" class="form-control" id="idadi_dawa" name="idadi_dawa" placeholder="Idadi" min="0">
														</div>
													</div>
													<br>

													<div class="row">
														<div class="col-md-10">
															<p><b>&nbsp;Vitamin A</b></p>
														</div>
													</div>
													<div class="row">
														<div class="col-md-6"><label>&nbsp;Aina ya dawa</label></div>

														<div class="col-md-6">
															<input type="number" class="form-control" id="idadi_vitamin_A" name="idadi_vitamin_A" placeholder="Idadi" min="0">
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!--end left division-->
							<div class="col-md-1"></div>



							<!--right division-->
							<div class="col-md-6">
								<div class="row">
									<div class="col-md-4">
										<label>Chanjo ya TT</label>
										<select name="Chanjo_TT" class="form-control">
											<option value="" hidden=""></option>
											<option value="Masaa 48">Masaa 48</option>
											<option value="Siku 3-7">Siku 3-7</option>
											<option value="Siku 8-28">Siku 8-28</option>
											<option value="Siku 29-42">Siku 29-42</option>
				                        </select>
									</div>

									<div class="col-md-8">
										<label>Uzazi wa mpango</label>
										<div class="dropdown show dropdown-toggle-primary form-control">
											<a class="dropdown-toggle" role="button" id="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					                        {{ __('') }}
					                      </a>

											<div class="dropdown-menu form-control">
												<div class="row">
													<div class="col-md-8"><label>&nbsp;Ushauri umetolewa</label></div>
													<div class="col-md-4"><input type="checkbox"></div>
												</div>
												<div class="row">
													<div class="col-md-8"><label>&nbsp;Amepatiwa kielelezo</label></div>
													<div class="col-md-4"><input type="checkbox"></div>
												</div>
												<div class="row">
													<div class="col-md-8"><label>&nbsp;Amepatiwanjia ya uzazi wa mpango wakati wa PPC</label></div>
													<div class="col-md-4"><input type="checkbox"></div>
												</div>
												<div class="row">
													<div class="col-md-8"><label>&nbsp;Amepata rufaa kupata njia ya uzazi wa mpango</label></div>
													<div class="col-md-4"><input type="checkbox"></div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<br>

								<div class="row">
									<div class="col-md-5">
										<label>Hudhurio la mtoto</label>
										<select name="hudhurio_mtoto" class="form-control">
											<option value="" hidden=""></option>
											<option value="Masaa 48">Masaa 48</option>
											<option value="Siku 3-7">Siku 3-7</option>
											<option value="Siku 8-28">Siku 8-28</option>
											<option value="Siku 29-42">Siku 29-42</option>
				                        </select>
									</div>


									<div class="col-md-7">
										<label>Tarehe ya hudhurio</label>
										<input type="date" name="mtoto_date" class="form-control">
									</div>
								</div>


								<br>

								<div class="row">
									<div class="col-md-8">
										<label>Vipimo/Huduma kwa mtoto</label>
										<div class="dropdown show dropdown-toggle-primary form-control">
											<a class="dropdown-toggle" role="button" id="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					                        {{ __('') }}
					                      </a>

											<div class="dropdown-menu form-control">
												<div>
													<div class="row">
														<div class="col-md-6"><label>&nbsp;Joto</label></div>

														<div class="col-md-5">
															<input type="number" class="form-control" id="temperature" name="temperature" placeholder="Joto" min="0">
														</div>
													</div>
													<br>
													<div class="row">
														<div class="col-md-6"><label>&nbsp;Chanjo</label></div>

														<div class="col-md-5">
															<input type="text" class="form-control" name="child_vacc" placeholder="Chanjo">
														</div>
													</div>
													<br>
													<div class="row">
														<div class="col-md-6"><label>&nbsp;Uzito (g/Kg)</label></div>

														<div class="col-md-5">
															<input type="number" class="form-control" name="child_weight" placeholder="Uzito" min="0">
														</div>
													</div>
													<br>
													<div class="row">
														<div class="col-md-6"><label>&nbsp;HB (g/dl au %)</label></div>

														<div class="col-md-5">
															<input type="number" class="form-control" name="child_hb" placeholder="HB" min="0">
														</div>
													</div>
													<br>
													<div class="row">
														<div class="col-md-6"><label>&nbsp;KMC</label></div>

														<div class="col-md-5">
															<input type="number" class="form-control" name="child_kmc" placeholder="KMC" min="0">
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>


									<div class="col-md-4">
										<label>ARV Prophlaxis</label>

										<div class="dropdown show dropdown-toggle-primary form-control">
											<a class="dropdown-toggle" role="button" id="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					                        {{ __('') }}
					                      </a>

											<div class="dropdown-menu form-control">
												<div>
													<div class="row">
														<div class="col-md-3"><label>&nbsp;ARV</label></div>

														<div class="col-md-8">
															<input type="text" class="form-control" name="arv" placeholder="Aina">
														</div>
													</div>
													<br>
													<div class="row">
														<div class="col-md-3"><label>&nbsp;Muda</label></div>

														<div class="col-md-8">
															<input type="text" class="form-control" name="time" placeholder="Muda">
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<br>

								<div class="row">
									<div class="col-md-8">
										<label>Uambukizo wa mtoto</label>
										<div class="dropdown show dropdown-toggle-primary form-control">
											<a class="dropdown-toggle" role="button" id="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					                        {{ __('') }}
					                      </a>

											<div class="dropdown-menu form-control">
												<div class="row">
													<div class="col-md-4"><label>&nbsp;Kitovu</label></div>
													<div class="col-md-8"><input type="checkbox"></div>
												</div>
												<div class="row">
													<div class="col-md-4"><label>&nbsp;Ngozi</label></div>
													<div class="col-md-8"><input type="checkbox"></div>
												</div>
												<div class="row">
													<div class="col-md-4"><label>&nbsp;Mdomo</label></div>
													<div class="col-md-8"><input type="checkbox"></div>
												</div>
												<div class="row">
													<div class="col-md-4"><label>&nbsp;Macho</label></div>
													<div class="col-md-8"><input type="checkbox"></div>
												</div>
												<div class="row">
													<div class="col-md-4"><label>&nbsp;Jaundice</label></div>
													<div class="col-md-8"><input type="checkbox"></div>
												</div>
												<div class="row">
													<div class="col-md-7"><label>&nbsp;Uambukizo mkali</label></div>
													<div class="col-md-4"><input type="checkbox"></div>
												</div>
											</div>
										</div>
									</div>


									<div class="col-md-4">
										<label>Ulishaji wa mtoto</label>
										<select name="hudhurio_mtoto" class="form-control">
											<option value="" hidden=""></option>
											<option value="EBF">EBF</option>
											<option value="RF">RF</option>
											<option value="MF">MF</option>
				                        </select>
									</div>
								</div>
								<br>
								<div class="row">
									<div class="col-md-2"><label>Rufaa</label></div>
									<div class="col-md-10">
										<div class="dropdown show dropdown-toggle-primary form-control">
											<a class="dropdown-toggle" role="button" id="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					                        {{ __('Rufaa') }}
					                      </a>

											<div class="dropdown-menu form-control">
												<div class="row">
													<div class="col-md-4"><label>&nbsp;Alikopelekwa</label></div>
													<div class="col-md-7">
														<input type="text" name="appeal_dest" placeholder="Alikopelekwa" class="form-control">
													</div>
												</div>
												<br>
												<div class="row">
													<div class="col-md-4"><label>&nbsp;Alikotoka</label></div>
													<div class="col-md-7">
														<input type="text" name="appeal_home" placeholder="Alikotoka" class="form-control">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<br>
								<div class="row">
									<div class="col-md-3">
										<label>Sababu ya rufaa / Maoni</label>
									</div>
									<div class="col-md-9">
										<textarea name="maoni" class="form-control" minlength="4" rows="3" placeholder="Andika maoni au sababu hapa" required></textarea>
									</div>
								</div>
							</div>

						</div>
					</div>
					<!--end right division-->

			</div>

			<div class="row">
				<div class="col-md-5"></div>
				<div class="col-md-2"><input type="Submit" name="submit" class="btn btn-primary form-control"></div>
				<div class="col-md-5"></div>
			</div>
			</form>
			<br>

		</div>


	</div>

</div>

</div
@endsection