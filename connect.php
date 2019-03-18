<?php
	$host = "localhost";
	$db = "db_universitas";
	$uname = "root";
	$pass = "";
	
	$connect = mysqli_connect($host,$uname,$pass,$db);
	
	if(!$connect){
		echo "Koneksi ke database gagal" . mysqli_connect_error();
	}else{
		echo "Koneksi ke database berhasil";
	}
?>