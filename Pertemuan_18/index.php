<?php 
session_start();

if( !isset($_SESSION["login"])){
	header ("Location: login.php");
	exit;
}

// Koneksi ke database
require "functions.php";
// pagination dan konfigurasinya
$jumlahDataPerhalaman = 2;
$jumlahData = count(query("SELECT * FROM mahasiswa"));
$jumlahhalaman =ceil($jumlahData / $jumlahDataPerhalaman);
$halamanAktif = ( isset($_GET["halaman"]) ) ? $_GET["halaman"] : 1;
$awalData = ($jumlahDataPerhalaman * $halamanAktif) - $jumlahDataPerhalaman ;

// menampilkan semua data
$mahasiswa = query("SELECT * FROM mahasiswa LIMIT $awalData, $jumlahDataPerhalaman ");

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
				<input type="text" name="keyword" id="nrp" size="50" autofocus="" placeholder="Cari Mahasiswa" autocomplete="off">
			</td>
			<td>
				<button type="submit" name="cari">Cari</button>
			</td>
		</tr>
	</table>
</form>
<br>
<!-- menampilkan pagination -->
<?php if( $halamanAktif > 1 ) {?>
<a href="?halaman=<?php echo $halamanAktif - 1; ?>">&lt Sebelumnya</a>
<?php } ?>

<?php for ($i = 1; $i <= $jumlahhalaman; $i++) { ?>
	<?php if( $i == $halamanAktif) { ?>
      <a href="?halaman=<?php echo $i; ?>" style= "font-weight: bold; color: blue"><?php echo $i;?></a>
  <?php } else { ?>
  	<a href="?halaman=<?php echo $i; ?>"><?php echo $i;?></a>
  <?php } ?>
<?php } ?>

<?php if( $halamanAktif < $jumlahhalaman ) {?>
<a href="?halaman=<?php echo $halamanAktif + 1; ?>">Selanjutnya &gt</a>
<?php } ?>
<br><br>

<!-- Menampilkan semua data mahasiswa -->
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