<?php 
$id_pinjam = $_GET['id_pinjam'];

$konek = mysqli_connect("localhost", "root", "", "web");

$hapus = "DELETE FROM peminjaman WHERE id_pinjam ='$id_pinjam'";
$hasil = mysqli_query($konek,$hapus);

if ('$hasil') {
	header("location:index.php");
}else{
	echo "hapus gagal";
}

 ?>