<div class="container-fluid" id="container-wrapper">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Notes</h1>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="./">Home</a></li>
			<li class="breadcrumb-item active" aria-current="page">Notes</li>
		</ol>
	</div>
	<div class="col-lg-12" >
		<div class="card mb-4" >
			<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between" style="background-color:#f9e5ff">
				<h6 class="m-0 font-weight-bold text-primary">Notes</h6>
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
							<th style="font-size: 12px">Nomor Surat/ Perintah <br></th>
							<th style="font-size: 12px">Judul </th>
							<th style="font-size: 12px">Tanggal Surat/ Perintah</th>
							<th style="font-size: 12px">Tanggal Mulai Proses</th>
							<th style="font-size: 12px">Status</th>
							<th style="font-size: 12px">Keterangan</th>
                            <th style="font-size: 12px">PJ</th>
							<th style="font-size: 12px">Aksi</th>
						</tr>
					</thead>

					<tbody>
						<?php $no=1; foreach($listlogbookkerja as $value): ?>
						<tr>
							<td style="font-size: 12px"><?= $no++ ?></td>
							<td style="font-size: 12px"><?= $value->t_suratperintah ?></td>
							<td style="font-size: 12px"><?= $value->t_judulsuratperintah ?></td>
							<td style="font-size: 12px"><?= full_date_dmy($value->t_tanggalperintah) ?></td>
							<td style="font-size: 12px"><?= full_date_dmy($value->t_tanggalproses) ?></td>
							<td style="font-size: 12px"><?= $value->t_status ?></td>
							<td style="font-size: 12px"><?= $value->t_keterangan ?></td>
                            <td style="font-size: 12px"><a href class="m-0 float-right btn btn-warning btn-sm">
						<span> <?= $value->t_pj ?></span>
							<td>
								<div class="btn-group dropleft">
									<button type="button" class="btn btn-primary dropdown-toggle btn-sm" data-toggle="dropdown"
										aria-haspopup="true" aria-expanded="false">
										<i class="fa fa-fish"></i>
									</button>
									<div class="dropdown-menu">
										<a type="button" href="<?= base_url('logbookkerja/edit/' . $value->id_logbookkerja)?>" class="dropdown-item"><i
												class="fa fa-edit"></i> Edit </a>
										<a type="button" onclick="deletelogbookkerja('<?=$value->id_logbookkerja?>','<?=$value->t_suratperintah?>');"
											class="dropdown-item"><i class="fa fa-trash"></i> Hapus </a>
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
<?php $this->load->view('logbookkerja/v_tambah')?>

<script type="text/javascript">
	function deletelogbookkerja(id_logbookkerja, t_suratperintah) {

		swal({
			title: "Konfirmasi",
			text: "Ingin menghapus data " + t_suratperintah + " ini?",
			icon: "warning",
			button: true,
			dangerMode: true,
		}).then((submit) => {
			if (submit) {
				$.ajax({
					url: "<?= base_url('logbookkerja/delete/') ?>" + id_logbookkerja,
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


 
	}
</script>