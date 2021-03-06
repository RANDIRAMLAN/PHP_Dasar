<?php 
session_start();

if( !isset($_SESSION["login"])){
	header ("Location: login.php");
	exit;
}
// Koneksi ke database
require "functions.php";
// menampilkan semua data
$mahasiswa = query("SELECT * FROM mahasiswa");

// cari data
if(isset($_POST["cari"])) {
	$mahasiswa = cari($_POST["keyword"]);
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman 9</title>
</head>
<body>
	<a href="logout.php">Keluar</a>
<h1>Daftar Mahasiswa</h1>
<a href="tambah.php">Tambah Data Mahasiswa</a>
<br><br>
<!-- cari data mahasiswa -->
<form action="" method="post">
	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<td>
				<input type="text" name="keyword" size="50" autofocus="" placeholder="Cari Mahasiswa" autocomplete="off" id="keyword">
			</td>
			<td>
				<button type="submit" name="cari" id="tombol-cari">Cari</button>
			</td>
		</tr>
	</table>
</form>
<!-- Menampilkan semua data mahasiswa -->
<br>
<div  id="container">
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
</div>
<script type="text/javascript"  src="Javascript/script.js" charset="utf-8"></script>
</body>
</html>