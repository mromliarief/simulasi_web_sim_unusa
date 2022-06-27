<html>
<head>
	<title>Halaman Konsultasi</title>
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
		<h1 align="center">Form Pengajuan Konsultasi</h1>


		<!--Content-->
			<table border="0" align="center" cellspacing="2" cellpadding="2" bgcolor="white" width="1000px">
				<tr>
					<td width="50px"><img src="images\LogoUNUSA.JPG" width="95px" height="95px"></td>
					<td style="font-size: 18px; font-weight: bold; color: #227F17;">Universitas Nahdlatul Ulama Surabaya<br>Program Studi S1 Sistem Informasi</td>
				</tr>
			</table>
				<br>
				<table border="0" align="center" cellspacing="9" cellpadding="5" width="380px" bgcolor="white">
				<tr>
					<td colspan="2" align="center"><b>Isikan Pengajuan Konsultasi Anda</b></td>
				</tr>
				
			<form method="post" action="proses_konsultasi.php">
					<tr>
						<td>NIM</td>
						<td><input type="text" placeholder="masukkan NIM" name="nim" required="nim"></td>
						</tr>
					<tr>
						<td>Nama Lengkap</td>
						<td><input type="text" placeholder="masukkan nama lengkap" name="nama_lengkap" required="nama_lengkap"></td>
					</tr>
					<tr>
						<td>Jenis Kelamin</td>
						<td><input type="text" placeholder="masukkan L/P" name="jenis_kelamin" required="jenis_kelamin"></td>
					</tr>
					<tr>
						<td>Prodi</td>
						<td><input type="text" placeholder="masukkan prodi" name="prodi" required="prodi"></td>
					</tr>
					<tr>
						<td>Nama Dosen</td>
					   	<td><select name="dosen" required="dosen">
						<option>Dr.Teguh Herlambang,M.Si</option>
						<option>Fajar Annas Susanto,M.Kom</option>
						<option>Firman Yudianto,M.T</option>
						<option>Ima Kurniastuti,M.T</option>
						<option>Rizqi Putri N.B.,M.T</option>
						<option>Endang Sulistyani,M.Kom</option>
						<option>Tri Deviasari Wulan,M.T</option>
						</select>
						</td>
					</tr>
					<tr>
						<td align="center" colspan="2"><button type="submit" name="submit" value="simpan">Simpan</button></td>
					</tr>
			</form>
			</table>
		</table>
	</table>
	<p align="center" style="color: red; font-style: italic;">Mohon diisi dengan teliti</p>
	<br>
	<p align="center" class="footer">Copyright &copy; Prodi S1 Sistem Informasi Unusa</p>
	<p align="center"><a href="https://unusa.ac.id/">www.unusa.ac.id</a></td></p>
</body>
</html>