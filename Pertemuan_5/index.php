<?php 
// array : variable yang dapat menampung banyak nilai
// $nama = ["randi","ramlan","risak", "kiki"];
// menampilka array menggunakan var_dump
// var_dump($nama);
// var_dump($nama[0])
// echo $nama [0];

// menanbah elemen pada array
// $hari[] = "Rikki";
// var_dump($nama);

//menampilkan array ke user
// lakukan pengulangan foreach
$angaka = [11,2,3,4,25,67,7,88,9,10, 100];

?>

<!DOCTYPE html>
<html>
<head>
	<title>paertemuan 5</title>
	<style>
	div {
		width: 50px ;
		height: 50px ;
		background-color: salmon;
		text-align: center;
		margin: 3px;
		line-height : 50px;
		float: left;

	}
	</style>
</head>
<body>

	<?php foreach($angaka as $a ) {?>
		<div><?php echo $a; ?></div> 
	<?php } ?>

</body>
</html>





 