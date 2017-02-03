<?php
//koneksi ke database
$konek = mysqli_connect("localhost", "root", "", "web");
//ambil variabel yang dikirim dari form
$isbn = $_GET['isbn'];

$judul = $_GET['judul'];
$pengarang = $_GET['pengarang'];
$penerbit = $_GET['penerbit'];
$update = "UPDATE buku SET judul = '$judul', pengarang = '$pengarang', penerbit ='$penerbit' WHERE isbn ='$isbn'";

$hasil = mysqli_query($konek,$update);
if($hasil){
	header("location:index.php");
}else{
	echo "Update data tamu gagal";
}
?>