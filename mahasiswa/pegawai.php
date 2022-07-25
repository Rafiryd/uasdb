<!DOCTYPE html>
<html>
<head>
	<title>Halaman Pegawai</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

    <?php 
	session_start();
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:login.php?pesan=gagal");
	}

    ?>
	<h1>Halaman Pegawai</h1>
 
	<p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>
	
	<a href="logout.php">LOGOUT</a>

	<h3>Berikut data pegawai : </h3>

	
	<?php 
	include 'koneksi.php';
	$no=1;
	$data = mysqli_query($koneksi,"select * from mahasiswa");
	while($d = mysqli_fetch_array($data))
	?>
		
</body>
</html>