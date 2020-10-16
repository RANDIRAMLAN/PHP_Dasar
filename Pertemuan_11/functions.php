<?php 
// Koneksi ke database
$conn = mysqli_connect("localhost","root","","phpdasar");



//untuk mengambil semua data
function query($query) {
global $conn;
$result = mysqli_query($conn, $query);
$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
	$rows[] = $row;
  }
  return $rows;
}

// untuk menambah data
function tambah($data){
	global $conn;

	$nama = htmlspecialchars($data["nama"]);
	$nrp = htmlspecialchars($data["nrp"]);
	$email = htmlspecialchars($data["email"]);
	$select = htmlspecialchars($data["select"]);
	$gambar = htmlspecialchars($data["gambar"]);

	$query = " INSERT INTO mahasiswa
	            VALUES
	            ('','$nama','$nrp','$email','$select','$gambar')

	";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
  }

// untuk menghapus data
  function hapus($id){
  	global $conn;
  	mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id ");
  	return mysqli_affected_rows($conn);
  }

  //untuk mengubah data 
  function ubah($data){
  	global $conn;
  	$id = htmlspecialchars($data["id"]);
  	$nama = htmlspecialchars($data["nama"]);
	$nrp = htmlspecialchars($data["nrp"]);
	$email = htmlspecialchars($data["email"]);
	$select = htmlspecialchars($data["select"]);
	$gambar = htmlspecialchars($data["gambar"]);

		$query = " UPDATE mahasiswa SET
	           nama = '$nama', 
	           nrp = '$nrp', 
	           email = '$email', 
	           jurusan = '$select', 
	           gambar= '$gambar'
	          WHERE id = $id

	";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);

  }

 ?>