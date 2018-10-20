<form method="POST">
	<center>
		<table>
			<tr>
				<td align="center"><h1>DATA</h1></td>
			</tr>
			<tr>
				<td>Cari data (Nim) :<input type='text' name='search'><input type='submit' name='cari'><br><br></td>
			</tr>
		</table>
</form>

<?php
	error_reporting(0);
	include 'koneksi.php';
	if (isset($_POST['cari'])) {
		$search = $_POST['search'];
		$qry = mysqli_query($koneksi,"SELECT * FROM mahasiswa WHERE nim=$search	");
		$row = mysqli_fetch_array($qry);
		if ($search==$row['nim']) {
			echo "<table border=1 style='border: 3px solid; width:50%'>
				<tr>
					<th>Nama</th>
					<th>Nim</th>
					<th>Action</th>
				</tr>";
			foreach ($qry as $row) {
				echo "<tr>
						<td align=center>$row[nama]</td>
						<td align=center>$row[nim]</td>
						<td align=center><a href='delete.php?nim=$row[nim]'>Delete</a>&nbsp;<a href='detail.php?nim=$row[nim]'>Detail</a></td>
					  </tr>";
				echo "Tampilkan semua <a href='view.php'>Data</a><br><br>";
			}
		}
		else{
			echo "<h3 style='color:red'>Data yang dicari tidak ditemukan<br>";
			echo "Tampilkan semua <a href='view.php'>Data</a></h3>";
		}
	}
	else{
		$qry = mysqli_query($koneksi,"SELECT * FROM mahasiswa");
		echo "<form method='POST'></form>";
		echo "<table border=1 style='border: 3px solid; width:60%;'>
			<tr>
				<th>Nama</th>
				<th>Nim</th>
				<th>Jenis Kelamin</th>
				<th>Program Studi</th>
				<th>Fakultas</th>
				<th>Asal</th>
				<th>Moto Hidup</th>
			</tr>";	
			foreach ($qry as $row) {
				echo "<tr>
						<td>$row[nama]</td>
						<td>$row[nim]</td>
						<td>$row[gender]</td>
						<td>$row[prodi]</td>
						<td>$row[fakultas]</td>
						<td>$row[asal]</td>
						<td>$row[motohidup]</td>
					  </tr>";
			}
		}
		echo "</table>";
		echo "<br>Klik <a href='input.php'> di sini </a> untuk tambah data.";
?>

<form>
	
</form>