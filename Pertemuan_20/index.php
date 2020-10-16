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
	<title>Halaman Utama</title>
	<style>
		.loader{
			width: 60px;
			position: absolute;
			top: 120px;
			display: none;
		}
	</style>
</head>
<body>
	<a href="logout.php">Keluar</a>
<h1>Daftar Mahasiswa</h1>
<a href="tambah.php">Tambah Data Mahasiswa</a>
<br><br>
<!-- cari data mahasiswa -->
<form action="" method="post">
	<input type="text" name="keyword" size="50" autofocus="" placeholder="Cari Mahasiswa" autocomplete="off" id="keyword">
	<!-- tombol dihide menggunakan jquery -->
	<button type="submit" name="cari" id="tombol-cari">Cari</button>
	<img src="Image/load.gif" class="loader">
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
<script src="Javascript/jquery-3.5.1.min.js"></script>
<script src="Javascript/script.js"></script>
</body>
</html>