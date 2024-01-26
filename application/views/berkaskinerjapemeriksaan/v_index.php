<!------------------------------------------------------------ADMIN------------------------------------------------>
<!------------------------------------------------------------ADMIN------------------------------------------------>
<!------------------------------------------------------------ADMIN------------------------------------------------>


<?php if($this->session->userdata('login_pemeriksaanbangko'))

{
	foreach($this->session->userdata('login_pemeriksaanbangko') as $row)

	if($row->level=="Admin")
	{
	
?>




<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<div class="container-fluid" id="container-wrapper">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Kinerja Pemeriksaan</h1>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="./">Home</a></li>
			<li class="breadcrumb-item active" aria-current="page">Kinerja Pemeriksaan</li>
		</ol>
	</div>
	<div class="col-lg-12">
		<div class="card mb-4">
			
			<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between" style="background-color:#f3ffe6">
				<h6 class="m-0 font-weight-bold text-primary">Progress Pemeriksaan</h6>
				<div class="btn-group">
				<a href="<?= base_url("upload/uploadberkaskinerjapemeriksaan") ?>" class="m-0 float-right btn btn-primary btn">
						<span class="fa fa-plus-circle"></span> Tambah</a>       
                        
				</div>
			</div>

			<div class="table-responsive p-3">
				



            <table class="table align-items-center table-flush table-hover" id="dataTableHover">
					<thead class="thead-light">
					<tr>
                <th>No</th>
                <th>Nama Berkas</th>
                <th>Tanggal Update</th>
                <th>Aksi</th>
            </tr>
</thead>

<tbody>
            <?php 
                $no = 1;
                foreach($berkas->result() as $row)
                {
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $row->nama_berkas; ?></td>
                        <td><?= full_date_dmy($row->keterangan_berkas); ?></td>
                        <td><a href="<?php echo base_url(); ?>uploadberkaskinerjapemeriksaan/<?php echo $row->nama_berkas; ?>"
						class="m-0  btn btn-outline-info btn-sm"><span class="fa fa-download" download></span>Download</a>&nbsp;&nbsp;
			
						<a  onclick="deleteberkaskinerjapemeriksaan('<?=$row->id_berkas?>','<?=$row->nama_berkas?>');"
						class="m-0  btn btn-outline-danger btn-sm"><span class="fa fa-trash"></span>Hapus</a>

						<!--<a href="<?=site_url("/berkaskinerjapemeriksaan/delete/$row->nama_berkas")?>">Hapus</a>-->
						</td>
					</td>
                    </tr>
					<?php
                }
            ?>
					
					</tbody>
				</table>
  
			</div>
		</div>
	</div>
    </div>





	<script type="text/javascript">
	function deleteberkaskinerjapemeriksaan(id_berkas, nama_berkas) {

		swal({
			title: "Konfirmasi",
			text: "Ingin menghapus data " + nama_berkas + " ini?",
			icon: "warning",
			button: true,
			dangerMode: true,
		}).then((submit) => {
			if (submit) {
				$.ajax({
					url: "<?= base_url('berkaskinerjapemeriksaan/delete/') ?>" + id_berkas,
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


<!------------------------------------------------------------VIEWER------------------------------------------------>

<!------------------------------------------------------------VIEWER------------------------------------------------>

<!------------------------------------------------------------VIEWER------------------------------------------------>


<?php	}

else
{
  ?>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<div class="container-fluid" id="container-wrapper">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Kinerja Pemeriksaan</h1>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="./">Home</a></li>
			<li class="breadcrumb-item active" aria-current="page">Kinerja Pemeriksaan</li>
		</ol>
	</div>
	<div class="col-lg-12">
		<div class="card mb-4">
			
			<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between" style="background-color:#f3ffe6">
				<h6 class="m-0 font-weight-bold text-primary">Progress Pemeriksaan</h6>
				<div class="btn-group">
		     
                        
				</div>
			</div>

			<div class="table-responsive p-3">
				



            <table class="table align-items-center table-flush table-hover" id="dataTableHover">
					<thead class="thead-light">
					<tr>
                <th>No</th>
                <th>Nama Berkas</th>
                <th>Tanggal Update</th>
                <th>Aksi</th>
            </tr>
</thead>

<tbody>
            <?php 
                $no = 1;
                foreach($berkas->result() as $row)
                {
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $row->nama_berkas; ?></td>
                        <td><?= full_date_dmy($row->keterangan_berkas); ?></td>
                        <td><a href="<?php echo base_url(); ?>uploadberkaskinerjapemeriksaan/<?php echo $row->nama_berkas; ?>"
						class="m-0  btn btn-outline-info btn-sm"><span class="fa fa-download" download></span>Download</a>&nbsp;&nbsp;
			

				
						</td>
					</td>
                    </tr>
					<?php
                }
            ?>
					
					</tbody>
				</table>
  
			</div>
		</div>
	</div>
    </div>





	<script type="text/javascript">
	function deleteberkaskinerjapemeriksaan(id_berkas, nama_berkas) {

		swal({
			title: "Konfirmasi",
			text: "Ingin menghapus data " + nama_berkas + " ini?",
			icon: "warning",
			button: true,
			dangerMode: true,
		}).then((submit) => {
			if (submit) {
				$.ajax({
					url: "<?= base_url('berkaskinerjapemeriksaan/delete/') ?>" + id_berkas,
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




<?php	}
}

?>