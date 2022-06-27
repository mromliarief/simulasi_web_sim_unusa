<?php

//$server='localhost';
//$user='root';
//$pass='';
//$database='sim_ta_unusa';

$conn=mysqli_connect('localhost','root','','sim_ta_unusa');
if($conn){
	echo ("<script>alert('Database Terhubung')</script>");
}else{
	die("<script>alert('Database Gagal Terhubung !!')</script>");
}

?>