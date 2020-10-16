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
  $gambar = upload();
  if(!$gambar) {
    return false;
  }

  $query = " INSERT INTO mahasiswa
              VALUES
              ('','$nama','$nrp','$email','$select','$gambar')

  ";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
  }

  // untuk upload
  function upload(){
  	$namaFile = $_FILES['gambar']['name'];
  	$ukuranFile = $_FILES['gambar']['size'];
  	$error = $_FILES['gambar']['error'];
  	$tmpName = $_FILES['gambar']['tmp_name'];

  	// cek apakah tidak ada gambar diupload
  	if($error === 4){

  		echo "<script>alert('Gambar Belum Dipilih')</script>";
  		      return false;
  	}
  	// untuk memastikan gambar yang diuoload
  	$ekstensiGambarValid = ['jpg', 'jpeg', 'png', 'JPG', 'JPEG', 'PNG'];
  	$ekstensiGambar = explode('.',$namaFile);
  	$ekstensiGambar = strtolower(end($ekstensiGambar));
  	if(!in_array($ekstensiGambar, $ekstensiGambarValid)){
  		echo "<script>alert('Upload Gambar dengan formar jpg, jpeg dan png')</script>";
  	}

  	// cek jika ukurannya terlalu besar
  	if($ukuranFile > 1000000){
  		echo "<script>alert('Size Gambar Terlalu Besar (Max:1 Mb')</script>";
  	}

    // Generate nama gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru .='.';
    $namaFileBaru .= $ekstensiGambar;

  	// Gambar siap upload
  	move_uploaded_file($tmpName, 'Image/'. $namaFileBaru);
  	return $namaFileBaru;

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
    $gambarLama = htmlspecialchars($data["gambarLama"]);
     
     // cek apakah user pilih gambar baru atau tidak 
    if($_FILES['gambar']['error'] === 4){
      $gambar = $gambarLama;
    }else{
      $gambar = upload();
    }


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

// Cari data 
  function cari($keyword){

		$query = " SELECT * FROM mahasiswa
		WHERE 
		nama LIKE '%$keyword%' OR
		nrp LIKE '%$keyword%' OR
		jurusan LIKE '%$keyword%' OR
		email LIKE '%$keyword%'

	";

	return query($query);
  }

  function registrasi($data){
    global $conn;
// mengubah user meunadi hurud kecil semua
    $username = strtolower(stripcslashes($data["username"]));
// membuat password dapat diinput karakter bebas
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

// untuk mengecek apakah user telah terdaftar atau belum
    $result = mysqli_query($conn, " SELECT username FROM user WHERE username = '$username'");
    if ( mysqli_fetch_assoc($result))
    {
      echo "Nama Pengguna Telah Terdaftar";
      return false;
    }

// cek konfirmasi password udah sesuai atau belum
    if( $password !== $password2 ) {
      echo "<script>
      alert('Konfirmasi Password Salah')
      </script>";

     return false;
    }
// enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);
// query untuk insert data
    mysqli_query($conn, "INSERT INTO user VALUES ('','$username','$password')");
    return mysqli_affected_rows($conn);
  }

 ?>