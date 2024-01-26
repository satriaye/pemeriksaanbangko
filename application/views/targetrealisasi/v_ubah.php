<div class="container-fluid" id="container-wrapper">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Target-Realisasi</h1>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="./">Home</a></li>
			<li class="breadcrumb-item active" aria-current="page">Ubah Target-Realisasi</li>
		</ol>
	</div>
	<div class="card mb-4">
		<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
			<h6 class="m-0 font-weight-bold text-primary">Ubah Target-Realisasi</h6>
		</div>
		<div class="modal-body">
          				<div class="card-body">
          					<form onsubmit="submit_update(); return false;">
          						<input type="hidden" id="id_targetrealisasi" value="<?= $datatargetrealisasi->id_targetrealisasi ?>">
								  <div class="form-group row">
					<label for="inputEmail3" class="col-sm-3 col-form-label">Target PKM</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" placeholder="Target PKM" style="color: #1a1a1a" id="targetpkm"
						value="<?= $datatargetrealisasi->t_targetpkm ?>">
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword3" class="col-sm-3 col-form-label">Target LHP Konversi</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" placeholder="Target LHP Konversi"
							style="color: #1a1a1a" id="targetlhpkonversi"
							value="<?= $datatargetrealisasi->t_targetlhpkonversi ?>">
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword3" class="col-sm-3 col-form-label">Realisasi PKM</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" placeholder="Target LHP Konversi"
							style="color: #1a1a1a" id="realisasipkm"
							value="<?= $datatargetrealisasi->t_realisasipkm ?>">
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
          				url: "<?= base_url('targetrealisasi/update/' . $datatargetrealisasi->id_targetrealisasi) ?>",
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
							  setTimeout("window.history.back()", 800);

          				}
          			});

          		}

          	}
          </script>