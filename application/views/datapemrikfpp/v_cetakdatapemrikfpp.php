<!DOCTYPE html>
<html>

<head>

	<style type="text/css">
		@page {
			margin: 0cm 0cm;
		}

		body {
			margin-top: 1cm;
			margin-left: 2cm;
			margin-bottom: 1cm;
			margin-right: 2cm;
		}

		header {
			position: fixed;
			margin-left: 2cm;
			margin-right: 2cm;
			top: 1cm;
		}

		footer {
			position: fixed;
			bottom: 1cm;
			left: 2cm;
			right: 2cm;
			top: 1cm;
			font-size: 10px;
			font-family: Arial, Helvetica, sans-serif;
		}

		main {
			font-family: Arial, Helvetica, sans-serif;
			font-size: 12px;

		}

		.title {
			text-align: center;
			font-family: Arial, Helvetica, sans-serif;
			font-size: 12px;
		}

		#table {
			border-collapse: collapse;
			width: 100%;
			line-height: 100%;
		}

		#table td,
		#table th {
			border: 1px solid #000;
			padding: 5px;
		}

		#table th {
			text-align: center;
			color: #000;
		}
	</style>
</head>


<body>

	<header></header>
	<footer></footer>
	<main>
		<div class="row">
			<div class="title">
				<h2></h2>
			</div>
			<div>


				<img src="uploads/logokemenkeu.png" width="90px" align=center>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<img src="uploads/identitaskppbangko.png" width="400px" align=center>
				<hr style='border:0.5px solid #000'>
				<table width=100%>
					<tr>
						<td align="center">

							<h3 style='margin-bottom:1px' align=center size="2,8"><u>SURAT PERINTAH PEMERIKSAAN</u><br>
							</h3>
							<h4>
								<p>Nomor : PRIN- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; /WPJ.27/KP.0704/RIK.SIS/2021</p>
							</h4>
						</td>
					</tr>
				</table>
				<table style='margin-bottom:10px'></table>


				<table width='100%'>
					<tr>
						<td>&nbsp;&nbsp;&nbsp;Kepada Saudara yang namanya tersebut dibawah ini:
							<br><br><br>
							<table border=0.2>
								<style type="text/css">
									table {
										border-collapse: collapse;
									}
								</style>
								<tr>
									<td align="center" style="padding: 3px">
										<font size="2">No.
									</td>
									<td align="center" style="padding: 3px">
										<font size="2">NAMA/NIP
									</td>
									<td align="center" style="padding: 3px">
										<font size="2">PANGKAT/GOL
									</td>
									<td align="center" style="padding: 3px">
										<font size="2">JABATAN
									</td>
								</tr>
								<tr>
									<td align="center" style="padding: 3px">
										<font size="2">1
									</td>
									<td style="padding: 7px">
										<font size="2">Rohman Yudo Purnomo
									</td>
									<td align="center" style="padding: 7px">
										<font size="2"> Penata Tk.I / (III/d)
									</td>
									<td align="center" style="padding: 7px">
										<font size="2">Supervisor
									</td>
								</tr>
								<tr>
									<td align="center" style="padding: 3px">
										<font size="2">2
									</td>
									<td style="padding: 7px">
										<font size="2">Maloma Naibaho
									</td>
									<td align="center" style="padding: 7px">
										<font size="2">Penata Muda Tk.I / (III/b)
									</td>
									<td align="center" style="padding: 7px">
										<font size="2">Ketua Tim
									</td>
								</tr>
								<tr>
									<td align="center" style="padding: 7px">
										<font size="2">3
									</td>
									<td style="padding: 7px">
										<font size="2">Hotman Jossua Edianto Hutagalung
									</td>
									<td align="center" style="padding: 7px">
										<font size="2">Penata Muda / (III/a)
									</td>
									<td align="center" style="padding: 7px">
										<font size="2">Anggota Tim
									</td>
								</tr>
								<tr>
									<td align="center" style="padding: 3px">
										<font size="2">4
									</td>
									<td style="padding: 5px">
										<font size="2">Agung Zakaria Saragih
									</td>
									<td align="center" style="padding: 5px">
										<font size="2">Pengatur / (II/c)
									</td>
									<td align="center" style="padding: 5px">
										<font size="2">Anggota Tim
									</td>
								</tr>
							</table>

							<table style='margin-bottom:20px'></table>
							<br>
							<p style="line-height:1.5">diperintahkan untuk melakukan pemeriksaan di bidang perpajakan
								sesuai dengan
								Undang-Undang Nomor&nbsp; 6 &nbsp;Tahun&nbsp; 1983&nbsp; tentang &nbsp;Ketentuan&nbsp;
								Umum &nbsp;dan&nbsp; Tata Cara Perpajakan sebagaimana telah beberapa kali diubah
								terakhir dengan Undang-Undang Nomor 16 Tahun 2009 terhadap Wajib Pajak :</p>

							<table align="left" width='90%'>
								<tr>
									<td width="35%">&nbsp;&nbsp;&nbsp;Nama</td>
									<td>: <?= $datadatapemrikfpp-> t_namawp?></td>
								</tr>

								<tr>
									<td>&nbsp;&nbsp;&nbsp;NPWP</td>
									<td>: <?= $datadatapemrikfpp-> t_npwp?></td>
								</tr>

								<tr>
									<td valign="top">&nbsp;&nbsp;&nbsp;Alamat</td>
									<td>: <?= $datadatapemrikfpp-> t_alamatsurat?></td>
								</tr>

								<tr>
									<td>&nbsp;&nbsp;&nbsp;Masa & Tahun Pajak</td>
									<td>: <?= $datadatapemrikfpp-> t_masa_tahun_pajak?></td>
								</tr>

								<tr>
									<td>&nbsp;&nbsp;&nbsp;Kode Pemeriksaan</td>
									<td>: <?= $datadatapemrikfpp-> t_kodepemeriksaan?></td>
								</tr>

								<tr>
									<td valign="top">&nbsp;&nbsp;&nbsp;Tujuan Pemeriksaan</td>
									<td>: Menguji Kepatuhan Pemenuhan Kewajiban Perpajakan</td>
								</tr>

								<table style='margin-bottom:10px'></table>

							</table>

							<br><br><br><br><br><br><br><br><br>
							<br><br><br><br><br><br><br><br><br>

							<table width=100%>
								<tr>
									<td width="68%">
									</td>
									<td>
										<table>
										</table>


										<table>
											<tr>
												<td>
													&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bangko,
													&nbsp;&nbsp;&nbsp;&nbsp;<?php echo date("F Y"); ?></td>
											</tr>
											<tr>
												<td>a.n Direktur Jenderal Pajak</td>
											</tr>
											<tr>
												<td>
													&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kepala Kantor
													<br><br><br><br><br><br>



													&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Teguh Hadi Wardoyo</td>
									</td>
								</tr>
							</table>
				</table>
				</table>



				<p style="page-break-before: always">


					<!--PEMB-->


					<img src="uploads/logokemenkeu.png" width="90px" align=center>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<img src="uploads/identitaskppbangko.png" width="400px" align=center>
					<hr style='border:0.5px solid #000'>
					<br>
					<table width=100%>
						<tr>
							<td>Nomor : PEMB- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; /WPJ.27/KP.0704/RIK.SIS/2021
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								&nbsp;&nbsp;&nbsp;
								Bangko, &nbsp;&nbsp;&nbsp;&nbsp;<?php echo date("F Y"); ?></td>
							<td>
						</tr>
						<tr>
							<td>Hal &nbsp;&nbsp;&nbsp;&nbsp; : Pemberitahuan Pemeriksaan Lapangan
							<td>
						</tr>
					</table>
					<br>
					<br>

					<table style='margin-bottom:10px'></table>


					<table width='50%'>
						<tr>
							<td>Yth. Direktur/ Pimpinan/ Sdr. <?= $datadatapemrikfpp-> t_namawp?>
								<br>
								<?= $datadatapemrikfpp-> t_alamatsurat?></td>
						</tr>
					</table>

					<table width='100%'>

						<tr>
							<td>
								<br>
								<br>
								Sehubungan dengan surat perintah pemeriksaan
								Nomor : PRIN- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; /WPJ.27/KP.0704/RIK.SIS/2021
								tanggal &nbsp;&nbsp;&nbsp;&nbsp;<?php echo date("F Y"); ?> , bersama ini diberitahukan
								bahwa:
							</td>
						</tr>
					</table>
					<br><br>
					<table border=0.2>
						<style type="text/css">
							table {
								border-collapse: collapse;
							}
						</style>
						<tr>
							<td align="center" style="padding: 3px">
								<font size="2">No.
							</td>
							<td align="center" style="padding: 3px">
								<font size="2">NAMA/NIP
							</td>
							<td align="center" style="padding: 3px">
								<font size="2">PANGKAT/GOL
							</td>
							<td align="center" style="padding: 3px">
								<font size="2">JABATAN
							</td>
						</tr>
						<tr>
							<td align="center" style="padding: 3px">
								<font size="2">1
							</td>
							<td style="padding: 7px">
								<font size="2">Rohman Yudo Purnomo
							</td>
							<td align="center" style="padding: 7px">
								<font size="2"> Penata Tk.I / (III/d)
							</td>
							<td align="center" style="padding: 7px">
								<font size="2">Supervisor
							</td>
						</tr>
						<tr>
							<td align="center" style="padding: 3px">
								<font size="2">2
							</td>
							<td style="padding: 7px">
								<font size="2">Maloma Naibaho
							</td>
							<td align="center" style="padding: 7px">
								<font size="2">Penata Muda Tk.I / (III/b)
							</td>
							<td align="center" style="padding: 7px">
								<font size="2">Ketua Tim
							</td>
						</tr>
						<tr>
							<td align="center" style="padding: 7px">
								<font size="2">3
							</td>
							<td style="padding: 7px">
								<font size="2">Hotman Jossua Edianto Hutagalung
							</td>
							<td align="center" style="padding: 7px">
								<font size="2">Penata Muda / (III/a)
							</td>
							<td align="center" style="padding: 7px">
								<font size="2">Anggota Tim
							</td>
						</tr>
						<tr>
							<td align="center" style="padding: 3px">
								<font size="2">4
							</td>
							<td style="padding: 5px">
								<font size="2">Agung Zakaria Saragih
							</td>
							<td align="center" style="padding: 5px">
								<font size="2">Pengatur / (II/c)
							</td>
							<td align="center" style="padding: 5px">
								<font size="2">Anggota Tim
							</td>
						</tr>
					</table>

					<table style='margin-bottom:20px'></table>
					<br>
					<p style="line-height:1.5">Diperintahkan untuk melakukan Pemeriksaan Lapangan
						di bidang perpajakan dengan jangka waktu pengujian paling lama 6 (enam) bulan terhadap
						perusahaan/pekerjaan
						Saudara dibawah ini :</p>

					<table align="left" width='90%'>
						<tr>
							<td width="35%">&nbsp;&nbsp;&nbsp;Nama</td>
							<td>: <?= $datadatapemrikfpp-> t_namawp?></td>
						</tr>

						<tr>
							<td>&nbsp;&nbsp;&nbsp;NPWP</td>
							<td>: <?= $datadatapemrikfpp-> t_npwp?></td>
						</tr>

						<tr>
							<td valign="top">&nbsp;&nbsp;&nbsp;Alamat</td>
							<td>: <?= $datadatapemrikfpp-> t_alamatsurat?></td>
						</tr>

						<tr>
							<td>&nbsp;&nbsp;&nbsp;Masa & Tahun Pajak</td>
							<td>: <?= $datadatapemrikfpp-> t_masa_tahun_pajak?></td>
						</tr>

						<tr>
							<td>&nbsp;&nbsp;&nbsp;Kode Pemeriksaan</td>
							<td>: <?= $datadatapemrikfpp-> t_kodepemeriksaan?></td>
						</tr>

						<tr>
							<td valign="top">&nbsp;&nbsp;&nbsp;Tujuan Pemeriksaan</td>
							<td>: Menguji Kepatuhan Pemenuhan Kewajiban Perpajakan</td>
						</tr>


					</table>

					<table style='margin-bottom:20px'></table>
					<table>
						<tr>
							<td>
								<br><br><br>
								<br><br><br>
								<br><br><br>
								<br>
								Untuk kelancaran jalannya pemeriksaan, diminta agar Saudara memperlihatkan
								dan / atau meminjamkan buku atau catatan dan dokumen, memberikan bantuan sepenuhnya,
								serta memberikan keterangan yang diperlukan.</td>
						</tr>
						<tr>
							<td>
								<br>
								Menolak untuk dilakukan pemeriksaan atau tidak membantu kelancaran jalannya pemeriksaan,
								dapat dikenakan sanksi
								sesuai dengan Ketentuan yang diatur dalam Undang Undang Nomor 6 Tahun 1983
								tentang Ketentuan Umum dan Tata Cara Perpajakan sebagaimana telah beberapa kali diubah
								terakhir dengan Undang undang Nomor 16 Tahun 2009
							</td>
						</tr>

						<tr>
							<td>
								<br>Demikian untuk menjadi perhatian Saudara dan atas kerjasamanya diucapkan terima
								kasih.</td>
						</tr>
					</table>


					<table style='margin-bottom:10px'></table>

					</table>



					<table width=100%>
						<tr>
							<td width="68%">
							</td>
							<td>
								<table>
								</table>


								<table>
									<tr>
										<td>
											<br>
											<br>a.n Direktur Jenderal Pajak</td>
									</tr>
									<tr>
										<td>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kepala Kantor
											<br><br><br><br><br><br>



											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Teguh Hadi Wardoyo</td>
							</td>
						</tr>
					</table>
					</table>
					</table>

					<p style="page-break-before: always">

						<!--PANG-->

						<img src="uploads/logokemenkeu.png" width="90px" align=center>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<img src="uploads/identitaskppbangko.png" width="400px" align=center>
						<hr style='border:0.5px solid #000'>
						<br>
						<table width=100%>
							<tr>
								<td>Nomor : PANG- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; /WPJ.27/KP.0704/RIK.SIS/2021
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									&nbsp;&nbsp;&nbsp;
									Bangko, &nbsp;&nbsp;&nbsp;&nbsp;<?php echo date("F Y"); ?></td>
								<td>
							</tr>
							<tr>
								<td>Hal &nbsp;&nbsp;&nbsp;&nbsp; : Panggilan dalam Rangka Pemeriksaan
								<td>
							</tr>
						</table>
						<br>
						<br>

						<table style='margin-bottom:10px'></table>


						<table width='50%'>
							<tr>
								<td>Yth. Direktur/ Pimpinan/ Sdr. <?= $datadatapemrikfpp-> t_namawp?>
									<br>
									<?= $datadatapemrikfpp-> t_alamatsurat?></td>
							</tr>
						</table>

						<table width='100%'>

							<tr>
								<td>
									<br>

									Sehubungan dengan surat perintah pemeriksaan
									Nomor : PRIN- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; /WPJ.27/KP.0704/RIK.SIS/2021
									tanggal &nbsp;&nbsp;&nbsp;&nbsp;<?php echo date("F Y"); ?> , bersama ini
									diberitahukan bahwa:
								</td>
							</tr>
						</table>
						<br>
						<table border=0.2>
							<style type="text/css">
								table {
									border-collapse: collapse;
								}
							</style>
							<tr>
								<td align="center" style="padding: 3px">
									<font size="2">No.
								</td>
								<td align="center" style="padding: 3px">
									<font size="2">NAMA/NIP
								</td>
								<td align="center" style="padding: 3px">
									<font size="2">PANGKAT/GOL
								</td>
								<td align="center" style="padding: 3px">
									<font size="2">JABATAN
								</td>
							</tr>
							<tr>
								<td align="center" style="padding: 3px">
									<font size="2">1
								</td>
								<td style="padding: 7px">
									<font size="2">Rohman Yudo Purnomo
								</td>
								<td align="center" style="padding: 7px">
									<font size="2"> Penata Tk.I / (III/d)
								</td>
								<td align="center" style="padding: 7px">
									<font size="2">Supervisor
								</td>
							</tr>
							<tr>
								<td align="center" style="padding: 3px">
									<font size="2">2
								</td>
								<td style="padding: 7px">
									<font size="2">Maloma Naibaho
								</td>
								<td align="center" style="padding: 7px">
									<font size="2">Penata Muda Tk.I / (III/b)
								</td>
								<td align="center" style="padding: 7px">
									<font size="2">Ketua Tim
								</td>
							</tr>
							<tr>
								<td align="center" style="padding: 7px">
									<font size="2">3
								</td>
								<td style="padding: 7px">
									<font size="2">Hotman Jossua Edianto Hutagalung
								</td>
								<td align="center" style="padding: 7px">
									<font size="2">Penata Muda / (III/a)
								</td>
								<td align="center" style="padding: 7px">
									<font size="2">Anggota Tim
								</td>
							</tr>
							<tr>
								<td align="center" style="padding: 3px">
									<font size="2">4
								</td>
								<td style="padding: 5px">
									<font size="2">Agung Zakaria Saragih
								</td>
								<td align="center" style="padding: 5px">
									<font size="2">Pengatur / (II/c)
								</td>
								<td align="center" style="padding: 5px">
									<font size="2">Anggota Tim
								</td>
							</tr>
						</table>

						<table style='margin-bottom:20px'></table>
						<br>
						<p style="line-height:1.5">Diperintahkan untuk melakukan Pemeriksaan Lapangan
							di bidang perpajakan dengan jangka waktu pengujian paling lama 6 (enam) bulan terhadap
							perusahaan/pekerjaan
							Saudara dibawah ini :</p>

						<table align="left" width='90%'>
							<tr>
								<td width="35%">&nbsp;&nbsp;&nbsp;Nama</td>
								<td>: <?= $datadatapemrikfpp-> t_namawp?></td>
							</tr>

							<tr>
								<td>&nbsp;&nbsp;&nbsp;NPWP</td>
								<td>: <?= $datadatapemrikfpp-> t_npwp?></td>
							</tr>

							<tr>
								<td valign="top">&nbsp;&nbsp;&nbsp;Alamat</td>
								<td>: <?= $datadatapemrikfpp-> t_alamatsurat?></td>
							</tr>

							<tr>
								<td>&nbsp;&nbsp;&nbsp;Masa & Tahun Pajak</td>
								<td>: <?= $datadatapemrikfpp-> t_masa_tahun_pajak?></td>
							</tr>

							<tr>
								<td>&nbsp;&nbsp;&nbsp;Kode Pemeriksaan</td>
								<td>: <?= $datadatapemrikfpp-> t_kodepemeriksaan?></td>
							</tr>

							<tr>
								<td valign="top">&nbsp;&nbsp;&nbsp;Tujuan Pemeriksaan</td>
								<td>: Menguji Kepatuhan Pemenuhan Kewajiban Perpajakan</td>
							</tr>


						</table>

						<table style='margin-bottom:20px'></table>
						<table>
							<tr>
								<td>
									<br><br><br>
									<br><br><br>
									<br><br><br>
									<br>
									Untuk kelancaran jalannya pemeriksaan, diharapkan kedatangan Saudara ke kantor kami
									dengan membawa buku,
									catatan dan dokumen pendukung sebagaimana terlampir,
									memberikan bantuan sepenuhnya, serta memberikan keterangan yang diperlukan pada :
								</td>
							</tr>
							<tr>
								<td>
									Hari/ Tanggal&nbsp;&nbsp;&nbsp;:</td>
							</tr>
							<tr>
								<td>
									Tempat&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									: KPP Pratama Bangko, Jl. Jend. Sudirman KM. 3, Pematang Kandis, Bangko, Merangin
								</td>
							</tr>
							<tr>
								<td>
									Waktu&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
							</tr>
							<tr>
								<td>
									<br>
									Menolak untuk dilakukan pemeriksaan atau tidak membantu kelancaran jalannya
									pemeriksaan, dapat dikenai sanksi
									sesuai dengan Ketentuan yang diatur dalam Undang-Undang Nomor 6 Tahun 1983 tentang
									Ketentuan Umum dan Tata Cara Perpajakan sebagaimana telah beberapa kali diubah
									terakhir dengan Undang-Undang Nomor 16 Tahun 2009.
								</td>
							</tr>

							<tr>
								<td>
									<br>Demikian untuk menjadi perhatian Saudara dan atas kerjasamanya diucapkan terima
									kasih.</td>
							</tr>
						</table>


						<table style='margin-bottom:10px'></table>

						</table>



						<table width=100%>
							<tr>
								<td width="68%">
								</td>
								<td>
									<table>
									</table>


									<table>
										<tr>
											<td>

												<br>a.n Direktur Jenderal Pajak</td>
										</tr>
										<tr>
											<td>
												&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kepala Kantor
												<br><br><br><br><br><br>



												&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Teguh Hadi Wardoyo</td>
								</td>
							</tr>
						</table>
						</table>
						</table>

						<p style="page-break-before: always">


	</main>
</body>





</html>