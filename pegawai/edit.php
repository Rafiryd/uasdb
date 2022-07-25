<!DOCTYPE html>
<html>
    <head>
        <title>Latihan 1</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <h3>Form Edit Data</h3>

        <?php
            include "koneksi.php";
            $id = $_GET['id'];
            $data = mysqli_query($koneksi,"select * from pegawai where id='$id'");
            while($d = mysqli_fetch_array($data)){
        ?>
        <form method="post" action="update.php">
            <table>
            <label>nama pegawai:</label><br>
            <input type="hidden" name="id" value="<?php echo $d['id'] ?>">
            <input type="text" name="nama_pegawai" value="<?php echo $d['nama_pegawai'] ?>">

            <label>NIK pegawai:</label><br>
            <input type="text" name="nik_pegawai" value="<?php echo $d['nik_pegawai'] ?>">

            <label>gaji pegawai:</label><br>
            <input type="text" name="gaji_pegawai" value="<?php echo $d['gaji_pegawai'] ?>">

            <label>masa kerja pegawai:</label><br>
            <input type="text" name="masa_kerja_pegawai" value="<?php echo $d['masa_kerja_pegawai'] ?>">
            <input type="submit">
            </table>
        </form>
        <?php
    }
    ?>
    </body>

</html>