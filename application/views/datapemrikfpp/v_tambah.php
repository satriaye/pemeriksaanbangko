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
					<label for="inputEmail3" class="col-sm-3 col-form-label" style="color:#203827" ><b>Nama WP</b><a style="color:#e8109d">*</a></label>
					<div class="col-sm-9">
						<input type="text" class="form-control" placeholder="Nama" style="color: #1a1a1a" id="namawp">
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword3" class="col-sm-3 col-form-label" style="color:#203827"><b>NPWP</b><a style="color:#e8109d">*</a></label>
					<div class="col-sm-9">
						<input type="text" class="form-control" maxlength="20" placeholder="00.000.000.0-000.000"
							style="color: #1a1a1a" id="npwp">
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword3" class="col-sm-3 col-form-label" style="color:#203827"><b>Alamat</b><a style="color:#e8109d">*</a></label>
					<div class="col-sm-9">
						<input type="text" class="form-control" placeholder="Alamat " style="color: #1a1a1a"
							id="alamatsurat">
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword3" class="col-sm-3 col-form-label" style="color:#1b9e41"><b>Masa & Tahun Pajak</b><a style="color:#e8109d">*</a></label>
					<div class="col-sm-9">
						<input type="text" class="form-control" maxlength="13" placeholder="012021-122021"
							style="color: #1a1a1a" id="masa_tahun_pajak">
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword3" class="col-sm-3 col-form-label" style="color:#1b9e41"><b>Jenis Pemeriksaan</b><a style="color:#e8109d">*</a></label>
					<div class="col-sm-9">
						<select type="text" class="form-control" placeholder="sdfdsf" style="color: #1a1a1a" id="jenispemeriksaan">
							<option value="LB">LB</option>
							<option value="Rutin All Taxes">Rutin All Taxes</option>
							<option value="Rutin Single/ Beberapa">Rutin Single/ Beberapa</option>
							<option value="Pemsus">Pemsus</option>
							<option value="Lokasi">Lokasi</option>
						</select>
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword3" class="col-sm-3 col-form-label" style="color:#1b9e41"><b>Kode Pemeriksaan</b><a style="color:#e8109d">*</a></label>
					<div class="col-sm-9">
						<input type="text" class="form-control" placeholder="1182-xxxx" style="color: #1a1a1a"
							id="kodepemeriksaan">
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword3" class="col-sm-3 col-form-label"style="color:#e8109d"><b>Nilai SPTLB</b></label>
					<div class="col-sm-9">
						<input type="number" class="form-control" placeholder="pakai angka tanpa titik atau koma" style="color: #1a1a1a"
							id="sptlb" value="0">
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword3" class="col-sm-3 col-form-label" style="color:#203827"><b>Potensi KKA</b></label>
					<div class="col-sm-9">
						<input type="number" class="form-control" maxlength="20" placeholder="pakai angka tanpa titik atau koma"
							style="color: #1a1a1a" id="potensikka" value="0">
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword3" class="col-sm-3 col-form-label" style="color:#203827"><b>AR</b></label>
					<div class="col-sm-9">
						<input type="text" class="form-control" maxlength="20" placeholder="Nama AR"
							style="color: #1a1a1a" id="ar">
					</div>
				</div>

				<div class="form-group row">
					<label for="inputPassword3" class="col-sm-3 col-form-label" style="color:#916307"><b>Status</b><a style="color:#e8109d">*</a></label>
					<div class="col-sm-9">
						<select type="text" class="form-control" style="color: #1a1a1a" id="status">
						<option value="Belum_terbit_NP2">Belum Terbit NP2</option>
						<option value="Perlengkapan_Berkas_&_Generate_NP2">Proses Perlengkapan Berkas & Generate NP2</option>
							<option value="SP2_terbit">Proses Pemeriksaan (SP2 Terbit)</option>
							<option value="LHP_terbit">LHP Terbit</option>
						</select>
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword3" class="col-sm-3 col-form-label" style="color:#916307"><b>Keterangan</b></label>
					<div class="col-sm-9">
						<input type="text" class="form-control" placeholder="Proses Peminjaman Berkas, dll" style="color: #1a1a1a" id="keterangan">
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword3" class="col-sm-3 col-form-label">Tanggal Input</label>
					<div class="col-sm-9">
						<input type="date" value="<?= date("Y-m-d"); ?>" class="form-control" style="color: #1a1a1a"
							id="tanggalupdatedatapemrik" readonly>
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
		var jenispemeriksaan = $('#jenispemeriksaan').val();
		var kodepemeriksaan = $('#kodepemeriksaan').val();
		var sptlb = $('#sptlb').val();
		var potensikka = $('#potensikka').val();
		var ar = $('#ar').val();
		var status = $('#status').val();
		var keterangan = $('#keterangan').val();
		var tanggalupdatedatapemrik = $('#tanggalupdatedatapemrik').val();


		if (namawp.length > 0 &&
			npwp.length > 0 &&
			alamatsurat.length > 0 &&
			masa_tahun_pajak.length > 0 &&
			kodepemeriksaan.length > 0 &&
			status.length > 0 	
		) 

		{
			$.ajax({
				url: "<?= base_url('datapemrikfpp/simpan') ?>",
				type: 'post',
				data: {
					namawp: namawp,
					npwp: npwp,
					alamatsurat: alamatsurat,
					masa_tahun_pajak: masa_tahun_pajak,
					jenispemeriksaan:jenispemeriksaan,
					kodepemeriksaan: kodepemeriksaan,
					sptlb: sptlb,
					potensikka: potensikka,
					ar: ar,
					status: status,
					keterangan: keterangan,
					tanggalupdatedatapemrik: tanggalupdatedatapemrik,

				},
				success: function (result) {
					var hasil = JSON.parse(result);
					swal_show(hasil);

					if (hasil['status_code'] == 200)
						setTimeout("window.history.back()", 800);

				}
			});

		}

	}
</script>