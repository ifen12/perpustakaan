<?php
	//koneksi ke database
	$konek = mysqli_connect("localhost", "root", "", "web");

	//ambil data dari form
	$j = $_GET['judul'];
	$p = $_GET['pengarang'];
	$pe = $_GET['penerbit'];

	$input = "INSERT INTO buku(judul, pengarang, penerbit) VALUES ('$j','$p','$pe')";
	$hasil = mysqli_query($konek,$input);

	//apabila query untuk input data benar
	if('$hasil'){
		header("location:index.php");
	}else{
		header("location:inputbuku.php");
	}
?>