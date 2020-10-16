<?php 
//  $mahasiswa = [["Randi","201143500180","Rajahati30h@gmail.com"],
//               ["Ramlan","201143500181","Ramlan@gmail.com"]
// ];

//associative
// definisi = array numerik kecuali key nya  string yang kita buat sendiri
$mahasiswa = [["nama" => "Randi", "npm" => "201145500180", "email" => "Rajahati30h", "gambar" => "foto1.PNG"],
              ["nama" => "Ramlan", "npm" => "201145500181", "email" => "Rajahati30h", "gambar" => "foto2.PNG"]        
];
// echo $mahasiswa[1]["nama"];
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Latihan 1</title>
 </head>
 <body>
 	<?php foreach ($mahasiswa as $mhs) { ?>
 <ul>
 	 <li>
 		<img src="../Image/<?php $mhs["gambar"]; ?>">
 	</li>
 	<li><?php echo $mhs["nama"]; ?></li>
 	<li><?php echo $mhs["npm"]; ?></li> 
 	<li><?php echo $mhs["email"]; ?></li>  
 </ul>
<?php } ?>
 </body>
 </html>