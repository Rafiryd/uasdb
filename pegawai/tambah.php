<?php
//koneksi database
include 'koneksi.php';

//menangkap data dari form HTML di index.php
$Nama = @$_POST['nama_pegawai'];
$NIK = @$_POST['nik_pegawai'];
$GAJI = @$_POST['gaji_pegawai'];
$Masaker = @$_POST['masa_kerja_pegawai'];

//menginput ke database
mysqli_query($koneksi,"insert into pegawai values('','$Nama','$NIK','$Gaji','$Masaker')");

//kembalikan website ke halaman index.php 
header("location:index.php");

?>