<?php
  $batas = 3;
  $halaman = @$_GET ['halaman'];
  if (empty($halaman)) {
    $posisi = 0;
    $halaman = 1;
  }else{
    $posisi = ($halaman-1)*$batas;
  }

  //koneksi ke database
  include "../koneksi/konek.php";
          
  if (isset($_GET['cari'])) {
    $q = $_GET['s'];
    $tampil = "SELECT * FROM siswa WHERE nomor LIKE '%$q%' OR nisn LIKE '%q%' OR nama LIKE '%$q%' OR alamat LIKE '%$q%' OR kontak LIKE '%$q%' LIMIT $posisi, $batas";
  }else{
    $tampil = "SELECT * FROM siswa ORDER BY nama LIMIT $posisi, $batas";
  }
  //query menampilkan data
          
  $hasil = mysqli_query($konek,$tampil);
  $jlmhasil = mysqli_num_rows($hasil);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>index siswa</title>
      <link rel="stylesheet" href="../css/iconmaterial.css">
      <link rel="stylesheet" href="../css/materialize.css">

      <script src="../js/jquery-3.1.0.min.js"></script>
      <script src="../js/materialize.js"></script>
</head>
  <style>
    b{
      padding: 20px;
      margin-bottom:100px;
    }
  </style>
<body>

<nav></nav>

    <div class="row">

      <div class="col s12 m4 l3" style="background-color: #000;"> <!-- Note that "m4 l3" was added -->
          <img src="../img/logo.jpg" style="border-radius: 100px;margin-top: 10px;">
          <p style="color: #fff;">"hallo admin kamu berada di home siswa"</p>
        <hr>
        <div class="row">
        <ul>
          <li><a href="../buku/indexbuku.php"><i class="material-icons left">view_list</i>List Buku</a></li><br>
          <li><a href="../peminjaman/index.php"><i class="material-icons left">payment</i>Peminjaman Buku</a></li><br>
          <li><a href="indexsiswa.php"><i class="material-icons left">perm_identity</i>Data Siswa</a></li><br>
          <li><a href="inputsiswa.php"><i class="material-icons left">add</i>Tambah inputan</a></li>
          <br><br>
          <li><a href="../login.php"><i class="material-icons left">settings_power</i>Logout Admin</a></li>
          </ul>
        </div>
        <hr>
        <br><br><br>  
        <p style="color: #fff;">© 2014-2017 Materialize</p>
      </div>

<div class="col s12 m8 l9"> <!-- Note that "m8 l9" was added -->
        <!-- Teal page content  -->
        <div class="col s12 z-depth-4 card-panel">
        <div class="row" style="padding: 20px;overflow: hidden;">
            <nav>
              <div class="nav-wrapper">
                <form action="indexsiswa.php" method="GET">
                  <div class="input-field  col s10" style="float: left;">
                    <input id="search" type="search" required name="s">
                    <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                  </div>

                  <div class="col s2" style="float: right;" class="btn waves-effect" type="submit" name="cari">
                    <button class="btn waves-effect" type="submit" name="cari" style="margin-left: 30px;">cari
                    </button>
                  </div>
                </form>
              </div>
            </nav>
             
      <div class="row">
        <table id="data-table-simple" class="responsive-table bordered centered striped" cellspacing="0" style="background-color: #efebe9;overflow: hidden;">
          
          <thead>
              <tr>
              <th>No</th>
              <th>Nisn</th>
              <th>Nama</th>
              <th>kontak</th>
              <th>alamat</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
                <?php 
                if($jlmhasil < 1){
                  echo"<tr>";
                  echo "<td colspan='5' style='text-align: center'> error 404 </td>";
                  echo"</tr>";
                }else{
                  //penomoran
                  $no = $posisi + 1;
                  //tampil nama, email dan pesan
                  while( $data=mysqli_fetch_array($hasil)){
                  echo "<tr>";
                  echo "<td>$no</td>";
                  echo "<td>$data[nisn] </td>";
                  echo "<td>$data[nama] </td>";
                  echo "<td>$data[kontak] </td>" ;
                  echo "<td>$data[alamat] </td>" ;
              ?>
                <td>
                      <a class="waves-effect" style="padding: 15px;" <?php echo "<a href='hapus.php?nomor=$data[nomor]'hapus </a>" ?> 
                      <i class="material-icons">delete</i></a>

                      <a class="waves-effect" style="padding: 15px;" <?php echo "<a href='edit.php?nomor=$data[nomor]'edit </a>" ?>
                      <i class="material-icons">settings</i></a>

                      <a class="waves-effect" style="padding: 15px;" <?php echo "<a href='detail.php?nomor=$data[nomor]' detail</a>" ?>
                      <i class="material-icons">list</i></a>
                    </td>

              <?php
                  echo "</tr>";
                  $no++;
                  }
                }
              ?>
          </tbody>
        </table>
        </div>
        <?php
                $tampil2 = "SELECT * FROM siswa";

                $hasil2 = mysqli_query($konek, $tampil2);
                $jmldata = mysqli_num_rows($hasil2);
                $jmlhalaman = ceil($jmldata / $batas);
              ?>
          <div class="row">
            <ul class="pagination" style="padding: 10px;">
              
              <li class="disabled">
                  <a href="#!">
                    <i class="material-icons">chevron_left</i>
                  </a>
              </li>
                  <?php      
                      for ($i=1; $i <= $jmlhalaman; $i++) {
                  ?>               
                  <?php   
                      if ($i != $halaman) {
                  ?>
              <li class="waves-effect">
                    <?php echo "<a href =$_SERVER[PHP_SELF]?halaman=$i> $i </a>" ?>
              </li> 
                  <?php      
                      }else{
                  ?>
                            
              <li class="active" style="padding: 6px;">
                    <?php echo "<b> $i </b>" ?></a> 
              </li>
                  <?php
                      } 
                  }
                  ?>
              <li class="disabled">
                  <a href="#!">
                    <i class="material-icons">chevron_right</i>
                  </a>
              </li> 
            </ul>
          </div><!-- and class row -->
          </div>
        </div>
      </div>

</body>
</html>