<?php
$servername ="localhost:3307";
$username = "p04_g36d";
$password = "F8q3O6KCEp";
$dbname = "p04_db";

$conn = new mysqli($servername, $username, $password, $dbname);
if(isset($_POST['bsave']))
{  
  $save = mysqli_query($conn, "INSERT INTO kelompok (id_Kelompok, no_kelompok, prodi, angkatan, nim_mahasiswa_1, nama_mahasiswa_1
  nim_mahasiswa_2, nama_mahasiswa_2, nim_mahasiswa_3, nama_mahasiswa_3, id_pembimbing, nama_pembimbing,
  id_penguji_1, nama_penguji_1, id_penguji_2, nama_penguji_2, jad_prasem, jad_sem, jad_praid, jad_sid, prodi )
  VALUES ('$_POST[tid]',' ', '$_POST[tprodi]', '$_POST[tangkatan]','$_POST[tnim1]','$_POST[tnama1]','$_POST[tnim2]','$_POST[tnama2]','$_POST[tnim3]','$_POST[tnama3]',
          '$_POST[tidPem]', '$_POST[tnamaPem]', $_POST[tidPenguji1]', $_POST[tnamaPenguji1]', $_POST[tidPenguji2]', $_POST[tnamaPenguji2]',
          '$_POST[tjadprasem]', '$_POST[tjadsem]', '$_POST[jadprasid]', '$_POST[jadsid]')
  ");
$data = mysqli_fetch_array($save);

if($save) //Jika simpan sukses
  {
    echo "<script>
    alert('Simpan data sukses!');
    document.location='membentukKelompokTA.php';
    </script>";
  }
else
  {
    echo "<script>
    alert('Simpan data gagal!');
    document.location='membentukKelompokTA.php';
    </script>";   
  }
}
?>  

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/055b2fddae.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="style/navigation.css">

    <title>Membentuk Kelompok TA</title>
  </head>
  <body id ="page-top">

    <nav class="navbar navbar-expand-lg navbar-light bg-light fix-top" id="mainNav">
    
      <div class="container">
        <a class="navbar-brand" href="#page-top "><h1>SIMTA</h1> Sistem Informasi Manajemen Tugas Akhir </a>
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">    
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#beranda">Beranda<span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">Artefak&Laporan</a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Jadwal
              </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

                  <a class="dropdown-item" href="#">Pra Seminar</a>                      
                  <a class="dropdown-item" href="#">Seminar</a>                       
                  <a class="dropdown-item" href="#">Pra Sidang</a>   
                  <a class="dropdown-item" href="#">Sidang</a>
                  <a class="dropdown-item" href="#">Bimbingan</a>
                      
                </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dosen
              </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <div class="dropdown-item dropright">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Koordinator TA
                    </a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#">Membentuk Kelompok TA</a>
                      <a class="dropdown-item" href="#">Publikasi</a>
                    </div>
                </div>
                  <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Dosen Penguji</a>
                  <div class="dropdown-divider"></div>
                <div class="dropdown-item dropright">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dosen Pembimbing
                  </a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Penilaian</a>
                    <a class="dropdown-item" href="#">Absen</a>
                  </div>
                </div>
              </div>
            </li>

              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Mahasiswa
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

                      <a class="dropdown-item" href="#">Profil</a>
                      
                      <a class="dropdown-item" href="#">Kelompok TA</a>
                  </div>
              </li>

              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-user"></i> Nama Akun
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

                      <a class="dropdown-item" href="#">Setting</a>
                      
                      <a class="dropdown-item" href="#">Log out</a>
                  </div>
              </li>
              
              <li class="nav-item">
                  <a class="nav-link js-scroll-trigger" href="#notification"> <i class="fas fa-bell fa-2x"></i> </a>
              </li>
              
          </ul>
          </div>
      </div>
    </nav>

    <div class="text-center">
      <h2 class="alert text-center mt-3">Membentuk Kelompok TA</h2>
    </div>

    <div class="container">
      <div class="row">
        <div class="col">

          <section>
            <form>
              <div class="form-row align-items-center">
                <div class="col-auto my-1">
                  <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Sesi</label>
                  <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                    <option selected>Prodi</option>
                    <option value="1">D3 TI</option>
                    <option value="2">D3 TK</option>
                    <option value="3">D4 TRPL</option>
                    <option value="4">S1 SI</option>
                    <option value="4">S1 IF</option>
                    <option value="4">S1 MR</option>
                    <option value="4">S1 BP</option>
                  </select>
                </div>
            </form>
          </section>

          <form>
            <div class="col-md-6">
              <div class="form-group row">
                <label for="inputID" class="col-sm-5 col-form-label">ID Kelompok</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="inputID" required>
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group row">
                <label for="inputangkatan" class="col-sm-5 col-form-label">Angkatan</label>
                <div class="col-sm-6">
                  <input type="nama" class="form-control" id="inputAngkatan" required>
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group row">
                <label for="inputNIM1" class="col-sm-5 col-form-label">NIM Mahasiswa 1</label>
              <div class="col-sm-6">
                <input type="nim" class="form-control" id="inputNIM1" required>
              </div>
               </div>
            </div>

            <div class="col-md-6">
              <div class="form-group row">
                <label for="inputnama1" class="col-sm-5 col-form-label">Nama Mahasiswa 1</label>
                <div class="col-sm-6">
                  <input type="nama" class="form-control" id="inputnama1" required>
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group row">
                <label for="inputNIM2" class="col-sm-5 col-form-label">NIM Mahasiswa 2</label>
                <div class="col-sm-6">
                  <input type="nim" class="form-control" id="inputNIM2" required>
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group row">
                <label for="inputnama2" class="col-sm-5 col-form-label">Nama Mahasiswa 2</label>
                <div class="col-sm-6">
                  <input type="nama" class="form-control" id="inputnama2" required>
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group row">
                <label for="inputNIM3" class="col-sm-5 col-form-label">NIM Mahasiswa 3</label>
                <div class="col-sm-6">
                  <input type="nim" class="form-control" id="inputNIM3" required>
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group row">
                <label for="inputnama3" class="col-sm-5 col-form-label">Nama Mahasiswa 3</label>
                <div class="col-sm-6">
                  <input type="nama" class="form-control" id="inputnama3" required>
                </div>
              </div>
            </div>

      <div class="row">
        <div class="col">

          <div class="col-md-6">
            <div class="form-group row">
              <label for="inputIDPem" class="col-sm-5 col-form-label">ID Pembimbing</label>
              <div class="col-sm-6">
                <input type="nama" class="form-control" id="inputIDPem" required>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group row">
              <label for="inputnamaPem" class="col-sm-5 col-form-label">Nama Pembimbing</label>
              <div class="col-sm-6">
                <input type="nama" class="form-control" id="inputnamaPem" required>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group row">
              <label for="inputIDPenguji1" class="col-sm-5 col-form-label">ID Penguji 1</label>
              <div class="col-sm-6">
                <input type="nama" class="form-control" id="inputIDPenguji1" required>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group row">
              <label for="inputnamaPenguji1" class="col-sm-5 col-form-label">Nama Penguji 1</label>
              <div class="col-sm-6">
                <input type="nama" class="form-control" id="inputnamaPenguji1" required>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group row">
              <label for="inputIDPenguji2" class="col-sm-5 col-form-label">ID Penguji 2</label>
              <div class="col-sm-6">
                <input type="nama" class="form-control" id="inputIDPenguji2" required>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group row">
              <label for="inputnamaPenguji2" class="col-sm-5 col-form-label">Nama Penguji 2</label>
              <div class="col-sm-6">
                <input type="nama" class="form-control" id="inputnamaPenguji2" required>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group row">
              <label for="inputjadprasem" class="col-sm-5 col-form-label">Jadwal Praseminar</label>
              <div class="col-sm-6">
                <input type="date" class="form-control" id="inputjadprasem" required>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group row">
              <label for="inputsem" class="col-sm-5 col-form-label">Jadwal Seminar</label>
              <div class="col-sm-6">
                <input type="date" class="form-control" id="inputjadsem" required>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group row">
              <label for="inputjadprasid" class="col-sm-5 col-form-label">Jadwal Prasidang</label>
              <div class="col-sm-6">
                <input type="date" class="form-control" id="inputjadprasid" required>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group row">
              <label for="inputjadsid" class="col-sm-5 col-form-label">Jadwal Sidang</label>
              <div class="col-sm-6">
                <input type="date" class="form-control" id="inputjadsid" required>
              </div>
            </div>
          </div>

          <button type="submit" style="margin-left: 28%;" name="bsave" class="btn  btn-primary center">Save</button>
        </div>
      </div>
      </div>
    </div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>