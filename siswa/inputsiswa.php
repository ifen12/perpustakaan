
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
		<link rel="stylesheet" href="../css/iconmaterial.css">
	  	<link rel="stylesheet" href="../css/materialize.css">
	  	<link rel="stylesheet" href="../css/css.css">
	  	<script src="../js/jquery-3.1.0.min.js"></script>
	  	<script src="../js/materialize.js"></script>
</head>
    
    <style>
    </style>

<body> 
    <div class="row">
    <div class="col s12 m4 l3" style="background-color: #000;"> <!-- Note that "m4 l3" was added -->
          <img src="../img/logo.jpg" style="border-radius: 100px;margin-top: 10px; padding: 10px;">
          <p style="color: #fff;">"hallo admin kamu di home input biodata siswa"</p>
        <hr>
        <div class="row">
        <ul>
          <li><a href="../buku/indexbuku.php"><i class="material-icons left">view_list</i>List Buku</a></li><br>
          <li><a href="../peminjaman/index.php"><i class="material-icons left">payment</i>Peminjaman Buku</a></li><br>
          <li><a href="indexsiswa.php"><i class="material-icons left">perm_identity</i>Data Siswa</a></li><br>
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
                    <form class="col s12" method="POST" enctype="multipart/form-data" action="prosesinput.php">
                        <div class="row">
                          <div class="input-field col s12">
                            <input id="name" type="text" name="nama">
                            <label for="first_name">Name</label>
                          </div>
                        </div>
                        
                        <div class="row">
                          <div class="input-field col s12">
                            <input id="email" type="text" name="nisn">
                            <label for="email">Nisn</label>
                          </div>
                        </div>

                        <div class="row">
                          <div class="input-field col s12">
                            <input id="password" type="text" name="kontak">
                            <label for="password">countact</label>
                          </div>
                        </div>

                        <div class="row">
                          <div class="input-field col s12">
                            <textarea id="message" class="materialize-textarea" name="alamat"></textarea>
                            <label for="message">company</label>
                          </div>
                        </div>

                        <div class="row">
                          <div class="file-field input-field">
                              <div class="btn">
                                <span>File</span>
                                <input type="file" multiple>
                              </div>
                              <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" placeholder="Upload one or more files" name="upfile">
                              </div>
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