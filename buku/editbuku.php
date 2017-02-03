<?php 

$isbn = $_GET['isbn'];

$konek = mysqli_connect("localhost", "root", "", "web");
//query menampilkan data
$tampil = "SELECT * FROM buku WHERE isbn = '$isbn' ";
$hasil = mysqli_query($konek,$tampil);

$data = mysqli_fetch_array($hasil);
?>



<h3>SILAKAN EDIT YANG SALAH KETIK</h3>

<form method="GET" action="updatebuku.php">

	<input type="hidden" name="isbn" value="<?php echo $data['isbn']; ?>">

	Judul : <br> <input type="text" name="judul" value="<?php echo $data['judul']; ?>"><br>
	
	Pengarang : <br> <input type="text" name="pengarang" value="<?php echo $data['pengarang']; ?>"><br>
	
	Penerbit : <br> <input type="text" name="penerbit" value="<?php echo $data['penerbit']; ?>"><br>
	
	<input type="submit" value="Update"><br>

</form>