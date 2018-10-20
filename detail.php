<?php
	include 'koneksi.php';
	$nim = $_GET['nim'];
	$qry = mysqli_query($koneksi,"SELECT * FROM mahasiswa WHERE nim=$nim");
	$row = mysqli_fetch_array($qry);
	echo "<center><h1>Detail Mahasiswa</h1>";
	echo "<table style='border: 3px solid; padding: 40px 40px'>
			<tr>
				<th style='width:150px' align=left>Nama</th>
				<td>:</td>
				<td style='width:200px; padding-left:40px'>$row[nama]</td>
			</tr>
			<tr>
				<th align=left>Nim</th>
				<td>:</td>
				<td style='padding-left:40px'>$row[nim]</td>
			</tr>
			<tr>
				<th align=left>Jenis Kelamin</th>
				<td>:</td>
				<td style='padding-left:40px'>$row[gender]</td>
			</tr>
			<tr>
				<th align=left>Program Studi</th>
				<td>:</td>
				<td style='padding-left:40px'>$row[prodi]</td>
			</tr>
			<tr>
				<th align=left>Fakultas</th>
				<td>:</td>
				<td style='padding-left:40px'>$row[fakultas]</td>
			</tr>
			<tr>
				<th align=left>Asal</th>
				<td>:</td>
				<td style='padding-left:40px'>$row[asal]</td>
			</tr>
			<tr>
				<th align=left>Moto Hidup</th>
				<td>:</td>
				<td style='padding-left:40px'>$row[motohidup]</td>
			</tr>
		  </table><br>";
		  echo "<table style='width:250px;border: 3px solid;'>
		  			<tr>
		  				<td align='center'><button><a href='edit.php?nim=$row[nim]'>EDIT</a></button><br></td>
		  			<tr>
		  		</table>";
?>