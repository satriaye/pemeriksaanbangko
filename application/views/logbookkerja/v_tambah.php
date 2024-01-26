          <!-- Modal Scrollable -->
          <div class="modal fade" id="tambahlogbook" tabindex="-3" role="dialog"
            aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalScrollableTitle">Tambah Logbook</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                <div class="card-body">
			<form onsubmit="submit_add('logbookkerja'); return false;">
				<div class="form-group row">
					<label for="inputEmail3" class="col-sm-3 col-form-label">Nomor Surat/Perintah</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" placeholder="Nomor Surat" style="color: #1a1a1a" id="suratperintah">
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword3" class="col-sm-3 col-form-label">Judul Surat</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" placeholder="Judul"
							style="color: #1a1a1a" id="judulsuratperintah">
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword3" class="col-sm-3 col-form-label">Tanggal Surat/ Perintah</label>
					<div class="col-sm-9">
						<input type="date" class="form-control" placeholder="Tanggal Surat/ Perintah" style="color: #1a1a1a"
							id="tanggalperintah">
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword3" class="col-sm-3 col-form-label">Tanggal Mulai Proses</label>
					<div class="col-sm-9">
						<input type="date" value="<?= date("Y-m-d"); ?>" class="form-control" placeholder="Tanggal Mulai Proses"
							style="color: #1a1a1a" id="tanggalproses" readonly>
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword3" class="col-sm-3 col-form-label">Status</label>
					<div class="col-sm-9">
						<select type="text" class="form-control" placeholder="Status" style="color: #1a1a1a" id="status">
							<option value="proses">Proses</option>
							<option value="selesai" style:>Selesai</option>
						</select>
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword3" class="col-sm-3 col-form-label">Keterangan</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" placeholder="Keterangan" style="color: #1a1a1a"
							id="keterangan">
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword3" class="col-sm-3 col-form-label">Penanggung Jawab</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" placeholder="Penanggung Jawab" style="color: #1a1a1a"
							id="pj">
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
          </div>
		  </div>

<script type="text/javascript">
	function submit_add() {
		var suratperintah = $('#suratperintah').val();
		var judulsuratperintah = $('#judulsuratperintah').val();
		var tanggalperintah = $('#tanggalperintah').val();
		var tanggalproses = $('#tanggalproses').val();
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
				url: "<?= base_url('logbookkerja/simpan') ?>",
				type: 'post',
				data: {
					suratperintah: suratperintah,
					judulsuratperintah: judulsuratperintah,
					tanggalperintah: tanggalperintah,
					tanggalproses: tanggalproses,
					status: status,
					keterangan: keterangan,
					pj: pj,
					
				},
				success: function (result) {
					var hasil = JSON.parse(result);
					swal_show(hasil);

					if (hasil['status_code'] == 200)
					setTimeout("window.open(self.location, '_self');", 800);

				}
			});

		}

	}
</script>
