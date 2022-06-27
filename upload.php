<?php

// Ambil data file
$namaFile = $_FILES['berkas']['name'];
$namaSementara = $_FILES['berkas']['tmp_name'];

// Tentukan lokasi file akan dipindahkan
$dirupload = "terupload/";

// Pindahkan file
$terupload = move_uploaded_file($namaSementara, $dirupload.$namaFile);

if($terupload){
	echo "<b>Unggah Berkas Berhasil !</b><br/>";
	echo "Link: <a href='".$dirUpload.$namaFile."'>".$namaFile."</a>";
}else{
	echo "<b>Unggah Berkas Gagal !</b>";
}

?>
<br><br>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<button type="submit" name="kembali" value="kembali" class="button"><a href="berkas.php">Kembali Ke Halaman Sebelumnya</a></button>
</body>
</html>
