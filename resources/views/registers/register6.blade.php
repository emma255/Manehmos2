@extends('layouts.main') 
@section('content') {{--
<div class="container"> --}}
	<div class="row">
		<div class="col-sm-12 card">

			<div class="card-header">
				<p>Taarifa Binafsi za mtuha namba 6</p>
			</div>

			<div class="card-body">

				<form action="/register6/store" method="post" name="r6" id="r6">
					{{csrf_field()}}

					<div class="form-group">

						<div class="row col-md-12">


						</div>

						<hr>

						<!-- start left division -->
						<div class="col-md-12 row">
							<div class="col-md-4">
								<div class="card form-group">
									<div class="col-md-12 card-body">
										<div class="row">
											<div class="col-md-4 form-group">
												<label>Namba ya usajili</label>
												<input required type="text" name="namba_ya_usajili" class="form-control{{ $errors->has('namba_ya_usajili') ? ' is-invalid' : '' }}">												@if ($errors->has('namba_ya_usajili'))
												<span class="invalid-feedback">
													<strong>{{ $errors->first('namba_ya_usajili') }}</strong>
												</span> @endif
											</div>
											<div class="col-md-5">
												<label>Aina ya hudhurio</label>
												<select required name="hudhurio" class="form-control{{ $errors->has('hudhurio') ? ' is-invalid' : '' }}"> 
														<option value="" hidden=""></option>
														<option value="Hudhurio la kwanza">Hudhurio la awali</option>
														<option value="Hudhurio la pili">Hudhurio la pili</option>
														<option value="Hudhurio la tatu">Hudhurio la tatu</option>
														<option value="Hudhurio la nne">Hudhurio la nne</option>
														<option value="Mengineyo">Mengineyo</option>
													</select>@if ($errors->has('hudhurio'))
												<span class="invalid-feedback">
													<strong>{{ $errors->first('hudhurio') }}</strong>
												</span> @endif
											</div>
											<div class="col-md-3">
												<label>Uzito</label><small>(Gramu)</small>
												<input required type="text" name="uzito" class="form-control{{ $errors->has('uzito') ? ' is-invalid' : '' }}">												@if ($errors->has('uzito'))
												<span class="invalid-feedback">
														<strong>{{ $errors->first('uzito') }}</strong>
													</span> @endif
											</div>
											<div class="col-md-12 form-group">
												<div class="row">
													<div class="col-md-6">
														<label>Tarehe ya hudhurio</label>
														<input required type="date" name="tarehe_ya_hudhurio" class="form-control{{ $errors->has('tarehe_ya_hudhurio') ? ' is-invalid' : '' }}"
														 name="tarehe_ya_hudhurio"> @if ($errors->has('tarehe_ya_hudhurio'))
														<span class="invalid-feedback">
															<strong>{{ $errors->first('tarehe_ya_hudhurio') }}</strong>
														</span> @endif
													</div>
													<div class="col-md-6">
														<label>Tarehe ya marudio</label>
														<input required type="date" name="tarehe_ya_marudio" class="form-control{{ $errors->has('tarehe_ya_marudio') ? ' is-invalid' : '' }}"
														 name="tarehe_ya_marudio"> @if ($errors->has('tarehe_ya_marudio'))
														<span class="invalid-feedback">
												<strong>{{ $errors->first('tarehe_ya_marudio') }}</strong>
											</span> @endif
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-12 card">
									<div class="card-header">Tarehe ya chanjo ya TT</div>
									<div class="card-body">
										<div class="row">
											<div class="col-md-5">
												<label>Aina ya TT</label>
												<select required name="TT" class="form-control{{ $errors->has('TT') ? ' is-invalid' : '' }}" name="TT"> 
													<option value="" hidden=""></option>
													<option value="TT1">TT1</option>
													<option value="TT2">TT2</option>
													<option value="TT2">TT3</option>
													<option value="TT2">TT4</option>
													<option value="TT2">TT5</option>
												</select>@if ($errors->has('TT'))
												<span class="invalid-feedback">
													<strong>{{ $errors->first('TT') }}</strong>
												</span> @endif
											</div>
											<div class="col-md-7">
												<label>Tarehe ya chanjo</label>
												<input required type="date" name="tarehe_ya_TT" class="form-control{{ $errors->has('tarehe_ya_TT') ? ' is-invalid' : '' }}"
												 name="tarehe_ya_TT"> @if ($errors->has('tarehe_ya_TT'))
												<span class="invalid-feedback">
											<strong>{{ $errors->first('tarehe_ya_TT') }}</strong>
										</span> @endif
											</div>
										</div>
									</div>
									<div class="card-footer"></div>
								</div>
							</div>

							<div class="col-md-4">
								<div class="col-md-12 card">
									<div class="card-header">Malaria</div>
									<div class="card-body">
										<div class="row">
											<div class="col-md-6">
												<label>Matokeo mRDT au BS</label>
												<select required name="mrdt_o_bs" class="form-control{{ $errors->has('mrdt_o_bs') ? ' is-invalid' : '' }}" name="mrdt_o_bs"> 
													<option value="" hidden=""></option>
													<option value="Positive">Positive</option>
													<option value="Negative">Negative</option>
												</select>@if ($errors->has('mrdt_o_bs'))
												<span class="invalid-feedback">
												<strong>{{ $errors->first('mrdt_o_bs') }}</strong>
											</span> @endif
											</div>

											<div class="col-md-6">
												<label>Amepata LLIN</label>
												<select required name="llin" class="form-control{{ $errors->has('llin') ? ' is-invalid' : '' }}" name="llin">
													<option value="" hidden=""></option>
													<option value="Ndiyo">Ndiyo</option>
													<option value="Hapana">Hapana</option>
												</select>@if ($errors->has('llin'))
												<span class="invalid-feedback">
													<strong>{{ $errors->first('llin') }}</strong>
												</span> @endif
											</div>
										</div>
										<br>
										<div class="row">
											<div class="col-md-6">
												<label>Aina ya IPT</label>
												<select required name="ipt" class="form-control{{ $errors->has('ipt') ? ' is-invalid' : '' }}" name="ipt"> 
													<option value="" hidden=""></option>
													<option value="IPT-1">IPT-1</option>
													<option value="IPT-2">IPT-2</option>
													<option value="IPT-3">IPT-3</option>
													<option value="IPT-4">IPT-4</option>
												</select>@if ($errors->has('ipt'))
												<span class="invalid-feedback">
													<strong>{{ $errors->first('ipt') }}</strong>
												</span> @endif

											</div>

											<div class="col-md-6">
												<label>Tarehe ya IPT</label>
												<input required type="date" name="tarehe_ya_ipt" class="form-control{{ $errors->has('tarehe_ya_ipt') ? ' is-invalid' : '' }}"
												 name="tarehe_ya_ipt"> @if ($errors->has('tarehe_ya_ipt'))
												<span class="invalid-feedback">
													<strong>{{ $errors->first('tarehe_ya_ipt') }}</strong>
												</span> @endif
											</div>
										</div>
									</div>
								</div>
								<br>
								<div class="col-md-12 card">

									<div class="card-header">Vipimo/Taarifa muhimu</div>

									<div class="card-body">

										<div class="row">
											<div class="col-md-3">
												<label>HB (g/dl)</label>
												<input required type="text" id="damu_HB" name="damu_HB" min="0" class="form-control{{ $errors->has('damu_HB') ? ' is-invalid' : '' }}"
												 name="damu_HB"> @if ($errors->has('damu_HB'))
												<span class="invalid-feedback">
													<strong>{{ $errors->first('damu_HB') }}</strong>
												</span> @endif
											</div>

											<div class="col-md-4">
												<label>BP (mmHg)</label>
												<input required type="text" name="BP" min="0" class="form-control{{ $errors->has('BP') ? ' is-invalid' : '' }}" name="BP">												@if ($errors->has('BP'))
												<span class="invalid-feedback">
													<strong>{{ $errors->first('BP') }}</strong>
												</span> @endif
											</div>
											<div class="col-md-5">
												<label>Mkojo una sukari</label>
												<select required name="sukari_kwenye_mkojo" class="form-control{{ $errors->has('sukari_kwenye_mkojo') ? ' is-invalid' : '' }}"
												 name="sukari_kwenye_mkojo"> 
													<option value="" hidden=""></option>
													<option value="ndio">Ndio</option>
													<option value="hapana">Hapana</option>
												</select>@if ($errors->has('sukari_kwenye_mkojo'))
												<span class="invalid-feedback">
													<strong>{{ $errors->first('sukari_kwenye_mkojo') }}</strong>
												</span> @endif
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
												<input type="checkbox" value="ndio" name="hana_matatizo" class="form-control{{ $errors->has('hana_matatizo') ? ' is-invalid' : '' }}"
												 name="hana_matatizo"> @if ($errors->has('hana_matatizo'))
												<span class="invalid-feedback">
													<strong>{{ $errors->first('hana_matatizo') }}</strong>
												</span> @endif
											</div>
										</div>

										<div class="row">
											<div class="col-md-9"><label>Anaemia</label></div>
											<div class="col-md-3">
												<input type="checkbox" value="ndio" name="Anaemia" class="form-control{{ $errors->has('Anaemia') ? ' is-invalid' : '' }}"
												 name="Anaemia"> @if ($errors->has('Anaemia'))
												<span class="invalid-feedback">
													<strong>{{ $errors->first('Anaemia') }}</strong>
												</span> @endif
											</div>
										</div>

										<div class="row">
											<div class="col-md-9"><label>Protenuria</label></div>
											<div class="col-md-3"><input type="checkbox" value="ndio" name="Protenuria" class="form-control{{ $errors->has('Protenuria') ? ' is-invalid' : '' }}"
												 name="Protenuria"> @if ($errors->has('Protenuria'))
												<span class="invalid-feedback">
													<strong>{{ $errors->first('Protenuria') }}</strong>
												</span> @endif
											</div>
										</div>

										<div class="row">
											<div class="col-md-9"><label>Shinikizo la juu la damu</label></div>
											<div class="col-md-3">
												<input type="checkbox" value="ndio" name="high_BP" class="form-control{{ $errors->has('high_BP') ? ' is-invalid' : '' }}"
												 name="high_BP"> @if ($errors->has('high_BP'))
												<span class="invalid-feedback">
													<strong>{{ $errors->first('high_BP') }}</strong>
												</span> @endif
											</div>
										</div>

										<div class="row">
											<div class="col-md-9"><label>Kutoongezeka uzito</label></div>
											<div class="col-md-3">
												<input type="checkbox" value="ndio" name="kutoongezeka_uzito" class="form-control{{ $errors->has('kutoongezeka_uzito') ? ' is-invalid' : '' }}"
												 name="kutoongezeka_uzito"> @if ($errors->has('kutoongezeka_uzito'))
												<span class="invalid-feedback">
													<strong>{{ $errors->first('kutoongezeka_uzito') }}</strong>
												</span> @endif
											</div>
										</div>

										<div class="row">
											<div class="col-md-9"><label>Damu ukeni</label></div>
											<div class="col-md-3">
												<input type="checkbox" value="ndio" name="damu_ukeni" class="form-control{{ $errors->has('damu_ukeni') ? ' is-invalid' : '' }}"
												 name="damu_ukeni"> @if ($errors->has('damu_ukeni'))
												<span class="invalid-feedback">
													<strong>{{ $errors->first('damu_ukeni') }}</strong>
												</span> @endif
											</div>
										</div>

										<div class="row">
											<div class="col-md-9"><label>Mlalo mbaya wa mtoto</label></div>
											<div class="col-md-3"><input type="checkbox" value="ndio" name="mlalo_mbaya_wa_mtoto" class="form-control{{ $errors->has('mlalo_mbaya_wa_mtoto') ? ' is-invalid' : '' }}"
												 name="mlalo_mbaya_wa_mtoto"> @if ($errors->has('mlalo_mbaya_wa_mtoto'))
												<span class="invalid-feedback">
													<strong>{{ $errors->first('mlalo_mbaya_wa_mtoto') }}</strong>
												</span> @endif
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
												<input required type="text" name="vidonge_vya_I_FA" min="0" class="form-control{{ $errors->has('vidonge_vya_I_FA') ? ' is-invalid' : '' }}"
												 name="vidonge_vya_I_FA"> @if ($errors->has('vidonge_vya_I_FA'))
												<span class="invalid-feedback">
													<strong>{{ $errors->first('vidonge_vya_I_FA') }}</strong>
												</span> @endif
											</div>

											<div class="col-md-6">
												<label>Albendazole/Mebendazole</label>
												<select required name="albendazole_mebendazole" class="form-control{{ $errors->has('albendazole_mebendazole') ? ' is-invalid' : '' }}"
												 name="albendazole_mebendazole"> 
													<option value="" hidden=""></option>
													<option value="Ndiyo">Ndiyo</option>
													<option value="Hapana">Hapana</option>
												</select>@if ($errors->has('albendazole_mebendazole'))
												<span class="invalid-feedback">
													<strong>{{ $errors->first('albendazole_mebendazole') }}</strong>
												</span> @endif
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

							<div class="col-md-5">
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
													<select required name="mume_tayari_ana_VVU" class="form-control{{ $errors->has('mume_tayari_ana_VVU') ? ' is-invalid' : '' }}">
													<option value="" hidden=""></option>
													<option value="Ndio">Ndio</option>
													<option value="Hapana">Hapana</option>
												</select>@if ($errors->has('mume_tayari_ana_VVU'))
													<span class="invalid-feedback">
													<strong>{{ $errors->first('mume_tayari_ana_VVU') }}</strong>
												</span> @endif
												</td>
												<td>
													<select required name="mke_tayari_ana_VVU" class="form-control{{ $errors->has('mke_tayari_ana_VVU') ? ' is-invalid' : '' }}">
													<option value="" hidden=""></option>
													<option value="Ndio">Ndio</option>
													<option value="Hapana">Hapana</option>
												</select>@if ($errors->has('mke_tayari_ana_VVU'))
													<span class="invalid-feedback">
													<strong>{{ $errors->first('mke_tayari_ana_VVU') }}</strong>
												</span> @endif
												</td>
											</tr>

											<tr>
												<td>Tarehe ya unasihi</td>
												<td>
													<input required type="date" name="mume_tarehe_ya_unasihi" class="form-control{{ $errors->has('mume_tarehe_ya_unasihi') ? ' is-invalid' : '' }}">													@if ($errors->has('mume_tarehe_ya_unasihi'))
													<span class="invalid-feedback">
														<strong>{{ $errors->first('mume_tarehe_ya_unasihi') }}</strong>
													</span> @endif
												</td>
												<td>
													<input required type="date" name="mke_tarehe_ya_unasihi" class="form-control{{ $errors->has('mke_tarehe_ya_unasihi') ? ' is-invalid' : '' }}">													@if ($errors->has('mke_tarehe_ya_unasihi'))
													<span class="invalid-feedback">
														<strong>{{ $errors->first('mke_tarehe_ya_unasihi') }}</strong>
													</span> @endif
												</td>
											</tr>

											<tr>
												<td>Amepima VVU</td>
												<td>
													<select required name="mume_amepima_VVU" class="form-control{{ $errors->has('mume_amepima_VVU') ? ' is-invalid' : '' }}"
													 name="mume_amepima_VVU"> 
													<option value="" hidden=""></option>
													<option value="Ndio">Ndio</option>
													<option value="Hapana">Hapana</option>
												</select>@if ($errors->has('mume_amepima_VVU'))
													<span class="invalid-feedback">
													<strong>{{ $errors->first('mume_amepima_VVU') }}</strong>
												</span> @endif
												</td>
												<td>
													<select required name="mke_amepima_VVU" class="form-control{{ $errors->has('mke_amepima_VVU') ? ' is-invalid' : '' }}" name="mke_amepima_VVU"> 
													<option value="" hidden=""></option>
													<option value="Ndio">Ndio</option>
													<option value="Hapana">Hapana</option>`
												</select>@if ($errors->has('mke_amepima_VVU'))
													<span class="invalid-feedback">
													<strong>{{ $errors->first('mke_amepima_VVU') }}</strong>
												</span> @endif
												</td>
											</tr>
											<td>Aina ya kipimo</td>
											<td>
												<select required name="mume_kipimo_aina" class="form-control{{ $errors->has('mume_kipimo_aina') ? ' is-invalid' : '' }}"
												 name="mume_kipimo_aina"> 
													<option value="" hidden=""></option>
													<option value="Kipimo 1">Kipimo 1</option>
													<option value="Kipimo 2">Kipimo 2</option>
												</select>@if ($errors->has('mume_kipimo_aina'))
												<span class="invalid-feedback">
													<strong>{{ $errors->first('mume_kipimo_aina') }}</strong>
												</span> @endif
											</td>
											<td>
												<select required name="mke_kipimo_aina" class="form-control{{ $errors->has('mke_kipimo_aina') ? ' is-invalid' : '' }}" name="mke_kipimo_aina"> 
													<option value="" hidden=""></option>
													<option value="Kipimo 1">Kipimo 1</option>
													<option value="Kipimo 2">Kipimo 2</option>`
												</select>@if ($errors->has('mke_kipimo_aina'))
												<span class="invalid-feedback">
													<strong>{{ $errors->first('mke_kipimo_aina') }}</strong>
												</span> @endif
											</td>
											</tr>

											<tr>
												<td>Tarehe ya kipimo</td>
												<td>
													<input required type="date" name="mume_tarehe_ya_kipimo" class="form-control{{ $errors->has('mume_tarehe_ya_kipimo') ? ' is-invalid' : '' }}"
													 name="mume_tarehe_ya_kipimo"> @if ($errors->has('mume_tarehe_ya_kipimo'))
													<span class="invalid-feedback">
														<strong>{{ $errors->first('mume_tarehe_ya_kipimo') }}</strong>
													</span> @endif
												</td>
												<td>
													<input required type="date" name="mke_tarehe_ya_kipimo" class="form-control{{ $errors->has('mke_tarehe_ya_kipimo') ? ' is-invalid' : '' }}"
													 name="mke_tarehe_ya_kipimo"> @if ($errors->has('mke_tarehe_ya_kipimo'))
													<span class="invalid-feedback">
														<strong>{{ $errors->first('mke_tarehe_ya_kipimo') }}</strong>
													</span> @endif
												</td>
											</tr>

											<tr>
												<td>Matokeo ya kipimo</td>
												<td>
													<select required name="mume_kipimo1_VVU" class="form-control{{ $errors->has('mume_kipimo1_VVU') ? ' is-invalid' : '' }}"
													 name="mume_kipimo1_VVU"> 
													<option value="" hidden=""></option>
													<option value="Positive">Positive</option>
													<option value="Negative">Negative</option>
												</select>@if ($errors->has('mume_kipimo1_VVU'))
													<span class="invalid-feedback">
														<strong>{{ $errors->first('mume_kipimo1_VVU') }}</strong>
													</span> @endif
												</td>
												<td>
													<select required name="mke_kipimo1_VVU" class="form-control{{ $errors->has('mke_kipimo1_VVU') ? ' is-invalid' : '' }}" name="mke_kipimo1_VVU">
													<option value="" hidden=""></option>
													<option value="Positive">Positive</option>
													<option value="Negative">Negative</option>
												</select>@if ($errors->has('mke_kipimo1_VVU'))
													<span class="invalid-feedback">
														<strong>{{ $errors->first('mke_kipimo1_VVU') }}</strong>
													</span> @endif
												</td>
											</tr>

											<tr>
												<td>Unasihi baada ya kupima</td>
												<td>
													<select required name="mume_unasihi_baada_ya_kipimo_1" class="form-control{{ $errors->has('mume_unasihi_baada_ya_kipimo_1') ? ' is-invalid' : '' }}"
													 name="mume_unasihi_baada_ya_kipimo_1"> 
														<option value="" hidden=""></option>
														<option value="Ndio">Ndio</option>
														<option value="Hapana">Hapana</option>
													</select>@if ($errors->has('mume_unasihi_baada_ya_kipimo_1'))
													<span class="invalid-feedback">
															<strong>{{ $errors->first('mume_unasihi_baada_ya_kipimo_1') }}</strong>
														</span> @endif
												</td>
												<td>
													<select required name="mke_unasihi_baada_ya_kipimo_1" class="form-control{{ $errors->has('mke_unasihi_baada_ya_kipimo_1') ? ' is-invalid' : '' }}"
													 name="mke_unasihi_baada_ya_kipimo_1"> 
														<option value="" hidden=""></option>
														<option value="Ndio">Ndio</option>
														<option value="Hapana">Hapana</option>
													</select>@if ($errors->has('mke_unasihi_baada_ya_kipimo_1'))
													<span class="invalid-feedback">
														<strong>{{ $errors->first('mke_unasihi_baada_ya_kipimo_1') }}</strong>
													</span> @endif
												</td>
											</tr>
										</table>
									</div>
								</div>
							</div>

							<div class="col-md-3">
								<div class="col-md-12 card">

									<div class="card-header">Vipimo vya magonjwa ya ngono</div>

									<div class="card-body">

										<div class="row">
											<div class="row form-group">
												<div class="col-md-2"><label>Kipimo</labe><label>Mume</labe></div>

													<div class="col-md-5">
														<label>Matokeo</label>
													<select required name="matokeo_stds_mume" class="form-control{{ $errors->has('matokeo_stds_mume') ? ' is-invalid' : '' }}"
													 name="matokeo_stds_mume">
														<option value="" hidden=""></option>
														<option value="Positive">Positive</option>
														<option value="Negative">Negative</option>
													</select>@if ($errors->has('matokeo_stds_mume'))
													<span class="invalid-feedback">
														<strong>{{ $errors->first('matokeo_stds_mume') }}</strong>
													</span> @endif
												</div>

												<div class="col-md-5">
													<label>Ametibiwa</label>
													<select required name="mume_ametibiwa" class="form-control{{ $errors->has('mume_ametibiwa') ? ' is-invalid' : '' }}" name="mume_ametibiwa"> 
														<option value="" hidden=""></option>
														<option value="ndio">Ndio</option>
														<option value="hapana">Hapana</option>
													</select>@if ($errors->has('mume_ametibiwa'))
													<span class="invalid-feedback">
														<strong>{{ $errors->first('mume_ametibiwa') }}</strong>
													</span> @endif
												</div>
											</div>

											<br>

											<div class="row">
												<div class="col-md-2"><label>Kipimo</labe><label>Mke</labe></div>

													<div class="col-md-5">
														<label>Matokeo</label>
													<select required name="matokeo_stds_mke" class="form-control{{ $errors->has('matokeo_stds_mke') ? ' is-invalid' : '' }}"
													 name="matokeo_stds_mke"> 
														<option value="" hidden=""></option>
														<option value="Positive">Positive</option>
														<option value="Negative">Negative</option>
													</select>@if ($errors->has('matokeo_stds_mke'))
													<span class="invalid-feedback">
														<strong>{{ $errors->first('matokeo_stds_mke') }}</strong>
													</span> @endif
												</div>

												<div class="col-md-5">
													<label>Ametibiwa</label>
													<select required name="mke_ametibiwa" class="form-control{{ $errors->has('mke_ametibiwa') ? ' is-invalid' : '' }}" name="mke_ametibiwa"> 
														<option value="" hidden=""></option>
														<option value="ndio">Ndio</option>
														<option value="hapana">Hapana</option>
													</select>@if ($errors->has('mke_ametibiwa'))
													<span class="invalid-feedback">
														<strong>{{ $errors->first('mke_ametibiwa') }}</strong>
													</span> @endif
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
											<div class="row form-group">
												<div class="col-md-2"><label>Kipimo</labe><label>Mume</labe></div>

													<div class="col-md-5">
														<label>Matokeo</label>
													<select required name="kaswende_mume" class="form-control{{ $errors->has('kaswende_mume') ? ' is-invalid' : '' }}" name="kaswende_mume"> 
														<option value="" hidden=""></option>
														<option value="Positive">Positive</option>
														<option value="Negative">Negative</option>
													</select>@if ($errors->has('kaswende_mume'))
													<span class="invalid-feedback">
														<strong>{{ $errors->first('kaswende_mume') }}</strong>
													</span> @endif
												</div>

												<div class="col-md-5">
													<label>Ametibiwa</label>
													<select required name="mume_ametibiwa_kaswende" class="form-control{{ $errors->has('mume_ametibiwa_kaswende') ? ' is-invalid' : '' }}"
													 name="mume_ametibiwa_kaswende">
															<option value="" hidden=""></option>
															<option value="ndio">Ndio</option>
															<option value="hapana">Hapana</option>
														</select>@if ($errors->has('mume_ametibiwa_kaswende'))
													<span class="invalid-feedback">
															<strong>{{ $errors->first('mume_ametibiwa_kaswende') }}</strong>
														</span> @endif
												</div>
											</div>

											<br>

											<div class="row">
												<div class="col-md-2"><label>Kipimo</labe><label>Mke</labe></div>

													<div class="col-md-5">
														<label>Matokeo</label>
													<select required name="kaswende_mke" class="form-control{{ $errors->has('kaswende_mke') ? ' is-invalid' : '' }}" name="kaswende_mke"> 
														<option value="" hidden=""></option>
														<option value="Positive">Positive</option>
														<option value="Negative">Negative</option>
													</select>@if ($errors->has('kaswende_mke'))
													<span class="invalid-feedback">
														<strong>{{ $errors->first('kaswende_mke') }}</strong>
													</span> @endif
												</div>

												<div class="col-md-5">
													<label>Ametibiwa</label>
													<select required name="mke_ametibiwa_kaswende" class="form-control{{ $errors->has('mke_ametibiwa_kaswende') ? ' is-invalid' : '' }}"
													 name="mke_ametibiwa_kaswende"> 
														<option value="" hidden=""></option>
														<option value="ndio">Ndio</option>
														<option value="hapana">Hapana</option>
													</select>@if ($errors->has('mke_ametibiwa_kaswende'))
													<span class="invalid-feedback">
														<strong>{{ $errors->first('mke_ametibiwa_kaswende') }}</strong>
													</span> @endif
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4">

								<div class="col-md-12 card form-group">

									<div class="card-header">
										<p align="center">Rufaa</p>
									</div>

									<div class="card-body">

										<div class="">

											<div class="row">
												<div class="col-md-5"><label>Tarehe</label></div>
												<div class="col-md-7">
													<input required type="date" id="tarehe_rufaa" name="tarehe_rufaa" class="form-group form-control{{ $errors->has('tarehe_rufaa') ? ' is-invalid' : '' }}">
												</div>

												@if ($errors->has('tarehe_rufaa'))
												<span class="invalid-feedback">
													<strong>{{ $errors->first('tarehe_rufaa') }}</strong>
												</span> @endif
											</div>

											<div class="row">
												<div class="col-md-5"><label>Kituo alikopelekwa</label></div>
												<div class="col-md-7">
													<input required type="text" id="rufaa_alikopelekwa" name="rufaa_alikopelekwa" class="form-group form-control{{ $errors->has('rufaa_alikopelekwa') ? ' is-invalid' : '' }}">
												</div>

												@if ($errors->has('rufaa_alikopelekwa'))
												<span class="invalid-feedback">
											<strong>{{ $errors->first('rufaa_alikopelekwa') }}</strong>
										</span> @endif
											</div>

											<div class="row">
												<div class="col-md-5"><label>Sababu ya rufaa</label></div>
												<div class="col-md-7 form-group"><textarea required type="text" id="sababu_ya_rufaa" name="sababu_ya_rufaa" rows="1" class="form-control{{ $errors->has('sababu_ya_rufaa') ? ' is-invalid' : '' }}">
												</textarea></div>

												@if ($errors->has('sababu_ya_rufaa'))
												<span class="invalid-feedback">
											<strong>{{ $errors->first('sababu_ya_rufaa') }}</strong>
										</span> @endif
											</div>

										</div>
									</div>
								</div>
								<div class="co-md-12">
									<div class="card">
										<div class="card-header">Maoni</div>
										<div class="card-body">
											<textarea minlength="4" name="maoni" id="maoni" cols="30" rows="4" class="form-control" placeholder="Andika maoni hapa"></textarea>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- end second row -->
						<br>
						<!-- start button (fourth) row -->
						<div class="row col-md-12">
							<div class="col-md-5"></div>
							<div class="col-md-2"><input required type="submit" class="form-control btn-primary" name="save6" value="Hifadhi" </div>
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