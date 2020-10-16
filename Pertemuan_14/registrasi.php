<?php 

require "functions.php";

if ( isset($_POST["register"])){

  if (registrasi($_POST) > 0){
    echo "Registrasi Berhasil";
  } else {
 mysqli_error($conn);
  }
}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registrasi</title>
</head>
<body>
	<h1>Halaman Registrasi</h1>
<form action="" method="post">
	<table border="1" cellpadding="5" cellspacing="0">
		<tr>
			<td><input type="text" name="username" placeholder="Nama Pengguna" autocomplete="off"></td>
		</tr>
		<tr>
			<td><input type="password" name="password" placeholder="Kata Sandi" autocomplete="off"></td>
		</tr>
		<tr>
			<td><input type="password" name="password2" placeholder="Konfirmasi Kata Sandi" autocomplete="off"></td>
		</tr>
	</table>
	<br>
	<button type="submit" name="register">Registrasi</button>
</form>
<br>
<a href="login.php">Klik Untuk Masuk</a>
</body>
</html>