
<!------------------------------------------------------------ADMIN------------------------------------------------>
<!------------------------------------------------------------ADMIN------------------------------------------------>
<!------------------------------------------------------------ADMIN------------------------------------------------>

<?php if($this->session->userdata('login_pemeriksaanbangko'))

{
	foreach($this->session->userdata('login_pemeriksaanbangko') as $row)

	if($row->level=="Admin")
	{
		


?>

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
								style="font-size: 14px; color:#6777ef"><b><a href="<?= base_url("datapemrikfpp/filter/Perlengkapan_Berkas_&_Generate_NP2") ?>">Tunggakan NP2</a></b>
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
								style="font-size: 14px; color:#6777ef"><b><a href="<?= base_url("datapemrikfpp/filter/SP2_terbit") ?>">Tunggakan SP2</a></b></div>
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
								style="font-size: 14px; color:#6777ef"><b><a href="<?= base_url("monitoringlhpfpp/filter/LHP_terbit") ?>">LHP Terbit</a></b></div>
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
								style="font-size: 14px; color:#6777ef"><b><a href="<?= base_url("monitoringlhpfpp/filter/LHP_terbit") ?>">LHP Konversi</a></b></div>
							<div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
								<?php echo number_format($sumlhpkonversi, 2, ',', '.' ); ?> &nbsp;&nbsp;&nbsp;</div>
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
								style="font-size: 14px; color:#6777ef"><b><a href="<?= base_url("skpfpp/filter/LHP_terbit") ?>">SKP Terbit</a></b>
							</div>
							<div class="h6 mb-0 font-weight-bold text-gray-800">
								<font size="2">Rp <?php echo number_format($sumskpkbterbit, 0, '.', '.' ); ?></font>
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
					<table class="col-lg-12 table align-items-center table-flush">
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
							<!--	<th style="background-color:#5d6eee">
									<font size="2" style="color:#ffff">Lihat</font>
								</th>-->
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
								<!--<td style="background-color:#bfbfbf">
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
											<a type="button" href="<?= base_url("monitoringlhpfpp/filter/LHP_terbit") ?>" class="dropdown-item"><i
													class="fa fa-edit"></i> Data Tabel </a>
										</div>
								</td>-->
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
					<table class="col-lg-12 table align-items-center table-flush">
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
							

							</tr>
						</thead>
						<tbody>
							<tr>
								<td style="background-color:#f2f2f2">
									<font size="2">Rp <?php echo number_format($sumskpkbterbit, 0, '.', '.' ); ?></font>
								</td>
								<td style="background-color:#e6e6e6">
									<font size="2">Rp
									<?php echo number_format($dataifpotensikkaterbitskpkb->t_potensikkaterbitskp, 0, '.', '.' ); ?>
									</font>
								</td>
								<td style="background-color:#d9d9d9">
									<?php echo round(($sumskpkbterbit/($dataifpotensikkaterbitskpkb->t_potensikkaterbitskp)), 4)*100; ?>
									%</td>
				
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
								<th style="background-color:#eaecf4">
									<font size="2" style="color:#0e1a71">Total SKP Cair</font>
								</th>
								<th style="background-color:#bcc8f5">
									<font size="2" style="color:#0e1a71">% Terhadap SKP Terbit</font>
								</th>
								<th style="background-color:#8c98f3">
									<font size="2" style="color:#ffff">% Terhadap Target Penerimaan</font>
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
					
							</tr>

						</tbody>
					</table>
					<br>
					<table class="col-xl-0 table align-items-center table-flush">
						<thead class="thead-light">
							<a><b>Daftar Tunggakan</b></a>
							<tr>
								<th style="background-color:#eaecf4">
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
					<div class="chart-pie pt-0">
					<div>
					<!--<a style="color:#4e73df"><font size="2"><b>LB</b></font></a>
					<a style="color:#20acac"><font size="2"><b>Rutin All Taxes</b></font></a>
					<a style="color:#4edfdf"><font size="2"><b>Rutin Single/ Beberapa/ Likuidasi</b></font></a>
					<a style="color:#d55dad"><font size="2"><b>Pemsus</b></font></a>
					<a style="color:#f7bf20"><font size="2"><b>Lokasi</b></font></a>-->
					</div>
						<canvas id="myPieChart1"></canvas>
					</div>
				</div>

			</div>
		</div>



		<!-- Donut Chart SP2 Selesai-->
		<div class="col-lg-2">
			<div class="card shadow mb-4">
				<div class="card-header py-3" style="background-color:#e6e6ff">
					<h6 class="m-0 font-weight-bold text-primary">Tunggakan SP2</h6>
				</div>
				<div class="card-body">
					<div class="chart-pie pt-0">
					<div>
					<!--<a style="color:#4e73df"><font size="2"><b>LB</b></font></a>
					<a style="color:#20acac"><font size="2"><b>Rutin All Taxes</b></font></a>
					<a style="color:#4edfdf"><font size="2"><b>Rutin Single/ Beberapa/ Likuidasi</b></font></a>
					<a style="color:#d55dad"><font size="2"><b>Pemsus</b></font></a>
					<a style="color:#f7bf20"><font size="2"><b>Lokasi</b></font></a>-->
					</div>
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
					<div class="chart-pie pt-0">
					<div>
					<!--<a style="color:#4e73df"><font size="2"><b>LB</b></font></a>
					<a style="color:#20acac"><font size="2"><b>Rutin All Taxes</b></font></a>
					<a style="color:#4edfdf"><font size="2"><b>Rutin Single/ Beberapa/ Likuidasi</b></font></a>
					<a style="color:#d55dad"><font size="2"><b>Pemsus</b></font></a>
					<a style="color:#f7bf20"><font size="2"><b>Lokasi</b></font></a>-->
					</div>
						<canvas id="myPieChart3"></canvas>
					</div>


				</div>
			</div>
		</div>		


		<div class="col-xl-4 col-lg-5 ">
			<div class="card" style="color:#ff66b3">
				<div class="card-header py-4 bg-primary d-flex flex-row align-items-center justify-content-between" style="color:#ff66b3">
					<h6 class="m-0 font-weight-bold text-light" style="color:#ff66b3">Monitoring LB</h6>
				</div>
				<div>
					<div class="customer-message align-items-center">
						<a class="font-weight-bold" href="<?= base_url("datapemrikfpp/filter/Perlengkapan_Berkas_&_Generate_NP2") ?>" style="color:#ff66b3">
							<div class="text-truncate message-title" >Jumlah Tunggakan NP2 LB</div>
							<div class="text-gray-500 message-time font-weight-bold"><?php echo ($tunggakandarilb->tunggakannp2darilb); ?></div>
						</a>
					</div>
					<div class="customer-message align-items-center">
						<a class="font-weight-bold" href="<?= base_url("datapemrikfpp/filter/SP2_terbit") ?>" style="color:#ff66b3">
							<div class="text-truncate message-title">Jumlah Tunggakan SP2 LB</div>
							
							<div class="text-gray-500 message-time"><?php echo ($tunggakandarilb->tunggakansp2darilb); ?></div>
						</a>
					</div>
					<div class="customer-message align-items-center">
						<a class="font-weight-bold" href="<?= base_url("datapemrikfpp/filter/LHP_terbit") ?>" style="color:#ff66b3">
							<div class="text-truncate message-title">Jumlah LHP Terbit LB
							</div>
							<div class="text-gray-500 message-time font-weight-bold"><?php echo ($tunggakandarilb->lhpterbitdarilb); ?></div>
						</a>
					</div>
					<div class="customer-message align-items-center">
						<a class="font-weight-bold" >
							<div class="text-truncate message-title">Nilai SKPLB Terbit
							</div>
							<div class="text-gray-500 message-time font-weight-bold"><?php echo number_format($tunggakandarilb->skplbterbitdarilb, 0, ',', '.' ); ?></div>
						</a>
					</div>
					
				</div>
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




	<script type="text/javascript">


		// Bar Chart LHP Terbit
		var ctx = document.getElementById("myBarChart1");
		var myBarChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", , "Desember" ],
				datasets: [{
					label: "LHP: ",
					backgroundColor: "#4e73df",
					hoverBackgroundColor: "#2e59d9",
					borderColor: "#4e73df",
					data: [<?php echo ($lhpselesaitiapbulan->lhpterbitjanuari); ?>, <?php echo ($lhpselesaitiapbulan->lhpterbitfebruari); ?>,
					<?php echo ($lhpselesaitiapbulan->lhpterbitmaret); ?>, <?php echo ($lhpselesaitiapbulan->lhpterbitapril); ?>,
					<?php echo ($lhpselesaitiapbulan->lhpterbitmei); ?>, <?php echo ($lhpselesaitiapbulan->lhpterbitjuni); ?>,
					<?php echo ($lhpselesaitiapbulan->lhpterbitjuli); ?>, <?php echo ($lhpselesaitiapbulan->lhpterbitagustus); ?>,
					<?php echo ($lhpselesaitiapbulan->lhpterbitseptember); ?>, <?php echo ($lhpselesaitiapbulan->lhpterbitoktober); ?>,
					<?php echo ($lhpselesaitiapbulan->lhpterbitnovember); ?>, <?php echo ($lhpselesaitiapbulan->lhpterbitdesember); ?>,],
				}],
			},
			options: {
				maintainAspectRatio: false,
				layout: {
					padding: {
						left: 10,
						right: 10,
						top: 10,
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
							max: 20,
							maxTicksLimit: 20,
							padding: 10,
							// Include a dollar sign in the ticks
							callback: function (value, index, values) {
								return  value;
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
							return datasetLabel  + tooltipItem.yLabel;
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
				labels: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", , "Desember" ],
				datasets: [{
					label: "LHP: ",
					backgroundColor: "#4e73df",
					hoverBackgroundColor: "#2e59d9",
					borderColor: "#4e73df",
					data: [<?php echo ($lhpselesaitiapbulan->lhpterbitjanuari); ?>, <?php echo ($lhpselesaitiapbulan->lhpterbitfebruari); ?>,
					<?php echo ($lhpselesaitiapbulan->lhpterbitmaret); ?>, <?php echo ($lhpselesaitiapbulan->lhpterbitapril); ?>,
					<?php echo ($lhpselesaitiapbulan->lhpterbitmei); ?>, <?php echo ($lhpselesaitiapbulan->lhpterbitjuni); ?>,
					<?php echo ($lhpselesaitiapbulan->lhpterbitjuli); ?>, <?php echo ($lhpselesaitiapbulan->lhpterbitagustus); ?>,
					<?php echo ($lhpselesaitiapbulan->lhpterbitseptember); ?>, <?php echo ($lhpselesaitiapbulan->lhpterbitoktober); ?>,
					<?php echo ($lhpselesaitiapbulan->lhpterbitnovember); ?>, <?php echo ($lhpselesaitiapbulan->lhpterbitdesember); ?>,],
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
				labels: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", , "Desember" ],
				datasets: [{
					label: "LHP: ",
					backgroundColor: "#4e73df",
					hoverBackgroundColor: "#2e59d9",
					borderColor: "#4e73df",
					data: [<?php echo ($lhpselesaitiapbulan->lhpterbitjanuari); ?>, <?php echo ($lhpselesaitiapbulan->lhpterbitfebruari); ?>,
					<?php echo ($lhpselesaitiapbulan->lhpterbitmaret); ?>, <?php echo ($lhpselesaitiapbulan->lhpterbitapril); ?>,
					<?php echo ($lhpselesaitiapbulan->lhpterbitmei); ?>, <?php echo ($lhpselesaitiapbulan->lhpterbitjuni); ?>,
					<?php echo ($lhpselesaitiapbulan->lhpterbitjuli); ?>, <?php echo ($lhpselesaitiapbulan->lhpterbitagustus); ?>,
					<?php echo ($lhpselesaitiapbulan->lhpterbitseptember); ?>, <?php echo ($lhpselesaitiapbulan->lhpterbitoktober); ?>,
					<?php echo ($lhpselesaitiapbulan->lhpterbitnovember); ?>, <?php echo ($lhpselesaitiapbulan->lhpterbitdesember); ?>,],
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
				labels: ["LB", "Rutin All Taxes", "Rutin Single/ Beberapa", "Pemsus", "Lokasi" ],
				datasets: [{
					data: [<?php echo ($pietunggakannp2darijenispemeriksaan->tunggakannp2darilb); ?>, <?php echo ($pietunggakannp2darijenispemeriksaan->tunggakannp2darirutinalltaxes); ?>,
					<?php echo ($pietunggakannp2darijenispemeriksaan->tunggakannp2darirutinsinglebeberapa); ?>,
					<?php echo ($pietunggakannp2darijenispemeriksaan->tunggakannp2daripemsus); ?>, <?php echo ($pietunggakannp2darijenispemeriksaan->tunggakannp2darilokasi); ?>],
					backgroundColor: ['#4e73df', '#20acac', '#4edfdf', '#d55dad','#f7bf20'],
					hoverBackgroundColor: ['#4e73df', '#20acac', '#4edfdf', '#d55dad','#f7bf20'],
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
				labels: ["LB", "Rutin All Taxes", "Rutin Single/ Beberapa", "Pemsus", "Lokasi" ],
				datasets: [{
					data: [<?php echo ($pietunggakansp2darijenispemeriksaan->tunggakansp2darilb); ?>, <?php echo ($pietunggakansp2darijenispemeriksaan->tunggakansp2darirutinalltaxes); ?>,
					<?php echo ($pietunggakansp2darijenispemeriksaan->tunggakansp2darirutinsinglebeberapa); ?>,
					<?php echo ($pietunggakansp2darijenispemeriksaan->tunggakansp2daripemsus); ?>, <?php echo ($pietunggakansp2darijenispemeriksaan->tunggakansp2darilokasi); ?>],
					backgroundColor: ['#4e73df', '#20acac', '#4edfdf', '#d55dad','#f7bf20'],
					hoverBackgroundColor: ['#4e73df', '#20acac', '#4edfdf', '#d55dad','#f7bf20'],
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
				labels: ["LB", "Rutin All Taxes", "Rutin Single/ Beberapa", "Pemsus", "Lokasi" ],
				datasets: [{
					data: [<?php echo ($pielhpselesaidarijenispemeriksaan->lhpterbitdarilb); ?>, <?php echo ($pielhpselesaidarijenispemeriksaan->lhpterbitdarirutinalltaxes); ?>,
					<?php echo ($pielhpselesaidarijenispemeriksaan->lhpterbitdarirutinsinglebeberapa); ?>,
					<?php echo ($pielhpselesaidarijenispemeriksaan->lhpterbitdaripemsus); ?>, <?php echo ($pielhpselesaidarijenispemeriksaan->lhpterbitdarilokasi); ?>],
					backgroundColor: ['#4e73df', '#20acac', '#4edfdf', '#d55dad','#f7bf20'],
					hoverBackgroundColor: ['#4e73df', '#20acac', '#4edfdf', '#d55dad','#f7bf20'],
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


<!------------------------------------------------------------VIEWER------------------------------------------------>

<!------------------------------------------------------------VIEWER------------------------------------------------>

<!------------------------------------------------------------VIEWER------------------------------------------------>



<?php	}

else
{
	?>

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
								style="font-size: 14px; color:#6777ef"><b><a href="<?= base_url("datapemrikfpp/filter/Perlengkapan_Berkas_&_Generate_NP2") ?>">Tunggakan NP2</a></b>
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
								style="font-size: 14px; color:#6777ef"><b><a href="<?= base_url("datapemrikfpp/filter/SP2_terbit") ?>">Tunggakan SP2</a></b></div>
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
								style="font-size: 14px; color:#6777ef"><b><a href="<?= base_url("monitoringlhpfpp/filter/LHP_terbit") ?>">LHP Terbit</a></b></div>
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
								style="font-size: 14px; color:#6777ef"><b><a href="<?= base_url("monitoringlhpfpp/filter/LHP_terbit") ?>">LHP Konversi</a></b></div>
							<div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
								<?php echo number_format($sumlhpkonversi, 2, ',', '.' ); ?> &nbsp;&nbsp;&nbsp;</div>
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
								style="font-size: 14px; color:#6777ef"><b><a href="<?= base_url("skpfpp/filter/LHP_terbit") ?>">SKP Terbit</a></b>
							</div>
							<div class="h6 mb-0 font-weight-bold text-gray-800">
								<font size="2">Rp <?php echo number_format($sumskpkbterbit, 0, '.', '.' ); ?></font>
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
					<table class="col-lg-12 table align-items-center table-flush">
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
							<!--	<th style="background-color:#5d6eee">
									<font size="2" style="color:#ffff">Lihat</font>
								</th>-->
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
								<!--<td style="background-color:#bfbfbf">
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
											<a type="button" href="<?= base_url("monitoringlhpfpp/filter/LHP_terbit") ?>" class="dropdown-item"><i
													class="fa fa-edit"></i> Data Tabel </a>
										</div>
								</td>-->
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
					<table class="col-lg-12 table align-items-center table-flush">
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
							

							</tr>
						</thead>
						<tbody>
							<tr>
								<td style="background-color:#f2f2f2">
									<font size="2">Rp <?php echo number_format($sumskpkbterbit, 0, '.', '.' ); ?></font>
								</td>
								<td style="background-color:#e6e6e6">
									<font size="2">Rp
									<?php echo number_format($dataifpotensikkaterbitskpkb->t_potensikkaterbitskp, 0, '.', '.' ); ?>
									</font>
								</td>
								<td style="background-color:#d9d9d9">
									<?php echo round(($sumskpkbterbit/($dataifpotensikkaterbitskpkb->t_potensikkaterbitskp)), 4)*100; ?>
									%</td>
				
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
								<th style="background-color:#eaecf4">
									<font size="2" style="color:#0e1a71">Total SKP Cair</font>
								</th>
								<th style="background-color:#bcc8f5">
									<font size="2" style="color:#0e1a71">% Terhadap SKP Terbit</font>
								</th>
								<th style="background-color:#8c98f3">
									<font size="2" style="color:#ffff">% Terhadap Target Penerimaan</font>
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
					
							</tr>

						</tbody>
					</table>
					<br>
					<table class="col-xl-0 table align-items-center table-flush">
						<thead class="thead-light">
							<a><b>Daftar Tunggakan</b></a>
							<tr>
								<th style="background-color:#eaecf4">
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
					<div class="chart-pie pt-0">
					<div>
					<!--<a style="color:#4e73df"><font size="2"><b>LB</b></font></a>
					<a style="color:#20acac"><font size="2"><b>Rutin All Taxes</b></font></a>
					<a style="color:#4edfdf"><font size="2"><b>Rutin Single/ Beberapa/ Likuidasi</b></font></a>
					<a style="color:#d55dad"><font size="2"><b>Pemsus</b></font></a>
					<a style="color:#f7bf20"><font size="2"><b>Lokasi</b></font></a>-->
					</div>
						<canvas id="myPieChart1"></canvas>
					</div>
				</div>

			</div>
		</div>



		<!-- Donut Chart SP2 Selesai-->
		<div class="col-lg-2">
			<div class="card shadow mb-4">
				<div class="card-header py-3" style="background-color:#e6e6ff">
					<h6 class="m-0 font-weight-bold text-primary">Tunggakan SP2</h6>
				</div>
				<div class="card-body">
					<div class="chart-pie pt-0">
					<div>
					<!--<a style="color:#4e73df"><font size="2"><b>LB</b></font></a>
					<a style="color:#20acac"><font size="2"><b>Rutin All Taxes</b></font></a>
					<a style="color:#4edfdf"><font size="2"><b>Rutin Single/ Beberapa/ Likuidasi</b></font></a>
					<a style="color:#d55dad"><font size="2"><b>Pemsus</b></font></a>
					<a style="color:#f7bf20"><font size="2"><b>Lokasi</b></font></a>-->
					</div>
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
					<div class="chart-pie pt-0">
					<div>
					<!--<a style="color:#4e73df"><font size="2"><b>LB</b></font></a>
					<a style="color:#20acac"><font size="2"><b>Rutin All Taxes</b></font></a>
					<a style="color:#4edfdf"><font size="2"><b>Rutin Single/ Beberapa/ Likuidasi</b></font></a>
					<a style="color:#d55dad"><font size="2"><b>Pemsus</b></font></a>
					<a style="color:#f7bf20"><font size="2"><b>Lokasi</b></font></a>-->
					</div>
						<canvas id="myPieChart3"></canvas>
					</div>


				</div>
			</div>
		</div>		


		<div class="col-xl-4 col-lg-5 ">
			<div class="card" style="color:#ff66b3">
				<div class="card-header py-4 bg-primary d-flex flex-row align-items-center justify-content-between" style="color:#ff66b3">
					<h6 class="m-0 font-weight-bold text-light" style="color:#ff66b3">Monitoring LB</h6>
				</div>
				<div>
					<div class="customer-message align-items-center">
						<a class="font-weight-bold" href="<?= base_url("datapemrikfpp/filter/Perlengkapan_Berkas_&_Generate_NP2") ?>" style="color:#ff66b3">
							<div class="text-truncate message-title" >Jumlah Tunggakan NP2 LB</div>
							<div class="text-gray-500 message-time font-weight-bold"><?php echo ($tunggakandarilb->tunggakannp2darilb); ?></div>
						</a>
					</div>
					<div class="customer-message align-items-center">
						<a class="font-weight-bold" href="<?= base_url("datapemrikfpp/filter/SP2_terbit") ?>" style="color:#ff66b3">
							<div class="text-truncate message-title">Jumlah Tunggakan SP2 LB</div>
							
							<div class="text-gray-500 message-time"><?php echo ($tunggakandarilb->tunggakansp2darilb); ?></div>
						</a>
					</div>
					<div class="customer-message align-items-center">
						<a class="font-weight-bold" href="<?= base_url("datapemrikfpp/filter/LHP_terbit") ?>" style="color:#ff66b3">
							<div class="text-truncate message-title">Jumlah LHP Terbit LB
							</div>
							<div class="text-gray-500 message-time font-weight-bold"><?php echo ($tunggakandarilb->lhpterbitdarilb); ?></div>
						</a>
					</div>
					<div class="customer-message align-items-center">
						<a class="font-weight-bold" >
							<div class="text-truncate message-title">Nilai SKPLB Terbit
							</div>
							<div class="text-gray-500 message-time font-weight-bold"><?php echo number_format($tunggakandarilb->skplbterbitdarilb, 0, ',', '.' ); ?></div>
						</a>
					</div>
					
				</div>
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




	<script type="text/javascript">


		// Bar Chart LHP Terbit
		var ctx = document.getElementById("myBarChart1");
		var myBarChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", , "Desember" ],
				datasets: [{
					label: "LHP: ",
					backgroundColor: "#4e73df",
					hoverBackgroundColor: "#2e59d9",
					borderColor: "#4e73df",
					data: [<?php echo ($lhpselesaitiapbulan->lhpterbitjanuari); ?>, <?php echo ($lhpselesaitiapbulan->lhpterbitfebruari); ?>,
					<?php echo ($lhpselesaitiapbulan->lhpterbitmaret); ?>, <?php echo ($lhpselesaitiapbulan->lhpterbitapril); ?>,
					<?php echo ($lhpselesaitiapbulan->lhpterbitmei); ?>, <?php echo ($lhpselesaitiapbulan->lhpterbitjuni); ?>,
					<?php echo ($lhpselesaitiapbulan->lhpterbitjuli); ?>, <?php echo ($lhpselesaitiapbulan->lhpterbitagustus); ?>,
					<?php echo ($lhpselesaitiapbulan->lhpterbitseptember); ?>, <?php echo ($lhpselesaitiapbulan->lhpterbitoktober); ?>,
					<?php echo ($lhpselesaitiapbulan->lhpterbitnovember); ?>, <?php echo ($lhpselesaitiapbulan->lhpterbitdesember); ?>,],
				}],
			},
			options: {
				maintainAspectRatio: false,
				layout: {
					padding: {
						left: 10,
						right: 10,
						top: 10,
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
							max: 20,
							maxTicksLimit: 20,
							padding: 10,
							// Include a dollar sign in the ticks
							callback: function (value, index, values) {
								return  value;
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
							return datasetLabel  + tooltipItem.yLabel;
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
				labels: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", , "Desember" ],
				datasets: [{
					label: "LHP: ",
					backgroundColor: "#4e73df",
					hoverBackgroundColor: "#2e59d9",
					borderColor: "#4e73df",
					data: [<?php echo ($lhpselesaitiapbulan->lhpterbitjanuari); ?>, <?php echo ($lhpselesaitiapbulan->lhpterbitfebruari); ?>,
					<?php echo ($lhpselesaitiapbulan->lhpterbitmaret); ?>, <?php echo ($lhpselesaitiapbulan->lhpterbitapril); ?>,
					<?php echo ($lhpselesaitiapbulan->lhpterbitmei); ?>, <?php echo ($lhpselesaitiapbulan->lhpterbitjuni); ?>,
					<?php echo ($lhpselesaitiapbulan->lhpterbitjuli); ?>, <?php echo ($lhpselesaitiapbulan->lhpterbitagustus); ?>,
					<?php echo ($lhpselesaitiapbulan->lhpterbitseptember); ?>, <?php echo ($lhpselesaitiapbulan->lhpterbitoktober); ?>,
					<?php echo ($lhpselesaitiapbulan->lhpterbitnovember); ?>, <?php echo ($lhpselesaitiapbulan->lhpterbitdesember); ?>,],
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
				labels: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", , "Desember" ],
				datasets: [{
					label: "LHP: ",
					backgroundColor: "#4e73df",
					hoverBackgroundColor: "#2e59d9",
					borderColor: "#4e73df",
					data: [<?php echo ($lhpselesaitiapbulan->lhpterbitjanuari); ?>, <?php echo ($lhpselesaitiapbulan->lhpterbitfebruari); ?>,
					<?php echo ($lhpselesaitiapbulan->lhpterbitmaret); ?>, <?php echo ($lhpselesaitiapbulan->lhpterbitapril); ?>,
					<?php echo ($lhpselesaitiapbulan->lhpterbitmei); ?>, <?php echo ($lhpselesaitiapbulan->lhpterbitjuni); ?>,
					<?php echo ($lhpselesaitiapbulan->lhpterbitjuli); ?>, <?php echo ($lhpselesaitiapbulan->lhpterbitagustus); ?>,
					<?php echo ($lhpselesaitiapbulan->lhpterbitseptember); ?>, <?php echo ($lhpselesaitiapbulan->lhpterbitoktober); ?>,
					<?php echo ($lhpselesaitiapbulan->lhpterbitnovember); ?>, <?php echo ($lhpselesaitiapbulan->lhpterbitdesember); ?>,],
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
				labels: ["LB", "Rutin All Taxes", "Rutin Single/ Beberapa", "Pemsus", "Lokasi" ],
				datasets: [{
					data: [<?php echo ($pietunggakannp2darijenispemeriksaan->tunggakannp2darilb); ?>, <?php echo ($pietunggakannp2darijenispemeriksaan->tunggakannp2darirutinalltaxes); ?>,
					<?php echo ($pietunggakannp2darijenispemeriksaan->tunggakannp2darirutinsinglebeberapa); ?>,
					<?php echo ($pietunggakannp2darijenispemeriksaan->tunggakannp2daripemsus); ?>, <?php echo ($pietunggakannp2darijenispemeriksaan->tunggakannp2darilokasi); ?>],
					backgroundColor: ['#4e73df', '#20acac', '#4edfdf', '#d55dad','#f7bf20'],
					hoverBackgroundColor: ['#4e73df', '#20acac', '#4edfdf', '#d55dad','#f7bf20'],
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
				labels: ["LB", "Rutin All Taxes", "Rutin Single/ Beberapa", "Pemsus", "Lokasi" ],
				datasets: [{
					data: [<?php echo ($pietunggakansp2darijenispemeriksaan->tunggakansp2darilb); ?>, <?php echo ($pietunggakansp2darijenispemeriksaan->tunggakansp2darirutinalltaxes); ?>,
					<?php echo ($pietunggakansp2darijenispemeriksaan->tunggakansp2darirutinsinglebeberapa); ?>,
					<?php echo ($pietunggakansp2darijenispemeriksaan->tunggakansp2daripemsus); ?>, <?php echo ($pietunggakansp2darijenispemeriksaan->tunggakansp2darilokasi); ?>],
					backgroundColor: ['#4e73df', '#20acac', '#4edfdf', '#d55dad','#f7bf20'],
					hoverBackgroundColor: ['#4e73df', '#20acac', '#4edfdf', '#d55dad','#f7bf20'],
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
				labels: ["LB", "Rutin All Taxes", "Rutin Single/ Beberapa", "Pemsus", "Lokasi" ],
				datasets: [{
					data: [<?php echo ($pielhpselesaidarijenispemeriksaan->lhpterbitdarilb); ?>, <?php echo ($pielhpselesaidarijenispemeriksaan->lhpterbitdarirutinalltaxes); ?>,
					<?php echo ($pielhpselesaidarijenispemeriksaan->lhpterbitdarirutinsinglebeberapa); ?>,
					<?php echo ($pielhpselesaidarijenispemeriksaan->lhpterbitdaripemsus); ?>, <?php echo ($pielhpselesaidarijenispemeriksaan->lhpterbitdarilokasi); ?>],
					backgroundColor: ['#4e73df', '#20acac', '#4edfdf', '#d55dad','#f7bf20'],
					hoverBackgroundColor: ['#4e73df', '#20acac', '#4edfdf', '#d55dad','#f7bf20'],
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

<?php	}
}

?>












	