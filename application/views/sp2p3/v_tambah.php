<div class="container-fluid" id="container-wrapper">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Data Pemeriksaan</h1>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="./">Home</a></li>
			<li class="breadcrumb-item active" aria-current="page">Data Pemeriksaan</li>
		</ol>
	</div>
	<div class="card mb-4">
		<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
			<h6 class="m-0 font-weight-bold text-primary">Tambah Data Pemeriksaan</h6>
		</div>
		<div class="card-body">
			<form onsubmit="submit_add(); return false;">
				<div class="form-group row">
				<label for="inputEmail3" class="col-sm-3 col-form-label" >Nama WP</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" placeholder="Nama" style="color: #1a1a1a; background-color:#ccfff2" id="namawp">
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword3" class="col-sm-3 col-form-label">NPWP</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" maxlength="20" placeholder="00.000.000.0-000.000"
							style="color: #1a1a1a; background-color:#ccfff2" id="npwp">
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword3" class="col-sm-3 col-form-label">Alamat</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" placeholder="Alamat " style="color: #1a1a1a; background-color:#ccfff2"
							id="alamatsurat">
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword3" class="col-sm-3 col-form-label">Masa & Tahun Pajak</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" maxlength="13" placeholder="012021-122021"
							style="color: #1a1a1a; background-color:#ccffd9" id="masa_tahun_pajak">
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword3" class="col-sm-3 col-form-label">Kode Pemeriksaan</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" placeholder="1182-xxxx" style="color: #1a1a1a ; background-color:#ccffd9"
							id="kodepemeriksaan">
					</div>
				</div><br>
				<div class="form-group row">
					<label for="inputPassword3" class="col-sm-3 col-form-label">Supervisor</label>
					<div class="col-sm-9">
						<input type="date" class="form-control" placeholder="1182-xxxx" style="color: #1a1a1a; background-color:#4d6600"
							id="namasupervisor">
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword3" class="col-sm-3 col-form-label">Supervisor</label>
					<div class="col-sm-9">
						<input type="date" class="form-control" placeholder="1182-xxxx" style="color: #1a1a1a; background-color:#4d6600"
							id="namasupervisor">
					</div>
				</div>

				<div class="form-group row">
					<label for="inputPassword3" class="col-sm-3 col-form-label">Status</label>
					<div class="col-sm-9">
						<select type="text" class="form-control" placeholder="sdfdsf" style="color: #1a1a1a" id="status">
							<option value="proses">Proses</option>
							<option value="selesai" style:>Selesai</option>
						</select>
					</div>
				</div>

				<div class="form-group row">
					<div class="col-sm-10">
						<button type="submit" class="btn btn-primary"><span class="fa fa-check-circle"></span>
							Simpan</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<script type="text/javascript">
	function submit_add() {
		var namawp = $('#namawp').val();
		var npwp = $('#npwp').val();
		var alamatsurat = $('#alamatsurat').val();
		var masa_tahun_pajak = $('#masa_tahun_pajak').val();
		var kodepemeriksaan = $('#kodepemeriksaan').val();
		var tanggalinput = $('#tanggalinput').val();
		var status = $('#status').val();
		


		if (namawp.length > 0 &&
			npwp.length > 0 &&
			alamatsurat.length > 0 &&
			masa_tahun_pajak.length > 0 &&
			kodepemeriksaan.length > 0 &&
			tanggalinput.length > 0 &&
			status.length > 0 	
		) 

		{
			$.ajax({
				url: "<?= base_url('sp2p3/simpan') ?>",
				type: 'post',
				data: {
					namawp: namawp,
					npwp: npwp,
					alamatsurat: alamatsurat,
					masa_tahun_pajak: masa_tahun_pajak,
					kodepemeriksaan: kodepemeriksaan,
					tanggalinput: tanggalinput,
					status: status,
					
				},
				success: function (result) {
					var hasil = JSON.parse(result);
					swal_show(hasil);

					if (hasil['status_code'] == 200)
						setTimeout("window.history.back()", 1500);

				}
			});

		}

	}
</script>