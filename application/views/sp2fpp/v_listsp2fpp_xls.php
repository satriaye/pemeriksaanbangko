<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename= $title.xls");
header("Pragma: no-cache");
header("Expires: 0");
?>

<table border:"1" width: "100%">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>NPWP</th>
            <th>Alamat</th>
            <th>Masa & Tahun Pajak</th>
            <th>Kode Pemeriksaan</th>
            <th>Tanggal Input</th>
            <th>Kode NP2</th>
            <th>Tanggal NP2</th>
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
                <td><?= $value['t_kodepemeriksaan'] ?></td>
                <td><?= $value['t_tanggalinput'] ?></td>
                <td><?= $value['t_np2'] ?></td>
                <td><?= $value['t_tanggalnp2'] ?></td>
            </tr>
        <?php endforeach ?>
    </tbody>


</table>