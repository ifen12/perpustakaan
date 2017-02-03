
<h3>DATA SISWA</h3>

<a href="inputsiswa.php">TAMBAH INPUT<br></a><br>

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
	
	if (isset($_GET['cari'])) {
		$q = $_GET['s'];
		$tampil = "SELECT * FROM siswa WHERE nama LIKE '%$q%' OR alamat LIKE '%$q%' OR kontak LIKE '%$q%' LIMIT $posisi, $batas";
	}else{
		$tampil = "SELECT * FROM siswa ORDER BY nama LIMIT $posisi, $batas";
	}
	//query menampilkan data
	
	$hasil = mysqli_query($konek,$tampil);
	$jlmhasil = mysqli_num_rows($hasil);
?>

<table border="2">
<tr>
	<th>NISN</th>
	<th>Nama</th>
	<th>kontak</th>
	<th>alamat</th>
	<th>Aksi</th>
</tr>

<?php 
	if($jlmhasil < 1){
		echo"<tr>";
		echo "<td colspan='5' style='text-align: center'> data yang anda cari hilang </td>";
		echo"</tr>";
	}else{
		//penomoran
		$no = $posisi + 1;
		//tampil nama, email dan pesan
		while( $data=mysqli_fetch_array($hasil)){
		echo "<tr>";
		echo "<td>$no</td>";
		echo "<td>$data[nama] </td>";
		echo "<td>$data[kontak] </td>" ;
		echo "<td>$data[alamat] </td>" ;
		echo "<td><a href='hapus.php?nomor=$data[nomor]'>hapus | </a><a href='edit.php?nomor=$data[nomor]'>edit | <a href='detail.php?nomor=$data[nomor]'>detail</a> </td>" ;
		echo "</tr>";
		$no++;
		}
	}
?>
</table>

<?php
	$tampil2 = "SELECT * FROM siswa";

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