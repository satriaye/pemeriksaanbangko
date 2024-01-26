<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename= $title.xls");
header("Pragma: no-cache");
header("Expires: 0");
?>

<table border:"1" width: "100%">
    <thead>
        <tr>
            <th style="background-color:#ccf2ff">No.</th>
			<th style="background-color:#ccfff2">Nama</th>
			<th style="background-color:#ccfff2">NPWP</th>
		    <th style="background-color:#ccfff2" width="300">Alamat</th>
			<th style="background-color:#ccffd9">Masa & Tahun Pajak</th>
			<th style="background-color:#ccffd9">Jenis Pemeriksaan</th>
			<th style="background-color:#ccffd9">Kode Pemeriksaan</th>
			<th style="background-color:#ffe6f3">Nilai SPTLB</th>
			<th style="background-color:#99ffb3">Potensi KKA</th>
			<th style="background-color:#33ff66">AR</th>
			<th style="background-color:#e6ffcc">NP2</th>
			<th style="background-color:#e6ffcc">Tanggal NP2</th>
            <th style="background-color:#f2ffcc">SPV</th>
			<th style="background-color:#f2ffcc">Pangkat/Gol.SPV</th>
			<th style="background-color:#f0fbd0">KeTim</th>
			<th style="background-color:#f0fbd0">Pangkat/ Gol. KeTim</th>
			<th style="background-color:#eef7d4">Ang I</th>
			<th style="background-color:#eef7d4">Pangkat/Gol.Ang I</th>
			<th style="background-color:#eef7d4">Ang II</th>
			<th style="background-color:#eef7d4">Pangkat/Gol.Ang II</th>
			<th style="background-color:#ffffcc">SP2</th>
			<th style="background-color:#ffffcc">Tanggal SP2</th>
			<th style="background-color:#f9e6ff">Jatuh Tempo Pemeriksaan</th>
            <th style="background-color:#ccd9ff">Nomor LHP</th>
			<th style="background-color:#ccd9ff">Tanggal LHP</th>
			<th style="background-color:#ccd9ff">Tanggal diterima P3</th>
			<th style="background-color:#ccd9ff">Tanggal Kirim ND ke Pelayanan</th>
			<th style="background-color:#d9ffb3">Jenis SKP</th>
			<th style="background-color:#d9ffcc">SKPKB Terbit</th>
			<th style="background-color:#d9ffcc">SKPKB Disetujui</th>
			<th style="background-color:#c6ffb3">Pencairan SKPKB</th>
			<th style="background-color:#ffcce6">SKPLB Terbit</th>
			<th style="background-color:#ffcce6">SKPLB Disetujui</th>
			<th style="background-color:#ff99ce">Refund Discrepancy</th>
			<th style="background-color:#ffe6cc">Status</th>
			<th style="background-color:#ccf2ff">Keterangan</th>

        </tr>
    </thead>
    <tbody style="border: 1px solid #ccc">
        <?php $no=1; foreach ($listdata as $value): ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $value['t_namawp'] ?></td>
                <td><?= $value['t_npwp'] ?></td>
                <td><?= $value['t_alamatsurat'] ?></td>
                <td><?= $value['t_masa_tahun_pajak'] ?></td>
				<td><?= $value['t_jenispemeriksaan'] ?></td>
                <td><?= $value['t_kodepemeriksaan'] ?></td>
				<td><?= $value['t_sptlb'] ?></td>
				<td><?= $value['t_potensikka'] ?></td>
				<td><?= $value['t_ar'] ?></td>
                <td><?= $value['t_np2'] ?></td>
                <td><?= $value['t_tanggalnp2'] ?></td>
                <td><?= $value['t_namasupervisor'] ?></td>
				<td><?= $value['t_pangkatsupervisor'] ?></td>
				<td><?= $value['t_namaketua'] ?></td>
				<td><?= $value['t_pangkatketua'] ?></td>
				<td><?= $value['t_namaanggota1'] ?></td>
				<td><?= $value['t_pangkatanggota1'] ?></td>
				<td><?= $value['t_namaanggota2'] ?></td>
				<td><?= $value['t_pangkatanggota2'] ?></td>
                <td><?= $value['t_sp2'] ?></td>
				<td><?= $value['t_tanggalsp2'] ?></td>
				<td><?= $value['t_jatuhtempo'] ?></td>
                <td><?= $value['t_nomorlhp'] ?></td>
				<td><?= $value['t_tanggallhp'] ?></td>
				<td><?= $value['t_tanggalsampaip3'] ?></td>
				<td><?= $value['t_tanggalndkepelayanan'] ?></td>
				<td><?= $value['t_jenisskp'] ?></td>
				<td><?= $value['t_skpkbterbit'] ?></td>
				<td><?= $value['t_skpkbdisetujui'] ?></td>
				<td><?= $value['t_skpkbcair'] ?></td>
				<td><?= $value['t_skplbterbit'] ?></td>
				<td><?= $value['t_skplbdisetujui'] ?></td>
				<td><?= $value['t_rd'] ?></td>
				<td><?= $value['t_status'] ?></td>
				<td><?= $value['t_keterangan'] ?></td>
            </tr>
        <?php endforeach ?>
    </tbody>


</table>