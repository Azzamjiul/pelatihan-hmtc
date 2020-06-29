<?php
	include('config.php');

	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$agama = $_POST['agama'];
	$sekolah_asal = $_POST['sekolah_asal'];

	$sql = 
	"update calon_siswa set 
	nama = '".$nama."',
	alamat = '".$alamat."',
	jenis_kelamin = '".$jenis_kelamin."',
	agama = '".$agama."',
	sekolah_asal = '".$sekolah_asal."'
	where id = ".$id;

	$query = mysqli_query($db_connection, $sql);

	if($query){
		header('Location: list-siswa.php?status=sukses');
	}else{
		header('Location: list-siswa.php?status=gagal');
	}
?>