@extends('layouts.main') 
@section('content')
<div class="container">
	<div class="row">
		<!-- 	<div class="col-md-2"></div>
 -->
		<div class="col-sm-12 card">

			<div class="card-header">
				<p>Taarifa Binafsi za mtuha namba 6</p>
			</div>

			<div class="card-body">

				<form action="{{ ('register6/store') }}" method="post">
					{{csrf_field()}}

					<div class="form-group">

						<div class="row col-md-12">


						</div>

						<hr>

						<!-- start left division -->
						<div class="col-md-12 row">
							<div class="col-md-4">
								<div class="col-md-12">
									<div class="row">
										<div class="col-md-12">
											<label>Jina la mama</label>
											<input type="text" class="form-control" name="maternal_name">
										</div>
									</div>
								</div>
								<br>
								<div class="col-md-12 card">
									<div class="card-header">Tarehe ya chanjo</div>
									<div class="card-body">
										<div class="row">
											<div class="col-md-6">
												<label>Ana kadi?</label>
												<select name="card" class="form-control">
													<option value="" hidden=""></option>
													<option value="ndio">Ndio</option>
													<option value="hapana">Hapana</option>
												</select>
											</div>

											<div class="col-md-6">
												<label>Aina ya TT</label>
												<select name="tt_no" class="form-control">
													<option value="" hidden=""></option>
													<option value="TT1">TT1</option>
													<option value="TT2">TT2</option>
													<option value="TT2">TT3</option>
													<option value="TT2">TT4</option>
													<option value="TT2">TT5</option>
												</select>
											</div>
										</div>

										<br>

										<div class="row">
											<div class="col-md-8">
												<label>Tarehe ya chanjo</label>
												<input type="date" name="tt_date" class="form-control">
											</div>
										</div>
									</div>
								</div>

								<br>

								<div class="col-md-12 card">

									<div class="card-header">Vipimo/Taarifa muhimu</div>

									<div class="card-body">

										<div class="row">
											<div class="col-md-6">
												<label>Damu (HB) (g/dl)</label>
												<input type="number" id="hb" name="hb" class="form-control" min="0">
											</div>

											<div class="col-md-6">
												<label>BP (mmHg)</label>
												<input type="text" name="bp" class="form-control" min="0">
											</div>
										</div>

										<br>

										<div class="row">
											<div class="col-md-8"><label>Sukari kwenye mkojo</label>
												<select name="maternal_uriine" class="form-control">
												<option value="" hidden=""></option>
												<option value="ndio">Ndio</option>
												<option value="hapana">Hapana</option>
											</select>
											</div>
										</div>
									</div>

								</div>
							</div>

							<div class="col-md-4">
								<div class="col-md-12">
									<div class="col-md-12">
										<label>Namba ya usajili</label>
										<input type="text" class="form-control" name="rch_4_no">
									</div>

								</div>

								<br>

								<div class="col-md-12 card">

									<div class="card-header">Vipimo vya magonjwa ya ngono</div>

									<div class="card-body">

										<div class="row">
											<div class="row">
												<div class="col-md-2"><label>Kipimo</labe><label>Mume</labe></div>

													<div class="col-md-5">
														<label>Matokeo</label>
													<select name="disease_men" class="form-control">
															<option value="" hidden=""></option>
															<option value="Positive">Positive</option>
															<option value="Negative">Negative</option>
														</select>
												</div>

												<div class="col-md-5">
													<label>Ametibiwa</label>
													<select name="treatment_men" class="form-control">
															<option value="" hidden=""></option>
															<option value="ndio">Ndio</option>
															<option value="hapana">Hapana</option>
														</select>
												</div>
											</div>

											<br>

											<div class="row">
												<div class="col-md-2"><label>Kipimo</labe><label>Mke</labe></div>

													<div class="col-md-5">
														<label>Matokeo</label>
													<select name="disease_women" class="form-control">
															<option value="" hidden=""></option>
															<option value="Positive">Positive</option>
															<option value="Negative">Negative</option>
														</select>
												</div>

												<div class="col-md-5">
													<label>Ametibiwa</label>
													<select name="treatment_women" class="form-control">
															<option value="" hidden=""></option>
															<option value="ndio">Ndio</option>
															<option value="hapana">Hapana</option>
														</select>
												</div>
											</div>
										</div>
									</div>
								</div>

								<br>

								<div class="col-md-12 card">
									<div class="card-header">Kipimo cha kaswende</div>
									<div class="card-body">
										<div class="row">
											<div class="col-md-2"><label>Kipimo</labe><label>Mume</labe></div>

														<div class="col-md-5">
															<label>Matokeo</label>
												<select name="stds_men" class="form-control">
																<option value="" hidden=""></option>
																<option value="Positive">Positive</option>
																<option value="Negative">Negative</option>
															</select>
											</div>

											<div class="col-md-5">
												<label>Ametibiwa</label>
												<select name="stds_treat_men" class="form-control">
																<option value="" hidden=""></option>
																<option value="ndio">Ndio</option>
																<option value="hapana">Hapana</option>
															</select>
											</div>
										</div>
										<br>
										<div class="row">
											<div class="col-md-2"><label>Kipimo</labe><label>Mke</labe></div>

														<div class="col-md-5">
															<label>Matokeo</label>
												<select name="stds_women" class="form-control">
																<option value="" hidden=""></option>
																<option value="Positive">Positive</option>
																<option value="Negative">Negative</option>
															</select>
											</div>

											<div class="col-md-5">
												<label>Ametibiwa</label>
												<select name="stds_treat_women" class="form-control">
																<option value="" hidden=""></option>
																<option value="ndio">Ndio</option>
																<option value="hapana">Hapana</option>
															</select>
											</div>
										</div>
									</div>
								</div>

							</div>

							<div class="col-md-4">
								<div class="col-md-12 card">
									<div class="card-header">Mahudhurio ya Marudio</div>
									<div class="card-body">

										<div class="row">
											<div class="col-md-9"><label>Hana matatizo</label>
											</div>
											<div class="col-md-3">
												<input type="checkbox" class "form-control" value="Hana matatizo" name="no_problem">
											</div>
										</div>

										<div class="row">
											<div class="col-md-9"><label>Kuharibika mimba mfululizo</label></div>
											<div class="col-md-3">
												<input type="checkbox" class "form-control" value="kuharibika mimba mfululizo, mara mbili kuendelea" name="miscarriage">
											</div>
										</div>

										<div class="row">
											<div class="col-md-9"><label>Anaemia</label></div>
											<div class="col-md-3">
												<input type="checkbox" class "form-control" value="Anaemia" name="anaemia">
											</div>
										</div>

										<div class="row">
											<div class="col-md-9"><label>Protenuria</label></div>
											<div class="col-md-3"><input type="checkbox" class "form-control" value="Protenuria" name="protenuria">
											</div>
										</div>

										<div class="row">
											<div class="col-md-9"><label>Shinikizo la juu la damu</label></div>
											<div class="col-md-3">
												<input type="checkbox" class "form-control" value="High blood pressure (BP)" name="high_bp">
											</div>
										</div>

										<div class="row">
											<div class="col-md-9"><label>Kutoongezeka uzito</label></div>
											<div class="col-md-3">
												<input type="checkbox" class "form-control" value="Kutoongezeka uzito" name "kutorefuka">
											</div>
										</div>

										<div class="row">
											<div class="col-md-9"><label>Damu ukeni</label></div>
											<div class="col-md-3">
												<input type="checkbox" class "form-control" value="Damu ukeni" name="Damu ukeni">
											</div>
										</div>

										<div class="row">
											<div class="col-md-9"><label>Mlalo mbaya wa mtoto</label></div>
											<div class="col-md-3"><input type="checkbox" class "form-control" value="Mlalo mbaya wa mtoto" name="mlalo_mbaya">
											</div>
										</div>
										<div class="row">
											<div class="col-md-9"><label>Mimba ya nne kuendelea</label></div>
											<div class="col-md-3"><input type="checkbox" class "form-control" value="Mimba ya nne kuendelea" name="mimba_4+">
											</div>
										</div>
										<div class="row">
											<div class="col-md-9"><label>Kuzaa kwa operesheni</label></div>
											<div class="col-md-3"><input type="checkbox" class "form-control" value="Kuzaa kwa operesheni" name="c_s">
											</div>
										</div>
										<div class="row">
											<div class="col-md-9"><label>Vacuum extraction</label></div>
											<div class="col-md-3"><input type="checkbox" class "form-control" value="Vacuum extraction" name="ve">
											</div>
										</div>
									</div>
								</div>

								<br>

								<div class="col-md-12 card">
									{{--
									<div class="card-header">Vidonge</div> --}}
									<div class="card-body">
										<div class="row">
											<div class="col-md-6">
												<label>Idadi ya vidonge vya I, FA</label>
												<input type="number" name="ipt_3_number" class="form-control" min="0">
											</div>

											<div class="col-md-6">
												<label>Albendazole / Mebendazole</label>
												<select name="llin" class="form-control">
													<option value="" hidden=""></option>
													<option value="Ndiyo">Ndiyo</option>
													<option value="Hapana">Hapana</option>
												</select>
											</div>
										</div>
									</div>
								</div>
							</div>



						</div>

						<!-- end first row -->

						<br>

						<!-- start second row -->

						<div class="row col-md-12">
							<div class="col-md-7">
								<div class="col-md-12 card">
									<div class="card-header">Huduma ya PMTCT</div>
									<div class="card-body row">
										<table class="table table-sm table-bordered">
											<tr>
												<th>&nbsp;</th>
												<th>Mume</th>
												<th>Mke</th>
											</tr>

											<tr>
												<td>Tayari ana VVU</td>
												<td>
													<select name="ana_vvu_mwanaume" class="form-control col-md-10">
													<option value="" hidden=""></option>
													<option value="Ndio">Ndio</option>
													<option value="Hapana">Hapana</option>
												</select>
												</td>
												<td>
													<select name="ana_vvu_mwanamke" class="form-control col-md-10">
													<option value="" hidden=""></option>
													<option value="Ndio">Ndio</option>
													<option value="Hapana">Hapana</option>
												</select>
												</td>
											</tr>

											<tr>
												<td>Tarehe ya unasihi</td>
												<td>
													<input type="date" class="form-control col-md-10" name="unasihi_mwanaume_date">
												</td>
												<td>
													<input type="date" class="form-control col-md-10" name="unasihi_mwanamke_date">
												</td>
											</tr>

											<tr>
												<td>Amepima VVU</td>
												<td>
													<select name="amepima_vvu_mwanaume" class="form-control col-md-10">
													<option value="" hidden=""></option>
													<option value="Ndio">Ndio</option>
													<option value="Hapana">Hapana</option>
												</select>
												</td>
												<td>
													<select name="amepima_vvu_mwanamke" class="form-control col-md-10">
													<option value="" hidden=""></option>
													<option value="Ndio">Ndio</option>
													<option value="Hapana">Hapana</option>
													<option value="Hapana">Hapana</option>
													<option value="Hapana">Hapana</option>
													<option value="Hapana">Hapana</option>
												</select>
												</td>
											</tr>

											<tr>
												<td>Tarehe ya kipimo</td>
												<td>
													<input type="date" name="kipimo_mwanaume_date" class="form-control col-md-10">
												</td>
												<td>
													<input type="date" name="kipimo_mwanamke_date" class="form-control col-md-10">
												</td>
											</tr>

											<tr>
												<td>Kipimo 1 VVU</td>
												<td>
													<select name="kipimo_1_mume" class="form-control col-md-10">
													<option value="" hidden=""></option>
													<option value="Positive">Positive</option>
													<option value="Negative">Negative</option>
												</select>
												</td>
												<td>
													<select name="kipimo_1_mke" class="form-control col-md-10">
													<option value="" hidden=""></option>
													<option value="Positive">Positive</option>
													<option value="Negative">Negative</option>
												</select>
												</td>
											</tr>

											<tr>
												<td>Unasihi baada ya kupima</td>
												<td>
													<select name="unasihi_1_mume" class="form-control col-md-10">
													<option value="" hidden=""></option>
													<option value="Ndio">Ndio</option>
													<option value="Hapana">Hapana</option>
												</select>
												</td>
												<td>
													<select name="unasihi_1_mke" class="form-control col-md-10">
													<option value="" hidden=""></option>
													<option value="Ndio">Ndio</option>
													<option value="Hapana">Hapana</option>
												</select>
												</td>
											</tr>

											<tr>
												<td>Kipimo 2 VVU</td>
												<td>
													<select name="kipimo_2_mume" class="form-control col-md-10">
													<option value="" hidden=""></option>
													<option value="Positive">Positive</option>
													<option value="Negative">Negative</option>
												</select>
												</td>
												<td>
													<select name="kipimo_2_mke" class="form-control col-md-10">
													<option value="" hidden=""></option>
													<option value="Positive">Positive</option>
													<option value="Negative">Negative</option>
												</select>
												</td>
											</tr>
										</table>
									</div>
								</div>

							</div>
							<div class="col-md-5">
								<div class="col-md-12 card">
									<div class="card-header">Malaria</div>
									<div class="card-body">
										<div class="row">
											<div class="col-md-6">
												<label>Matokeo mRDT au BS</label>
												<select name="mrdt" class="form-control">
													<option value="" hidden=""></option>
													<option value="Positive">Positive</option>
													<option value="Negative">Negative</option>
												</select>
											</div>

											<div class="col-md-6">
												<label>Amepata LLIN</label>
												<select name="llin" class="form-control">
													<option value="" hidden=""></option>
													<option value="Ndiyo">Ndiyo</option>
													<option value="Hapana">Hapana</option>
												</select>
											</div>
										</div>
										<br>
										<div class="row">
											<div class="col-md-6">
												<label>Aina ya IPT</label>
												<select name="aian_ya_ipt" class="form-control">
													<option value="" hidden=""></option>
													<option value="IPT-1">IPT-1</option>
													<option value="IPT-2">IPT-2</option>
													<option value="IPT-3">IPT-3</option>
													<option value="IPT-4">IPT-4</option>
												</select>

											</div>

											<div class="col-md-6">
												<label>Tarehe ya IPT</label>
												<input type="date" name="ipt_date" class="form-control">
											</div>
										</div>
									</div>
								</div>

								<br>

								<div class="row col-md-12">
									<div class="col-md-5">
										<label>Ushauri ulishaji wa mtoto</label>
										<select name="ulishaji_mtoto" class="form-control">
											<option value="" hidden=""></option>
											<option value="Ndio">Ndio</option>
											<option value="Hapana">Hapana</option>
										</select>
									</div>

									<div class="col-md-7">
										<label>Maoni</label>
										<textarea name="Maoni" palceholder="Andika maoni hapa" class="form-control" rows="7" minlength="4"></textarea>
									</div>

								</div>

							</div>

						</div>

						<!-- end second row -->

						<br>
						<!-- start third row -->
						<div class="col-md-12 card">

							<div class="card-header">
								<p align="center">Rufaa</p>
							</div>

							<div class="card-body">

								<div class="row col-md-12">

									<div class="col-md-3">
										<label>Tarehe</label>
										<input type="date" id="referal_date" name="referal_date" class="form-control">
									</div>

									<div class="col-md-3">
										<label>Kituo alikopelekwa</label>
										<input type="text" id="dest_center" name="dest_center" class="form-control">
									</div>

									<div class="col-md-3">
										<label>Kituo alikotokea</label>
										<input type="text" id="homet_center" name="homet_center" class="form-control">
									</div>

									<div class="col-md-3">
										<label>Sababu ya rufaa</label>
										<textarea type="text" id="reason" name="reason" class="form-control" rows="1"></textarea>
									</div>

								</div>
							</div>
						</div>

						<!-- end third row -->

						<br>

						<!-- start button (fourth) row -->

						<div class="row col-md-12">
							<div class="col-md-5"></div>
							<div class="col-md-2"><input type="submit" class="form-control btn-primary" name="save6"></div>
							<div class="col-md-5"></div>
						</div>

						<!-- end button row -->

				</form>

				</div>

			</div>

		</div>

	</div>

	</div
@endsection