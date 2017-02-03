<?php 
$isbn = $_GET['isbn'];

$konek = mysqli_connect("localhost", "root", "", "web");

$hapus = "DELETE FROM buku WHERE isbn ='$isbn'";
$hasil = mysqli_query($konek,$hapus);

if ('$hasil') {
	header("location:index.php");
}else{
	echo "hapus gagal";
}

 ?>