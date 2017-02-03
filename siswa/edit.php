<?php 

$nomor = $_GET['nomor'];

$konek = mysqli_connect("localhost", "root", "", "web");
//query menampilkan data
$tampil = "SELECT * FROM siswa WHERE nomor = '$nomor' ";
$hasil = mysqli_query($konek,$tampil);

$data = mysqli_fetch_array($hasil);

$foto = $data['foto'];

	if ($foto == NULL){
		$foto = "1327.jpg";
	}

?>



<h3>SILAKAN EDIT YANG SALAH KETIK</h3>
<form method="POST" action="update.php" enctype="multipart/form-data">
<img src="gambar/<?php echo $foto; ?>" width="200">

<input type="hidden" value="<?php echo $data['foto']; ?>" name="fotolama">

<br>	
<input type="file" name="fprofil">
<br>	

<input type="hidden" name="nomor" value="<?php echo $data['nomor']; ?>">
Nama : <br> <input type="text" name="nama" value="<?php echo $data['nama']; ?>"><br>
kontak : <br> <input type="text" name="kontak" value="<?php echo $data['kontak']; ?>"><br>
alamat : <br> <input type="text" name="alamat" value="<?php echo $data['alamat']; ?>"><br>
<input type="submit" value="Update"><br>
</form>