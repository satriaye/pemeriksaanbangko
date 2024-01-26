<div class="container-fluid" id="container-wrapper">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Target-Realisasi</h1>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="./">Home</a></li>
			<li class="breadcrumb-item active" aria-current="page">Target-Realisasi</li>
		</ol>
	</div>
	<div class="col-lg-12" >
		<div class="card mb-4" >
			<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between" style="background-color:#f9e5ff">
				<h6 class="m-0 font-weight-bold text-primary">Tabel Data</h6>
				<div class="btn-group">
				<button class="m-0 float-right btn btn-primary" data-target="#tambahlogbook" data-toggle="modal">
						<span class="fa fa-plus-circle"></span> Tambah</button>
					
				</div>

				
			</div>
			<div class="table-responsive p-3">
				<table class="table align-items-center table-flush table-hover" id="dataTableHover" >
					<thead class="thead-light">
						<tr>
							<th style="font-size: 12px">No.</th>
							<th style="font-size: 12px">Target PKM Pemeriksaan <br></th>
							<th style="font-size: 12px">Target LHP Konversi </th>
							<th style="font-size: 12px">Realisasi PKM (Pegasus)</th>
							<th style="font-size: 12px">Aksi</th>
						</tr>
					</thead>

					<tbody>
						<?php $no=1; foreach($listtargetrealisasi as $value): ?>
						<tr>
							<td style="font-size: 12px"><?= $no++ ?></td>
							<td style="font-size: 12px">Rp <?php echo number_format($value->t_targetpkm, 2, ',', '.' ); ?></td>
							<td style="font-size: 12px"><?= $value->t_targetlhpkonversi ?></td>
							<td style="font-size: 12px"><?php echo number_format($value->t_realisasipkm, 2, ',', '.' ); ?></td>
							<td>
								<div class="btn-group dropleft">
									<button type="button" class="btn btn-primary dropdown-toggle btn-sm" data-toggle="dropdown"
										aria-haspopup="true" aria-expanded="false">
										<i class="fa fa-fish"></i>
									</button>
									<div class="dropdown-menu">
										<a type="button" href="<?= base_url('targetrealisasi/edit/' . $value->id_targetrealisasi)?>" class="dropdown-item"><i
												class="fa fa-edit"></i> Edit </a>
										
									</div>
								</div>
							</td>
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	
</div>

<!--Modal Tambah Logbook-->
<?php $this->load->view('targetrealisasi/v_tambah')?>

<script type="text/javascript">
	function deletetargetrealisasi(id_targetrealisasi, t_suratperintah) {

		swal({
			title: "Konfirmasi",
			text: "Ingin menghapus data " + t_suratperintah + " ini?",
			icon: "warning",
			button: true,
			dangerMode: true,
		}).then((submit) => {
			if (submit) {
				$.ajax({
					url: "<?= base_url('targetrealisasi/delete/') ?>" + id_targetrealisasi,
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


    function exportlisttargetrealisasi()
    {
      var status = $('#status').val

    }
	}
</script>