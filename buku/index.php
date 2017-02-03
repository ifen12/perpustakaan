<h3>DATA BUKU</h3>

<a href="inputbuku.php">TAMBAH INPUT<br></a><br>

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
	$tampil = "SELECT * FROM buku WHERE judul LIKE '%$q%' OR pengarang LIKE '%$q%' OR penerbit LIKE '%$q%' LIMIT $posisi, $batas";
	}else{
		$tampil = "SELECT * FROM buku ORDER BY judul LIMIT $posisi, $batas";
	}

	$hasil = mysqli_query($konek,$tampil);
	$jlmhasil = mysqli_num_rows($hasil);
?>

<table border="2">
<tr>
	<th>Isbn</th>
	<th>Judul</th>
	<th>Pengarang</th>
	<th>Penerbit</th>
	<th>Aksi</th>
</tr>

<?php 

	if($jlmhasil < 1){
		echo"<tr>";
		echo "<td colspan='5' style='text-align: center'> data yang anda cari hilang </td>";
		echo"</tr>";
	}else{
		//penomoran
		$isbn = $posisi + 1;
		
		//tampil nama, email dan pesan
		while( $data=mysqli_fetch_array($hasil)){
			echo "<tr>";
			echo "<td>$isbn</td>";
			echo "<td>$data[judul] </td>";
			echo "<td>$data[pengarang] </td>" ;
			echo "<td>$data[penerbit] </td>" ;
			echo "<td><a href='hapusbuku.php?isbn=$data[isbn]'>hapus | </a><a href='editbuku.php?isbn=$data[isbn]'>edit</a> </td>" ;
			echo "<tr>";
			$isbn++;
		}
	}

?>
</table>

<?php
	$tampil2 = "SELECT * FROM buku";

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