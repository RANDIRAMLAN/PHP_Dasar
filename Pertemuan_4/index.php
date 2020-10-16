<?php
// <!-- Date PHP -->
// l : hari
// d : tanggal
// echo date("l, d-m-yy");

// Time
// echo time();
// mengecek 10 hari dari sekarang
// echo date("l", time()+60*60*24*10);

// mktime
// mktine(0,0,0,0,0,0)
// jam menit detik bulan tanggal tahun
// echo date ("l", mktime(0,0,0,10,29,1991))

//strtotime adalah kebalikan mktime
// echo date("l", strtotime("29 oct 1991"));

// String
// strlen -- menghitung panjang string
// strcmp -- menggabungkan string
// explode -- memecah string menjadi array
// html specialchars untuk mencegah orang iseng masuk ke website

// utility
// var_dump -- mencetak isi variable, objec dan array
// isset untuk mengecek apakah variabel udah pernah dibuat atau belum
// empty -- untuk mengecek variable kosong
// die -- untuk memberhentikan program
// sleep -- untuk memberhentikan sementara 
?>

<?php
function salam($waktu = "Datang", $nama = "Admin")
{
  return "Selamat $waktu, $nama";
}

?>

<!DOCTYPE html>
<html>

<head>
  <title>Latihan Function</title>
</head>

<body>
  <h1><?php echo salam("Malam", "Ramlan"); ?></h1>
</body>

</html>