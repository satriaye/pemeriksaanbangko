<div class="container-fluid" id="container-wrapper">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Berkas Pemeriksaan</h1>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="./">Home</a></li>
			<li class="breadcrumb-item">Pages</li>
			<li class="breadcrumb-item active" aria-current="page">Berkas Pemeriksaan</li>
		</ol>
	</div>

	<div class="col-lg-12">
		<div class="card mb-4">

			<div class="table-responsive p-3">
			<!--	<form action="<?=base_url("/berkaspemeriksaan/upload")?>" method="POST" enctype="multipart/form-data">
					<input type="file" name="file">
					<input type="submit" class="btn btn-outline-success btn" value="upload">
				</form><br>-->

				<table class="table align-items-center table-flush table-hover" id="dataTableHover">
					<thead class="thead-light">
						<tr>
							<th style="font-size: 14px">Nama File</th>
							
							<th style="font-size: 14px">Aksi</th>
						</tr>
					</thead>

					<tbody>

						<tr>
							<?php foreach ($listberkaspemeriksaan as $file) : ?>
							<td style="font-size: 13px"><?= $file ?></td>
						
							<td style="font-size: 13px">
								<a href="<?=base_url("/upload/$file")?>" class="m-0  btn btn-outline-info btn-sm">
									<span class="fa fa-download" download></span>Unduh
									<!--<a href="<?=site_url("/berkaskinerjapemeriksaan/delete/$file")?>"
										class="m-0  btn btn-outline-danger btn-sm">
										<span class="fa fa-trash"></span>Hapus-->
							</td>
						</tr>
						<?php endforeach ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	</div>
	