<?php
	include "koneksi.php";
	if (isset($_POST["submit"])) {
		if ($koneksi) {
			$nim = $_POST['nim'];
			$nama = $_POST['nama'];
			$gender = $_POST['gender'];
			$prodi = $_POST['prodi'];
			$fakultas = $_POST['fakultas'];	
			$asal = $_POST['asal'];
			$mthdp = $_POST['moto'];
			$sql = $koneksi -> query("
								INSERT INTO `mahasiswa` (`nama`,`nim`,`gender`,`prodi`,`fakultas`,`asal`,`motohidup`) 
								VALUES ('$nama','$nim','$gender','$prodi','$fakultas','$asal','$mthdp')
								");
			echo "<h3>Registrasi berhasil <h3>";
		}
		else{
			echo "Registrasi GAGAL";
		}
	}
?>