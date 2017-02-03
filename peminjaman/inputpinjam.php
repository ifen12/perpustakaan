<?php
	
	$konek =mysqli_connect("localhost","root","","web");

	$tampilsiswa ="SELECT nomor, nama FROM siswa";
	$tampilbuku ="SELECT isbn, judul FROM buku";

	$hasilsiswa =mysqli_query($konek, $tampilsiswa);
	$hasilbuku =mysqli_query($konek, $tampilbuku);

?>
<h3>INPUT PINJAM</h3>
<a href="index.php">LIHAT TABEL PINJAM <br></a><br>
<form method="GET" action="prosesinput.php">

	Tanggal pinjam : <br> <input type="text" name="tgl_pinjam"><br>

	Tanggal balik : <br> <input type="text" name="tgl_balik"><br>

	Nama : <br> <select name="nomor">
					<?php
						foreach ($hasilsiswa as $siswa) {
							echo "<option value=$siswa[nomor]>$siswa[nama]</option>";
						}
					?>
				</select><br>

	Judul: <br> 	<select name="isbn">
					<?php
						foreach ($hasilbuku as $buku) {
							echo "<option value=$buku[isbn]>$buku[judul]</option>";
						}
					?>
				</select><br>

	Keterangan: <br>

				<input type="radio" name="keterangan" value="kembali">kembali</input><br>
			 	<input type="radio" name="keterangan" value="belum">belum</input><br>
				<input type="submit" value="Kirim"><br>

</form>