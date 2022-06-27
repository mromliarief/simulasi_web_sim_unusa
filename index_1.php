<?php
include 'config.php';

error_reporting(0);
session_start();

if(isset($_SESSION['username'])){
	header("Location:berhasil_login.php");
}

if(isset($_POST['submit'])){
	$username=$_POST['username'];
	$password=md5($_POST['password']);

	$sql = "SELECT * FROM users WHERE (username='$username') AND (password='$password')";
	$result = mysqli_query($conn,$sql);
	if($result->num_rows >0){
		$row=mysqli_fetch_assoc($result);
		$_SESSION['username']=$row['username'];
		header("Location:berhasil_login.php");
	}else{
		echo ("<script>alert('Username/Password Salah!')</script>");
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Login</title>
	<link rel="stylesheet" type="text/css" href="style_pmb.css">
	<link rel="stylesheet" type="text/css" href="media-queries.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" >
</head>
<body>
	<div class="container">
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

		<!--Content-->
			<table border="0" align="center" cellspacing="9" cellpadding="9" class="table3">
				<tr>
					<td colspan="2" align="center"><img src="images\LogoUNUSA.JPG" width="95px" height="95px"></td>
				</tr>
			<form>
					<tr>
						<td colspan="1">Username</td>
						<td><input type="text" placeholder="masukkan username"></td>
						</tr>
					<tr>
						<td>Password</td>
						<td><input type="password" placeholder="masukkan password"></td>
					</tr>
					<tr>
						<td align="center" colspan="2"><button type="submit" name="submit" value="login"><a href="berhasil_login.php">Login</a></button></td>
					</tr>
			</form>
			</table>
		</table>
	</table>
	<br>
	<br>
	<p align="center" class="footer">Copyright &copy; Prodi S1 Sistem Informasi Unusa</p>
	<p align="center"><a href="https://unusa.ac.id/">www.unusa.ac.id</a></td></p>
	</div>
</body>
</html>