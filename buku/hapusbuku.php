<?php 
$isbn = $_GET['isbn'];

include "../koneksi/konek.php";

$hapus = "DELETE FROM buku WHERE isbn ='$isbn'";
$hasil = mysqli_query($konek,$hapus);

if ('$hasil') {
	header("location:indexbuku.php");
	//echo "berhasil";
}else{
	echo "hapus gagal";
}

 ?>