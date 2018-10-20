<?php
	include 'koneksi.php';
	$nim = $_GET['nim'];
	$qry = mysqli_query($koneksi,"DELETE FROM mahasiswa WHERE nim=$nim");
	echo "Selamat, data berhasil dihapus ";
	echo "<a href='view.php'>Lihat data!</a>";
?>
