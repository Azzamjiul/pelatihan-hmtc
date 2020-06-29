<?php
	include('config.php');

	if( !isset($_GET['id']) ){
		header('Location: list-siswa.php');
	}

	// ambil data dari url
	$id = $_GET['id'];
	$sql = 'delete from calon_siswa where id='.$id;
	$query = mysqli_query($db_connection, $sql);

	if($query){
		header('Location: list-siswa.php?status=sukses-hapu');
	}else{
		header('Location: list-siswa.php?status=gagal-hapus');
	}
?>