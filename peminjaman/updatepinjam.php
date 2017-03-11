<?php
//koneksi ke database
include "../koneksi/konek.php";
//ambil variabel yang dikirim dari form
$a = $_GET['id_pinjam'];

$b = $_GET['tgl_pinjam'];
$c = $_GET['tgl_balik'];
$d = $_GET['nomor'];
$e = $_GET['isbn'];
$f = $_GET['keterangan'];

$update = "UPDATE peminjaman SET tgl_pinjam = '$b', tgl_balik = '$c', nomor ='$d', isbn= '$e', keterangan= '$f' WHERE id_pinjam ='$a' ";

$hasil = mysqli_query($konek,$update);
if($hasil){
	header("location:index.php");
}else{
	echo "Update data pinjam gagal";
}
?>