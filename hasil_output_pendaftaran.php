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

<html>
<head>
	<title>Data Mahasiswa Pendaftar</title>
	<link rel="stylesheet" type="text/css" href="style_pmb.css">
	<link rel="stylesheet" type="text/css" href="media-queries.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" >
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
				<td align="center" width="20%"><a href=index_2.php>Home</a></td>
				<td align="center" width="20%"><a href=pendaftaran.php>Pendaftaran</a></td>
				<td align="center" width="20%"><a href=konsultasi.php>Konsultasi</a></td>
				<td align="center" width="20%"><a href=berkas.php>Berkas</a></td>
				<td align="center" width="20%"><a href=panduan.php>Panduan</a></td>
			</tr>		
		</table>

		<!--Content Halaman Utama-->
		<h1 align="center">Daftar Mahasiswa</h1>


		<!--Content-->
			<table border="0" align="center" cellspacing="2" cellpadding="2" bgcolor="white" width="1000px">
				<tr>
					<td width="50px"><img src="images\LogoUNUSA.JPG" width="95px" height="95px"></td>
					<td style="font-size: 18px; font-weight: bold; color: #227F17;">Universitas Nahdlatul Ulama Surabaya<br>Program Studi S1 Sistem Informasi</td>
				</tr>
			</table>
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
		<table border="0" align="center" cellspacing="5" cellpadding="5" width="1000px">
			<tr>
				<td align="left" colspan="2"><button type="submit" name="submit" value="back"><a href="pendaftaran.php">Back</a></button>
				</td>
				
				<!--Fungsi Cetak-->
				<td align="right"><button type="submit" name="submit" value="print"><a href="cetak.php" target="_BLANK">Print</a></button></td> 
		</table>
		<br>
		<br>
		<p align="center" class="footer">Copyright &copy; Prodi S1 Sistem Informasi Unusa</p>
		<p align="center"><a href="https://unusa.ac.id/">www.unusa.ac.id</a></td></p>
	</body>
</html>