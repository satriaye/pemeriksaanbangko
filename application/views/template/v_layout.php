<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Pemeriksaan Bangko</title>
	<link href="<?=base_url('assets/') ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="<?=base_url('assets/') ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="<?=base_url('assets/') ?>css/ruang-admin.min.css" rel="stylesheet">
	<!--Data Table-->
	<link href="<?=base_url('assets/') ?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
	<!--Sweet Alert-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/plugins/sweetalert/sweetalert.css')?>">
  	<!--Chart Bar-->
	<script src="<?=base_url('assets/') ?>vendor/chart.js/Chart.min.js"></script>
  
</head>

<body id="page-top">
	<div id="wrapper">
		<!-- Sidebar -->
		<?php $this->load->view('template/v_sidebar') ?>
		<!-- Sidebar -->
		<div id="content-wrapper" class="d-flex flex-column">
			<div id="content">
				<!-- TopBar -->
				<?php $this->load->view('template/v_topbar') ?>
				<!-- Topbar -->

				<!-- Container Fluid-->
				<?= $contents ?>
				<!---Container Fluid-->
			</div>
			<!-- Footer -->
			<?php $this->load->view('template/v_footer') ?>
			<!-- Footer -->
		</div>
	</div>

	<!-- Modal Logout -->
	<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
		aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabelLogout">Konfirmasi</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<p>Anda Yakin Ingin Keluar?</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
					<a href="<?=base_url('index.php/logout')?>" class="btn btn-primary">Logout</a>
				</div>
			</div>
		</div>
	</div>

	<!-- Scroll to top -->
	<a class="scroll-to-top rounded" href="#page-top">
		<i class="fas fa-angle-up"></i>
	</a>

	<script src="<?=base_url('assets/') ?>vendor/jquery/jquery.min.js"></script>
	<script src="<?=base_url('assets/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="<?=base_url('assets/') ?>vendor/jquery-easing/jquery.easing.min.js"></script>
	<script src="<?=base_url('assets/') ?>js/ruang-admin.min.js"></script>
	<script src="<?=base_url('assets/') ?>vendor/chart.js/Chart.min.js"></script>
	<script src="<?=base_url('assets/') ?>js/demo/chart-area-demo.js"></script>
	<script src="<?= base_url('assets/plugins/sweetalert/sweetalert.min.js') ?>"></script>
	<script src="<?= base_url('assets/plugins/sweetalert/sweetshow.js') ?>"></script>
	<!--Data Tables-->
	<script src="<?=base_url('assets/') ?>vendor/datatables/jquery.dataTables.min.js"></script>
	<script src="<?=base_url('assets/') ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>
  

	<!-- Page level custom scripts -->
	<script>
		$(document).ready(function () {
			$('#dataTable').DataTable(); // ID From dataTable 
			$('#dataTableHover').DataTable(); // ID From dataTable with Hover
		});

		var table = $('#dataTableHover').DataTable({
    pageLength : 5,
    lengthMenu: [[5, 10, 20], [5, 10, 20]]
  })



	</script>



</body>

</html>