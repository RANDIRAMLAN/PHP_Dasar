<?php 
require "functions.php";
$id = $_GET["id"];
if( hapus($id) > 0) {

	echo "
	<script>
	alert('Data Berhasil Dihapus');
	document.location.href = 'index.php';
	</script>
	}else{
	<script>
	alert('Data Gagal Dihapus');
	document.location.href = 'index.php';
	</script>
	}

	";
}

 ?>