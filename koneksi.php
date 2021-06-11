<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$name = "modul6";
	$koneksi = mysqli_connect($host, $user, $pass) or die ("Failed to connect to the database");
	mysqli_select_db($koneksi, $name);
?>