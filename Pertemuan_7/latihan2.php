<?php
// cek apakah data sudah ada pada $_GET
if( !isset($_GET["nama"]) || !isset($_GET["npm"]) || isset($_GET["email"]) || !isset($_GET["gambar"])) {
	//redirect
	header("Location: latihan1.php");
	exit;
}
 ?>
 
<!DOCTYPEhtml>
<html>
<head>
	<title>Latihan 2</title>
</head> 
<body>
<ul>
	<l1><img src="../Pertemuan_7/<?php echo $_GET["gambar"]; ?>"></l1>
	<li><?php echo $_GET["nama"]; ?></li>
	<li><?php echo $_GET["npm"]; ?></li>
	<li><?php echo $_GET["email"]; ?></li>
</ul>
<br>
<a href="latihan1.php">Kembali Kehalaman Sebelumnya></a>
</body>
</html>