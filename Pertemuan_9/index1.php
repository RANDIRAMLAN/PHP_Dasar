<?php 
// Koneksi ke database
$conn = mysqli_connect("localhost","root","","phpdasar");

//ambil data dari table mahasiswa
$result = mysqli_query($conn, " SELECT * FROM  mahasiswa");
// Menampilkan pesan error 
if (!$result) {
	echo mysqli_error($conn);
}

// ambil object mahasiswa dari php dasar
// mysqli_fetch_row() : mengembalikan array numerik
// mysqli_fetch_assoc() : mengembalikan array dalam bentuk field tabel (assosiativ)
// mysqli_fetch_array() : mengembalikan dalam array numerik dan assosiativ
// mysqli_fetch_object()

// while ($mhs = mysqli_fetch_assoc($result)){
// 	var_dump($mhs);
// }
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
	<?php while ($row = mysqli_fetch_assoc($result)) : ?>
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
	<?php endwhile; ?>
</table>
</body>
</html>