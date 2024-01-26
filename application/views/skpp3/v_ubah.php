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
				<input type="hidden" id="id_datapemrikp3" value="<?= $datadatapemrikp3->id_datapemrikp3 ?>">

				<div class="form-group row">
					<label for="inputEmail3" class="col-sm-3 col-form-label" >Nama WP</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" placeholder="Nama" style="color: #1a1a1a; background-color:#ccfff2" id="namawp"
						value="<?= $datadatapemrikp3-> t_namawp?>" readonly>
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword3" class="col-sm-3 col-form-label">NPWP</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" maxlength="20"  placeholder="00.000.000.0-000.000" style="color: #1a1a1a; background-color:#ccfff2" id="npwp"
						value="<?= $datadatapemrikp3-> t_npwp?>" readonly>
					</div>
				</div>
                <div class="form-group row">
					<label for="inputPassword3" class="col-sm-3 col-form-label">Alamat</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" placeholder="Alamat " style="color: #1a1a1a; background-color:#ccfff2" id="alamatsurat"
						value="<?= $datadatapemrikp3-> t_alamatsurat?>" readonly>
					</div>
				</div>
                <div class="form-group row">
					<label for="inputPassword3" class="col-sm-3 col-form-label">Masa & Tahun Pajak</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" maxlength="13" placeholder="012021-122021" style="color: #1a1a1a; background-color:#ccffd9" id="masa_tahun_pajak"
						value="<?= $datadatapemrikp3-> t_masa_tahun_pajak?>" readonly>
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword3" class="col-sm-3 col-form-label">Jenis Pemeriksaan</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" placeholder="sdfdsf" style="color: #1a1a1a ; background-color:#ccffd9" id="jenispemeriksaan"
						value="<?= $datadatapemrikp3-> t_jenispemeriksaan?>" readonly>
						</input>
					</div>
				</div>

				<br>

				<div class="form-group row">
					<label for="inputPassword3" class="col-sm-3 col-form-label">Nomor LHP</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" placeholder="LAP-XXX" style="color: #1a1a1a; background-color:#ccd9ff"
							id="nomorlhp" value="<?= $datadatapemrikp3-> t_nomorlhp?>">
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword3" class="col-sm-3 col-form-label">Jenis SKP</label>
					<div class="col-sm-9">
						<select type="text" class="form-control" placeholder="sdfdsf" style="color: #1a1a1a ; background-color:#d9ffcc" id="jenisskp"
						value="<?= $datadatapemrikp3-> t_jenisskp?>">
							<option value="Nihil">Nihil</option>
							<option value="Kurang Bayar">Kurang Bayar</option>
							<option value="Lebih Bayar">Lebih Bayar</option>
						
						</select>
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword3" class="col-sm-3 col-form-label">SKPKB Terbit</label>
					<div class="col-sm-9">
						<input type="number" class="form-control" style="color: #1a1a1a; background-color:#d9ffcc"
							id="skpkbterbit" value="<?= $datadatapemrikp3-> t_skpkbterbit?>">
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword3" class="col-sm-3 col-form-label">SKPKB Disetujui</label>
					<div class="col-sm-9">
						<input type="number" class="form-control"  style="color: #1a1a1a; background-color:#d9ffcc"
							id="skpkbdisetujui" value="<?= $datadatapemrikp3-> t_skpkbdisetujui?> and 0">
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword3" class="col-sm-3 col-form-label">Pencairan SKPKB</label>
					<div class="col-sm-9">
						<input type="number" class="form-control"  style="color: #1a1a1a; background-color:#d9ffcc"
							id="skpkbcair" value="<?= $datadatapemrikp3-> t_skpkbcair?>">
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword3" class="col-sm-3 col-form-label">Nilai SPTLB</label>
					<div class="col-sm-9">
						<input type="number" class="form-control"  style="color: #1a1a1a; background-color:#ffcce6"
							id="sptlb" value="<?= $datadatapemrikp3-> t_sptlb?>">
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword3" class="col-sm-3 col-form-label">SKPLB Terbit</label>
					<div class="col-sm-9">
						<input type="number" class="form-control"  style="color: #1a1a1a; background-color:#ffcce6"
							id="skplbterbit" value="<?= $datadatapemrikp3-> t_skplbterbit?>">
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword3" class="col-sm-3 col-form-label">SKPLB Disetujui</label>
					<div class="col-sm-9">
						<input type="number" class="form-control"  style="color: #1a1a1a; background-color:#ffcce6"
							id="skplbdisetujui" value="<?= $datadatapemrikp3-> t_skplbdisetujui?>">
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword3" class="col-sm-3 col-form-label">Refund Discrepancy</label>
					<div class="col-sm-9">
						<input type="number" class="form-control"  style="color: #1a1a1a; background-color:#ffcce6"
							id="rd" value="<?= $datadatapemrikp3-> t_rd?>">
					</div>
				</div>

				<br>

				<div class="form-group row">
					<label for="inputPassword3" style="color:#804200" class="col-sm-3 col-form-label"><b>Status</b></label>
					<div class="col-sm-9">
						<select type="text" class="form-control" placeholder="sdfdsf" style="color: #1a1a1a ; background-color:#ffe6cc" id="status" value="<?= $datadatapemrikp3-> t_status?>">
						<option value="Perlengkapan_Berkas_&_Generate_NP2">Proses Perlengkapan Berkas & Generate NP2</option>
							<option value="SP2_terbit">Proses Pemeriksaan (SP2 Terbit)</option>
							<option value="LHP_terbit">LHP Terbit</option>
						</select>
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword3" style="color:#804200" class="col-sm-3 col-form-label"><b>Keterangan</b></label>
					<div class="col-sm-9">
						<input type="text" class="form-control" placeholder="Proses Peminjaman Berkas, dll" style="color: #1a1a1a; background-color:#ffe6cc" id="keterangan"
						value="<?= $datadatapemrikp3-> t_keterangan?>">
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword3" class="col-sm-3 col-form-label">Tanggal Update Halaman Ini</label>
					<div class="col-sm-9">
						<input type="date" value="<?= date("Y-m-d"); ?>" class="form-control" style="color: #1a1a1a"
							id="tanggalupdateskpp3" readonly>
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
		var namawp = $('#namawp').val();
		var npwp = $('#npwp').val();
		var alamatsurat = $('#alamatsurat').val();
		var masa_tahun_pajak = $('#masa_tahun_pajak').val();
		var kodepemeriksaan = $('#kodepemeriksaan').val();
		var nomorlhp = $('#nomorlhp').val();
		var jenisskp = $('#jenisskp').val();
		var skpkbterbit = $('#skpkbterbit').val();
		var skpkbdisetujui = $('#skpkbdisetujui').val();
		var skpkbcair = $('#skpkbcair').val();
		var sptlb = $('#sptlb').val();
		var skplbterbit = $('#skplbterbit').val();
		var skplbdisetujui = $('#skplbdisetujui').val();
		var rd = $('#rd').val();
		var status = $('#status').val();
		var keterangan = $('#keterangan').val();
		var tanggalupdateskpp3 = $('#tanggalupdateskpp3').val();

		if (

			status.length > 0
		)

		{
			$.ajax({
				url: "<?= base_url('skpp3/update/' . $datadatapemrikp3->id_datapemrikp3) ?>",
				type: 'post',
				data: {
					namawp: namawp,
					npwp: npwp,
					alamatsurat: alamatsurat,
					masa_tahun_pajak: masa_tahun_pajak,
					kodepemeriksaan: kodepemeriksaan,
					nomorlhp: nomorlhp,
					jenisskp: jenisskp,
					skpkbterbit: skpkbterbit,
					skpkbdisetujui: skpkbdisetujui,
					skpkbcair: skpkbcair,
					sptlb: sptlb,
					skplbterbit: skplbterbit,
					skplbdisetujui: skplbdisetujui,
					rd: rd,
					status: status,
					keterangan: keterangan,
					tanggalupdateskpp3: tanggalupdateskpp3,
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