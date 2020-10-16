<?php 

// <!-- Variable dan tipedata -->
$nama = "Randi";

// Operator assigment : operator penugasan
// +=, -=, *=, /=
// $c = 1;
// $c += 5;
// echo $c ;

// Operator perbandingan
// < , > <=, >=, ==, !=
// var_dump(1 == 1);

// Operator identitas
// === dan !===
// var_dump(1 !== "1")

// Operator logika
// &&, || dan !
// $d = 2;
// var_dump($d > 1 && 10 % 2 == 0);

// Operator penggabungan
// $nama_depan = "Randi";
// $nama_belakang = "Ramlan";
// echo $nama_depan." ".$nama_belakang;

// Opetator Aretmatika
// $a = 5;
// $b = 10;
// echo $a * $b;
// echo $a / $b;
// echo  $b - $a;

// 1. sintaks PHP 
// echo 
// print
// var_dump

// echo "Randi Ramlan";
// print "Randi Ramlan";
// print_r("Randi Ramlan");
// var_dump("Randi Ramlan");
 ?> 

<!-- // Penulisan suntaks PHP -->
<!-- 1. HTML dalam PHP  -->
<!--  <!DOCTYPE html>
<html>
<head>
	<title>Belajar PHP</title>
</head>
<body>
 <?php
 // echo "<h2>Selamat datang Randi Ramlan</h2> ";
 ?>
</body>
</html> -->

<!--   2. PHP dalam HTML  -->
 <!DOCTYPE html>
<html>
<head>
	<title>Belajar PHP</title>
</head>
<body>
<h1>Selamat datang <?php echo "Randi Ramlan"; ?> </h1>
<!-- memanggil variable  -->
<h1>Selamat datang <?php echo $nama ?> </h1> 

</body>
</html>


