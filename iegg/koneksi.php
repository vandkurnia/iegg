<?php
	$server = "localhost";
	$user = "root";
	$pass = "";
	$database = "datasuhu";
	 
	$koneksi = mysqli_connect($server, $user, $pass, $database);

	if (!$koneksi)
	{
		die ("Koneksi dengan database gagal: ".mysqli_connect_errno().mysqli_connect_error());
	}
?>