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

				<form action="/register6/store" method="post">
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
											<input type="text" class="form-control" name="jina_la_mama">
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
												<select name="ana_kadi" class="form-control">
													<option value="" hidden=""></option>
													<option value="ndio">Ndio</option>
													<option value="hapana">Hapana</option>
												</select>
											</div>

											<div class="col-md-6">
												<label>Aina ya TT</label>
												<select name="TT" class="form-control">
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
												<input type="date" name="tarehe_ya_TT" class="form-control">
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
												<input type="number" id="hb" name="damu_HB" class="form-control" min="0">
											</div>

											<div class="col-md-6">
												<label>BP (mmHg)</label>
												<input type="text" name="BP" class="form-control" min="0">
											</div>
										</div>

										<br>

										<div class="row">
											<div class="col-md-8"><label>Sukari kwenye mkojo</label>
												<select name="sukari_kwenye_mkojo" class="form-control">
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
										<input type="text" class="form-control" name="namba_ya_usajili">
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
													<select name="matokeo_stds_mume" class="form-control">
															<option value="" hidden=""></option>
															<option value="Positive">Positive</option>
															<option value="Negative">Negative</option>
														</select>
												</div>

												<div class="col-md-5">
													<label>Ametibiwa</label>
													<select name="mume_ametibiwa" class="form-control">
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
													<select name="matokeo_stds_mke" class="form-control">
															<option value="" hidden=""></option>
															<option value="Positive">Positive</option>
															<option value="Negative">Negative</option>
														</select>
												</div>

												<div class="col-md-5">
													<label>Ametibiwa</label>
													<select name="mke_ametibiwa" class="form-control">
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
												<select name="kaswende_mume" class="form-control">
																<option value="" hidden=""></option>
																<option value="Positive">Positive</option>
																<option value="Negative">Negative</option>
															</select>
											</div>

											<div class="col-md-5">
												<label>Ametibiwa</label>
												<select name="mume_ametibiwa_kaswende" class="form-control">
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
												<select name="kaswende_mke" class="form-control">
																<option value="" hidden=""></option>
																<option value="Positive">Positive</option>
																<option value="Negative">Negative</option>
															</select>
											</div>

											<div class="col-md-5">
												<label>Ametibiwa</label>
												<select name="mke_ametibiwa_kaswende" class="form-control">
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
												<input type="checkbox" class "form-control" value="ndio" name="hana_matatizo">
											</div>
										</div>

										<div class="row">
											<div class="col-md-9"><label>Kuharibika mimba mfululizo</label></div>
											<div class="col-md-3">
												<input type="checkbox" class "form-control" value="ndio" name="kuharibika_mimba_mfululizo">
											</div>
										</div>

										<div class="row">
											<div class="col-md-9"><label>Anaemia</label></div>
											<div class="col-md-3">
												<input type="checkbox" class "form-control" value="ndio" name="Anaemia">
											</div>
										</div>

										<div class="row">
											<div class="col-md-9"><label>Protenuria</label></div>
											<div class="col-md-3"><input type="checkbox" class "form-control" value="ndio" name="Protenuria">
											</div>
										</div>

										<div class="row">
											<div class="col-md-9"><label>Shinikizo la juu la damu</label></div>
											<div class="col-md-3">
												<input type="checkbox" class "form-control" value="ndio" name="high_BP">
											</div>
										</div>

										<div class="row">
											<div class="col-md-9"><label>Kutoongezeka uzito</label></div>
											<div class="col-md-3">
												<input type="checkbox" class "form-control" value="ndio" name="kutoongezeka_uzito">
											</div>
										</div>

										<div class="row">
											<div class="col-md-9"><label>Damu ukeni</label></div>
											<div class="col-md-3">
												<input type="checkbox" class "form-control" value="ndio" name="damu_ukeni">
											</div>
										</div>

										<div class="row">
											<div class="col-md-9"><label>Mlalo mbaya wa mtoto</label></div>
											<div class="col-md-3"><input type="checkbox" class "form-control" value="ndio" name="mlalo_mbaya_wa_mtoto">
											</div>
										</div>
										<div class="row">
											<div class="col-md-9"><label>Mimba ya nne kuendelea</label></div>
											<div class="col-md-3"><input type="checkbox" class "form-control" value="ndio" name="mimba_ya_nne+">
											</div>
										</div>
										<div class="row">
											<div class="col-md-9"><label>Kuzaa kwa operesheni</label></div>
											<div class="col-md-3"><input type="checkbox" class "form-control" value="ndio" name="kuzaa_kwa_operesheni">
											</div>
										</div>
										<div class="row">
											<div class="col-md-9"><label>Vacuum extraction</label></div>
											<div class="col-md-3"><input type="checkbox" class "form-control" value="ndio" name="vacuum_extraction">
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
												<input type="number" name="vidonge_vya_I_FA" class="form-control" min="0">
											</div>

											<div class="col-md-6">
												<label>Albendazole / Mebendazole</label>
												<select name="albendazole_mebendazole" class="form-control">
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
													<select name="mume_tayari_ana_VVU" class="form-control col-md-10">
													<option value="" hidden=""></option>
													<option value="Ndio">Ndio</option>
													<option value="Hapana">Hapana</option>
												</select>
												</td>
												<td>
													<select name="mke_tayari_ana_VVU" class="form-control col-md-10">
													<option value="" hidden=""></option>
													<option value="Ndio">Ndio</option>
													<option value="Hapana">Hapana</option>
												</select>
												</td>
											</tr>

											<tr>
												<td>Tarehe ya unasihi</td>
												<td>
													<input type="date" class="form-control col-md-10" name="mume_tarehe_ya_unasihi">
												</td>
												<td>
													<input type="date" class="form-control col-md-10" name="mke_tarehe_ya_unasihi">
												</td>
											</tr>

											<tr>
												<td>Amepima VVU</td>
												<td>
													<select name="mume_amepima_VVU" class="form-control col-md-10">
													<option value="" hidden=""></option>
													<option value="Ndio">Ndio</option>
													<option value="Hapana">Hapana</option>
												</select>
												</td>
												<td>
													<select name="mke_amepima_VVU" class="form-control col-md-10">
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
													<input type="date" name="mume_tarehe_ya_kipimo" class="form-control col-md-10">
												</td>
												<td>
													<input type="date" name="mke_tarehe_ya_kipimo" class="form-control col-md-10">
												</td>
											</tr>

											<tr>
												<td>Kipimo 1 VVU</td>
												<td>
													<select name="mume_kipimo1_VVU" class="form-control col-md-10">
													<option value="" hidden=""></option>
													<option value="Positive">Positive</option>
													<option value="Negative">Negative</option>
												</select>
												</td>
												<td>
													<select name="mke_kipimo1_VVU" class="form-control col-md-10">
													<option value="" hidden=""></option>
													<option value="Positive">Positive</option>
													<option value="Negative">Negative</option>
												</select>
												</td>
											</tr>

											<tr>
												<td>Unasihi baada ya kupima</td>
												<td>
													<select name="mume_unasihi_baada_ya_kipimo_1" class="form-control col-md-10">
													<option value="" hidden=""></option>
													<option value="Ndio">Ndio</option>
													<option value="Hapana">Hapana</option>
												</select>
												</td>
												<td>
													<select name="mke_unasihi_baada_ya_kipimo_1" class="form-control col-md-10">
													<option value="" hidden=""></option>
													<option value="Ndio">Ndio</option>
													<option value="Hapana">Hapana</option>
												</select>
												</td>
											</tr>

											<tr>
												<td>Kipimo 2 VVU</td>
												<td>
													<select name="mume_kipimo_2_VVU" class="form-control col-md-10">
													<option value="" hidden=""></option>
													<option value="Positive">Positive</option>
													<option value="Negative">Negative</option>
												</select>
												</td>
												<td>
													<select name="mke_kipimo_2_VVU" class="form-control col-md-10">
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
												<select name="mrdt_o_bs" class="form-control">
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
												<select name="ipt" class="form-control">
													<option value="" hidden=""></option>
													<option value="IPT-1">IPT-1</option>
													<option value="IPT-2">IPT-2</option>
													<option value="IPT-3">IPT-3</option>
													<option value="IPT-4">IPT-4</option>
												</select>

											</div>

											<div class="col-md-6">
												<label>Tarehe ya IPT</label>
												<input type="date" name="tarehe_ya_ipt" class="form-control">
											</div>
										</div>
									</div>
								</div>

								<br>

								<div class="row col-md-12">
									<label>Maoni</label>
									<textarea name="maoni" placeholder="Andika maoni hapa" class="form-control" rows="7" minlength="4"></textarea>
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
										<input type="date" id="tarehe_rufaa" name="tarehe_rufaa" class="form-control">
									</div>

									<div class="col-md-3">
										<label>Kituo alikopelekwa</label>
										<input type="text" id="rufaa_alikopelekwa" name="rufaa_alikopelekwa" class="form-control">
									</div>

									<div class="col-md-3">
										<label>Kituo alikotokea</label>
										<input type="text" id="rufaa_alipotoka" name="rufaa_alipotoka" class="form-control">
									</div>

									<div class="col-md-3">
										<label>Sababu ya rufaa</label>
										<textarea type="text" id="sababu_ya_rufaa" name="sababu_ya_rufaa" class="form-control" rows="1"></textarea>
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