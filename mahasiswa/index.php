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

		<input type="submit">
		<a href="logout.php">Logout</a>
	</form>

	?>
		
</body>
</html>