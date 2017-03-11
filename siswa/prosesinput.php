<?php
	//koneksi ke database
	include "../koneksi/konek.php";

	//ambil data dari form
	$nis =$_POST['nisn'];
	$n = $_POST['nama'];
	$lokasifile = $_FILES['upfile']['tmp_name'];
	$namafile = $_FILES['upfile']['name'];
	$k = $_POST['kontak'];
	$a = $_POST['alamat'];

	//tujuan
	$tujuan = "gambar/$namafile";

	$upload = move_uploaded_file($lokasifile, $tujuan);

	$input = "INSERT INTO siswa(nisn,nama, foto, kontak, alamat) VALUES ('$nis','$n','$namafile','$k','$a')";

	$hasil = mysqli_query($konek,$input);

	//apabila query untuk input data benar
	if($hasil OR $upload){
		header("location:indexsiswa.php");
		//echo "benar";
	}else{
		header("location:inputsiswa.php");
		//echo "gagal";
	}
?>