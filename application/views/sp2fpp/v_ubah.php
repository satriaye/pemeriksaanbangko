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
					<label for="inputPassword3" style="color:#6d8d0c" class="col-sm-3 col-form-label"><b>Supervisor</b></label>
					<div class="col-sm-9">
						<input type="text" class="form-control" placeholder="Nama Supervisor" style="color: #1a1a1a" id="namasupervisor"
						value="<?= $datadatapemrikfpp-> t_namasupervisor?>">
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword3" style="color:#6d8d0c" class="col-sm-3 col-form-label"><b>Pangkat/ Gol. Supervisor</b></label>
					<div class="col-sm-9">
						<input type="text" class="form-control" placeholder="Pangkat/ Gol. Supervisor" style="color: #1a1a1a" id="pangkatsupervisor"
						value="<?= $datadatapemrikfpp-> t_pangkatsupervisor?>">
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword3" style="color:#6d8d0c" class="col-sm-3 col-form-label"><b>Ketua</b></label>
					<div class="col-sm-9">
						<input type="text" class="form-control" placeholder="Nama Ketua" style="color: #1a1a1a" id="namaketua"
						value="<?= $datadatapemrikfpp-> t_namaketua?>">
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword3" style="color:#6d8d0c" class="col-sm-3 col-form-label"><b>Pangkat/ Gol. Ketua</b></label>
					<div class="col-sm-9">
						<input type="text" class="form-control" placeholder="Pangkat/ Gol. Ketua" style="color: #1a1a1a" id="pangkatketua"
						value="<?= $datadatapemrikfpp-> t_pangkatketua?>">
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword3" style="color:#678118" class="col-sm-3 col-form-label"><b>Anggota I</b></label>
					<div class="col-sm-9">
						<input type="text" class="form-control" placeholder="Nama Anggota I" style="color: #1a1a1a" id="namaanggota1"
						value="<?= $datadatapemrikfpp-> t_namaanggota1?>">
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword3" style="color:#678118" class="col-sm-3 col-form-label"><b>Pangkat/ Gol. Anggota I</b></label>
					<div class="col-sm-9">
						<input type="text" class="form-control" placeholder="Pangkat/ Gol. Anggota I" style="color: #1a1a1a" id="pangkatanggota1"
						value="<?= $datadatapemrikfpp-> t_pangkatanggota1?>">
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword3" style="color:#678118" class="col-sm-3 col-form-label"><b>Anggota II</b></label>
					<div class="col-sm-9">
						<input type="text" class="form-control" placeholder="Nama Anggota II" style="color: #1a1a1a" id="namaanggota2"
						value="<?= $datadatapemrikfpp-> t_namaanggota2?>">
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword3" style="color:#678118" class="col-sm-3 col-form-label"><b>Pangkat/ Gol. Anggota II</b></label>
					<div class="col-sm-9">
						<input type="text" class="form-control" placeholder="Pangkat/ Gol. Anggota II" style="color: #1a1a1a" id="pangkatanggota2"
						value="<?= $datadatapemrikfpp-> t_pangkatanggota2?>">
					</div>
				</div>

				<br>

				<div class="form-group row">
					<label for="inputPassword3" style="color:#808000" class="col-sm-3 col-form-label"><b>SP2</b></label>
					<div class="col-sm-9">
						<input type="text" class="form-control" placeholder="PRIN-XX/WPJ.27/KP.0704/XXXX" style="color: #1a1a1a" id="sp2"
						value="<?= $datadatapemrikfpp-> t_sp2?>">
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword3" style="color:#808000" class="col-sm-3 col-form-label"><b>Tanggal SP2</b></label>
					<div class="col-sm-9">
						<input type="date" class="form-control"  style="color: #1a1a1a" id="tanggalsp2"
						value="<?= $datadatapemrikfpp-> t_tanggalsp2?>">
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword3" style="color:#e8109d" class="col-sm-3 col-form-label"><b>Jatuh Tempo Pemeriksaan</b></label>
					<div class="col-sm-9">
						<input type="date" class="form-control"  style="color: #1a1a1a" id="jatuhtempo"
						value="<?= $datadatapemrikfpp-> t_jatuhtempo?>">
					</div>
				</div>

				<br>
				
				<div class="form-group row">
					<label for="inputPassword3" style="color:#003300" class="col-sm-3 col-form-label"><b>Supervisor Baru</b></label>
					<div class="col-sm-9">
						<input type="text" class="form-control" placeholder="Nama Supervisor Baru" style="color: #1a1a1a" id="namasupervisor"
						value="<?= $datadatapemrikfpp-> t_namasupervisorbaru?>">
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword3" style="color:#003300" class="col-sm-3 col-form-label"><b>Pangkat/ Gol. Supervisor Baru</b></label>
					<div class="col-sm-9">
						<input type="text" class="form-control" placeholder="Pangkat/ Gol. Supervisor Baru" style="color: #1a1a1a" id="pangkatsupervisor"
						value="<?= $datadatapemrikfpp-> t_pangkatsupervisorbaru?>">
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword3" style="color:#003300" class="col-sm-3 col-form-label"><b>Ketua Baru</b></label>
					<div class="col-sm-9">
						<input type="text" class="form-control" placeholder="Nama Ketua Baru" style="color: #1a1a1a" id="namaketua"
						value="<?= $datadatapemrikfpp-> t_namaketuabaru?>">
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword3" style="color:#003300" class="col-sm-3 col-form-label"><b>Pangkat/ Gol. Ketua Baru</b></label>
					<div class="col-sm-9">
						<input type="text" class="form-control" placeholder="Pangkat/ Gol. Ketua Baru" style="color: #1a1a1a" id="pangkatketua"
						value="<?= $datadatapemrikfpp-> t_pangkatketuabaru?>">
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword3" style="color:#003300" class="col-sm-3 col-form-label"><b>Anggota I Baru</b></label>
					<div class="col-sm-9">
						<input type="text" class="form-control" placeholder="Nama Anggota I Baru" style="color: #1a1a1a" id="namaanggota1"
						value="<?= $datadatapemrikfpp-> t_namaanggota1baru?>">
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword3" style="color:#003300" class="col-sm-3 col-form-label"><b>Pangkat/ Gol. Anggota I Baru</b></label>
					<div class="col-sm-9">
						<input type="text" class="form-control" placeholder="Pangkat/ Gol. Anggota I Baru" style="color: #1a1a1a" id="pangkatanggota1"
						value="<?= $datadatapemrikfpp-> t_pangkatanggota1baru?>">
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword3" style="color:#003300" class="col-sm-3 col-form-label"><b>Anggota II Baru</b></label>
					<div class="col-sm-9">
						<input type="text" class="form-control" placeholder="Nama Anggota II Baru" style="color: #1a1a1a" id="namaanggota2"
						value="<?= $datadatapemrikfpp-> t_namaanggota2baru?>">
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword3" style="color:#003300" class="col-sm-3 col-form-label"><b>Pangkat/ Gol. Anggota II Baru</b></label>
					<div class="col-sm-9">
						<input type="text" class="form-control" placeholder="Pangkat/ Gol. Anggota II Baru" style="color: #1a1a1a" id="pangkatanggota2"
						value="<?= $datadatapemrikfpp-> t_pangkatanggota2baru?>">
					</div>
				</div>

<br>

				<div class="form-group row">
					<label for="inputPassword3" style="color:#808000" class="col-sm-3 col-form-label"><b>SP2 Perubahan</b></label>
					<div class="col-sm-9">
						<input type="text" class="form-control" placeholder="PRIN-P-XX/WPJ.27/KP.0704/XXXX" style="color: #1a1a1a" id="sp2perubahan"
						value="<?= $datadatapemrikfpp-> t_sp2perubahan?>">
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword3" style="color:#808000" class="col-sm-3 col-form-label"><b>Tanggal SP2 Perubahan</b></label>
					<div class="col-sm-9">
						<input type="date" class="form-control"  style="color: #1a1a1a" id="tanggalsp2perubahan"
						value="<?= $datadatapemrikfpp-> t_tanggalsp2?>">
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
							id="tanggalupdatesp2fpp" readonly>
					</div>
				</div>
				<div class="form-group row">
					<div class="col-sm-10">
						<button type="submit" class="btn btn-primary"><span class="fa fa-check-circle"></span> Simpan</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<script type="text/javascript">

function submit_update()
{

	var namasupervisor = $('#namasupervisor').val();
	var pangkatsupervisor = $('#pangkatsupervisor').val();
	var namaketua = $('#namaketua').val();
	var pangkatketua = $('#pangkatketua').val();
	var namaanggota1 = $('#namaanggota1').val();
	var pangkatanggota1 = $('#pangkatanggota1').val();
	var namaanggota2 = $('#namaanggota2').val();
	var pangkatanggota2 = $('#pangkatanggota2').val();
	var sp2 = $('#sp2').val();
	var tanggalsp2 = $('#tanggalsp2').val();
	var namasupervisorbaru = $('#namasupervisorbaru').val();
	var pangkatsupervisorbaru = $('#pangkatsupervisorbaru').val();
	var namaketuabaru = $('#namaketuabaru').val();
	var pangkatketuabaru = $('#pangkatketuabaru').val();
	var namaanggota1baru = $('#namaanggota1baru').val();
	var pangkatanggota1baru = $('#pangkatanggota1baru').val();
	var namaanggota2baru = $('#namaanggota2baru').val();
	var pangkatanggota2baru = $('#pangkatanggota2baru').val();
	var sp2perubahan = $('#sp2perubahan').val();
	var tanggalsp2perubahan = $('#tanggalsp2perubahan').val();
	var jatuhtempo = $('#jatuhtempo').val();
	var status = $('#status').val();
	var keterangan = $('#keterangan').val();
	var tanggalupdatesp2fpp = $('#tanggalupdatesp2fpp').val();

	if (
			status.length > 0 	
		) 

	{
		$.ajax({
			url: "<?= base_url('sp2fpp/update/' . $datadatapemrikfpp->id_datapemrikfpp) ?>",
			type: 'post',
			data: {

				namasupervisor: namasupervisor,
				pangkatsupervisor: pangkatsupervisor,
				namaketua: namaketua,
				pangkatketua: pangkatketua, 
				namaanggota1: namaanggota1,
				pangkatanggota1: pangkatanggota1,  
				namaanggota2: namaanggota2,
				pangkatanggota2: pangkatanggota2,
				sp2: sp2,
				tanggalsp2: tanggalsp2,
				namasupervisor: namasupervisor,
				pangkatsupervisor: pangkatsupervisor,
				namaketua: namaketua,
				pangkatketua: pangkatketua, 
				namaanggota1: namaanggota1,
				pangkatanggota1: pangkatanggota1,  
				namaanggota2: namaanggota2,
				pangkatanggota2: pangkatanggota2,
				sp2: sp2,
				tanggalsp2: tanggalsp2,
				jatuhtempo: jatuhtempo,
				status: status,
				keterangan: keterangan,
				tanggalupdatesp2fpp: tanggalupdatesp2fpp,
			},
			success: function(result){
				var hasil = JSON.parse(result);
				swal_show(hasil);

				if(hasil['status_code'] == 200)
				   setTimeout("window.history.back()", 800);
				   
			} 
		});

	}
	
} 
</script>