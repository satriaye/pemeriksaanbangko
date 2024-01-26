
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
		<h1 class="h3 mb-0 text-gray-800">Monitoring LHP </h1>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="./">Home</a></li>
			<li class="breadcrumb-item active" aria-current="page">Monitoring LHP </li>
		</ol>
	</div>
	<div class="col-lg-12">
		<div class="card mb-4">
			
			<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between" style="background-color:#e6e6ff">
				<h6 class="m-0 font-weight-bold text-primary">Tabel Monitoring LHP FPP</h6>
				<div class="btn-group">
					<!--<a href="<?= base_url("monitoringlhpfpp/tambah") ?>" class="m-0 float-right btn btn-primary btn">
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
				&nbsp;&nbsp;&nbsp;<a href="<?= base_url("monitoringlhpfpp/filter/Belum_terbit_NP2") ?>" class="m-0 float-right btn btn-secondary btn-sm">Belum terbit NP2</a>&nbsp;&nbsp;&nbsp;
				<a href="<?= base_url("monitoringlhpfpp/filter/Perlengkapan_Berkas_&_Generate_NP2") ?>" class="m-0 float-right btn btn-primary btn-sm">NP2 terbit</a>&nbsp;&nbsp;&nbsp;
				<a href="<?= base_url("monitoringlhpfpp/filter/SP2_terbit") ?>" class="m-0 float-right btn btn-warning btn-sm">SP2 terbit</a>&nbsp;&nbsp;&nbsp;
				<a href="<?= base_url("monitoringlhpfpp/filter/LHP_terbit") ?>" class="m-0 float-right btn btn-success btn-sm">LHP terbit</a>&nbsp;&nbsp;&nbsp;
			
			
				
					<div class="btn-group-mb-1">
						<a href="<?= base_url('monitoringlhpfpp') ?>"><i class="fa fa-history"></i></a>
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
							<th style="font-size: 12px ; background-color:#ccd9ff">Nomor LHP</th>
							<th style="font-size: 12px ; background-color:#ccd9ff">Tanggal LHP</th>
							<th style="font-size: 12px ; background-color:#ccd9ff">Tanggal diterima P3</th>
							<th style="font-size: 11px ; background-color:#ccd9ff">Tanggal Kirim ND ke Pelayanan</th>
							<th style="font-size: 12px ; background-color:#f9e6ff">Jatuh Tempo LHP</th>
							<th style="font-size: 12px ; background-color:#f3ccff">LHP Konversi</th>
							<th style="font-size: 12px ; background-color:#f3ccff">Ketepatan Waktu LHP</th>
							<th style="font-size: 12px ; background-color:#ffe6cc">Status</th>
							<th style="font-size: 12px ; background-color:#ffe6cc">Keterangan</th>
							<th style="font-size: 12px ; background-color:#ccf2ff">Tanggal Update </th>
							<th style="font-size: 12px ; background-color:#ccf2ff">Aksi</th>
						</tr>
					</thead>

					<tbody>
						<?php $no=1; foreach($listmonitoringlhpfpp as $value): ?>
						<tr>
						<th style="font-size: 12px; color:#840bb8"><?= $no++ ?></td>
							<td style="font-size: 12px; color: #360a03"><b><?= $value->t_namawp ?></b></td>
							<td style="font-size: 12px"><?= $value->t_npwp ?></td>
							<td style="font-size: 12px" width="200" ><?= $value->t_alamatsurat ?></td>
							<td style="font-size: 12px"><?= $value->t_masa_tahun_pajak ?></td>
							<td style="font-size: 12px; color: #e8109d"><b><?= $value->t_jenispemeriksaan ?></b></td>
							<td style="font-size: 12px; color: #a70c71"><b><?= $value->t_kodepemeriksaan ?></b></td>
							<td style="font-size: 12px"><?= $value->t_nomorlhp ?></td>
							<td style="font-size: 12px"><?= full_date_dmy($value->t_tanggallhp) ?></td>
							<td style="font-size: 12px"><?= full_date_dmy($value->t_tanggalsampaip3) ?></td>
							<td style="font-size: 12px"><?= full_date_dmy($value->t_tanggalndkepelayanan) ?></td>
							<td style="font-size: 12px"><?= full_date_dmy($value->t_jatuhtempo) ?></td>
							<td style="font-size: 12px"><?= $value->t_lhpkonversi ?></td>
							<td style="font-size: 12px"><?= $value->t_keteranganwaktulhp ?></td>
							<td style="font-size: 12px; color:#800060"><?= $value->t_status ?></td>
							<td style="font-size: 12px; color:#800060"><?= $value->t_keterangan ?></td>
							<td style="font-size: 12px; color:#800060"><?= $value->t_tanggalupdatemonitoringlhp ?></td>
							<td>
								<div class="btn-group dropleft">
									<button type="button" class="btn btn-primary dropdown-toggle btn-sm"
										data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="fa fa-fish"></i>
									</button>
									<div class="dropdown-menu">
										<a type="button" href="<?= base_url('monitoringlhpfpp/edit/' . $value->id_datapemrikfpp)?>"
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

</div>

<!--Modal Buat Import Excel-->
<?php $this->load->view('monitoringlhpfpp/v_modal')?>

<!--Javascript-->

<script type="text/javascript">
	function deletemonitoringlhpfpp(id_datapemrikfpp, t_namawp) {

		swal({
			title: "Konfirmasi",
			text: "Ingin menghapus data " + t_namawp + " ini?",
			icon: "warning",
			button: true,
			dangerMode: true,
		}).then((submit) => {
			if (submit) {
				$.ajax({
					url: "<?= base_url('monitoringlhpfpp/delete/') ?>" + id_datapemrikfpp,
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


		function exportlistmonitoringlhpfpp() {
			var status = $('#status').val();

		}
	}

	//FilterData
	function filterData() {
		var status = $('#status').val();
		

		window.location.href = "<?= base_url('monitoringlhpfpp/filter/') ?>" + status ;

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
	function exportmonitoringlhpfpp() {
		var id_datapemrikfpp = $('#id_datapemrikfpp').val();
		window.open("<?= base_url('monitoringlhpfpp/exportpdf/'. $value->id_datapemrikfpp)?>");

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
		<h1 class="h3 mb-0 text-gray-800">Monitoring LHP </h1>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="./">Home</a></li>
			<li class="breadcrumb-item active" aria-current="page">Monitoring LHP </li>
		</ol>
	</div>
	<div class="col-lg-12">
		<div class="card mb-4">
			
			<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between" style="background-color:#e6e6ff">
				<h6 class="m-0 font-weight-bold text-primary">Tabel Monitoring LHP FPP</h6>
				<div class="btn-group">
					<!--<a href="<?= base_url("monitoringlhpfpp/tambah") ?>" class="m-0 float-right btn btn-primary btn">
						<span class="fa fa-plus-circle"></span> Tambah</a>-->
					<!--<button class="m-0 float-right btn btn-outline-info btn" data-target="#modal-import" data-toggle="modal">
						<span class="fa fa-upload"></span> Import</button>-->
						
				</div>
			</div>

			<div class="table-responsive p-3">
				
				<span style="color:#e8109d; font-style:italic; font-size: 12px">Filter berdasarkan "Status" </span>
				<div class="form-group row">
				&nbsp;&nbsp;&nbsp;<a href="<?= base_url("monitoringlhpfpp/filter/Belum_terbit_NP2") ?>" class="m-0 float-right btn btn-secondary btn-sm">Belum terbit NP2</a>&nbsp;&nbsp;&nbsp;
				<a href="<?= base_url("monitoringlhpfpp/filter/Perlengkapan_Berkas_&_Generate_NP2") ?>" class="m-0 float-right btn btn-primary btn-sm">NP2 terbit</a>&nbsp;&nbsp;&nbsp;
				<a href="<?= base_url("monitoringlhpfpp/filter/SP2_terbit") ?>" class="m-0 float-right btn btn-warning btn-sm">SP2 terbit</a>&nbsp;&nbsp;&nbsp;
				<a href="<?= base_url("monitoringlhpfpp/filter/LHP_terbit") ?>" class="m-0 float-right btn btn-success btn-sm">LHP terbit</a>&nbsp;&nbsp;&nbsp;
			
			
				
					<div class="btn-group-mb-1">
						<a href="<?= base_url('monitoringlhpfpp') ?>"><i class="fa fa-history"></i></a>
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
							<th style="font-size: 12px ; background-color:#ccd9ff">Nomor LHP</th>
							<th style="font-size: 12px ; background-color:#ccd9ff">Tanggal LHP</th>
							<th style="font-size: 12px ; background-color:#ccd9ff">Tanggal diterima P3</th>
							<th style="font-size: 11px ; background-color:#ccd9ff">Tanggal Kirim ND ke Pelayanan</th>
							<th style="font-size: 12px ; background-color:#f9e6ff">Jatuh Tempo LHP</th>
							<th style="font-size: 12px ; background-color:#f3ccff">LHP Konversi</th>
							<th style="font-size: 12px ; background-color:#f3ccff">Ketepatan Waktu LHP</th>
							<th style="font-size: 12px ; background-color:#ffe6cc">Status</th>
							<th style="font-size: 12px ; background-color:#ffe6cc">Keterangan</th>
							<th style="font-size: 12px ; background-color:#ccf2ff">Tanggal Update </th>
		
						</tr>
					</thead>

					<tbody>
						<?php $no=1; foreach($listmonitoringlhpfpp as $value): ?>
						<tr>
						<th style="font-size: 12px; color:#840bb8"><?= $no++ ?></td>
							<td style="font-size: 12px; color: #360a03"><b><?= $value->t_namawp ?></b></td>
							<td style="font-size: 12px"><?= $value->t_npwp ?></td>
							<td style="font-size: 12px" width="200" ><?= $value->t_alamatsurat ?></td>
							<td style="font-size: 12px"><?= $value->t_masa_tahun_pajak ?></td>
							<td style="font-size: 12px; color: #e8109d"><b><?= $value->t_jenispemeriksaan ?></b></td>
							<td style="font-size: 12px; color: #a70c71"><b><?= $value->t_kodepemeriksaan ?></b></td>
							<td style="font-size: 12px"><?= $value->t_nomorlhp ?></td>
							<td style="font-size: 12px"><?= full_date_dmy($value->t_tanggallhp) ?></td>
							<td style="font-size: 12px"><?= full_date_dmy($value->t_tanggalsampaip3) ?></td>
							<td style="font-size: 12px"><?= full_date_dmy($value->t_tanggalndkepelayanan) ?></td>
							<td style="font-size: 12px"><?= full_date_dmy($value->t_jatuhtempo) ?></td>
							<td style="font-size: 12px"><?= $value->t_lhpkonversi ?></td>
							<td style="font-size: 12px"><?= $value->t_keteranganwaktulhp ?></td>
							<td style="font-size: 12px; color:#800060"><?= $value->t_status ?></td>
							<td style="font-size: 12px; color:#800060"><?= $value->t_keterangan ?></td>
							<td style="font-size: 12px; color:#800060"><?= $value->t_tanggalupdatemonitoringlhp ?></td>

						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

</div>

<!--Modal Buat Import Excel-->
<?php $this->load->view('monitoringlhpfpp/v_modal')?>

<!--Javascript-->

<script type="text/javascript">
	function deletemonitoringlhpfpp(id_datapemrikfpp, t_namawp) {

		swal({
			title: "Konfirmasi",
			text: "Ingin menghapus data " + t_namawp + " ini?",
			icon: "warning",
			button: true,
			dangerMode: true,
		}).then((submit) => {
			if (submit) {
				$.ajax({
					url: "<?= base_url('monitoringlhpfpp/delete/') ?>" + id_datapemrikfpp,
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


		function exportlistmonitoringlhpfpp() {
			var status = $('#status').val();

		}
	}

	//FilterData
	function filterData() {
		var status = $('#status').val();
		

		window.location.href = "<?= base_url('monitoringlhpfpp/filter/') ?>" + status ;

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
	function exportmonitoringlhpfpp() {
		var id_datapemrikfpp = $('#id_datapemrikfpp').val();
		window.open("<?= base_url('monitoringlhpfpp/exportpdf/'. $value->id_datapemrikfpp)?>");

	}
</script>





<?php	}
}

?>