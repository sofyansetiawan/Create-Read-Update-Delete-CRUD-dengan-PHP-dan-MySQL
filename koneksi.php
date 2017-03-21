<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$name = "mahasiswa";

	$koneksi = mysql_connect($host, $user, $pass) or die("koneksi ke database gagal");
	mysql_select_db($name, $koneksi) or die("Tidak ada database yang dipilih");
?>