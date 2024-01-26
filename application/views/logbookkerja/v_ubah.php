<div class="container-fluid" id="container-wrapper">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Logbook</h1>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="./">Home</a></li>
			<li class="breadcrumb-item active" aria-current="page">Ubah Logbook</li>
		</ol>
	</div>
	<div class="card mb-4">
		<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
			<h6 class="m-0 font-weight-bold text-primary">Ubah Logbook</h6>
		</div>
		<div class="modal-body">
          				<div class="card-body">
          					<form onsubmit="submit_update(); return false;">
          						<input type="hidden" id="id_logbookkerja" value="<?= $datalogbookkerja->id_logbookkerja ?>">
          						<div class="form-group row">
          							<label for="inputEmail3" class="col-sm-3 col-form-label">Nomor
          								Surat/Perintah</label>
          							<div class="col-sm-9">
          								<input type="text" class="form-control" placeholder="Nomor Surat"
          									style="color: #1a1a1a" id="suratperintah" value="<?= $datalogbookkerja-> t_suratperintah?>">
          							</div>
          						</div>
          						<div class="form-group row">
          							<label for="inputPassword3" class="col-sm-3 col-form-label">Judul Surat</label>
          							<div class="col-sm-9">
          								<input type="text" class="form-control" placeholder="Judul"
          									style="color: #1a1a1a" id="judulsuratperintah" value="<?= $datalogbookkerja-> t_judulsuratperintah?>">
          							</div>
          						</div>
          						<div class="form-group row">
          							<label for="inputPassword3" class="col-sm-3 col-form-label">Tanggal Surat/
          								Perintah</label>
          							<div class="col-sm-9">
          								<input type="date" class="form-control" placeholder="Tanggal Surat/ Perintah"
          									style="color: #1a1a1a" id="tanggalperintah" value="<?= $datalogbookkerja-> t_tanggalperintah?>">
          							</div>
          						</div>
          						<div class="form-group row">
          							<label for="inputPassword3" class="col-sm-3 col-form-label">Status</label>
          							<div class="col-sm-9">
          								<select type="text" class="form-control" placeholder="Status"
          									style="color: #1a1a1a" id="status">
          									<option value="proses">Proses</option>
          									<option value="selesai" style:>Selesai</option>
          								</select>
          							</div>
          						</div>
          						<div class="form-group row">
          							<label for="inputPassword3" class="col-sm-3 col-form-label">Keterangan</label>
          							<div class="col-sm-9">
          								<input type="text" class="form-control" placeholder="Keterangan"
          									style="color: #1a1a1a" id="keterangan" value="<?= $datalogbookkerja-> t_keterangan?>">
          							</div>
          						</div>
          						<div class="form-group row">
          							<label for="inputPassword3" class="col-sm-3 col-form-label">Penanggung
          								Jawab</label>
          							<div class="col-sm-9">
          								<input type="text" class="form-control" placeholder="Penanggung Jawab"
          									style="color: #1a1a1a" id="pj"value="<?= $datalogbookkerja-> t_pj?>">
          							</div>
          						</div>
          						<div class="form-group row">
          							<div class="col-sm-10">
          								<button type="submit" class="btn btn-primary"><span
          										class="fa fa-check-circle"></span>
          									Simpan</button>
          							</div>
          						</div>
          					</form>
          				</div>
          			</div>
          		</div>
				  </div>

          <script type="text/javascript">

          	function submit_update() {
          		var suratperintah = $('#suratperintah').val();
          		var judulsuratperintah = $('#judulsuratperintah').val();
          		var tanggalperintah = $('#tanggalperintah').val();
          		var status = $('#status').val();
          		var keterangan = $('#keterangan').val();
          		var pj = $('#pj').val();

          		if (
          			status.length > 0 &&
          			keterangan.length > 0 &&
          			pj.length > 0
          		)

          		{
          			$.ajax({
          				url: "<?= base_url('logbookkerja/update/' . $datalogbookkerja->id_logbookkerja) ?>",
          				type: 'post',
          				data: {
          					suratperintah: suratperintah,
          					judulsuratperintah: judulsuratperintah,
          					tanggalperintah: tanggalperintah,
          					status: status,
          					keterangan: keterangan,
          					pj: pj,

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