<?php
	$nomor = $_GET['id_pinjam'];

	$konek =mysqli_connect("localhost","root","","web");

	$tampilsiswa ="SELECT nomor, nama FROM siswa";
	$tampilbuku ="SELECT isbn, judul FROM buku";
	$pilihan = "SELECT * FROM peminjaman WHERE id_pinjam = '$nomor'";

	$hasilsiswa =mysqli_query($konek, $tampilsiswa);
	$hasilbuku =mysqli_query($konek, $tampilbuku);
	$hasileksekusi = mysqli_query($konek, $pilihan);
	
	$pilihanpinjam = mysqli_fetch_array($hasileksekusi); 

?>
<h3>INPUT PINJAM</h3>
<a href="index.php">LIHAT TABEL PINJAM <br></a><br>
<form method="GET" action="updatepinjam.php">

	Tanggal pinjam : <br> <input type="text" name="tgl_pinjam" value="<?php echo $pilihanpinjam['tgl_pinjam']; ?>"><br>

	Tanggal balik : <br> <input type="text" name="tgl_balik" value="<?php echo $pilihanpinjam['tgl_balik']; ?>"><br>

	<input type="hidden" name="id_pinjam" value="<?php echo $pilihanpinjam['id_pinjam'];?>">

	Nama : <br> <select name="nomor">
					<?php
						foreach ($hasilsiswa as $siswa) {
					?>
							<option value="<?php echo $siswa['nomor']; ?>" <?php if ($siswa['nomor'] == $pilihanpinjam['nomor']) {
								echo "selected";}?>> <?php echo $siswa['nama'];?> </option>;
					<?php
						}
					?>
				</select><br>

	Judul: <br> 	<select name="isbn">
					<?php
						foreach ($hasilbuku as $buku) {
					?>
							<option value="<?php echo $buku['isbn']; ?>" <?php if ($buku['isbn']== $pilihanpinjam['isbn']) {echo "selected";}?> > <?php echo $buku['judul'];?></option>;
					<?php
						}
					?>
				</select><br>

	Keterangan: <br>

				<input type="radio" name="keterangan" value="kembali" <?php if ($pilihanpinjam['keterangan']=="kembali") { echo "checked"; } ?> >kembali</input><br>

			 	<input type="radio" name="keterangan" value="belum" <?php if ($pilihanpinjam['keterangan']=="belum") { echo "checked"; } ?> >belum</input><br>
				<input type="submit" value="Kirim"><br>

</form>