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
			<h6 class="m-0 font-weight-bold text-primary">Ubah Data Pemeriksaan</h6>
		</div>
		<div class="card-body">
			<form onsubmit="submit_update(); return false;">
				<input type="hidden" id="id_datapemrikfpp" value="<?= $datadatapemrikfpp->id_datapemrikfpp ?>">
				<div class="form-group row">
				<label for="inputEmail3" class="col-sm-3 col-form-label" style="color:#203827" ><b>Nama WP</b><a style="color:#e8109d">*</a></label>
					<div class="col-sm-9">
						<input type="text" class="form-control" placeholder="Nama" style="color: #1a1a1a" id="namawp"
						value="<?= $datadatapemrikfpp-> t_namawp?>" readonly>
					</div>
				</div>
				<div class="form-group row">
				<label for="inputPassword3" class="col-sm-3 col-form-label" style="color:#203827"><b>NPWP</b><a style="color:#e8109d">*</a></label>
					<div class="col-sm-9">
						<input type="text" class="form-control" maxlength="20" placeholder="00.000.000.0-000.000"
							style="color: #1a1a1a" id="npwp"
						value="<?= $datadatapemrikfpp-> t_npwp?>" readonly>
					</div>
				</div>
                <div class="form-group row">
				<label for="inputPassword3" class="col-sm-3 col-form-label" style="color:#203827"><b>Alamat</b><a style="color:#e8109d">*</a></label>
					<div class="col-sm-9">
						<input type="text" class="form-control" placeholder="Alamat " style="color: #1a1a1a"
							id="alamatsurat"
						value="<?= $datadatapemrikfpp-> t_alamatsurat?>" readonly>
					</div>
				</div>
                <div class="form-group row">
				<label for="inputPassword3" class="col-sm-3 col-form-label" style="color:#1b9e41"><b>Masa & Tahun Pajak</b><a style="color:#e8109d">*</a></label>
					<div class="col-sm-9">
						<input type="text" class="form-control" maxlength="13" placeholder="012021-122021"
							style="color: #1a1a1a" id="masa_tahun_pajak"
						value="<?= $datadatapemrikfpp-> t_masa_tahun_pajak?>" readonly>
					</div>
				</div>
				<div class="form-group row">
				<label for="inputPassword3" class="col-sm-3 col-form-label" style="color:#1b9e41"><b>Jenis Pemeriksaan</b><a style="color:#e8109d">*</a></label>
					<div class="col-sm-9">
						<input type="text" class="form-control" placeholder="sdfdsf" style="color: #1a1a1a" id="jenispemeriksaan" value="<?=$datadatapemrikfpp-> t_jenispemeriksaan?>"
						readonly>
					</div>
				</div>
                <div class="form-group row">
				<label for="inputPassword3" class="col-sm-3 col-form-label" style="color:#1b9e41"><b>Kode Pemeriksaan</b><a style="color:#e8109d">*</a></label>
					<div class="col-sm-9">
						<input type="text" class="form-control" placeholder="1182-xxxx" style="color: #1a1a1a"
							id="kodepemeriksaan"
						value="<?= $datadatapemrikfpp-> t_kodepemeriksaan?>" readonly>
					</div>
				</div>
				<br>

				<div class="form-group row">
					<label for="inputPassword3" class="col-sm-3 col-form-label" style="color:#3366ff"><b>Nomor LHP</b></label>
					<div class="col-sm-9">
						<input type="text" class="form-control" placeholder="LAP-XXX" 
							id="nomorlhp" value="<?= $datadatapemrikfpp-> t_nomorlhp?>">
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword3" style="color:#3366ff" class="col-sm-3 col-form-label"><b>Tanggal LHP</b></label>
					<div class="col-sm-9">
						<input type="date" class="form-control" placeholder="1182-xxxx" style="color: #1a1a1a"
							id="tanggallhp" value="<?= $datadatapemrikfpp-> t_tanggallhp?>">
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword3" class="col-sm-3 col-form-label" style="color:#3366ff"><b>Tanggal Sampai Seksi P3</b></label>
					<div class="col-sm-9">
						<input type="date" value="<?= date("Y-m-d"); ?>" class="form-control" placeholder="1182-xxxx"
							style="color: #1a1a1a" id="tanggalsampaip3" 
							value="<?= $datadatapemrikfpp-> t_tanggalsampaip3?>">
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword3" class="col-sm-3 col-form-label" style="color:#3366ff"><b>Tanggal Kirim ke Pelayanan</b></label>
					<div class="col-sm-9">
						<input type="date" class="form-control"  style="color: #1a1a1a"
							id="tanggalndkepelayanan" value="<?= $datadatapemrikfpp-> t_tanggalndkepelayanan?>">
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword3" style="color:#e8109d" class="col-sm-3 col-form-label"><b>Jatuh Tempo Pemeriksaan</b></label>
					<div class="col-sm-9">
						<input type="date" class="form-control"  style="color: #1a1a1a" id="jatuhtempo"
						value="<?= $datadatapemrikfpp-> t_jatuhtempo?>" readonly>
					</div>
				</div>

<br>

				<div class="form-group row">
					<label for="inputPassword3" class="col-sm-3 col-form-label" style="color:#c91aff"><b>LHP Konversi</b></label>
					<div class="col-sm-9">
						<input type="text" class="form-control"  style="color: #1a1a1a"
							id="lhpkonversi" value="<?= $datadatapemrikfpp-> t_lhpkonversi?>">
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword3" class="col-sm-3 col-form-label" style="color:#c91aff"><b>Keterangan Waktu LHP</b></label>
					<div class="col-sm-9">
						<select type="text" class="form-control" style="color: #1a1a1a" id="keteranganwaktulhp" value="<?= $datadatapemrikfpp-> t_keteranganwaktulhp?>">
						<option value="Tepat Waktu">Tepat Waktu</option>
							<option value="Tidak Tepat Waktu">Tidak Tepat Waktu</option>
						</select>
					</div>
				</div>

				<br>
				<div class="form-group row">
					<label for="inputPassword3" style="color:#804200" class="col-sm-3 col-form-label"><b>Status</b></label>
					<div class="col-sm-9">
						<select type="text" class="form-control" placeholder="sdfdsf" style="color: #1a1a1a" id="status">
						<option><?=$datadatapemrikfpp-> t_status?></option>
						 <option value="Belum_terbit_NP2">Belum Terbit NP2</option>
						<option value="Perlengkapan_Berkas_&_Generate_NP2">Proses Perlengkapan Berkas & Generate NP2</option>
							<option value="SP2_terbit">Proses Pemeriksaan (SP2 Terbit)</option>
							<option value="LHP_terbit">LHP Terbit</option>
						</select>
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword3" style="color:#804200" class="col-sm-3 col-form-label"><b>Keterangan</b></label>
					<div class="col-sm-9">
						<input type="text" class="form-control" placeholder="Proses Peminjaman Berkas, dll" style="color: #1a1a1a" id="keterangan"
						value="<?= $datadatapemrikfpp-> t_keterangan?>">
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword3" class="col-sm-3 col-form-label">Tanggal Update</label>
					<div class="col-sm-9">
						<input type="date" value="<?= date("Y-m-d"); ?>" class="form-control" style="color: #1a1a1a"
							id="tanggalupdatemonitoringlhp" readonly>
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
	function submit_update() {

		var nomorlhp = $('#nomorlhp').val();
		var tanggallhp = $('#tanggallhp').val();
		var tanggalsampaip3 = $('#tanggalsampaip3').val();
		var tanggalndkepelayanan = $('#tanggalndkepelayanan').val();
		var lhpkonversi = $('#lhpkonversi').val();
		var keteranganwaktulhp = $('#keteranganwaktulhp').val();
		var status = $('#status').val();
		var keterangan = $('#keterangan').val();
		var tanggalupdatemonitoringlhp = $('#tanggalupdatemonitoringlhp').val();

		if (

			status.length > 0
		)

		{
			$.ajax({
				url: "<?= base_url('monitoringlhpfpp/update/' . $datadatapemrikfpp->id_datapemrikfpp) ?>",
				type: 'post',
				data: {
				
					nomorlhp: nomorlhp,
					tanggallhp: tanggallhp,
					tanggalsampaip3: tanggalsampaip3,
					tanggalndkepelayanan: tanggalndkepelayanan,
					lhpkonversi: lhpkonversi,
					keteranganwaktulhp: keteranganwaktulhp,
					status: status,
					keterangan: keterangan,
					tanggalupdatemonitoringlhp: tanggalupdatemonitoringlhp,
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