<?php

$server = 'localhost';
$user = 'root';
$password = 'adminadmin';
$database = 'pendaftaran_siswa';

$db_connection = mysqli_connect($server, $user, $password, $database);

if ( !$db_connection ){
	die('Gagal terhubung dengan database: ' . mysqli_connect_error() );
}

?>