<?php
include 'config.php';

$nim=$_POST['nim'];
$nama_lengkap=$_POST['nama_lengkap'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$agama=$_POST['agama'];
$prodi=$_POST['prodi'];
$dosen_wali=$_POST['dosen_wali'];

$sql="SELECT * FROM daftar_mhs_ta";
$query=mysqli_query($conn,$sql);
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Halaman Cetak Form Pendaftaran</title>
	<link rel="stylesheet" type="text/css" href="style_pmb.css">
</head>
<body>
	<!--Content-->
			<table border="0" align="center" cellspacing="2" cellpadding="2" bgcolor="white" width="1000px">
				<tr>
					<td width="50px"><img src="images\LogoUNUSA.JPG" width="95px" height="95px"></td>
					<td style="font-size: 18px; font-weight: bold; color: #227F17;">Universitas Nahdlatul Ulama Surabaya<br>Program Studi S1 Sistem Informasi</td>
				</tr>
			</table>
		</table>
		<br>
		<table border="0" align="center" cellspacing="2" cellpadding="2" bgcolor="white" width="1000px">
			<tr>
				<td align="center">Data Mahasiswa Pendaftar Seminar Proposal Tugas Akhir</td>
			</tr>
		</table>
		<br>
		<table border="0" align="center" cellspacing="5" cellpadding="5" bgcolor="#D3FA84" width="1000px">
				<tr>
					<th>NIM</th>
					<th>Nama Lengkap</th>
					<th>Jenis Kelamin</th>
					<th>Agama</th>
					<th>Prodi</th>
					<th>Dosen Wali</th>
				</tr>
			<!--Fetching-->
			 <?php while($row=mysqli_fetch_array($query)){ ?>
			 	<tr>
			 		<td align="center"><?= $row["nim"]; ?></td>
			 		<td align="center"><?= $row["nama_lengkap"]; ?></td>
			 		<td align="center"><?= $row["jenis_kelamin"]; ?></td>
			 		<td align="center"><?= $row["agama"]; ?></td>
			 		<td align="center"><?= $row["prodi"]; ?></td>
			 		<td align="center"><?= $row["dosen_wali"]; ?></td>
			 	</tr>
			 <?php
			 	}
			 ?>			 	
		</table>
		<script type="text/javascript">window.print();</script>
</body>
</html>