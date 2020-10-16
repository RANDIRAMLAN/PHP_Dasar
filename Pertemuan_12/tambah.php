<?php 
// koneksi kedatabase
require "functions.php";

// untuk menyimpan data
if ( isset($_POST["submit"]) ) {
	if( tambah($_POST) > 0){
		echo "Data Berhasil Disimpan";
	}else{
		echo "Data Gagal Disimpan";
	}
}

 ?>

<!DOCTYPE html>
<html> 
<head>
	<title>Tambah Data Mahasiswa</title>
</head>
<body>
	<H1>Tambah Data Mahasiswa</H1>
	<a href="index.php">Lihat Data Mahasiswa</a>
	<br><br>
	<form action="" method="post">
		<table border="1" cellpadding="6" cellspacing="1">
		<tr>
			<td>
				<label for="nama">Nama Mahasiswa</label>
			</td>
			<td>
				<input type="text" name="nama" id="nama" required="">
			</td>
		</tr>
		<tr>
			<td>
				<label for="nrp">NRP</label>
			</td>
			<td><input type="text" name="nrp" id="nrp" required=""></td>
		</tr>
		<tr>
			<td>
				<label for="email">Email</label>
			</td>
			<td>
				<input type="text" name="email" id="email">
			</td>
		</tr>
		<tr>
			<td>
				<label for="select">Jurusan</label>
			</td>
			<td >
				<select name="select" id="select">
					<option value="Teknik Informatika">Teknik Informatika</option>
					<option value="select">Teknik Mesin</option>
					<option value="select">Teknik Industri Perkapalan</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>
				<label for="gambar">Gambar</label>
			</td>
			<td>
				<input type="text" name="gambar" id="gambar">
			</td>
		</tr>
		<tr>
			<td colspan="2" ><button type="submit" name="submit">Simpan Data</button></td>
		</tr>
	</table>	
	</form>
</body>
</html>