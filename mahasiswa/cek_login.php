<?php
session_start();

include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($koneksi,"select * from login where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
 
// cek apakah username dan password di temukan pada database
if($cek > 0) {
	$data = mysqli_fetch_assoc($login);
	
	if ($data['level']=="admin") {
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";
		header("location:index.php");
		
	} else if ($data['level']=="pegawai") {
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "pegawai";
		header("location:pegawai.php");
	
	} else if ($data['level']=="mahasiswa") {
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "mahasiswa";
		header("location:pegawai.php");
		
	} else if ($data['level']=="dosen") {
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "dosen";
		header("location:index.php");
	
	} else if ($data['level']=="siswa") {
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "siswa";
		header("location:index.php");
		
	} else {
		header("location:login.php?pesan=gagal");
	}
} else {
	header("location:login.php?pesan=gagal");
}
?>