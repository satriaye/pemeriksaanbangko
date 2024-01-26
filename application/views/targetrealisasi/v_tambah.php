          <!-- Modal Scrollable -->
          <div class="modal fade" id="tambahlogbook" tabindex="-3" role="dialog"
            aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalScrollableTitle">Target-Realisasi</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                <div class="card-body">
			<form onsubmit="submit_add('targetrealisasi'); return false;">
				<div class="form-group row">
					<label for="inputEmail3" class="col-sm-3 col-form-label">Target PKM</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" placeholder="Target PKM" style="color: #1a1a1a" id="targetpkm">
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword3" class="col-sm-3 col-form-label">Target LHP Konversi</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" placeholder="Target LHP Konversi"
							style="color: #1a1a1a" id="targetlhpkonversi">
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword3" class="col-sm-3 col-form-label">Realisasi PKM</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" placeholder="Target LHP Konversi"
							style="color: #1a1a1a" id="realisasipkm">
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
		var targetpkm = $('#targetpkm').val();
		var targetlhpkonversi = $('#targetlhpkonversi').val();
		var realisasipkm = $('#realisasipkm').val();


		


		if (
			targetpkm.length > 0 &&
			targetlhpkonversi.length > 0 &&
			realisasipkm.length > 0
		) 

		{
			$.ajax({
				url: "<?= base_url('targetrealisasi/simpan') ?>",
				type: 'post',
				data: {
					targetpkm: targetpkm,
					targetlhpkonversi: targetlhpkonversi,
					realisasipkm: realisasipkm,
					
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
