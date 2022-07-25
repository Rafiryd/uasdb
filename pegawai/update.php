<?php
include "koneksi.php";

$id = $_POST['id'];
$nama = $_POST['nama_pegawai'];
$nik = $_POST['nik_pegawai'];
$gaji = $_POST['gaji_pegawai'];
$masakerja = $_POST['masa_kerja_pegawai'];

mysqli_query($koneksi,"update pegawai set nama_pegawai='$nama', nik_pegawai='$nik', gaji_pegawai='$gaji', masa_kerja_pegawai='$masakerja'
             where id='$id'");
             
header("location:index.php");
             
?>