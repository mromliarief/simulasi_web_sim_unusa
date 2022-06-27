<?php
include 'config.php';


// Menyimpan data kedalam variabel

$nim=$_POST['nim'];
$nama_lengkap=$_POST['nama_lengkap'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$prodi=$_POST['prodi'];
$dosen=$_POST['dosen'];

// Insert Data
$query="INSERT INTO daftar_mhs_konsultasi VALUES('','$nim','$nama_lengkap','$jenis_kelamin','$prodi','$dosen')";
mysqli_query($conn,$query);

// cek apakah data sudah masuk
if($query){
	echo "<script>alert("Data Berhasil Ditambahkan")</script>";	
}else{
	echo "<script>alert("Data Gagal Ditambahkan")</script>";
}

//Redirecting
header("Location:hasil_output_konsultasi.php");

?>