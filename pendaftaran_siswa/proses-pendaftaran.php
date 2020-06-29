<?php 
	include('config.php');

	// ambil data dari formulir
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$agama = $_POST['agama'];
	$sekolah_asal = $_POST['sekolah_asal'];

	// buat query
	$sql = "insert into calon_siswa (nama, alamat, jenis_kelamin, agama, sekolah_asal) values ('$nama', '$alamat', '$jenis_kelamin', '$agama', '$sekolah_asal')";
	$query = mysqli_query($db_connection, $sql);
	
	if($query){
		header('Location: index.php?status=sukses');
	}else{
		header('Location: index.php?status=gagal');
	}
?>