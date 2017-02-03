<?php
//koneksi ke database
$konek = mysqli_connect("localhost", "root", "", "web");
//ambil variabel yang dikirim dari form
$nomor = $_POST['nomor'];

$nama = $_POST['nama'];
$kontak = $_POST['kontak'];
$alamat = $_POST['alamat'];
$fotolama = $_POST['fotolama'];

$namaf = $_FILES['fprofil']['name'];
$lokasif = $_FILES['fprofil']['tmp_name'];

if ($namaf != NULL) {
	unlink("gambar/$fotolama");
	$tujuanf = "gambar/$namaf";

	$upload = move_uploaded_file($lokasif, $tujuanf);

	$foto = $namaf;
}else{

	$foto = $fotolama;
}

$update = "UPDATE siswa SET nama = '$nama', kontak = '$kontak', alamat ='$alamat', foto = '$foto' WHERE nomor ='$nomor'";

$hasil = mysqli_query($konek,$update);
if($hasil){
	header("location:index.php");
}else{
	echo "Update data tamu gagal";
}
?>