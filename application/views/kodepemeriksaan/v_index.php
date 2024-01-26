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
				

				<table class="table align-items-center table-flush table-hover" id="dataTableHover">
					<thead class="thead-light">
						<tr>
							<th style="font-size: 14px">Jenis Pemeriksaan</th>
							<th style="font-size: 14px">Kode Pemeriksaan</th>
							
						</tr>
					</thead>

					<tbody>

						<tr>
							<?php foreach ($listkodepemeriksaan as $value) : ?>
							<td style="font-size: 13px"><?= $value->t_jenispemeriksaan ?></td>
							<td style="font-size: 13px"><?= $value->t_kodepemeriksaan ?></td>
							
								
							</td>
						</tr>
						<?php endforeach ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	</div>