<div class="container-fluid" id="container-wrapper">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Dashboard Pemeriksaan</h1>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="./">Home</a></li>
			<li class="breadcrumb-item active" aria-current="page">Dashboard</li>
		</ol>
	</div>

	<div class="row mb-3">
		<!-- Earnings (Monthly) Card Example -->
		<div class="col-xl-2 col-md-6 mb-4">
			<div class="card h-100">
				<div class="card-body">
					<div class="row align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-uppercase mb-1"
								style="font-size: 14px; color:#6777ef"><b>Tunggakan NP2</b>
							</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800">
								<?php echo ($counttunggakannp2->tunggakannp2); ?> &nbsp;&nbsp;&nbsp;<font size="2">Data
									Pemeriksaan</font>
							</div>
							<div class="mt-2 mb-0 text-muted text-xs">
								<span>Dengan Total Potensi: &nbsp;&nbsp;Rp
									<?php echo number_format($dataifpotensikkabelumterbitsp2->t_potensikkabelumterbitsp2, 2, ',', '.' ); ?>
								</span>
							</div>
						</div>
						<div class="col-auto">
							<i class="fas fa-address-book fa-2x text-warning"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Earnings (Annual) Card Example -->
		<div class="col-xl-2 col-md-6 mb-4">
			<div class="card h-100">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-uppercase mb-1"
								style="font-size: 14px; color:#6777ef"><b>Tunggakan SP2</b></div>
							<div class="h5 mb-0 font-weight-bold text-gray-800">
								<?php echo ($counttunggakansp2->tunggakansp2); ?> &nbsp;&nbsp;&nbsp;<font size="2">Data
									Pemeriksaan</font>
							</div>
							<div class="mt-2 mb-0 text-muted text-xs">
								<span>Dengan Total Potensi: &nbsp;&nbsp;Rp
									<?php echo number_format($dataifpotensikkabelumterbitlhp->t_potensikkabelumterbitlhp, 2, ',', '.' ); ?>
								</span>
							</div>
						</div>
						<div class="col-auto">
							<i class="fas fa-address-book fa-2x text-danger"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- New User Card Example -->
		<div class="col-xl-2 col-md-6 mb-4">
			<div class="card h-100">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-uppercase mb-1"
								style="font-size: 14px; color:#6777ef"><b>LHP Terbit</b></div>
							<div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
								<?php echo ($countlhpterbit->lhpterbit); ?>&nbsp;&nbsp;&nbsp;<font size="2">LHP</font>
							</div>
							<div class="mt-2 mb-0 text-muted text-xs">

							</div>
						</div>
						<div class="col-auto">
							<i class="fas fa-book fa-2x text-success"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- New User Card Example -->
		<div class="col-xl-2 col-md-6 mb-4">
			<div class="card h-100">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-uppercase mb-1"
								style="font-size: 14px; color:#6777ef"><b>LHP Konversi</b></div>
							<div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
								<?php echo number_format($sumlhpkonversi, 1, ',', '.' ); ?> &nbsp;&nbsp;&nbsp;</div>
							<div class="mt-2 mb-0 text-muted text-xs">
							<b style="color:#e83e8c" size="2"><?php echo round(($sumlhpkonversi/$targetlhpkonversi), 4)*100; ?> %</b>
							<br>
							<span>Dari target LHP Konversi:
									<?php echo number_format($targetlhpkonversi, 0, ',', '.' ); ?></span>
							</div>
						</div>
						<div class="col-auto">
							<i class="fas fa-book fa-2x text-info"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Pending Requests Card Example -->
		<div class="col-xl-2 col-md-6 mb-4">
			<div class="card h-100">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-uppercase mb-1"
								style="font-size: 14px; color:#6777ef"><b>SKP Terbit</b>
							</div>
							<div class="h6 mb-0 font-weight-bold text-gray-800">
								<font size="2">Rp <?php echo number_format($sumskpkbterbit, 2, ',', '.' ); ?></font>
							</div>
							<div class="mt-2 mb-0 text-muted text-xs">
								<span></span>
							</div>
						</div>
						<div class="col-auto">
							<i class="fas fa-donate fa-2x text-warning"></i>
						</div>
					</div>
				</div>
			</div>
		</div>


		<!-- Pending Requests Card Example -->
		<div class="col-xl-2 col-md-6 mb-4">
			<div class="card h-100">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-uppercase mb-1"
								style="font-size: 14px; color:#6777ef"><b>Realisasi</b>
							</div>
							<div class="h6 mb-0 font-weight-bold text-gray-800">
								<font size="2"> Rp <?php echo number_format($realisasipkm, 2, ',', '.' ); ?></font>
							</div>
							<div class="mt-2 mb-0 text-muted text-xs">
							<b style="color:#e83e8c" size="2"><?php echo round(($realisasipkm/$targetpkm), 4)*100; ?> %</b>
							<br>
								<span>Dari target Realisasi : Rp <?php echo number_format($targetpkm, 2, ',', '.' ); ?>



									<?php //echo $percentage =  ($sum/$count)*100; ?> </span>
							</div>
						</div>
						<div class="col-auto">
							<i class="fas fa-donate fa-2x text-success"></i>
						</div>
					</div>
				</div>
			</div>
		</div>


		<!--Area Chart-->
		<!--<div class="col-lg-4">
			<div class="card mb-4">
				<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
					<h6 class="m-0 font-weight-bold text-primary">Monthly Recap Report</h6>
					<div class="dropdown no-arrow">
						<a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
							aria-haspopup="true" aria-expanded="false">
							<i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
						</a>
						<div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
							<div class="dropdown-header">Dropdown Header:</div>
							<a class="dropdown-item" href="#">Action</a>
							<a class="dropdown-item" href="#">Another action</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#">Something else here</a>
						</div>
					</div>
				</div>
				<div class="card-body">
					<div class="chart-area">
						<canvas id="myAreaChart"></canvas>
					</div>
				</div>
			</div>
		</div>-->


		<!-- Alerts Basic -->
		<div class="col-lg-6">
			<div class="card shadow-sm mb-4">
				<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between"
					style="background-color:#e6e6ff">
					<h6 class="m-0 font-weight-bold text-primary">Kinerja Pemeriksaan 333</h6>
				</div>
				<div class="card-body">
					<table class="col-xl-0 table align-items-center table-flush">
						<thead class="thead-light">
							<a><b>LHP Selesai</b></a>
							<tr>
								<th>
									<font size="2" style="color:#0e1a71">Total LHP Selesai</font>
								</th>
								<th style="background-color:#bcc8f5">
									<font size="2" style="color:#0e1a71">LHP Konversi</font>
								</th>
								<th style="background-color:#8c98f3">
									<font size="2" style="color:#ffff">Target LHP Konversi</font>
								</th>
								<th style="background-color:#7583f0">
									<font size="2" style="color:#ffff">% Capaian LHP Konversi</font>
								</th>
								<th style="background-color:#5d6eee">
									<font size="2" style="color:#ffff">Lihat</font>
								</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td style="background-color:#f2f2f2"><?php echo ($countlhpterbit->lhpterbit); ?></td>
								<td style="background-color:#e6e6e6">
									<?php echo number_format($sumlhpkonversi, 1, ',', '.' ); ?></td>
								<td style="background-color:#d9d9d9">
									<?php echo number_format($targetlhpkonversi, 0, ',', '.' ); ?></td>
								<td style="background-color:#cccccc">
									<?php echo round(($sumlhpkonversi/$targetlhpkonversi), 4)*100; ?> %</td>
								<td style="background-color:#bfbfbf">
									<div class="btn-group dropright">
										<button type="button" class="btn btn-primary dropdown-toggle btn-sm"
											data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<i class="fa fa-fish"></i>
										</button>

										<div class="dropdown-menu">
											<a type="button" data-toggle="modal" data-target="#exampleModal1"
												id="#myBtn" class="dropdown-item"><i class="fa fa-edit"></i> Grafik
												Bulanan </a>
											<div class="dropdown-divider"></div>
											<a type="button" href="<?= base_url()?>" class="dropdown-item"><i
													class="fa fa-edit"></i> Data Tabel </a>
										</div>
								</td>
							</tr>

						</tbody>
					</table>




					
					<!-- Modal Chart LHP Terbit-->
					<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog"
						aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title font-weight-bold text-primary" id="exampleModalLabel">LHP
										Terbit (Bulan)</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<p>
										<!--Bar Chart-->
										<div class="col-lg-14">

											<div class="card-header py-3">

											</div>
											<div class="card-body">
												<div class="chart-bar">
													<canvas id="myBarChart1"></canvas>
												</div>
											</div>
										</div>
									</p>
								</div>
							</div>
						</div>
					</div>





					<br>
					<table class="col-xl-0 table align-items-center table-flush">
						<thead class="thead-light">
							<a><b>SKP Terbit</b></a>
							<tr>
								<th>
									<font size="2" style="color:#0e1a71">Total SKP Terbit</font>
								</th>
								<th style="background-color:#bcc8f5">
									<font size="2" style="color:#0e1a71">Potensi</font>
								</th>
								<th style="background-color:#8c98f3">
									<font size="2" style="color:#ffff">% SKP Terhadap Potensi</font>
								</th>
								<th style="background-color:#7583f0">
									<font size="2" style="color:#ffff">Lihat</font>
								</th>

							</tr>
						</thead>
						<tbody>
							<tr>
								<td style="background-color:#f2f2f2">
									<font size="2">Rp <?php echo number_format($sumskpkbterbit, 2, ',', '.' ); ?></font>
								</td>
								<td style="background-color:#e6e6e6">
									<font size="2">Rp
										<?php echo number_format($dataifpotensikkaterbitskpkb->t_potensikkaterbitskpkb, 2, ',', '.' ); ?>
									</font>
								</td>
								<td style="background-color:#d9d9d9">
									<?php echo round(($sumskpkbterbit/($dataifpotensikkaterbitskpkb->t_potensikkaterbitskpkb)), 4)*100; ?>
									%</td>
								<td style="background-color:#cccccc">
									<div class="btn-group dropright">
										<button type="button" class="btn btn-primary dropdown-toggle btn-sm"
											data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<i class="fa fa-fish"></i>
										</button>
										<div class="dropdown-menu">
										<a type="button" data-toggle="modal" data-target="#exampleModal2"
												id="#myBtn" class="dropdown-item"><i class="fa fa-edit"></i> Grafik
												Bulanan </a>
											<div class="dropdown-divider"></div>
											<a type="button" href="<?= base_url()?>" class="dropdown-item"><i
													class="fa fa-edit"></i> Data Tabel </a>
										</div>
								</td>
							</tr>

						</tbody>
					</table>





		<!-- Modal Chart SKP Terbit-->
		<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog"
						aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title font-weight-bold text-primary" id="exampleModalLabel">SKP Terbit (Bulan)</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<p>
										<!--Bar Chart-->
										<div class="col-lg-14">

											<div class="card-header py-3">

											</div>
											<div class="card-body">
												<div class="chart-bar">
													<canvas id="myBarChart2"></canvas>
												</div>
											</div>
										</div>
									</p>
								</div>
							</div>
						</div>
					</div>
					



					<br>
					<table class="col-xl-0 table align-items-center table-flush">
						<thead class="thead-light">
							<a><b>SKP Cair</b></a>
							<tr>
								<th>
									<font size="2" style="color:#0e1a71">Total SKP Cair</font>
								</th>
								<th style="background-color:#bcc8f5">
									<font size="2" style="color:#0e1a71">% Terhadap SKP Terbit</font>
								</th>
								<th style="background-color:#8c98f3">
									<font size="2" style="color:#ffff">% Terhadap Target Penerimaan</font>
								</th>
								<th style="background-color:#7583f0">
									<font size="2" style="color:#ffff">Lihat</font>
								</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td style="background-color:#f2f2f2">
									<font size="2">Rp <?php echo number_format($realisasipkm, 2, ',', '.' ); ?></font>
								</td>
								<td style="background-color:#e6e6e6">
									<font size="2">Rp <?php echo round(($realisasipkm/$sumskpkbterbit), 4)*100; ?> %
									</font>
								</td>
								<td style="background-color:#d9d9d9">
									<font size="2">Rp <?php echo round(($realisasipkm/$targetpkm), 4)*100; ?> %</font>
								</td>
								<td style="background-color:#cccccc">
									<div class="btn-group dropright">
										<button type="button" class="btn btn-primary dropdown-toggle btn-sm"
											data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<i class="fa fa-fish"></i>
										</button>
										<div class="dropdown-menu">
											<a type="button" href="<?= base_url()?>" class="dropdown-item"><i
													class="fa fa-edit"></i> Data Tabel </a>
										</div>
								</td>
							</tr>

						</tbody>
					</table>
					<br>
					<table class="col-xl-0 table align-items-center table-flush">
						<thead class="thead-light">
							<a><b>Daftar Tunggakan</b></a>
							<tr>
								<th>
									<font size="2" style="color:#0e1a71">Tunggakan NP2</font>
								</th>
								<th style="background-color:#bcc8f5">
									<font size="2" style="color:#0e1a71">Potensi dari Tunggakan NP2</font>
								</th>
								<th style="background-color:#8c98f3">
									<font size="2" style="color:#ffff">Tunggakan SP2</font>
								</th>
								<th style="background-color:#7583f0">
									<font size="2" style="color:#ffff">Potensi dari Tunggakan SP2</font>
								</th>

								<th style="background-color:#5d6eee">
									<font size="2" style="color:#ffff">Lihat</font>
								</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td style="background-color:#f2f2f2"><?php echo ($counttunggakannp2->tunggakannp2); ?>
									&nbsp;&nbsp;&nbsp;<font size="2">
								</td>
								<td style="background-color:#e6e6e6">
									<font size="2">Rp
										<?php echo number_format($dataifpotensikkabelumterbitsp2->t_potensikkabelumterbitsp2, 2, ',', '.' ); ?>
									</font>
								</td>
								<td style="background-color:#d9d9d9"><?php echo ($counttunggakansp2->tunggakansp2); ?>
								</td>
								<td style="background-color:#cccccc">
									<font size="2">Rp
										<?php echo number_format($dataifpotensikkabelumterbitlhp->t_potensikkabelumterbitlhp, 2, ',', '.' ); ?>
									</font>
								</td>
								<td style="background-color:#bfbfbf">
									<div class="btn-group dropright">
										<button type="button" class="btn btn-primary dropdown-toggle btn-sm"
											data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<i class="fa fa-fish"></i>
										</button>
										<div class="dropdown-menu">
										<a type="button" data-toggle="modal" data-target="#exampleModal3"
												id="#myBtn" class="dropdown-item"><i class="fa fa-edit"></i> Grafik
												Bulanan </a>
											<div class="dropdown-divider"></div>
											<a type="button" href="<?= base_url()?>" class="dropdown-item"><i
													class="fa fa-edit"></i> Data Tabel </a>
										</div>
								</td>
							</tr>

						</tbody>
					</table>


					<!-- Modal Chart LHP Terbit-->
					<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog"
						aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title font-weight-bold text-primary" id="exampleModalLabel">Tunggakan SP2 (Bulan)</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<p>
										<!--Bar Chart-->
										<div class="col-lg-14">

											<div class="card-header py-3">

											</div>
											<div class="card-body">
												<div class="chart-bar">
													<canvas id="myBarChart3"></canvas>
												</div>
											</div>
										</div>
									</p>
								</div>
							</div>
						</div>
					</div>



					<br>
					<table class="col-xl-0 table align-items-center table-flush">
						<thead class="thead-light">
							<a><b>Efektivitas Pemeriksaan</b></a>
							<tr>
								<td>
									<font size="2" style="color:#0e1a71">% SKP Terbit Terhadap Potensi</font>
								</td>
								<td style="background-color:#bcc8f5">
									<font size="2" style="color:#0e1a71">% Realisasi Penyelesaian Pemeriksaan</font>
								</td>
								<td style="background-color:#8c98f3">
									<font size="2" style="color:#ffff">% Penyelesaian LHP Tepat Waktu</font>
								</td>
								<td style="background-color:#7583f0">
									<font size="2" style="color:#ffff">% SKP Terbit Dengan Disetujui</font>
								</td>
								<td style="background-color:#5d6eee">
									<font size="2" style="color:#ffff">% Capaian IKU</font>
								</td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td style="background-color:#f2f2f2"><?php echo ($counttunggakannp2->tunggakannp2); ?>
									&nbsp;&nbsp;&nbsp;<font size="2">
								</td>
								<td style="background-color:#e6e6e6">
									<font size="2">Rp
										<?php echo number_format($dataifpotensikkabelumterbitsp2->t_potensikkabelumterbitsp2, 2, ',', '.' ); ?>
									</font>
								</td>
								<td style="background-color:#d9d9d9"><?php echo ($counttunggakansp2->tunggakansp2); ?>
								</td>
								<td style="background-color:#cccccc">
									<font size="2">Rp
										<?php echo number_format($dataifpotensikkabelumterbitlhp->t_potensikkabelumterbitlhp, 2, ',', '.' ); ?>
									</font>
								</td>
								<td style="background-color:#bfbfbf">
							</tr>

						</tbody>
					</table>
				</div>
			</div>

		</div>
		

		<!-- Donut Chart Tunggakan NP2 & SP2 -->
		<div class="col-lg-2">
			<div class="card shadow mb-4">
				<div class="card-header py-3" style="background-color:#e6e6ff">
					<h6 class="m-0 font-weight-bold text-primary">Tunggakan NP2</h6>
				</div>
				<div class="card-body">
					<div class="chart-pie pt-2">
						<canvas id="myPieChart1"></canvas>
					</div>
				</div>
				<div class="card-header py-3" style="background-color:#e6e6ff">
					<h6 class="m-0 font-weight-bold text-primary">Tunggakan SP2</h6>
				</div>
				<div class="card-body">
					<div class="chart-pie pt-4">
						<canvas id="myPieChart2"></canvas>
					</div>
				</div>
			</div>
		</div>

		<!-- Donut Chart LHP Selesai-->
		<div class="col-lg-2">
			<div class="card shadow mb-4">
				<div class="card-header py-3" style="background-color:#e6e6ff">
					<h6 class="m-0 font-weight-bold text-primary">LHP Selesai</h6>
				</div>
				<div class="card-body">
					<div class="chart-pie pt-4">
						<canvas id="myPieChart3"></canvas>
					</div>


				</div>
			</div>
		</div>		

		<!-- Kinerja Pemeriksaan - Petugas Pemeriksa Pajak -->
		<div class="col-lg-2">
			<div class="card shadow-sm mb-2">
				<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between"
					style="background-color:#ccf2ff">
					<a class="m-0 font-weight-bold text-primary">Kinerja Pemeriksaan - Petugas Pemeriksa Pajak</a>
				</div>
				<div class="card-body">
					
							<tr>
								<th style="background-color:#99ffb3" size="1"><b>Jumlah Potensi DSPP</th>
								<br>
								<th style="background-color:#e6ffcc" size="1"><b>Jumlah Tunggakan NP2</b></th>
							</tr>

				</div>
			</div>
		</div>






		<!-- Donut Chart SKP Terbit -->
		<!--<div class="col-lg-2">
			<div class="card shadow mb-4">
				<div class="card-header py-3" style="background-color:#e6e6ff">
					<h6 class="m-0 font-weight-bold text-primary">SKP Terbit</h6>
				</div>
				<div class="card-body">
					<div class="chart-pie pt-4">
						<canvas id="myPieChart4"></canvas>
					</div>
					<hr>

				</div>
			</div>
		</div>-->





	</div>




		<!-- Message From Customer-->

		<!--<div class="col-xl-4 col-lg-5 ">
			<div class="card">
				<div class="card-header py-4 bg-primary d-flex flex-row align-items-center justify-content-between">
					<h6 class="m-0 font-weight-bold text-light">Message From Customer</h6>
				</div>
				<div>
					<div class="customer-message align-items-center">
						<a class="font-weight-bold" href="#">
							<div class="text-truncate message-title">Hi there! I am wondering if you can help me with a
								problem I've been having.</div>
							<div class="small text-gray-500 message-time font-weight-bold">Udin Cilok · 58m</div>
						</a>
					</div>
					<div class="customer-message align-items-center">
						<a href="#">
							<div class="text-truncate message-title">But I must explain to you how all this mistaken idea
							</div>
							<div class="small text-gray-500 message-time">Nana Haminah · 58m</div>
						</a>
					</div>
					<div class="customer-message align-items-center">
						<a class="font-weight-bold" href="#">
							<div class="text-truncate message-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit
							</div>
							<div class="small text-gray-500 message-time font-weight-bold">Jajang Cincau · 25m</div>
						</a>
					</div>
					<div class="customer-message align-items-center">
						<a class="font-weight-bold" href="#">
							<div class="text-truncate message-title">At vero eos et accusamus et iusto odio dignissimos
								ducimus qui blanditiis
							</div>
							<div class="small text-gray-500 message-time font-weight-bold">Udin Wayang · 54m</div>
						</a>
					</div>
					<div class="card-footer text-center">
						<a class="m-0 small text-primary card-link" href="#">View More <i class="fas fa-chevron-right"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>-->


	<script type="text/javascript">


		// Bar Chart LHP Terbit
		var ctx = document.getElementById("myBarChart1");
		var myBarChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: ["January", "February", "March", "April", "May", "Junde", "Junae", "Juane", "Juwne" ],
				datasets: [{
					label: "Revenue",
					backgroundColor: "#4e73df",
					hoverBackgroundColor: "#2e59d9",
					borderColor: "#4e73df",
					data: [4215, 5312, 6251, 7841, 9821, 14984],
				}],
			},
			options: {
				maintainAspectRatio: false,
				layout: {
					padding: {
						left: 10,
						right: 25,
						top: 25,
						bottom: 0
					}
				},
				scales: {
					xAxes: [{
						time: {
							unit: 'month'
						},
						gridLines: {
							display: false,
							drawBorder: false
						},
						ticks: {
							maxTicksLimit: 6
						},
						maxBarThickness: 25,
					}],
					yAxes: [{
						ticks: {
							min: 0,
							max: 15000,
							maxTicksLimit: 5,
							padding: 10,
							// Include a dollar sign in the ticks
							callback: function (value, index, values) {
								return '$' + value;
							}
						},
						gridLines: {
							color: "rgb(234, 236, 244)",
							zeroLineColor: "rgb(234, 236, 244)",
							drawBorder: false,
							borderDash: [2],
							zeroLineBorderDash: [2]
						}
					}],
				},
				legend: {
					display: false
				},
				tooltips: {
					titleMarginBottom: 10,
					titleFontColor: '#6e707e',
					titleFontSize: 14,
					backgroundColor: "rgb(255,255,255)",
					bodyFontColor: "#858796",
					borderColor: '#dddfeb',
					borderWidth: 1,
					xPadding: 15,
					yPadding: 15,
					displayColors: false,
					caretPadding: 10,
					callbacks: {
						label: function (tooltipItem, chart) {
							var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
							return datasetLabel + ': $' + tooltipItem.yLabel;
						}
					}
				},
			}
		});

		// Bar Chart SKP Terbit
		var ctx = document.getElementById("myBarChart2");
		var myBarChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: ["January", "February", "March", "April", "May", "Junde", "Junae", "Juane", "Juwne" ],
				datasets: [{
					label: "Revenue",
					backgroundColor: "#4e73df",
					hoverBackgroundColor: "#2e59d9",
					borderColor: "#4e73df",
					data: [4215, 5312, 6251, 7841, 9821, 14984],
				}],
			},
			options: {
				maintainAspectRatio: false,
				layout: {
					padding: {
						left: 10,
						right: 25,
						top: 25,
						bottom: 0
					}
				},
				scales: {
					xAxes: [{
						time: {
							unit: 'month'
						},
						gridLines: {
							display: false,
							drawBorder: false
						},
						ticks: {
							maxTicksLimit: 6
						},
						maxBarThickness: 25,
					}],
					yAxes: [{
						ticks: {
							min: 0,
							max: 15000,
							maxTicksLimit: 5,
							padding: 10,
							// Include a dollar sign in the ticks
							callback: function (value, index, values) {
								return '$' + value;
							}
						},
						gridLines: {
							color: "rgb(234, 236, 244)",
							zeroLineColor: "rgb(234, 236, 244)",
							drawBorder: false,
							borderDash: [2],
							zeroLineBorderDash: [2]
						}
					}],
				},
				legend: {
					display: false
				},
				tooltips: {
					titleMarginBottom: 10,
					titleFontColor: '#6e707e',
					titleFontSize: 14,
					backgroundColor: "rgb(255,255,255)",
					bodyFontColor: "#858796",
					borderColor: '#dddfeb',
					borderWidth: 1,
					xPadding: 15,
					yPadding: 15,
					displayColors: false,
					caretPadding: 10,
					callbacks: {
						label: function (tooltipItem, chart) {
							var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
							return datasetLabel + ': $' + tooltipItem.yLabel;
						}
					}
				},
			}
		});
		
		// Bar Chart Tunggakan SP2
		var ctx = document.getElementById("myBarChart3");
		var myBarChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: ["January", "February", "March", "April", "May", "Junde", "Junae", "Juane", "Juwne" ],
				datasets: [{
					label: "Revenue",
					backgroundColor: "#4e73df",
					hoverBackgroundColor: "#2e59d9",
					borderColor: "#4e73df",
					data: [4215, 5312, 6251, 7841, 9821, 14984],
				}],
			},
			options: {
				maintainAspectRatio: false,
				layout: {
					padding: {
						left: 10,
						right: 25,
						top: 25,
						bottom: 0
					}
				},
				scales: {
					xAxes: [{
						time: {
							unit: 'month'
						},
						gridLines: {
							display: false,
							drawBorder: false
						},
						ticks: {
							maxTicksLimit: 6
						},
						maxBarThickness: 25,
					}],
					yAxes: [{
						ticks: {
							min: 0,
							max: 15000,
							maxTicksLimit: 5,
							padding: 10,
							// Include a dollar sign in the ticks
							callback: function (value, index, values) {
								return '$' + value;
							}
						},
						gridLines: {
							color: "rgb(234, 236, 244)",
							zeroLineColor: "rgb(234, 236, 244)",
							drawBorder: false,
							borderDash: [2],
							zeroLineBorderDash: [2]
						}
					}],
				},
				legend: {
					display: false
				},
				tooltips: {
					titleMarginBottom: 10,
					titleFontColor: '#6e707e',
					titleFontSize: 14,
					backgroundColor: "rgb(255,255,255)",
					bodyFontColor: "#858796",
					borderColor: '#dddfeb',
					borderWidth: 1,
					xPadding: 15,
					yPadding: 15,
					displayColors: false,
					caretPadding: 10,
					callbacks: {
						label: function (tooltipItem, chart) {
							var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
							return datasetLabel + ': $' + tooltipItem.yLabel;
						}
					}
				},
			}
		});


		// Pie Chart Tunggakan NP2
		var ctx = document.getElementById("myPieChart1");
		var myPieChart = new Chart(ctx, {
			type: 'doughnut',
			data: {
				labels: ["LB", "Rutin", "Pemsus", "Lokasi" ],
				datasets: [{
					data: [<?php echo ($pietunggakannp2darijenispemeriksaan->tunggakannp2darilb); ?>, <?php echo ($pietunggakannp2darijenispemeriksaan->tunggakannp2darirutin); ?>,
					<?php echo ($pietunggakannp2darijenispemeriksaan->tunggakannp2daripemsus); ?>, <?php echo ($pietunggakannp2darijenispemeriksaan->tunggakannp2darilokasi); ?>],
					backgroundColor: ['#4e73df', '#4edfdf', '#d55dad','#17a673'],
					hoverBackgroundColor: ['#4e73df', '#4edfdf', '#d55dad','#17a673'],
					hoverBorderColor: "rgba(234, 236, 244, 1)",
				}],
			},
			options: {
				maintainAspectRatio: false,
				tooltips: {
					backgroundColor: "rgb(255,255,255)",
					bodyFontColor: "#858796",
					borderColor: '#dddfeb',
					borderWidth: 1,
					xPadding: 15,
					yPadding: 15,
					displayColors: false,
					caretPadding: 10,
				},
				legend: {
					display: false
				},
				cutoutPercentage: 0,
			},
		});

		// Pie Chart Tunggakan SP2
		var ctx = document.getElementById("myPieChart2");
		var myPieChart = new Chart(ctx, {
			type: 'doughnut',
			data: {
				labels: ["LB", "Rutin", "Pemsus", "Lokasi"],
				datasets: [{
					data: [<?php echo ($pietunggakansp2darijenispemeriksaan->tunggakansp2darilb); ?>, <?php echo ($pietunggakansp2darijenispemeriksaan->tunggakansp2darirutin); ?>,
					<?php echo ($pietunggakansp2darijenispemeriksaan->tunggakansp2daripemsus); ?>, <?php echo ($pietunggakansp2darijenispemeriksaan->tunggakansp2darilokasi); ?>],
					backgroundColor: ['#4e73df', '#4edfdf', '#d55dad','#17a673'],
					hoverBackgroundColor: ['#4e73df', '#4edfdf', '#d55dad','#17a673'],
					hoverBorderColor: "rgba(234, 236, 244, 1)",
				}],
			},
			options: {
				maintainAspectRatio: false,
				tooltips: {
					backgroundColor: "rgb(255,255,255)",
					bodyFontColor: "#858796",
					borderColor: '#dddfeb',
					borderWidth: 1,
					xPadding: 15,
					yPadding: 15,
					displayColors: false,
					caretPadding: 10,
				},
				legend: {
					display: false
				},
				cutoutPercentage: 0,
			},
		});


		// Pie Chart Example
		var ctx = document.getElementById("myPieChart3");
		var myPieChart = new Chart(ctx, {
			type: 'doughnut',
			data: {
				labels: ["LB", "Rutin", "Pemsus", "Lokasi"],
				datasets: [{
					data: [<?php echo ($pielhpselesaidarijenispemeriksaan->lhpterbitdarilb); ?>, <?php echo ($pielhpselesaidarijenispemeriksaan->lhpterbitdarirutin); ?>,
					<?php echo ($pielhpselesaidarijenispemeriksaan->lhpterbitdaripemsus); ?>, <?php echo ($pielhpselesaidarijenispemeriksaan->lhpterbitdarilokasi); ?>],
					backgroundColor: ['#4e73df', '#4edfdf', '#d55dad','#17a673'],
					hoverBackgroundColor: ['#4e73df', '#4edfdf', '#d55dad','#17a673'],
					hoverBorderColor: "rgba(234, 236, 244, 1)",
				}],
			},
			options: {
				maintainAspectRatio: false,
				tooltips: {
					backgroundColor: "rgb(255,255,255)",
					bodyFontColor: "#858796",
					borderColor: '#dddfeb',
					borderWidth: 1,
					xPadding: 15,
					yPadding: 15,
					displayColors: false,
					caretPadding: 10,
				},
				legend: {
					display: false
				},
				cutoutPercentage: 80,
			},
		});


				// Pie Chart Example
				var ctx = document.getElementById("myPieChart4");
		var myPieChart = new Chart(ctx, {
			type: 'doughnut',
			data: {
				labels: ["Direct", "Referral", "Social"],
				datasets: [{
					data: [55, 30, 15],
					backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc'],
					hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf'],
					hoverBorderColor: "rgba(234, 236, 244, 1)",
				}],
			},
			options: {
				maintainAspectRatio: false,
				tooltips: {
					backgroundColor: "rgb(255,255,255)",
					bodyFontColor: "#858796",
					borderColor: '#dddfeb',
					borderWidth: 1,
					xPadding: 15,
					yPadding: 15,
					displayColors: false,
					caretPadding: 10,
				},
				legend: {
					display: false
				},
				cutoutPercentage: 80,
			},
		});
	</script>


	<!--<div class="col-xl-4 col-lg-5">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Products Sold</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle btn btn-primary btn-sm" href="#" role="button" id="dropdownMenuLink"
                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Month <i class="fas fa-chevron-down"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                      aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Select Periode</div>
                      <a class="dropdown-item" href="#">Today</a>
                      <a class="dropdown-item" href="#">Week</a>
                      <a class="dropdown-item active" href="#">Month</a>
                      <a class="dropdown-item" href="#">This Year</a>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="mb-3">
                    <div class="small text-gray-500">Oblong T-Shirt
                      <div class="small float-right"><b>600 of 800 Items</b></div>
                    </div>
                    <div class="progress" style="height: 12px;">
                      <div class="progress-bar bg-warning" role="progressbar" style="width: 80%" aria-valuenow="80"
                        aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                  <div class="mb-3">
                    <div class="small text-gray-500">Gundam 90'Editions
                      <div class="small float-right"><b>500 of 800 Items</b></div>
                    </div>
                    <div class="progress" style="height: 12px;">
                      <div class="progress-bar bg-success" role="progressbar" style="width: 70%" aria-valuenow="70"
                        aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                  <div class="mb-3">
                    <div class="small text-gray-500">Rounded Hat
                      <div class="small float-right"><b>455 of 800 Items</b></div>
                    </div>
                    <div class="progress" style="height: 12px;">
                      <div class="progress-bar bg-danger" role="progressbar" style="width: 55%" aria-valuenow="55"
                        aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                  <div class="mb-3">
                    <div class="small text-gray-500">Indomie Goreng
                      <div class="small float-right"><b>400 of 800 Items</b></div>
                    </div>
                    <div class="progress" style="height: 12px;">
                      <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50"
                        aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                  <div class="mb-3">
                    <div class="small text-gray-500">Remote Control Car Racing
                      <div class="small float-right"><b>200 of 800 Items</b></div>
                    </div>
                    <div class="progress" style="height: 12px;">
                      <div class="progress-bar bg-success" role="progressbar" style="width: 30%" aria-valuenow="30"
                        aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
                <div class="card-footer text-center">
                  <a class="m-0 small text-primary card-link" href="#">View More <i
                      class="fas fa-chevron-right"></i></a>
                </div>
              </div>
            </div>-->



	<!-- Invoice Example -->
	<!--<div class="col-xl-8 col-lg-7 mb-4">
              <div class="card">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Invoice</h6>
                  <a class="m-0 float-right btn btn-danger btn-sm" href="#">View More <i
                      class="fas fa-chevron-right"></i></a>
                </div>
                <div class="table-responsive">
                  <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                      <tr>
                        <th>Order ID</th>
                        <th>Customer</th>
                        <th>Item</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><a href="#">RA0449</a></td>
                        <td>Udin Wayang</td>
                        <td>Nasi Padang</td>
                        <td><span class="badge badge-success">Delivered</span></td>
                        <td><a href="#" class="btn btn-sm btn-primary">Detail</a></td>
                      </tr>
                      <tr>
                        <td><a href="#">RA5324</a></td>
                        <td>Jaenab Bajigur</td>
                        <td>Gundam 90' Edition</td>
                        <td><span class="badge badge-warning">Shipping</span></td>
                        <td><a href="#" class="btn btn-sm btn-primary">Detail</a></td>
                      </tr>
                      <tr>
                        <td><a href="#">RA8568</a></td>
                        <td>Rivat Mahesa</td>
                        <td>Oblong T-Shirt</td>
                        <td><span class="badge badge-danger">Pending</span></td>
                        <td><a href="#" class="btn btn-sm btn-primary">Detail</a></td>
                      </tr>
                      <tr>
                        <td><a href="#">RA1453</a></td>
                        <td>Indri Junanda</td>
                        <td>Hat Rounded</td>
                        <td><span class="badge badge-info">Processing</span></td>
                        <td><a href="#" class="btn btn-sm btn-primary">Detail</a></td>
                      </tr>
                      <tr>
                        <td><a href="#">RA1998</a></td>
                        <td>Udin Cilok</td>
                        <td>Baby Powder</td>
                        <td><span class="badge badge-success">Delivered</span></td>
                        <td><a href="#" class="btn btn-sm btn-primary">Detail</a></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="card-footer"></div>
              </div>
            </div>-->







	<!--Row

          <div class="row">
            <div class="col-lg-12 text-center">
              <p>Do you like this template ? you can download from <a href="https://github.com/indrijunanda/RuangAdmin"
                  class="btn btn-primary btn-sm" target="_blank"><i class="fab fa-fw fa-github"></i>&nbsp;GitHub</a></p>
            </div>
          </div>-->