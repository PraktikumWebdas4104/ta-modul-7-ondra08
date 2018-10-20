<form method="POST">
	<center>
	<h1> EDIT BIODATA MAHASISWA </h1>
	<table>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama" placeholder="Max 35 Karakter"></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td><input type="radio" name="jekel" value="Laki-Laki">Laki-Laki &nbsp;
				<input type="radio" name="jekel" value="Perempuan">Perempuan</td>
		</tr>
		<tr>
			<td>Program Studi</td>
			<td>:</td>
			<td><select name="prodi" style="width: 160px">
				<option value="prod">Pilih Prodi</option>
				<option value="D3 - Manajemen Informatika">D3 - Manajemen Informatika</option>
				<option value="S1 - Sistem Informasi">S1 - Sistem Informasi</option>
				<option value="S1 - Komunikasi & Bisnis">S1 - Komunikasi & Bisnis</option>
			</select></td>
		</tr>
		<tr>
			<td>Fakultas</td>
			<td>:</td>
			<td><select name="fakultas" style="width: 160px">
				<option value="fak">Pilih Fakultas</option>
				<option value="FIT">Fakultas Ilmu Terapan</option>
				<option value="FIK">Fakultas Industri Kreatif</option>
				<option value="FKB">Fakultas Komunikasi & Bisnis</option>
			</select></td>
		</tr>
		<tr>
			<td>Asal</td>
			<td>:</td>
			<td><input type="text" name="asal"></td>
		</tr>
		<tr>
			<td>Moto Hidup</td>
			<td>:</td>
			<td><textarea name="moto"></textarea></td>
		</tr>

	</table><br>
	<input type="submit" name="submit">

</form>

<?php
	if (isset($_POST['submit'])) {
		include 'koneksi.php';
		$nim = $_GET['nim'];
		$nama = $_POST['nama'];
		$jekel = $_POST['jekel'];
		$prodi = $_POST['prodi'];
		$fakultas = $_POST['fakultas'];	
		$asal = $_POST['asal'];
		$mthidup = $_POST['moto'];
		
		$sqlselect = mysqli_query($koneksi,"UPDATE `mahasiswa` SET `nama`='$nama',`gender`='$jekel',`prodi`='fakultas',`asal`='$asal',`motohidup`='$mthidup' WHERE nim='$nim'");
		echo "<br><br><h3>Data berhasil diubah</h3><br>";
		echo "<a href='view.php'>Lihat data</a>";
	}
?>