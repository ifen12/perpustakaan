<?php
	$nomor =$_GET['nomor'];

	include "../koneksi/konek.php";

	$perintah ="SELECT * FROM siswa WHERE nomor = '$nomor'";

	$hasil = mysqli_query($konek, $perintah);

	$data = mysqli_fetch_array($hasil);

	$foto = $data['foto'];

	if ($foto == NULL){
		$foto = "logo.jpg";
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="../css/iconmaterial.css">
	  	<link rel="stylesheet" href="../css/materialize.css">
	  	<link rel="stylesheet" href="../css/css.css">
	  	<link rel="stylesheet" href="../css/dropify.min.css">

	  	<script src="../js/jquery-3.1.0.min.js"></script>
	  	<script src="../js/materialize.js"></script>
	  	<script src="../js/dropify.min.js"></script>
</head>
<body>
	<div class="row">

      	<div class="col s12 m4 l3" style="background-color: #000;"> <!-- Note that "m4 l3" was added -->
          	<img src="../img/logo.jpg" style="border-radius: 100px;margin-top: 10px; padding: 10px;">
          	<p style="color: #fff;">"hallo admin kamu berada di home detail siswa"</p>
        	<hr>
	        <div class="row">
		        <ul>
		            <li><a href="../buku/indexbuku.php"><i class="material-icons left">view_list</i>List Buku</a></li><br>
		            <li><a href="../peminjaman/index.php"><i class="material-icons left">payment</i>Peminjaman Buku</a></li><br>
		            <li><a href="indexsiswa.php"><i class="material-icons left">perm_identity</i>Data Siswa</a></li><br>
		            <br><br><br>
		            <li><a href="../login/login.php"><i class="material-icons left">store</i>Login Admin</a></li>
		        </ul>
	        </div>
	        <br><br><br>
	        <hr>

	        <br><br><br>	
	        <p style="color: #fff;">© 2014-2017 Materialize</p>
	    </div>

		<div class="col s12 m8 l9"> <!-- Note that "m8 l9" was added -->
			<div class="col s12 z-depth-4 card-panel">
			<div class="container">
				
			    <div class="row">
						<h1 class="center"><?php echo $data['nama'];?></h1><br>
						<table class="striped centered">
							
							<div class="row">
								<div class="col-sm-6">
									<img id="input-file-to-destroy" data-default-file="gambar/<?php echo $foto; ?>" >
								</div>	
							</div>

							<tr>
								<td>Nisn</td>
								<td><?php echo $data['nisn'];?></td>
							</tr>

							<tr>
								<td>Nama</td>
								<td><?php echo $data['nama'];?></td>
							</tr>

							<tr>
								<td>Kontak</td>
								<td><?php echo $data['kontak'];?></td>
							</tr>

							<tr>
								<td>Alamat</td>
								<td><?php echo $data['alamat'];?></td>
							</tr>

						</table>
			            <a href="indexsiswa.php">
							<button class="btn waves-effect waves-light">Back</button>
			          	</a>
					</div><!-- end col  -->
			    </div><!-- end class row -->
			    </div>
			</div><!-- end countainer -->
		</div>
	<script>
	$(document).ready(function(){
                // Basic
                $('.dropify').dropify();

                // Translated
                $('.dropify-fr').dropify({
                    messages: {
                        default: 'Glissez-déposez un fichier ici ou cliquez',
                        replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                        remove:  'Supprimer',
                        error:   'Désolé, le fichier trop volumineux'
                    }
                });

                // Used events
                var drEvent = $('#input-file-events').dropify();

                drEvent.on('dropify.beforeClear', function(event, element){
                    return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
                });

                drEvent.on('dropify.afterClear', function(event, element){
                    alert('File deleted');
                });

                drEvent.on('dropify.errors', function(event, element){
                    console.log('Has Errors');
                });

                var drDestroy = $('#input-file-to-destroy').dropify();
                drDestroy = drDestroy.data('dropify')
                $('#toggleDropify').on('click', function(e){
                    e.preventDefault();
                    if (drDestroy.isDropified()) {
                        drDestroy.destroy();
                    } else {
                        drDestroy.init();
                    }
                })
            });
	</script>
		</div>
</body>
</html>