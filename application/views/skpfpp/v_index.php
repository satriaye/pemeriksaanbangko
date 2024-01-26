<!------------------------------------------------------------ADMIN------------------------------------------------>
<!------------------------------------------------------------ADMIN------------------------------------------------>
<!------------------------------------------------------------ADMIN------------------------------------------------>


<?php if($this->session->userdata('login_pemeriksaanbangko'))

{
	foreach($this->session->userdata('login_pemeriksaanbangko') as $row)

	if($row->level=="Admin")
	{
	
?>



<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<div class="container-fluid" id="container-wrapper">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">SKPKB-SKPLB FPP</h1>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="./">Home</a></li>
			<li class="breadcrumb-item active" aria-current="page">SKPKB-SKPLB FPP</li>
		</ol>
	</div>
	<div class="col-lg-12">
		<div class="card mb-4">
			
			<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between" style="background-color:#e6e6ff">
				<h6 class="m-0 font-weight-bold text-primary">Tabel SKPKB-SKPLB FPP</h6>
				<div class="btn-group">
					<!--<a href="<?= base_url("skpfpp/tambah") ?>" class="m-0 float-right btn btn-primary btn">
						<span class="fa fa-plus-circle"></span> Tambah</a>-->
					<!--<button class="m-0 float-right btn btn-outline-info btn" data-target="#modal-import" data-toggle="modal">
						<span class="fa fa-upload"></span> Import</button>-->
						<a href="<?= base_url("datapemrikfpp/exportlistdatapemrikfpp") ?>"
						class="m-0 float-right btn btn-outline-success btn">
						<span class="fa fa-download"></span> Export</a>
				</div>
			</div>

			<div class="table-responsive p-3">
				
				<span style="color:#e8109d; font-style:italic; font-size: 12px">Filter berdasarkan "Status" </span>
				<div class="form-group row">
				&nbsp;&nbsp;&nbsp;<a href="<?= base_url("skpfpp/filter/Belum_terbit_NP2") ?>" class="m-0 float-right btn btn-secondary btn-sm">Belum terbit NP2</a>&nbsp;&nbsp;&nbsp;
				<a href="<?= base_url("skpfpp/filter/Perlengkapan_Berkas_&_Generate_NP2") ?>" class="m-0 float-right btn btn-primary btn-sm">NP2 terbit</a>&nbsp;&nbsp;&nbsp;
				<a href="<?= base_url("skpfpp/filter/SP2_terbit") ?>" class="m-0 float-right btn btn-warning btn-sm">SP2 terbit</a>&nbsp;&nbsp;&nbsp;
				<a href="<?= base_url("skpfpp/filter/LHP_terbit") ?>" class="m-0 float-right btn btn-success btn-sm">LHP terbit</a>&nbsp;&nbsp;&nbsp;
			
				
					<div class="btn-group-mb-1">
						<a href="<?= base_url('skpfpp') ?>"><i class="fa fa-history"></i></a>
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
							<th style="font-size: 12px ; background-color:#ccffd9">Potensi KKA</th>
							<th style="font-size: 12px ; background-color:#ccd9ff">Nomor LHP</th>
							<!--<th style="font-size: 12px ; background-color:#d9ffb3">Jenis SKP</th>-->
							<th style="font-size: 12px ; background-color:#d9ffcc">SKPKB Terbit</th>
							<th style="font-size: 12px ; background-color:#d9ffcc">SKPKB Disetujui</th>
							<th style="font-size: 12px ; background-color:#c6ffb3">Pencairan SKPKB</th>
							<th style="font-size: 12px ; background-color:#ffe6f3">Nilai SPTLB</th>
							<th style="font-size: 12px ; background-color:#ffcce6">SKPLB Terbit</th>
							<th style="font-size: 12px ; background-color:#ffcce6">SKPLB Disetujui</th>
							<th style="font-size: 12px ; background-color:#ff99ce">Refund Discrepancy</th>
							<th style="font-size: 12px ; background-color:#ffe6cc">Status</th>
							<th style="font-size: 12px ; background-color:#ffe6cc">Keterangan</th>
							<th style="font-size: 12px ; background-color:#ccf2ff">Tanggal Update Halaman Ini</th>
							<th style="font-size: 12px ; background-color:#ccf2ff">Aksi</th>
						</tr>
					</thead>

					<tbody>
						<?php $no=1; foreach($listskpfpp as $value): ?>
						<tr>
						<th style="font-size: 12px; color:#840bb8"><?= $no++ ?></td>
							<td style="font-size: 12px; color: #e8109d"><b><?= $value->t_namawp ?></b></td>
							<td style="font-size: 12px"><?= $value->t_npwp ?></td>
							<td style="font-size: 12px" width="200" ><?= $value->t_alamatsurat ?></td>
							<td style="font-size: 12px"><?= $value->t_masa_tahun_pajak ?></td>
							<td style="font-size: 12px; color: #e8109d"><b><?= $value->t_jenispemeriksaan ?></b></td>
							<td style="font-size: 12px; color: #a70c71"><b><?= $value->t_kodepemeriksaan ?></b></td>
							<td style="font-size: 11px"><b><?php echo number_format($value->t_potensikka, 0, '.', '.' ); ?></b></td>
							<td style="font-size: 12px"><?= $value->t_nomorlhp ?></td>
							<!--c<td style="font-size: 12px; color: #a70c71"><b><?= $value->t_jenisskp ?></b></td>-->
							<td style="font-size: 11px"><?php echo number_format($value->t_skpkbterbit, 0, ',', '.' ); ?></td>
							<td style="font-size: 12px"><b><?php echo number_format($value->t_skpkbdisetujui, 0, ',', '.' ); ?></td>
							<td style="font-size: 12px"><b><?php echo number_format($value->t_skpkbcair, 0, ',', '.' ); ?></td>
							<td style="font-size: 12px"><b><?php echo number_format($value->t_sptlb, 0, ',', '.' ); ?></td>
							<td style="font-size: 12px"><b><?php echo number_format($value->t_skplbterbit, 0, ',', '.' ); ?></td>
							<td style="font-size: 12px"><b><?php echo number_format($value->t_skplbdisetujui, 0, ',', '.' ); ?></td>
							<td style="font-size: 12px"><b><?php echo number_format($value->t_rd, 0, ',', '.' ); ?></td>
							<td style="font-size: 12px"><?= $value->t_status ?></td>
							<td style="font-size: 12px; color:#800060"><?= $value->t_keterangan ?></td>
							<td style="font-size: 12px"><?= $value->t_tanggalupdateskpfpp ?></td>
							<td>
								<div class="btn-group dropleft">
									<button type="button" class="btn btn-primary dropdown-toggle btn-sm"
										data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="fa fa-fish"></i>
									</button>
									<div class="dropdown-menu">
										<a type="button" href="<?= base_url('skpfpp/edit/' . $value->id_datapemrikfpp)?>"
											class="dropdown-item"><i class="fa fa-edit"></i> Edit </a>
										<div class="dropdown-divider"></div>
										<a type="button"
											onclick="deleteskpfpp('<?=$value->id_datapemrikfpp?>','<?=$value->t_namawp?>');"
											class="dropdown-item"><i class="fa fa-trash"></i> Hapus </a>
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



</div>


<!--Modal Buat Import Excel-->
<?php $this->load->view('skpfpp/v_modal')?>

<!--Javascript-->

<script type="text/javascript">
	function deleteskpfpp(id_datapemrikfpp, t_namawp) {

		swal({
			title: "Konfirmasi",
			text: "Ingin menghapus data " + t_namawp + " ini?",
			icon: "warning",
			button: true,
			dangerMode: true,
		}).then((submit) => {
			if (submit) {
				$.ajax({
					url: "<?= base_url('skpfpp/delete/') ?>" + id_datapemrikfpp,
					type: 'delete',
					success: function (result) {
						var hasil = JSON.parse(result);
						swal_show(hasil);

						if (hasil['status_code'] == 200)
							setTimeout("window.open(self.location, '_self');", 800);

					}
				});
			}
		});


		function exportlistskpfpp() {
			var status = $('#status').val();

		}
	}

	//FilterData
	function filterData() {
		var status = $('#status').val();
	

		window.location.href = "<?= base_url('skpfpp/filter/') ?>" + status ;

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
	function exportskpfpp() {
		var id_datapemrikfpp = $('#id_datapemrikfpp').val();
		window.open("<?= base_url('skpfpp/exportpdf/'. $value->id_datapemrikfpp)?>");

	}
</script>


<!------------------------------------------------------------VIEWER------------------------------------------------>

<!------------------------------------------------------------VIEWER------------------------------------------------>

<!------------------------------------------------------------VIEWER------------------------------------------------>


<?php	}

else
{
  ?>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<div class="container-fluid" id="container-wrapper">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">SKPKB-SKPLB FPP</h1>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="./">Home</a></li>
			<li class="breadcrumb-item active" aria-current="page">SKPKB-SKPLB FPP</li>
		</ol>
	</div>
	<div class="col-lg-12">
		<div class="card mb-4">
			
			<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between" style="background-color:#e6e6ff">
				<h6 class="m-0 font-weight-bold text-primary">Tabel SKPKB-SKPLB FPP</h6>
				<div class="btn-group">
					<!--<a href="<?= base_url("skpfpp/tambah") ?>" class="m-0 float-right btn btn-primary btn">
						<span class="fa fa-plus-circle"></span> Tambah</a>-->
					<!--<button class="m-0 float-right btn btn-outline-info btn" data-target="#modal-import" data-toggle="modal">
						<span class="fa fa-upload"></span> Import</button>-->
					
				</div>
			</div>

			<div class="table-responsive p-3">
				
				<span style="color:#e8109d; font-style:italic; font-size: 12px">Filter berdasarkan "Status" </span>
				<div class="form-group row">
				&nbsp;&nbsp;&nbsp;<a href="<?= base_url("skpfpp/filter/Belum_terbit_NP2") ?>" class="m-0 float-right btn btn-secondary btn-sm">Belum terbit NP2</a>&nbsp;&nbsp;&nbsp;
				<a href="<?= base_url("skpfpp/filter/Perlengkapan_Berkas_&_Generate_NP2") ?>" class="m-0 float-right btn btn-primary btn-sm">NP2 terbit</a>&nbsp;&nbsp;&nbsp;
				<a href="<?= base_url("skpfpp/filter/SP2_terbit") ?>" class="m-0 float-right btn btn-warning btn-sm">SP2 terbit</a>&nbsp;&nbsp;&nbsp;
				<a href="<?= base_url("skpfpp/filter/LHP_terbit") ?>" class="m-0 float-right btn btn-success btn-sm">LHP terbit</a>&nbsp;&nbsp;&nbsp;
			
				
					<div class="btn-group-mb-1">
						<a href="<?= base_url('skpfpp') ?>"><i class="fa fa-history"></i></a>
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
							<th style="font-size: 12px ; background-color:#ccffd9">Potensi KKA</th>
							<th style="font-size: 12px ; background-color:#ccd9ff">Nomor LHP</th>
							<!--<th style="font-size: 12px ; background-color:#d9ffb3">Jenis SKP</th>-->
							<th style="font-size: 12px ; background-color:#d9ffcc">SKPKB Terbit</th>
							<th style="font-size: 12px ; background-color:#d9ffcc">SKPKB Disetujui</th>
							<th style="font-size: 12px ; background-color:#c6ffb3">Pencairan SKPKB</th>
							<th style="font-size: 12px ; background-color:#ffe6f3">Nilai SPTLB</th>
							<th style="font-size: 12px ; background-color:#ffcce6">SKPLB Terbit</th>
							<th style="font-size: 12px ; background-color:#ffcce6">SKPLB Disetujui</th>
							<th style="font-size: 12px ; background-color:#ff99ce">Refund Discrepancy</th>
							<th style="font-size: 12px ; background-color:#ffe6cc">Status</th>
							<th style="font-size: 12px ; background-color:#ffe6cc">Keterangan</th>
							<th style="font-size: 12px ; background-color:#ccf2ff">Tanggal Update Halaman Ini</th>
					
						</tr>
					</thead>

					<tbody>
						<?php $no=1; foreach($listskpfpp as $value): ?>
						<tr>
						<th style="font-size: 12px; color:#840bb8"><?= $no++ ?></td>
							<td style="font-size: 12px; color: #e8109d"><b><?= $value->t_namawp ?></b></td>
							<td style="font-size: 12px"><?= $value->t_npwp ?></td>
							<td style="font-size: 12px" width="200" ><?= $value->t_alamatsurat ?></td>
							<td style="font-size: 12px"><?= $value->t_masa_tahun_pajak ?></td>
							<td style="font-size: 12px; color: #e8109d"><b><?= $value->t_jenispemeriksaan ?></b></td>
							<td style="font-size: 12px; color: #a70c71"><b><?= $value->t_kodepemeriksaan ?></b></td>
							<td style="font-size: 11px"><b><?php echo number_format($value->t_potensikka, 0, '.', '.' ); ?></b></td>
							<td style="font-size: 12px"><?= $value->t_nomorlhp ?></td>
							<!--c<td style="font-size: 12px; color: #a70c71"><b><?= $value->t_jenisskp ?></b></td>-->
							<td style="font-size: 11px"><?php echo number_format($value->t_skpkbterbit, 0, ',', '.' ); ?></td>
							<td style="font-size: 12px"><b><?php echo number_format($value->t_skpkbdisetujui, 0, ',', '.' ); ?></td>
							<td style="font-size: 12px"><b><?php echo number_format($value->t_skpkbcair, 0, ',', '.' ); ?></td>
							<td style="font-size: 12px"><b><?php echo number_format($value->t_sptlb, 0, ',', '.' ); ?></td>
							<td style="font-size: 12px"><b><?php echo number_format($value->t_skplbterbit, 0, ',', '.' ); ?></td>
							<td style="font-size: 12px"><b><?php echo number_format($value->t_skplbdisetujui, 0, ',', '.' ); ?></td>
							<td style="font-size: 12px"><b><?php echo number_format($value->t_rd, 0, ',', '.' ); ?></td>
							<td style="font-size: 12px"><?= $value->t_status ?></td>
							<td style="font-size: 12px; color:#800060"><?= $value->t_keterangan ?></td>
							<td style="font-size: 12px"><?= $value->t_tanggalupdateskpfpp ?></td>

						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>



</div>


<!--Modal Buat Import Excel-->
<?php $this->load->view('skpfpp/v_modal')?>

<!--Javascript-->

<script type="text/javascript">
	function deleteskpfpp(id_datapemrikfpp, t_namawp) {

		swal({
			title: "Konfirmasi",
			text: "Ingin menghapus data " + t_namawp + " ini?",
			icon: "warning",
			button: true,
			dangerMode: true,
		}).then((submit) => {
			if (submit) {
				$.ajax({
					url: "<?= base_url('skpfpp/delete/') ?>" + id_datapemrikfpp,
					type: 'delete',
					success: function (result) {
						var hasil = JSON.parse(result);
						swal_show(hasil);

						if (hasil['status_code'] == 200)
							setTimeout("window.open(self.location, '_self');", 800);

					}
				});
			}
		});


		function exportlistskpfpp() {
			var status = $('#status').val();

		}
	}

	//FilterData
	function filterData() {
		var status = $('#status').val();
	

		window.location.href = "<?= base_url('skpfpp/filter/') ?>" + status ;

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
	function exportskpfpp() {
		var id_datapemrikfpp = $('#id_datapemrikfpp').val();
		window.open("<?= base_url('skpfpp/exportpdf/'. $value->id_datapemrikfpp)?>");

	}
</script>



<?php	}
}

?>