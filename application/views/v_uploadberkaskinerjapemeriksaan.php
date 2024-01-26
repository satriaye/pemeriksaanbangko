<html>
    <head>
        <title>Pemeriksaan Bangko</title>
    </head>
    <body>
        <?php 
        if(isset($error))
        {
            echo "ERROR UPLOAD : <br/>";
            print_r($error);
            echo "<hr/>";
        }
        ?>
        <form method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>index.php/upload/proses">
            <div>Berkas : </div>
        	<div><input type="file" name="berkas"></div>
            <div>Tanggal Input : </div>
            <div><input type="date" name="keterangan_berkas" value="<?= date("Y-m-d"); ?>" readonly></input></div>
            <div><input type="submit" value="Simpan"/></div>
        </form>
    </body>
</html>