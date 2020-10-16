<?php 
// menampilkan array dalam array
$mahasiswa = [["Randi", "00346", "teknik informatika","email"],["Ramlan", "00346", "teknik informatika","email"]];
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Daftar Mahasiswa</title>
 </head>
 <body>
 	<h1>Daftar Mahasiswa</h1>
<!--  	menggunakan kondisi foreach -->
 	<?php foreach ($mahasiswa as $mhs) {?>
 	<ul>
 		<li>Nama : <?php echo $mhs[0] ?></li>
 		<li>NPM : <?php echo $mhs[1] ?></li>
 		<li>Jurusan : <?php echo $mhs[2] ?></li>
 		<li>Email : <?php echo $mhs[3] ?></li>
 	</ul>
    <?php } ?>
 </body>
 </html>

