<?php
// Pebgulangan
// for
// for ($i=0; $i < 5; $i++){
// 	echo "Hello Word <br>";
// }

//while
// $i= 0;
// while ( $i<= 10) {
// 	echo "Hello Word <br>";
// 	$i++;
// }

/// do..while
// $i = 0;
// do {
// 	echo "Hello Word <br>";
// 	$i++;
// } while ($i < 5);


?>

<!DOCTYPE html>
<html>

<head>
	<title>Latihan</title>
	<style>
		.warna-baris {
			background-color: blue;
		}
	</style>
</head>

<body>
	<table border="1" cellspacing="5" cellpadding="5">

		<?php
		for ($i = 1; $i <= 5; $i++) : ?>
			<?php if ($i % 2 == 1) : ?>
				<tr class="warna-baris">
				<?php else : ?>
				<tr>
				<?php endif; ?>
				<?php for ($j = 1; $j <= 5; $j++) : ?>
					<td><?php echo "$i,$j"; ?></td>
				<?php endfor;  ?>
				</tr>
			<?php endfor; ?>
	</table>
	<br>
	<hr>

</body>

</html>
<!-- Pengkondisian
if else
if else if else
ternary
switch -->