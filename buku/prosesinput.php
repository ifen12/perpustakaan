<?php
	//koneksi ke database
	include "../koneksi/konek.php";

	//ambil data dari form
	$judul = $_GET['judul'];
	$pengarang = $_GET['pengarang'];
	$penerbit = $_GET['penerbit'];

	$input = "INSERT INTO buku(judul, pengarang, penerbit) VALUES ('$judul','$pengarang','$penerbit')";
	$hasil = mysqli_query($konek,$input);

	//apabila query untuk input data benar
	if('$hasil'){
		header("location:indexbuku.php");
	}else{
		header("location:inputbuku.php");
	}
?>