<?php

$conn = mysqli_connect("127.0.0.1", "p04_g36d", "F8q3O6KCEp", "p04_db");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }

    return $rows;

}

//Cek Koneksi
if ($conn->connect_error){
	die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";

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

    <link rel="stylesheet" href="UpdateUploadLaporan.css">


    <title>SIMTA-Upload Artefak & Laporan</title>
  </head>
  <body id="page-top">

    <nav class="navbar navbar-expand-lg navbar-light bg-light fix-top" id="mainNav">
        <!-- class : fix-top menjadikan menu tetap di atas -->
        <div class="container">
            <!-- Setiap ingin menambah konten, jangan lupa menggunakan class : "container" agar tetap konsisten ukurannya -->
            <a class="navbar-brand" href="#page-top "><h1>SIMTA</h1> Sistem Informasi Manajemen Tugas Akhir </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">    
                <!-- ml-auto berfungsi untuk membuat menu ke sebelah kanan -->

                <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#beranda">Beranda<span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item">
                  <a class="nav-link js-scroll-trigger" href="#artefak & laporan">Artefak & Laporan<span class="sr-only">(current)</span></a>
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

                        <!-- Default dropright button -->
                        <div class="dropdown-item dropright">
                            <!-- <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropright
                            </button> -->
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Koordinator TA
                              </a>
                            <div class="dropdown-menu">
                            <!-- Dropdown menu links -->
                                <a class="dropdown-item" href="#">Membentuk Kelompok TA</a>
                                <a class="dropdown-item" href="#">Membuat Jadwal</a>
                                <a class="dropdown-item" href="#">Membentuk Dosen Pembina & Penguji</a>
                                <a class="dropdown-item" href="#">Publikasi</a>

                            </div>
                        </div>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Dosen Penguji</a>
                        <div class="dropdown-divider"></div>
                        <div class="dropdown-item dropright">
                            <!-- <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropright
                            </button> -->
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dosen Pembimbing
                              </a>
                            <div class="dropdown-menu">
                            <!-- Dropdown menu links -->
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
        <h2 class="alert text-center mt-3">Upload Artefak & Laporan</h2>
      </div>

      <div class="container">
          <div>
              <div class="dropdown">
                  <button class="btnSesi btn-secondary dropdown-toggle" href="#PilihSesi" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Pilih Sesi
                    </button>

                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Pra Seminar</a>

                    <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Seminar</a>

                    <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Pra Sidang</a>

                    <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Sidang</a>

                    <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Bimbingan</a>
                    </div>
                </div>
            </div>

            <br>

            <div>
                <div class="dropdown">
                    <button class="btnLaporan btn-secondary dropdown-toggle" href="#Pilih" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Laporan
                    </button>

                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Laporan Kemajuan</a>

                    <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Artefak</a>

                    <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Laporan Akhir</a>
                    </div>    
                </div>
          </div>

          <br>

          <div class="form-group row">
            <label for="input namafile" class="col-sm-2 col-form-label">Pilih File</label>
            <div class="col-sm-7">
                <input type="namafile" class="form-control" id="namafile">
              </div>

              <div class="col-sm-3">
                  <input type="file" id="fileinput" placeholder="Browse File" class="">
              </div>
        </div>

          <br>

          <div class="form-group row">
              <label for="input deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
              <div class="col-sm-10">
                <textarea class="form-control" aria-label="With textarea"></textarea>
                </div>
            </div>

          <br>

          <div class="form-group row">
            <label for="input deskripsi" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
                <div><p>
                    <div class="drag"><p>
                        <div class="formdrag"><p><br>
                          <br><img src="upload.png" class="icon"></p>
                          <p>Drag your file here to upload</p>
                      </div>
                  </div></p>
              </div>
           </div>
        </div>

          <br>

          <button type="submit" class="btn  btn-primary float-right ml-3 pl-pr-3">Kirim</button>
          <button type="cancel" class="btn btn-danger float-right pl-pr-3">Batal</button> 

        </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>