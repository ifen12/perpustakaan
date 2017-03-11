<?php 
$id_pinjam = $_GET['id_pinjam'];

include "../koneksi/konek.php";

$hapus = "DELETE FROM peminjaman WHERE id_pinjam ='$id_pinjam'";
$hasil = mysqli_query($konek,$hapus);

if ('$hasil') {
	header("location:index.php");
}else{
	echo "hapus gagal";
}

 ?>