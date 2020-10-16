<?php

if (isset($_POST["submit"])) {

	if ($_POST["user"] == "admin" || $_POST["pass"] == "123") {

		header("Location: admin.php");
		exit;
	} else {
		$error = true;
	}
}

?>

<!DOCTYPE html>
<html>

<head>
	<title>Login</title>
</head>

<body>

	<h1>Login Admin</h1>

	<?php if (isset($error)) { ?>
		<p style="color: red; font-style: italic;">Username / Password Salah</p>
	<?php } ?>

	<form action="" method="post">
		<table border="1" cellpadding="5" cellpadding="5">
			<tr>
				<td><label for="username">Username</label></td>
				<td><input type="text" name="user" id="username"></td>
			</tr>
			<tr>
				<td><label for="password">Password</label></td>
				<td><input type="password" name="pass" id="password"></td>
			</tr>
			<tr calspan="2">
				<td colspan="2"><button type="submit" name="Kirim">Login</button></td>
			</tr>
		</table>
	</form>
</body>

</html>