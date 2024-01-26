
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
		<h1 class="h3 mb-0 text-white-800">Surat Perintah Pemeriksaan (SP2)</h1></a>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="./">Home</a></li>
			<li class="breadcrumb-item active" aria-current="page">SP2</li>
		</ol>
	</div>
	<div class="col-lg-12">
		<div class="card mb-4">
			<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between" style="background-color:#e6e6ff">
				<h6 class="m-0 font-weight-bold text-primary">Tabel Data SP2</h6>
				<div class="btn-group">
					<!--<a href="<?= base_url("sp2fpp/tambah") ?>" class="m-0 float-right btn btn-primary btn">
						<span class="fa fa-plus-circle"></span> Tambah</a>-->
					<!--<button class="m-0 float-right btn btn-outline-info btn" data-target="#modal-import" data-toggle="modal">
						<span class="fa fa-upload"></span> Import</button>-->
					<a href="<?= base_url("sp2fpp/exportlistsp2fpp") ?>"
						class="m-0 float-right btn btn-outline-success btn">
						<span class="fa fa-download"></span> Export</a>
				</div>
			</div>

			<div class="table-responsive p-3">
				
				<span style="color:#e8109d; font-style:italic; font-size: 12px">Filter berdasarkan "Status" </span>
				<div class="form-group row">
				&nbsp;&nbsp;&nbsp;<a href="<?= base_url("sp2fpp/filter/Belum_terbit_NP2") ?>" class="m-0 float-right btn btn-secondary btn-sm">Belum terbit NP2</a>&nbsp;&nbsp;&nbsp;
				<a href="<?= base_url("sp2fpp/filter/Perlengkapan_Berkas_&_Generate_NP2") ?>" class="m-0 float-right btn btn-primary btn-sm">NP2 terbit</a>&nbsp;&nbsp;&nbsp;
				<a href="<?= base_url("sp2fpp/filter/SP2_terbit") ?>" class="m-0 float-right btn btn-warning btn-sm">SP2 terbit</a>&nbsp;&nbsp;&nbsp;
				<a href="<?= base_url("sp2fpp/filter/LHP_terbit") ?>" class="m-0 float-right btn btn-success btn-sm">LHP terbit</a>&nbsp;&nbsp;&nbsp;
			
				
					<div class="btn-group-mb-1">
						<a href="<?= base_url('sp2fpp') ?>"><i class="fa fa-history"></i></a>
					</div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			
				</div>

				<table class="table align-items-center table-flush table-hover" id="dataTableHover">
					<thead class="thead-light">
						<tr>
							<th style="font-size: 12px ; background-color:#ccf2ff">No.</th>
							<th style="font-size: 12px ; background-color:#ccfff2">Nama</th>
							<th style="font-size: 12px ; background-color:#ccfff2">NPWP</th>
							<th style="font-size: 12px ; background-color:#ccfff2" width="300">Alamat</th>
							<th style="font-size: 12px ; background-color:#ccffd9">Masa & Tahun Pajak</th>
							<th style="font-size: 12px ; background-color:#ccffd9">Jenis Pemeriksaan</th>
							<th style="font-size: 12px ; background-color:#ccffd9">Kode Pemeriksaan</th>
							<th style="font-size: 12px ; background-color:#f2ffcc">SPV</th>
							<th style="font-size: 12px ; background-color:#f2ffcc">Pangkat/Gol.SPV</th>
							<th style="font-size: 12px ; background-color:#f2ffcc">KeTim</th>
							<th style="font-size: 12px ; background-color:#f2ffcc">Pangkat/ Gol. KeTim</th>
							<th style="font-size: 12px ; background-color:#f2ffcc">Ang I</th>
							<th style="font-size: 12px ; background-color:#f2ffcc">Pangkat/Gol.Ang I</th>
							<th style="font-size: 12px ; background-color:#f2ffcc">Ang II</th>
							<th style="font-size: 12px ; background-color:#f2ffcc">Pangkat/Gol.Ang II</th>
							<th style="font-size: 12px ; background-color:#e6ffcc">Cetak SP2</th>
							<th style="font-size: 12px ; background-color:#ffffcc">Nomor SP2</th>
							<th style="font-size: 12px ; background-color:#ffffcc">Tanggal SP2</th>

							<th style="font-size: 12px ; background-color:#daffb3">SPV Baru</th>
							<th style="font-size: 12px ; background-color:#daffb3">Pangkat/Gol.SPV Baru</th>
							<th style="font-size: 12px ; background-color:#daffb3">KeTim Baru</th>
							<th style="font-size: 12px ; background-color:#daffb3">Pangkat/ Gol. KeTim Baru</th>
							<th style="font-size: 12px ; background-color:#daffb3">Ang I Baru</th>
							<th style="font-size: 12px ; background-color:#daffb3">Pangkat/Gol.Ang I Baru</th>
							<th style="font-size: 12px ; background-color:#daffb3">Ang II Baru</th>
							<th style="font-size: 12px ; background-color:#daffb3">Pangkat/Gol.Ang II Baru</th>
							<th style="font-size: 12px ; background-color:#daffb3">Cetak SP2 Perubahan</th>
							<th style="font-size: 12px ; background-color:#c1ff80">Nomor SP2 Perubahan</th>
							<th style="font-size: 12px ; background-color:#c1ff80">Tanggal SP2 Perubahan</th>

							<th style="font-size: 12px ; background-color:#ffe6cc">Status</th>
							<th style="font-size: 12px ; background-color:#ffe6cc">Keterangan</th>
							<th style="font-size: 12px ; background-color:#ccf2ff">Tanggal Update</th>
							<th style="font-size: 12px ; background-color:#ccf2ff">Aksi</th>
						</tr>
					</thead>

					<tbody>
						<?php $no=1; foreach($listsp2fpp as $value): ?>
						<tr>
						<th style="font-size: 12px; color:#840bb8"><?= $no++ ?></td>
							<td style="font-size: 12px; color: #360a03"><b><?= $value->t_namawp ?></b></td>
							<td style="font-size: 12px"><?= $value->t_npwp ?></td>
							<td style="font-size: 12px" width="200" ><?= $value->t_alamatsurat ?></td>
							<td style="font-size: 12px"><?= $value->t_masa_tahun_pajak ?></td>
							<td style="font-size: 12px; color: #e8109d"><b><?= $value->t_jenispemeriksaan ?></b></td>
							<td style="font-size: 12px; color: #a70c71"><b><?= $value->t_kodepemeriksaan ?></b></td>
							<td style="font-size: 12px"><?= $value->t_namasupervisor ?></td>
							<td style="font-size: 12px"><?= $value->t_pangkatsupervisor ?></td>
							<td style="font-size: 12px"><?= $value->t_namaketua ?></td>
							<td style="font-size: 12px"><?= $value->t_pangkatketua ?></td>
							<td style="font-size: 12px"><?= $value->t_namaanggota1 ?></td>
							<td style="font-size: 12px"><?= $value->t_pangkatanggota1 ?></td>
							<td style="font-size: 12px"><?= $value->t_namaanggota2 ?></td>
							<td style="font-size: 12px"><?= $value->t_pangkatanggota2 ?></td>
							<td>
								<div class="btn-group dropleft">
									<a type="button" href="<?= base_url('datapemrikfpp/exportpdf/'. $value->id_datapemrikfpp)?>" target="_blank" class="btn btn-warning btn-sm" aria-haspopup="true"
										aria-expanded="false">
										<i class="fa fa-cat"></i>
									</a>
								</div>
							</td>
							<td style="font-size: 12px"><?= $value->t_sp2 ?></td>
							<td style="font-size: 12px"><?= full_date_dmy($value->t_tanggalsp2) ?></td>

							<td style="font-size: 12px"><?= $value->t_namasupervisorbaru ?></td>
							<td style="font-size: 12px"><?= $value->t_pangkatsupervisorbaru ?></td>
							<td style="font-size: 12px"><?= $value->t_namaketuabaru ?></td>
							<td style="font-size: 12px"><?= $value->t_pangkatketuabaru ?></td>
							<td style="font-size: 12px"><?= $value->t_namaanggota1baru ?></td>
							<td style="font-size: 12px"><?= $value->t_pangkatanggota1baru ?></td>
							<td style="font-size: 12px"><?= $value->t_namaanggota2baru ?></td>
							<td style="font-size: 12px"><?= $value->t_pangkatanggota2baru ?></td>
							<td>
								<div class="btn-group dropleft">
									<a type="button" href="<?= base_url()?>" target="_blank" class="btn btn-success btn-sm" aria-haspopup="true"
										aria-expanded="false">
										<i class="fa fa-dog"></i>
									</a>
								</div>
							</td>
							<td style="font-size: 12px"><?= $value->t_sp2perubahan ?></td>
							<td style="font-size: 12px"><?= full_date_dmy($value->t_tanggalsp2perubahan) ?></td>

							<td style="font-size: 12px; color:#800060"><?= $value->t_status ?></td>
							<td style="font-size: 12px; color:#800060"><?= $value->t_keterangan ?></td>
							<td style="font-size: 12px; color:#800060"><?= $value->t_tanggalupdatesp2fpp ?></td>
							<td>
              <div class="btn-group dropleft">
									<button type="button" class="btn btn-primary dropdown-toggle btn-sm"
										data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="fa fa-fish"></i>
									</button>
									<div class="dropdown-menu">
										<a type="button" href="<?= base_url('sp2fpp/edit/' . $value->id_datapemrikfpp)?>"
											class="dropdown-item"><i class="fa fa-edit"></i> Edit </a>
										
										
									</div>
								</div>
							</td>
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<!--Tabel Summary
	<div class="row">
            <div class="col-lg-12 mb-4">
              
              <div class="card">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Summary</h6>
                </div>
                <div class="table-responsive">
                  <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                      <tr>
                        <th style="background-color:#99ffb3"><b>Jumlah Potensi KKA</b></th>
                        <th style="background-color:#e6ffcc"><b>Jumlah Tunggakan NP2</b></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td> <?php echo ($counttunggakannp2->tunggakannp2); ?> </td>
                        <td></td>

                      </tr>

                    </tbody>
                  </table>
                </div>
                <div class="card-footer"></div>
              </div>
            </div>
          </div>-->
</div>

<!--Modal Buat Import Excel-->
<?php $this->load->view('datapemrikfpp/v_modal')?>

<!--Javascript-->
<script type="text/javascript">
	function deletesp2fpp(id_datapemrikfpp, t_namawp) {

		swal({
			title: "Konfirmasi",
			text: "Ingin menghapus data " + t_namawp + " ini?",
			icon: "warning",
			button: true,
			dangerMode: true,
		}).then((submit) => {
			if (submit) {
				$.ajax({
					url: "<?= base_url('sp2fpp/delete/') ?>" + id_datapemrikfpp,
					type: 'delete',
					success: function (result) {
						var hasil = JSON.parse(result);
						swal_show(hasil);

						if (hasil['status_code'] == 200)
							setTimeout("window.open(self.location, '_self');", 1500);

					}
				});
			}
		});


		function exportlistsp2fpp() {
			var status = $('#status').val();

		}
	}

	//FilterData
	function filterData() {
		var status = $('#status').val();
		

		window.location.href = "<?= base_url('sp2fpp/filter/') ?>" + status ;

	}

	$('#status').change(function (e) {
		filterData();
	});



	$(document).ready(function () {
		var filter = "<?= $this->uri->segment(3) ?>";
		if (filter != "") {
			$('#status').val("<?= $this->uri->segment(3) ?>");
			

		}

	})
	//Export PDF
	function exportsp2fpp() {
		var id_datapemrikfpp = $('#id_datapemrikfpp').val();
		window.open("<?= base_url('sp2fpp/exportpdf/')?>");

	}
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
		<h1 class="h3 mb-0 text-white-800">Surat Perintah Pemeriksaan (SP2)</h1></a>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="./">Home</a></li>
			<li class="breadcrumb-item active" aria-current="page">SP2</li>
		</ol>
	</div>
	<div class="col-lg-12">
		<div class="card mb-4">
			<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between" style="background-color:#e6e6ff">
				<h6 class="m-0 font-weight-bold text-primary">Tabel Data SP2</h6>
				<div class="btn-group">
					<!--<a href="<?= base_url("sp2fpp/tambah") ?>" class="m-0 float-right btn btn-primary btn">
						<span class="fa fa-plus-circle"></span> Tambah</a>-->
					<!--<button class="m-0 float-right btn btn-outline-info btn" data-target="#modal-import" data-toggle="modal">
						<span class="fa fa-upload"></span> Import</button>-->
					
				</div>
			</div>

			<div class="table-responsive p-3">
				
				<span style="color:#e8109d; font-style:italic; font-size: 12px">Filter berdasarkan "Status" </span>
				<div class="form-group row">
				&nbsp;&nbsp;&nbsp;<a href="<?= base_url("sp2fpp/filter/Belum_terbit_NP2") ?>" class="m-0 float-right btn btn-secondary btn-sm">Belum terbit NP2</a>&nbsp;&nbsp;&nbsp;
				<a href="<?= base_url("sp2fpp/filter/Perlengkapan_Berkas_&_Generate_NP2") ?>" class="m-0 float-right btn btn-primary btn-sm">NP2 terbit</a>&nbsp;&nbsp;&nbsp;
				<a href="<?= base_url("sp2fpp/filter/SP2_terbit") ?>" class="m-0 float-right btn btn-warning btn-sm">SP2 terbit</a>&nbsp;&nbsp;&nbsp;
				<a href="<?= base_url("sp2fpp/filter/LHP_terbit") ?>" class="m-0 float-right btn btn-success btn-sm">LHP terbit</a>&nbsp;&nbsp;&nbsp;
			
				
					<div class="btn-group-mb-1">
						<a href="<?= base_url('sp2fpp') ?>"><i class="fa fa-history"></i></a>
					</div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			
				</div>

				<table class="table align-items-center table-flush table-hover" id="dataTableHover">
					<thead class="thead-light">
						<tr>
							<th style="font-size: 12px ; background-color:#ccf2ff">No.</th>
							<th style="font-size: 12px ; background-color:#ccfff2">Nama</th>
							<th style="font-size: 12px ; background-color:#ccfff2">NPWP</th>
							<th style="font-size: 12px ; background-color:#ccfff2" width="300">Alamat</th>
							<th style="font-size: 12px ; background-color:#ccffd9">Masa & Tahun Pajak</th>
							<th style="font-size: 12px ; background-color:#ccffd9">Jenis Pemeriksaan</th>
							<th style="font-size: 12px ; background-color:#ccffd9">Kode Pemeriksaan</th>
							<th style="font-size: 12px ; background-color:#f2ffcc">SPV</th>
							<th style="font-size: 12px ; background-color:#f2ffcc">Pangkat/Gol.SPV</th>
							<th style="font-size: 12px ; background-color:#f2ffcc">KeTim</th>
							<th style="font-size: 12px ; background-color:#f2ffcc">Pangkat/ Gol. KeTim</th>
							<th style="font-size: 12px ; background-color:#f2ffcc">Ang I</th>
							<th style="font-size: 12px ; background-color:#f2ffcc">Pangkat/Gol.Ang I</th>
							<th style="font-size: 12px ; background-color:#f2ffcc">Ang II</th>
							<th style="font-size: 12px ; background-color:#f2ffcc">Pangkat/Gol.Ang II</th>
					
							<th style="font-size: 12px ; background-color:#ffffcc">Nomor SP2</th>
							<th style="font-size: 12px ; background-color:#ffffcc">Tanggal SP2</th>

							<th style="font-size: 12px ; background-color:#daffb3">SPV Baru</th>
							<th style="font-size: 12px ; background-color:#daffb3">Pangkat/Gol.SPV Baru</th>
							<th style="font-size: 12px ; background-color:#daffb3">KeTim Baru</th>
							<th style="font-size: 12px ; background-color:#daffb3">Pangkat/ Gol. KeTim Baru</th>
							<th style="font-size: 12px ; background-color:#daffb3">Ang I Baru</th>
							<th style="font-size: 12px ; background-color:#daffb3">Pangkat/Gol.Ang I Baru</th>
							<th style="font-size: 12px ; background-color:#daffb3">Ang II Baru</th>
							<th style="font-size: 12px ; background-color:#daffb3">Pangkat/Gol.Ang II Baru</th>
						
							<th style="font-size: 12px ; background-color:#c1ff80">Nomor SP2 Perubahan</th>
							<th style="font-size: 12px ; background-color:#c1ff80">Tanggal SP2 Perubahan</th>

							<th style="font-size: 12px ; background-color:#ffe6cc">Status</th>
							<th style="font-size: 12px ; background-color:#ffe6cc">Keterangan</th>
							<th style="font-size: 12px ; background-color:#ccf2ff">Tanggal Update</th>
					
						</tr>
					</thead>

					<tbody>
						<?php $no=1; foreach($listsp2fpp as $value): ?>
						<tr>
						<th style="font-size: 12px; color:#840bb8"><?= $no++ ?></td>
							<td style="font-size: 12px; color: #360a03"><b><?= $value->t_namawp ?></b></td>
							<td style="font-size: 12px"><?= $value->t_npwp ?></td>
							<td style="font-size: 12px" width="200" ><?= $value->t_alamatsurat ?></td>
							<td style="font-size: 12px"><?= $value->t_masa_tahun_pajak ?></td>
							<td style="font-size: 12px; color: #e8109d"><b><?= $value->t_jenispemeriksaan ?></b></td>
							<td style="font-size: 12px; color: #a70c71"><b><?= $value->t_kodepemeriksaan ?></b></td>
							<td style="font-size: 12px"><?= $value->t_namasupervisor ?></td>
							<td style="font-size: 12px"><?= $value->t_pangkatsupervisor ?></td>
							<td style="font-size: 12px"><?= $value->t_namaketua ?></td>
							<td style="font-size: 12px"><?= $value->t_pangkatketua ?></td>
							<td style="font-size: 12px"><?= $value->t_namaanggota1 ?></td>
							<td style="font-size: 12px"><?= $value->t_pangkatanggota1 ?></td>
							<td style="font-size: 12px"><?= $value->t_namaanggota2 ?></td>
							<td style="font-size: 12px"><?= $value->t_pangkatanggota2 ?></td>
	
							<td style="font-size: 12px"><?= $value->t_sp2 ?></td>
							<td style="font-size: 12px"><?= full_date_dmy($value->t_tanggalsp2) ?></td>

							<td style="font-size: 12px"><?= $value->t_namasupervisorbaru ?></td>
							<td style="font-size: 12px"><?= $value->t_pangkatsupervisorbaru ?></td>
							<td style="font-size: 12px"><?= $value->t_namaketuabaru ?></td>
							<td style="font-size: 12px"><?= $value->t_pangkatketuabaru ?></td>
							<td style="font-size: 12px"><?= $value->t_namaanggota1baru ?></td>
							<td style="font-size: 12px"><?= $value->t_pangkatanggota1baru ?></td>
							<td style="font-size: 12px"><?= $value->t_namaanggota2baru ?></td>
							<td style="font-size: 12px"><?= $value->t_pangkatanggota2baru ?></td>
						
							<td style="font-size: 12px"><?= $value->t_sp2perubahan ?></td>
							<td style="font-size: 12px"><?= full_date_dmy($value->t_tanggalsp2perubahan) ?></td>

							<td style="font-size: 12px; color:#800060"><?= $value->t_status ?></td>
							<td style="font-size: 12px; color:#800060"><?= $value->t_keterangan ?></td>
							<td style="font-size: 12px; color:#800060"><?= $value->t_tanggalupdatesp2fpp ?></td>
			
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<!--Tabel Summary
	<div class="row">
            <div class="col-lg-12 mb-4">
              
              <div class="card">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Summary</h6>
                </div>
                <div class="table-responsive">
                  <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                      <tr>
                        <th style="background-color:#99ffb3"><b>Jumlah Potensi KKA</b></th>
                        <th style="background-color:#e6ffcc"><b>Jumlah Tunggakan NP2</b></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td> <?php echo ($counttunggakannp2->tunggakannp2); ?> </td>
                        <td></td>

                      </tr>

                    </tbody>
                  </table>
                </div>
                <div class="card-footer"></div>
              </div>
            </div>
          </div>-->
</div>

<!--Modal Buat Import Excel-->
<?php $this->load->view('datapemrikfpp/v_modal')?>

<!--Javascript-->
<script type="text/javascript">
	function deletesp2fpp(id_datapemrikfpp, t_namawp) {

		swal({
			title: "Konfirmasi",
			text: "Ingin menghapus data " + t_namawp + " ini?",
			icon: "warning",
			button: true,
			dangerMode: true,
		}).then((submit) => {
			if (submit) {
				$.ajax({
					url: "<?= base_url('sp2fpp/delete/') ?>" + id_datapemrikfpp,
					type: 'delete',
					success: function (result) {
						var hasil = JSON.parse(result);
						swal_show(hasil);

						if (hasil['status_code'] == 200)
							setTimeout("window.open(self.location, '_self');", 1500);

					}
				});
			}
		});


		function exportlistsp2fpp() {
			var status = $('#status').val();

		}
	}

	//FilterData
	function filterData() {
		var status = $('#status').val();
		

		window.location.href = "<?= base_url('sp2fpp/filter/') ?>" + status ;

	}

	$('#status').change(function (e) {
		filterData();
	});



	$(document).ready(function () {
		var filter = "<?= $this->uri->segment(3) ?>";
		if (filter != "") {
			$('#status').val("<?= $this->uri->segment(3) ?>");
			

		}

	})
	//Export PDF
	function exportsp2fpp() {
		var id_datapemrikfpp = $('#id_datapemrikfpp').val();
		window.open("<?= base_url('sp2fpp/exportpdf/')?>");

	}
</script>




<?php	}
}

?>