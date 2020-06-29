<?php
	include('config.php');

	// ambil data dari url
	$id = $_GET['id'];

	$sql = 'select * from calon_siswa where id = '.$id;
	$query = mysqli_query($db_connection, $sql);
	$siswa = mysqli_fetch_assoc($query);

	if(mysqli_num_rows($query) < 1){
		header('Location: list-siswa.php');
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Formulir Edit</title>
</head>
<body>
	<header>
		<h3>Formulir Edit</h3>
	</header>

	<form method="post" action="proses-edit.php">
		<input type="hidden" name="id" value="<?php echo $siswa['id'] ?>">
		<p>
			<label>Nama: </label>
			<input type="text" name="nama" placeholder="nama lengkap" value="<?php echo $siswa['nama'] ?>">
		</p>
		<p>
			<label>Alamat: </label>
			<textarea name="alamat"><?php echo $siswa['alamat'] ?></textarea>
		</p>
		<p>
			<label>Jenis Kelamin: </label>
			<select name="jenis_kelamin">
				<option value="laki-laki" <?php echo ($siswa['jenis_kelamin'] == 'laki-laki') ? 'selected' : '' ?> >laki-laki</option>
				<option value="perempuan" <?php echo ($siswa['jenis_kelamin'] == 'perempuan') ? 'selected' : '' ?> >perempuan</option>
			</select>
		</p>
		<p>
			<label>Agama:</label>
			<select name="agama">
				<option <?php echo ($siswa['agama'] == 'islam') ? 'selected' : '' ?> value="islam">islam</option>
				<option <?php echo ($siswa['agama'] == 'kristen') ? 'selected' : '' ?> value="kristen">kristen</option>
				<option <?php echo ($siswa['agama'] == 'katolik') ? 'selected' : '' ?> value="katolik">katolik</option>
				<option <?php echo ($siswa['agama'] == 'hindu') ? 'selected' : '' ?> value="hindu">hindu</option>
				<option <?php echo ($siswa['agama'] == 'budha') ? 'selected' : '' ?> value="budha">budha</option>
				<option <?php echo ($siswa['agama'] == 'konghucu') ? 'selected' : '' ?> value="konghucu">konghucu</option>
			</select>
		</p>
		<p>
			<label>Asal Sekolah:</label>
			<input type="text" name="sekolah_asal" placeholder="sekolah asal" value="<?php echo $siswa['sekolah_asal'] ?>">
		</p>
		<p>
			<button type="submit" >Perbarui</button>
		</p>
	</form>
</body>
</html>












