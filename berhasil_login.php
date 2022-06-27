<?php
session_start();

if(!isset($_SESSION['username'])){
	header("Location: index_2.php");
}

?>


<html>
<head>
	<title>Berhasil Login</title>
	<link rel="stylesheet" type="text/css" href="style_pmb.css">
</head>
<body>
	<table border="0" cellpadding="1" cellspacing="1" align="center" width="1000px" class="table1">
		<!--Header-->

		<tr>
			<td align="center" valign="middle">Sistem Informasi Tugas Akhir</td>
		</tr>

		<!--Menu-->
		<table border="0" align="center" width="1000px" cellspacing="10" class="table2">
			<tr>
				<td align="center" width="20%"><a href="#">Home</a></td>
				<td align="center" width="20%"><a href="#">Pendaftaran</a></td>
				<td align="center" width="20%"><a href="#">Konsultasi</a></td>
				<td align="center" width="20%"><a href="#">Berkas</a></td>
				<td align="center" width="20%"><a href="#">Panduan</a></td>
			</tr>		
		</table>

		<!--Content Halaman Utama-->
		<h1 align="center">Selamat Datang Di Website SIM TA UNUSA</h1>

		<!--Content-->
			<table border="0" align="center" cellspacing="9" cellpadding="9" class="table3">
				<tr>
					<td colspan="2" align="center"><img src="images\LogoUNUSA.JPG" width="95px" height="95px"></td>
				</tr>
			<form method="" action="POST">
			<?php echo "<h1>Selamat Datang, ".$_SESSION['username']."!"."</h1>" ?>
			<input type="submit" name="submit" value="logout"><a href="logout.php">Logout</a>
			</form>
			</table>
		</table>
	</table>
	
	<br>
	<br>
	<p align="center" class="footer">Copyright &copy; Prodi S1 Sistem Informasi Unusa</p>
</body>
</html>