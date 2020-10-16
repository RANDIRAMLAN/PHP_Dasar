<?php 
session_start();

if( !isset($_SESSION["login"])){
	header ("Location: login.php");
	exit;
}
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
		<table border="1">
		<tr>
			<td rowspan="5"><img src="Image/<?php echo $mhs["gambar"] ?>" width="100"></td>
		</tr>
	</table>
	<form action="" method="post" enctype="multipart/form-data">
	    <input type="file" name="gambar" id="gambar">
	    <br><br>

		<!-- hidden id -->
		<input type="hidden" name="id" value="<?php echo $mhs["id"]; ?>">
		<!-- hidden Nama Gambar -->
		<input type="hidden" name="gambarLama" value="<?php echo $mhs["gambar"]; ?>">
         <!--   -->

		<table border="1" cellpadding="6" cellspacing="1">
		<tr>
			<td>
				<label for="nama">Nama Mahasiswa</label>
			</td>
			<td>
				<input type="text" name="nama" id="nama" size="30" required="" value="<?php echo $mhs["nama"] ;?>">
			</td> 
		</tr>
		<tr>
			<td>
				<label for="nrp">NRP</label>
			</td>
			<td><input type="text" name="nrp" id="nrp" required="" size="30" value="<?php echo $mhs["nrp"];?>"></td>
		</tr>
		<tr>
			<td>
				<label for="email">Email</label>
			</td>
			<td>
				<input type="text" name="email" id="email" size="30" required="" value="<?php echo $mhs["email"]; ?>">
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
	</table>
	<br>
	 <button type="submit" name="submit"size ="20" >Ubah Data Mahasiswa</button>
	</form>
</body>
</html>