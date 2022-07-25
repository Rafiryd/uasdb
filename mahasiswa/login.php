<DOCTYPE html>
<html>
<head>
	<title>Halaman Login</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<h2>Halaman Login</h2>
	<br/>
	<!-- Notifikasi -->
		<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>
	
	<form method="post" action="cek_login.php">
		
		<label>Name:</label><br>
		<td><input type="text" name="username"></td>
		
		<label>Password:</label><br>
		<td><input type="text" name="password"></td>

   		Sebagai Siapakah Anda : <br>
	  	<input type="checkbox" name="level" value="admin"> admin<br>
		<input type="checkbox" name="level" value="pegawai"> pegawai<br>
		<input type="checkbox" name="level" value="mahasiswa"> mahasiswa<br>
		<input type="checkbox" name="level" value="dosen"> dosen<br>
		<input type="checkbox" name="level" value="siswa"> siswa<br>
			
		<td><input type="submit" value="LOGIN"></td>

	</form>
</body>
</html>