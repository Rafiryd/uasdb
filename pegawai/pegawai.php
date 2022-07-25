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
	$data = mysqli_query($koneksi,"select * from pegawai");
	while($d = mysqli_fetch_array($data)) {
		?>
		<table>
		<tr>
			<td width="5%"><?php echo $no++ ?></td>
			<td width="20%"><?php echo $d['nama_pegawai']; ?></td>
			<td width="20%"><?php echo $d['nik_pegawai']; ?></td>
			<td width="20%"><?php echo $d['gaji_pegawai']; ?></td>
			<td width="25%"><?php echo $d['masa_kerja_pegawai']; ?></td>
			<td width="20%">
				
		
			</td>
		</tr>
		</table>
	    <?php
	}
	?>
		
</body>
</html>