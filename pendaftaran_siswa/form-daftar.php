<!DOCTYPE html>
<html>
<head>
	<title>Formulir Pendaftaran</title>
</head>
<body>
	<header>
		<h3>Formulir Pendaftaran</h3>
	</header>

	<form method="post" action="proses-pendaftaran.php">
		<p>
			<label>Nama: </label>
			<input type="text" name="nama" placeholder="nama lengkap">
		</p>
		<p>
			<label>Alamat: </label>
			<textarea name="alamat"></textarea>
		</p>
		<p>
			<label>Jenis Kelamin: </label>
			<select name="jenis_kelamin">
				<option value="laki-laki" >laki-laki</option>
				<option value="perempuan" >perempuan</option>
			</select>
		</p>
		<p>
			<label>Agama:</label>
			<select name="agama">
				<option value="islam">islam</option>
				<option value="kristen">kristen</option>
				<option value="katolik">katolik</option>
				<option value="hindu">hindu</option>
				<option value="budha">budha</option>
				<option value="konghucu">konghucu</option>
			</select>
		</p>
		<p>
			<label>Asal Sekolah:</label>
			<input type="text" name="sekolah_asal" placeholder="sekolah asal">
		</p>
		<p>
			<button type="submit" >Daftar</button>
		</p>
	</form>
</body>
</html>












