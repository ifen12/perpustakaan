<?php
	//koneksi ke database
	include "../koneksi/konek.php";

	//ambil data dari form
	$p = $_GET['tgl_pinjam'];
	$s = $_GET['tgl_balik'];
	$b = $_GET['nomor'];
	$h = $_GET['isbn'];
	$i = $_GET['keterangan'];

	$input = "INSERT INTO peminjaman (tgl_pinjam, tgl_balik, nomor, isbn, keterangan) VALUES ('$p','$s','$b','$h','$i')";
	$hasil = mysqli_query($konek,$input);

	//apabila query untuk input data benar
	if('$hasil'){
		header("location:index.php");
	}else{
		header("location:inputpinjam.php");
	}
?>