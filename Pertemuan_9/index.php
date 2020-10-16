<?php 
// Koneksi ke database
require "functions.php";
$mahasiswa = query("SELECT * FROM mahasiswa");

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman 9</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>

<table border="1" cellpadding="10" cellspacing="0">
	<tr style="background: grey; ">
		<th>ID</th>
		<th>Nama Mahasiswa</th>
		<th>NRP</th>
		<th>Email</th>
		<th>Jurusan</th>
		<th>Gambar</th>
		<th>Aksi</th>
	</tr>
	<?php $i = 1 ; ?>
	<?php foreach ($mahasiswa as $row ) { ?>
	<tr>
		<td><?php echo $i; ?></td>
		<td><?php echo $row["nama"]; ?></td>
		<td><?php echo $row["nrp"]; ?></td>
		<td><?php echo $row["email"]; ?></td>
		<td><?php echo $row["jurusan"] ?></td>
		<td><img src="Image/<?php echo $row["gambar"] ?>" width="50"></td>
		<td>
			<a href="">Ubah</a>|
			<a href="">Hapus</a>
		</td>
	</tr>
	<?php $i++; ?>
	<?php } ?>
</table>
</body>
</html>