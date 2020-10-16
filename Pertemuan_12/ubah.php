<?php 
require "functions.php";
// mengambil data dari URL
$id = $_GET["id"];
// mengambil data mahasiswa by ID
$mhs = query("SELECT * FROM mahasiswa where id = $id")[0];

// Untuk menyimpan data
if ( isset($_POST["submit"]) ) {
	if( ubah($_POST) > 0){
		echo "Data Berhasil Diubah";
	}else{
		echo "Data Gagal Diubah";
	}
}

 ?>

<!DOCTYPE html>
<html> 
<head>
	<title>Ubah Data Mahasiswa</title>
</head>
<body>
	<H1>Ubah Data Mahasiswa</H1>
	<a href="index.php">Lihat Data Mahasiswa</a>
	<br><br>
	<form action="" method="post">
		<!-- hidden id -->
		<input type="hidden" name="id" value="<?php echo $mhs["id"]; ?>">

		<table border="1" cellpadding="6" cellspacing="1">
		<tr>
			<td>
				<label for="nama">Nama Mahasiswa</label>
			</td>
			<td>
				<input type="text" name="nama" id="nama" required="Nama Tidak Boleh Kosong" value="<?php echo $mhs["nama"] ;?>">
			</td> 
		</tr>
		<tr>
			<td>
				<label for="nrp">NRP</label>
			</td>
			<td><input type="text" name="nrp" id="nrp" required="NRP Tidak Boleh Kosong" value="<?php echo $mhs["nrp"];?>"></td>
		</tr>
		<tr>
			<td>
				<label for="email">Email</label>
			</td>
			<td>
				<input type="text" name="email" id="email" value="<?php echo $mhs["email"]; ?>">
			</td>
		</tr>
		<tr>
			<td>
				<label for="select">Jurusan</label>
			</td>
			<td >
				<select name="select" id="select">
					<option value="Teknik Informatika">Teknik Informatika</option>
					<option value="Teknik Mesin">Teknik Mesin</option>
					<option value="Teknik Industri Perkapalan">Teknik Industri Perkapalan</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>
				<label for="gambar">Gambar</label>
			</td>
			<td>
				<input type="text" name="gambar" id="gambar" value="<?php echo $mhs["gambar"]; ?>">
			</td>
		</tr>
		<tr calspan ="2">
			<td colspan="2" ><button type="submit" name="submit">Ubah Data</button></td>
		</tr>
	</table>	
	</form>
</body>
</html>