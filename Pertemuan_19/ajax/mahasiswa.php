<?php 
require '../functions.php';
$keyword = $_GET["keyword"];
$query = " SELECT * FROM mahasiswa
		WHERE 
		nama LIKE '%$keyword%' OR
		nrp LIKE '%$keyword%' OR
		jurusan LIKE '%$keyword%' OR
		email LIKE '%$keyword%'

	";
$mahasiswa = query($query);

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 <table border="1" cellpadding="10" cellspacing="0">
	<tr>
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
			<a href="ubah.php?id=<?php echo $row ["id"]; ?>">Ubah</a>|
			<a href="hapus.php?id=<?php echo $row["id"]; ?>" onclick = "return confirm ('Apakah Anda Yakin Ingin Hapus Data ?')">Hapus</a>
		</td>
	</tr>
	<?php $i++; ?>
	<?php } ?>
</table>
 </body>
 </html>