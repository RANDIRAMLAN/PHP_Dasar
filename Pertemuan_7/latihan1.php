<?php 
//variable scope

// 	$x = 10;

// function perkalianx(){
// 	global $x;
// 	echo $x * $x ;
// }

// perkalianx();

// Variable superglobal
//$_GET
// $_GET ["nama"] = "Randi Ramlan";
// $_GET ["npm"] = "201143500180";
// $_GET ["email"] = "randi@gmail.com";
$mahasiswa = [["nama" => "Randi", "npm" => "201145500180", "email" => "Rajahati30h@gmail.com", "gambar" => "foto1.jpg"],
              ["nama" => "Ramlan", "npm" => "201145500181", "email" => "Rajahati30h@gmail.com ", "gambar" => "foto1.jpg"]];     

//$_POST
// $_REQUEST
// $_SESSION
// $_COOKIE
// $_SERVER
// $_ENV

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>GET</title>
</head>
<body>
<?php foreach ($mahasiswa as $mhs) { ?>
	<ul>
		<li>
			<a href="latihan2.php?nama=<?php echo $mhs["nama"]; ?>&npm=<?php echo $mhs["npm"]; ?>&email=<?php echo $mhs["email"]; ?>&gambar=<?php echo $mhs["gambar"]; ?>"><?php echo $mhs["nama"]; ?></a>	
		</li>
	</ul>
<?php } ?>
</body>
</html>

