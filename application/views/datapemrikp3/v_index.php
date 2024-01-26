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
		<h1 class="h3 mb-0 text-gray-800">Data Pemeriksaan P3</h1>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="./">Home</a></li>
			<li class="breadcrumb-item active" aria-current="page">Data Pemeriksaan P3</li>
		</ol>
	</div>
	<div class="col-lg-12">
		<div class="card mb-4">
			
			<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between" style="background-color:#e6ffff">
				<h6 class="m-0 font-weight-bold text-primary">Tabel Data Pemeriksaan P3</h6>
				<div class="btn-group">
					<a href="<?= base_url("datapemrikp3/tambah") ?>" class="m-0 float-right btn btn-primary btn">
						<span class="fa fa-plus-circle"></span> Tambah</a>
					<button class="m-0 float-right btn btn-outline-info btn" data-target="#modal-import" data-toggle="modal">
						<span class="fa fa-upload"></span> Import</button>
					<a href="<?= base_url("datapemrikp3/exportlistdatapemrikp3") ?>"
						class="m-0 float-right btn btn-outline-success btn">
						<span class="fa fa-download"></span> Export</a>
				</div>
			</div>

			<div class="table-responsive p-3">
				
				<span style="color:#e8109d; font-style:italic; font-size: 12px">Filter berdasarkan "Status" </span>
				<div class="form-group row">
				&nbsp;&nbsp;&nbsp;<a href="<?= base_url("datapemrikp3/filter/Perlengkapan_Berkas_&_Generate_NP2") ?>" class="m-0 float-right btn btn-primary btn-sm">Tunggakan NP2</a>&nbsp;&nbsp;&nbsp;
				<a href="<?= base_url("datapemrikp3/filter/SP2_terbit") ?>" class="m-0 float-right btn btn-warning btn-sm">Tunggakan SP2</a>&nbsp;&nbsp;&nbsp;
				<a href="<?= base_url("datapemrikp3/filter/LHP_terbit") ?>" class="m-0 float-right btn btn-success btn-sm">LHP Terbit</a>&nbsp;&nbsp;&nbsp;
			
				
					<div class="btn-group-mb-1">
						<a href="<?= base_url('datapemrikp3') ?>"><i class="fa fa-history"></i></a>
					</div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			
				</div>

              

               
                
  

            <div class="col-lg-12">
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
							<th style="font-size: 12px ; background-color:#ccffd9">AR</th>
							<th style="font-size: 12px ; background-color:#99ffb3">Jenis P3</th>
							<!--<th style="font-size: 12px ; background-color:#e6ffcc">Tanggal Input</th>-->
							<!--<th style="font-size: 12px ; background-color:#e6ffcc">Cetak Berkas</th>-->
							<th style="font-size: 12px ; background-color:#e6ffcc">NP2</th>
							<th style="font-size: 12px ; background-color:#e6ffcc">Tanggal NP2</th>
							<th style="font-size: 12px ; background-color:#ffffcc">SP2</th>
							<th style="font-size: 12px ; background-color:#ffffcc">Tanggal SP2</th>
							<th style="font-size: 12px ; background-color:#f9e6ff">Jatuh Tempo</th>
							<th style="font-size: 12px ; background-color:#ffe6cc">Status</th>
							<th style="font-size: 12px ; background-color:#ffe6cc">Keterangan</th>
							<th style="font-size: 12px ; background-color:#ccf2ff">Tanggal Update</th>
							<th style="font-size: 12px ; background-color:#ccf2ff">Aksi </th>
						</tr>
					</thead>

					<tbody>
						<?php $no=1; foreach($listdatapemrikp3 as $value): ?>
						<tr>
							<th style="font-size: 12px; color:#840bb8"><?= $no++ ?></td>
							<td style="font-size: 12px; color: #3333ff"><b><?= $value->t_namawp ?></b></td>
							<td style="font-size: 12px"><?= $value->t_npwp ?></td>
							<td style="font-size: 12px" width="200" ><?= $value->t_alamatsurat ?></td>
							<td style="font-size: 12px"><?= $value->t_masa_tahun_pajak ?></td>
							<td style="font-size: 12px; color: #3333ff"><b><?= $value->t_jenispemeriksaan ?></b></td>
							<td style="font-size: 12px; color: #a70c71"><b><?= $value->t_kodepemeriksaan ?></b></td>
							<td style="font-size: 12px"><b><?php echo number_format($value->t_potensikka, 0, '.', '.' ); ?></b></td>
							<td style="font-size: 12px"><?= $value->t_ar ?></td>
							<td style="font-size: 12px; color: #a70c71"><b><?= $value->t_jenisp3 ?></b></td>
							<!--<td style="font-size: 12px"><?= full_date_dmy($value->t_tanggalinput) ?></td>-->
							<!--<td>
								<div class="btn-group dropleft">
									<a type="button" href="<?= base_url('datapemrikp3/exportpdf/'. $value->id_datapemrikp3)?>" target="_blank" class="btn btn-primary btn-sm" aria-haspopup="true"
										aria-expanded="false">
										<i class="fa fa-cat"></i>
									</a>
								</div>

								<div class="btn-group dropleft">
									<a type="button" href="<?= base_url('datapemrikp3/exportpdf/'. $value->id_datapemrikp3)?>" target="_blank" class="btn btn-info btn-sm" aria-haspopup="true"
										aria-expanded="false">
										<i class="fa fa-dog"></i>
									</a>
								</div>
								<div class="btn-group dropleft">
									<a type="button" href="<?= base_url('datapemrikp3/exportpdf/'. $value->id_datapemrikp3)?>" target="_blank" class="btn btn-success btn-sm" aria-haspopup="true"
										aria-expanded="false">
										<i class="fa fa-poop"></i>
									</a>
								</div>
							</td>-->
							<td style="font-size: 12px"><?= $value->t_np2 ?></td>
							<td style="font-size: 12px"><?= full_date_dmy($value->t_tanggalnp2) ?></td>
							<td style="font-size: 12px"><b><?= $value->t_sp2 ?></b></td>
							<td style="font-size: 12px"><?= $value->t_tanggalsp2 ?></td>
							<td style="font-size: 12px"><?= full_date_dmy($value->t_jatuhtempo) ?></td>
							<td style="font-size: 12px; color:#800060"><?= $value->t_status ?></td>
							<td style="font-size: 12px; color:#800060"><?= $value->t_keterangan ?></td>
							<td style="font-size: 12px; color:#800060"><?= $value->t_tanggalupdatedatapemrik ?></td>
							<td >
								<div class="btn-group dropleft">
									<button type="button" class="btn btn-primary dropdown-toggle btn-sm"
										data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="fa fa-fish"></i>
									</button>
									<div class="dropdown-menu">
										<a type="button" href="<?= base_url('datapemrikp3/edit/' . $value->id_datapemrikp3)?>"
											class="dropdown-item"><i class="fa fa-edit"></i> Edit </a>
										<div class="dropdown-divider"></div>
										<a type="button"
											onclick="deletedatapemrikp3('<?=$value->id_datapemrikp3?>','<?=$value->t_namawp?>');"
											class="dropdown-item"><i class="fa fa-trash"></i> Hapus </a>
									</div>
								</div>
							</td>
						</tr>
						<?php endforeach; ?>
<br>
					</tbody>
				</table>

				
			</div>
		</div>
	</div>
	</div>

	<!--Tabel Summary-->
	<!--<div class="row">
            <div class="col-lg-12 mb-4">-->
              <!-- Simple Tables -->
             
  




<!--Modal Buat Import Excel-->
<?php $this->load->view('datapemrikp3/v_modal')?>

<!--Javascript-->

<script type="text/javascript">
	function deletedatapemrikp3(id_datapemrikp3, t_namawp) {

		swal({
			title: "Konfirmasi",
			text: "Ingin menghapus data " + t_namawp + " ini?",
			icon: "warning",
			button: true,
			dangerMode: true,
		}).then((submit) => {
			if (submit) {
				$.ajax({
					url: "<?= base_url('datapemrikp3/delete/') ?>" + id_datapemrikp3,
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


		function exportlistdatapemrikp3() {
			var status = $('#status').val();

		}
	}

	//FilterData
	function filterData() {
		var status = $('#status').val();
		

		window.location.href = "<?= base_url('datapemrikp3/filter/') ?>" + status ;

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
	function exportdatapemrikp3() {
		var id_datapemrikp3 = $('#id_datapemrikp3').val();
		window.open("<?= base_url('datapemrikp3/exportpdf/'. $value->id_datapemrikp3)?>");

	}
</script>



<!------------------------------------------------------------VIEWER------------------------------------------------>

<!------------------------------------------------------------VIEWER------------------------------------------------>

<!------------------------------------------------------------VIEWER------------------------------------------------>


<?php	}

else
{
  ?>






<?php	}
}

?>