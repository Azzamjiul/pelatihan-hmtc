<?php include('config.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>List Pendaftar</title>
</head>
<body>
	<header>
		<h3>List Pendaftar</h3>
	</header>

	<table border="1">
		<thead>
			<th>NO</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Jenis Kelamin</th>
			<th>Agama</th>
			<th>Sekolah Asal</th>
			<th colspan="2">Aksi</th>
		</thead>
		<tbody>
			<?php
				$sql = "select * from calon_siswa";
				$query = mysqli_query($db_connection, $sql);
				
				while($siswa = mysqli_fetch_array($query)){
					echo "<tr>";

					echo "<td>".$siswa['id']."</td>";
					echo "<td>".$siswa['nama']."</td>";
					echo "<td>".$siswa['alamat']."</td>";
					echo "<td>".$siswa['jenis_kelamin']."</td>";
					echo "<td>".$siswa['agama']."</td>";
					echo "<td>".$siswa['sekolah_asal']."</td>";
					echo "<td>"."<a href='form-edit.php?id=".$siswa['id']."'>Edit</a>"."</td>";
					echo "<td>"."<a href='hapus.php?id=".$siswa['id']."'>Hapu</a>"."</td>";

					echo "</tr>";
				}
			?>
		</tbody>
	</table>

	<p>Total: <?php echo mysqli_num_rows($query) ?> </p>
</body>
</html>