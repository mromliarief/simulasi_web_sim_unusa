<?php
include 'config.php';


// Menyimpan data kedalam variabel

$nim=$_POST['nim'];
$nama_lengkap=$_POST['nama_lengkap'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$agama=$_POST['agama'];
$prodi=$_POST['prodi'];
$dosen_wali=$_POST['dosen_wali'];

// Insert Data
$query="INSERT INTO daftar_mhs_ta VALUES('','$nim','$nama_lengkap','$jenis_kelamin','$agama','$prodi','$dosen_wali')";
mysqli_query($conn,$query);

// cek apakah data sudah masuk
if($query){
	echo "Data Berhasil Ditambahkan";	
}else{
	echo "Data Gagal Ditambahkan";
}

//Redirecting
header("Location:hasil_output_pendaftaran.php");

?>