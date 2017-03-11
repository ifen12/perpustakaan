<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
		<link rel="stylesheet" href="../css/iconmaterial.css">
	  	<link rel="stylesheet" href="../css/materialize.css">

	  	<script src="../js/jquery-3.1.0.min.js"></script>
	  	<script src="../js/materialize.js"></script>
</head>
<body>
<div class="row">
    <div class="col s12 m4 l3" style="background-color: #000;"> <!-- Note that "m4 l3" was added -->
          <img src="../img/buku.png" height="125" width="125" style="border-radius: 100px;margin-top: 10px;">
          <p style="color: #fff;">"hallo admin kamu di home input list buku"</p>
        <hr>
        <div class="row">
        <ul>
          <li><a href="indexbuku.php"><i class="material-icons left">view_list</i>List Buku</a></li><br>
          <li><a href="../peminjaman/index.php"><i class="material-icons left">payment</i>Peminjaman Buku</a></li><br>
          <li><a href="../siswa/indexsiswa.php"><i class="material-icons left">perm_identity</i>Data Siswa</a></li><br>
          <br><br>
          <li><a href="../login/login.php"><i class="material-icons left">store</i>Login Admin</a></li>
          </ul>
        </div>
        <br><br>
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
                          <div class="input-field col s12">
                            <input id="name" type="text" name="judul">
                            <label for="first_name">Judul buku</label>
                          </div>
                        </div>
                        
                        <div class="row">
                          <div class="input-field col s12">
                            <input id="email" type="text" name="pengarang">
                            <label for="email">Pengarang</label>
                          </div>
                        </div>

                        <div class="row">
                          <div class="input-field col s12">
                            <input id="password" type="text" name="penerbit">
                            <label for="password">Penerbit</label>
                          </div>
                        </div>

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

</body>
</html>