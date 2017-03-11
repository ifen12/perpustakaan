<?php
//koneksi ke database
include "../koneksi/konek.php";
//ambil variabel yang dikirim dari form
$isbn = $_GET['isbn'];

$judul = $_GET['judul'];
$pengarang = $_GET['pengarang'];
$penerbit = $_GET['penerbit'];
$update = "UPDATE buku SET judul = '$judul', pengarang = '$pengarang', penerbit ='$penerbit' WHERE isbn ='$isbn'";

$hasil = mysqli_query($konek,$update);
if($hasil){
	header("location:indexbuku.php");
}else{
	echo "Update data tamu gagal";
}
?>