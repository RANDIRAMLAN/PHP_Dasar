<?php 
session_start();
if( isset($_SESSION["login"])){
	header ("Location: index.php");
	exit;
}
require "functions.php";

if (isset($_POST["login"])) {
	$username = $_POST["username"];
	$password = $_POST["password"];

	$result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
	// cek username
	if (mysqli_num_rows($result) === 1) {

		$row = mysqli_fetch_assoc($result);
		if (password_verify($password, $row["password"])) {
    // set session
                $_SESSION["login"] = true;
			    header ("Location: index.php");
	            exit;
		}
	}
	$error = true;
}

 ?>

<html>
<head>
	<title>Login</title>
</head>
<body>
	<h1>Silahkan Login</h1>

	<?php if( isset($error)) : ?>
		<p style="color: red; font: italic;">Username / Password Salah</p>
	<?php endif; ?>

<form action="" method="post">
	<table border="1" cellpadding="5" cellspacing="0">
		<tr>
			<td><input type="text" name="username" placeholder="Nama Pengguna" autocomplete="off"></td>
		</tr>
		<tr>
			<td><input type="password" name="password" placeholder="Kata Sandi" autocomplete="off"></td>
		</tr>
	</table>
	<br>
	<button type="submit" name="login">Masuk</button>
</form>
<br>
<a href="registrasi.php">Klik Untuk Registrasi</a>
</body>
</html>