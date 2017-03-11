<?php 
$nomor = $_GET['nomor'];

include "../koneksi/konek.php";

$carifoto = "SELECT foto FROM siswa WHERE nomor ='$nomor'";

$hapus = "DELETE FROM siswa WHERE nomor ='$nomor'";

//cari foto
$hasilfoto = mysqli_query($konek, $carifoto);

$foto = mysqli_fetch_array($hasilfoto);

//menghapus foto
unlink("gambar/$foto[foto]");

//hapus data base
$hasil = mysqli_query($konek,$hapus);

if ('$hasil') {
	header("location:indexsiswa.php");
}else{
	echo "hapus gagal";
}

 ?>