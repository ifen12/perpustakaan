<?php
	
	include "../koneksi/konek.php";

	$tampilsiswa ="SELECT nomor, nama FROM siswa";
	$tampilbuku ="SELECT isbn, judul FROM buku";

	$hasilsiswa =mysqli_query($konek, $tampilsiswa);
	$hasilbuku =mysqli_query($konek, $tampilbuku);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>input pinjam</title>
		<link rel="stylesheet" href="../css/iconmaterial.css">
	  	<link rel="stylesheet" href="../css/materialize.css">

	  	<script src="../js/jquery-3.1.0.min.js"></script>
	  	<script src="../js/materialize.js"></script>
	  	
</head>
<body>

<body> 
  <div class="row">
    <div class="col s12 m4 l3" style="background-color: #000;"> <!-- Note that "m4 l3" was added -->
          <img src="../img/buku.jpg" height="125" width="125" style="border-radius: 100px;margin-top: 10px;">
          <p style="color: #fff;">"hallo admin kamu berada di home input pinjama"</p>
        <hr>
        <div class="row">
        <ul>
          <li><a href="../buku/indexbuku.php"><i class="material-icons left">view_list</i>List Buku</a></li><br>
          <li><a href="index.php"><i class="material-icons left">payment</i>Peminjaman Buku</a></li><br>
          <li><a href="../siswa/indexsiswa.php"><i class="material-icons left">perm_identity</i>Data Siswa</a></li><br>
          <br><br>
          <li><a href="../login/login.php"><i class="material-icons left">store</i>Login Admin</a></li>
          </ul>
        </div>
        <br><br><br>  
        <br><br><br>
        <hr>
        <br><br><br>

        <br>
        <p style="color: #fff;">© 2014-2017 Materialize</p>
    </div>

    <div class="col s12 m8 l9"> <!-- Note that "m8 l9" was added -->
        <div class="card-panel">
            <h4 class="header2">Basic Form</h4>
                <div class="row">
                    <form class="col s12" method="GET" action="prosesinput.php">

                        <div class="row">
                   	<div class="input-field col m6 s12">
                        <i class="material-icons prefix">today</i>
                        <input type="text" id="Date" required  name="tgl_pinjam" class="datepicker">
                        <label for="contact">Tanggal pinjam</label>
                    </div>
					<div class="input-field col m6 s12">
                        <i class="material-icons prefix">today</i>
                        <input id="Date" type="date" class="datepicker" name="tgl_balik"> 
                        <label for="company">Tanggal balik</label>
                    </div>
                </div>		

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

				Keterangan:
						 	<p>
						      <input name="keterangan" type="radio" id="test1" value="kembali" />
						      <label for="test1">kembali</label>
						    </p>
						    <p>
						      <input name="keterangan" type="radio" id="test2" value="belum" />
						      <label for="test2">belum</label>
						    </p>

                          <div class="row">
                            <div class="input-field col s12">
                              <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Submit
                                <i class="mdi-content-send right"></i>
                              </button>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
	$(document).ready(function() {
    	$('select').material_select();
  	} );

  	// Materialize Date Picker
    window.picker = $('.datepicker').pickadate({
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 100, // Creates a dropdown of 15 years to control year
        format: 'yyyy/mm/dd'    
    });
</script>
</body>
</html>