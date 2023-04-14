<?php
$base_url = 'http://localhost/uts-update/';

$server = "localhost";
$username = "root";
$password = "";
$database = "datamhs";

$koneksi = mysqli_connect($server, $username, $password, $database);
if (mysqli_connect_error()) {
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
