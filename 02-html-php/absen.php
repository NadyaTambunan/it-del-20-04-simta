<?php

use Medoo\Medoo;

$database_config = [
    'database_type' => 'mysql',
    'server'        => '127.0.0.1',
    'database_name' => 'p04_db',
    'username'      => 'p04_g36d',
    'password'      => 'F8q3O6KCEp'
    ];

$database = new Medoo($database_config);

$absen = $database->select(
        'absen',
        ['tanggal','pembimbing','prodi',
        'kelompok','topik']
        );

$row_size = 5;
$rows = intval(sizeof($absen)/$row_size);
if (sizeof($absen) % $row_size) {
    ++$rows;
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

    <!-- SESUAIKAN JUDUL TEMAN SEKALIAN -->

    <title>Sistem Informasi Management TA</title>
  </head>
  <body id="page-top">
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light fix-top" id="mainNav">
        <!-- class : fix-top menjadikan menu tetap di atas -->
        <div class="container">
            <!-- Setiap ingin menambah konten, jangan lupa menggunakan class : "container" agar tetap konsisten ukurannya -->
            <a class="navbar-brand" href="#page-top "><h1>SIMTA</h1> Sistem Informasi Management TA </a>
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

      <div class="container">
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
                <a class="nav-link js-scroll-trigger" href="#artefak-laporan">Artefak & Laporan</a>
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

      <div class="container">
            <?php
            $counter = 0;
            while ($absen && $rows) {
            ?>    
            
        <h1 style="text-align: center">Absen Bimbingan</h1>
        <hr>
        <div>
            <form>
                <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label">Nama Pembimbing</label>
                        <div class="col-10">
                            <input class="form-control" type="text" id="example-text-input" <?=$absen[$counter]
                            ['pembimbing']?>>
                        </div>
                </div>

                <div class="form-group row">
                    <label for="example-date-input" class="col-2 col-form-label">Tanggal Bimbingan</label>
                        <div class="col-10">
                            <input class="form-control" type="date" value="2020-10-01" id="example-date-input"<?=$absen[$counter]
                            ['tanggal']?>>
                        </div>
                </div>

                <p class="font-weight-bold">Mahasiswa</p>

                    <div class="form-group row">
                        <label for="example-text-input" class="col-2 col-form-label">Prodi</label>
                            <div class="col-10">
                                <input class="form-control" type="text" id="example-text-input"<?=$absen[$counter]
                            ['prodi']?>>
                            </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-text-input" class="col-2 col-form-label">Keompok</label>
                            <div class="col-10">
                                <input class="form-control" type="text" id="example-text-input"<?=$absen[$counter]
                            ['kelompok']?>>
                            </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-text-input" class="col-2 col-form-label">Topik</label>
                            <div class="col-10">
                                <input class="form-control" type="text" id="example-text-input"<?=$absen[$counter]
                            ['topik']?>>
                            </div>
                    </div>

                    <button type="button" class="btn btn-primary btn-lg btn-block" href = "add-absen.php">Submit</button>



                
            </form>
        </div>

        
    </div>

       
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>