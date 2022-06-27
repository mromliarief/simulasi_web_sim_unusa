<html>
<head>
	<title>Halaman Berkas</title>
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
		<h1 align="center">Dokumen</h1>


		<!--Content-->
			<table border="0" align="center" cellspacing="2" cellpadding="2" bgcolor="white" width="1000px">
				<tr>
					<td width="50px"><img src="images\LogoUNUSA.JPG" width="95px" height="95px"></td>
					<td style="font-size: 18px; font-weight: bold; color: #227F17;">Universitas Nahdlatul Ulama Surabaya<br>Program Studi S1 Sistem Informasi</td>
				</tr>
			</table>
			<br>
			<table border="0" align="center" cellspacing="9" cellpadding="9" width="1000px">
				<tr>
					<td colspan="2" align="center"><b>Unduh Formulir Anda Disini</b></td>
				</tr>
			</table>
			<br>
			<table border="0" align="center" cellspacing="9" cellpadding="9" width="1000px" bgcolor="white">
				<tr>
					<td><a href="download.php?file=file_revisi_seminar.txt">Unduh Lembar Revisi Seminar Proposal TA</a></td>
				</tr>
				<tr>
					<td><a href="download.php?file=file_lembar_bimbingan.txt">Unduh Lembar Bimbingan</a></td>
				</tr>
				<tr>
					<td><a href="download.php?file=file_pendaftaran_seminar.txt">Unduh Form Pendaftaran Sidang TA</a></td>
				</tr>
				<tr>
					<td><a href="download.php?file=file_revisi_sidang_akhir_TA.txt">Unduh Lembar Revisi Sidang Akhir TA</a></td>
				</tr>
			</table>
			<br>
			<table border="0" align="center" cellspacing="9" cellpadding="9" width="1000px">
				<tr>
					<td colspan="2" align="center"><b>Unggah Dokumen Proposal Tugas Akhir Anda Disini</b></td>
				</tr>
			</table>
			<table border="0" align="center" cellspacing="9" cellpadding="9" width="1000px" bgcolor="white">
				<tr>
				<td>
					<form action="upload_2.php" method="post" enctype="multipart/form-data">
					Pilih File: <input type="file" name="berkas"/><br><br>
					<input type="submit" name="upload" value="Unggah Berkas" />
				</form>
				</td>
				</tr>	
			</table>
			<br>
			<table border="0" align="center" cellspacing="9" cellpadding="9" width="1000px">
				<tr>
					<td colspan="2" align="center"><b>Unggah Dokumen Tugas Akhir Anda Disini</b></td>
				</tr>
			</table>
			<table border="0" align="center" cellspacing="9" cellpadding="9" width="1000px" bgcolor="white">
				<tr>
				<td>
					<form action="upload.php" method="post" enctype="multipart/form-data">
					Pilih File: <input type="file" name="berkas"/><br><br>
					<input type="submit" name="upload" value="Unggah Berkas" />
				</form>
				</td>
				</tr>	
			</table>
			<table border="0" align="center" cellspacing="5" cellpadding="5" width="1000px">
				<tr>
				<td align="right" colspan="2"><button type="submit" name="submit" value="back"><a href="berkas.php">Back</a></button>
				</td>
			</table>	
		</table>
	</table>
	<br>
	<p align="center" class="footer">Copyright &copy; Prodi S1 Sistem Informasi Unusa</p>
	<p align="center"><a href="https://unusa.ac.id/">www.unusa.ac.id</a></td></p>
</body>
</html>