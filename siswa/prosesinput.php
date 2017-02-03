<?php
	//koneksi ke database
	$konek = mysqli_connect("localhost", "root", "", "web");

	//ambil data dari form
	$n = $_POST['nama'];
	$lokasifile = $_FILES['upfile']['tmp_name'];
	$namafile = $_FILES['upfile']['name'];
	$k = $_POST['kontak'];
	$a = $_POST['alamat'];

	//tujuan
	$tujuan = "gambar/$namafile";

	$upload = move_uploaded_file($lokasifile, $tujuan);

	$input = "INSERT INTO siswa(nama, foto, kontak, alamat) VALUES ('$n','$namafile','$k','$a')";

	$hasil = mysqli_query($konek,$input);

	//apabila query untuk input data benar
	if($hasil OR $upload){
		header("location:index.php");
	}else{
		header("location:inputsiswa.php");
	}
?>