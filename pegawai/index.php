<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

    <?php 
	session_start();
	
	if($_SESSION['level']==""){
		header("location:login.php?pesan=gagal");
	}

    ?>
	<h1>Halaman Admin</h1>
 
	<p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>
	
	<a href="logout.php">LOGOUT</a>

	<form method="post" action="tambah.php">
		<label>Nama Pegawai:</label><br>
		<input type="text" name="nama_pegawai"><br>
		
		<label>NIK Pegawai:</label><br>
		<input type="text" name="nik_pegawai"><br>

		<label>Gaji Pegawai:</label><br>
		<input type="text" name="gaji_pegawai"><br>

		<label>Masa Kerja Pegawai:</label><br>
		<input type="text" name="masa_kerja_pegawai"><br>

		<input type="submit">
		<a href="logout.php">Logout</a>
	</form>
	
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
				<a href="edit.php?id=<?php echo $d['id']; ?>">Edit</a>
				<a href="hapus.php?id=<?php echo $d['id']; ?>">Hapus</a>
			</td>
		</tr>
		</table>
	    <?php
	}
	?>
		
</body>
</html>