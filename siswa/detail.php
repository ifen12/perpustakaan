<?php
	$nomor =$_GET['nomor'];

	$konek = mysqli_connect("localhost", "root", "", "web");

	$perintah ="SELECT * FROM siswa WHERE nomor = '$nomor'";

	$hasil = mysqli_query($konek, $perintah);

	$data = mysqli_fetch_array($hasil);

	$foto = $data['foto'];

	if ($foto == NULL){
		$foto = "1327.jpg";
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1><?php echo $data['nama'];?></h1><br>
	<a href="index.php">kembali bang</a><br><br>

	<table border="1">
		<tr>
			<td rowspan="6"><img src="gambar/<?php echo $foto; ?>" alt="" width="200"></td>
		</tr>

		<tr>
			<td>Nisn</td>
			<td><?php echo $data['nomor'];?></td>
		</tr>

		<tr>
			<td>Nama</td>
			<td><?php echo $data['nama'];?></td>
		</tr>

		<tr>
			<td>Kontak</td>
			<td><?php echo $data['kontak'];?></td>
		</tr>

		<tr>
			<td>Alamat</td>
			<td><?php echo $data['alamat'];?></td>
		</tr>

	</table>
</body>
</html>