<h3>DATA PINJAM</h3>

<a href="inputpinjam.php">TAMBAH INPUT<br></a><br>

<form action="index.php" method="GET">
	<input type="text" name="s">
	<input type="submit" value="CARI" name="cari">
</form>

<?php
	$batas = 5;
	$halaman = @$_GET ['halaman'];
		if (empty($halaman)) {
			$posisi = 0;
			$halaman = 1;
		}else{
			$posisi = ($halaman-1)*$batas;
		}

	//koneksi ke database
	$konek = mysqli_connect("localhost", "root", "", "web");
	//query menampilkan data
	if (isset($_GET['cari'])) {
	$q = $_GET['s'];
	$tampil ="SELECT peminjaman.id_pinjam, siswa.nomor, siswa.nama, peminjaman.tgl_pinjam, peminjaman.tgl_balik, buku.judul, peminjaman.keterangan FROM siswa, peminjaman, buku WHERE siswa.nomor = peminjaman.nomor AND peminjaman.isbn = buku.isbn AND siswa.nama LIKE '%$q%' OR buku.judul LIKE '%$q%' ORDER BY siswa.nama = buku.judul LIMIT $posisi, $batas";
	}else{
	$tampil ="SELECT peminjaman.id_pinjam, siswa.nomor, siswa.nama, peminjaman.tgl_pinjam, peminjaman.tgl_balik, buku.judul, peminjaman.keterangan FROM siswa, peminjaman, buku WHERE siswa.nomor = peminjaman.nomor AND peminjaman.isbn = buku.isbn LIMIT $posisi, $batas";
	}

	$hasil = mysqli_query($konek,$tampil);

	$jlmhasil = mysqli_num_rows($hasil);

?>

<table border="2">
<tr>
	<th>No</th>
	<th>Nisn</th>
	<th>Nama</th>
	<th>Tanggal Pinjam</th>
	<th>Tanggal Balik</th>
	<th>Judul</th>
	<th>Keterangan</th>
	<th>Aksi</th>
</tr>

<?php 
	if($jlmhasil < 1){
		echo"<tr>";
		echo "<td colspan='8' style='text-align: center'> data yang anda cari hilang </td>";
		echo"</tr>";
	}else{
		//penomoran
		$id_pinjam = $posisi + 1;
		//tampil nama, email dan pesan
		while( $data=mysqli_fetch_array($hasil)){
			echo "<tr>";
			echo "<td>$id_pinjam </td>";
			echo "<td>$data[nomor] </td>" ;
			echo "<td>$data[nama] </td>" ;
			echo "<td>$data[tgl_pinjam] </td>";
			echo "<td>$data[tgl_balik] </td>" ;
			echo "<td>$data[judul] </td>";
			echo "<td>$data[keterangan] </td>";
			echo "<td><a href='hapuspinjam.php?id_pinjam=$data[id_pinjam]'>hapus | </a><a href='editpinjam.php?id_pinjam=$data[id_pinjam]'>edit</a> </td>" ;
			echo "<tr>";
			$id_pinjam++;
		}
	}

?>

</table>

<?php

	$tampil2 = "SELECT * FROM peminjaman";

	$hasil2 = mysqli_query($konek, $tampil2);
	$jmldata = mysqli_num_rows($hasil2);
	$jmlhalaman = ceil($jmldata / $batas);

	echo "jumlah data : $jmldata <br>";

	for ($i=1; $i <= $jmlhalaman; $i++) { 
		if ($i != $halaman) {
			echo "<a href =$_SERVER[PHP_SELF]?halaman=$i> $i </a>";
		}else{
			echo "<b> | $i | </b>";
		}	
	}
?>