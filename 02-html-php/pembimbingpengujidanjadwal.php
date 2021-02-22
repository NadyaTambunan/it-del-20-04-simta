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

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
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

    <link rel="stylesheet" href="style/navigation.css">
    <link rel="stylesheet" type="text/css" href="menentukanPenguji-Jadwal.css">

    <title>Menentukan Pembimbing, Penguji dan Jadwal</title>
  </head>
  <body id="page-top">
    
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
    
      <div class="container">
        <ul class="breadcrumb">
          <li><a href="#">Beranda</a></li>
          <li><a href="#">Dosen</a></li>
          <li><a href="#">Koordinator TA</a></li>
          <li>Membentuk Kelompok TA</li>
        </ul>
      </div>

      <div class="container">
        <form action="/action_page.php">
        
          <style>
          ul.breadcrumb {
            padding: 10px 16px;
            list-style: none;
            background-color: #eee;
          }
          ul.breadcrumb li {
            display: inline;
            font-size: 18px;
          }
          ul.breadcrumb li+li:before {
            padding: 8px;
            color: black;
            content: "/\00a0";
          }
          ul.breadcrumb li a {
            color: #0275d8;
            text-decoration: none;
          }
          ul.breadcrumb li a:hover {
            color: #01447e;
            text-decoration: underline;
          }
          </style>
        </form>
      </div>

      <div class="container">
        <h3>Pembimbing, Penguji, dan Jadwal</h3>
        <p>Silahkan pilih pembimbing, penguji, dan jadwal</p>
        <hr>

        <h6 >Pembimbing</h6>
        <div class="col-lg-5">
        <form class="form inline">
            <div class="form-group row">
                <label for="inputID" class="col-sm-3 col-form-label">ID</label>
                <div class="col-sm-8">
                    <input type="id" class="form-control" id="inputID">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputNama" class="col-sm-3 col-form-label">Nama</label>
                <div class="col-sm-8">
                    <input type="nama" class="form-control" id="inputNama">
                </div>
            </div>
        </form>
        </div>
        <hr>
    
        <h6>Penguji 1</h6>
        <div class="col-lg-5">
        <form class="form inline">
            <div class="form-group row">
                <label for="inputID" class="col-sm-3 col-form-label">ID</label>
                <div class="col-sm-8">
                    <input type="id" class="form-control" id="inputID">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputNama" class="col-sm-3 col-form-label">Nama</label>
                <div class="col-sm-8">
                    <input type="name" class="form-control" id="inputNama">
                </div>
            </div>
        </form>
        </div>
        <hr>

        <h6>Penguji 2</h6>
        <div class="col-lg-5">
        <form class="form inline">
            <div class="form-group row">
                <label for="inputID" class="col-sm-3 col col-form-label">ID</label>
                <div class="col-sm-8">
                    <input type="id" class="form-control" id="inputID">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputNama" class="col-sm-3 col-form-label">Nama</label>
                <div class="col-sm-8">
                    <input type="name" class="form-control" id="inputNama">
                </div>
            </div>
        </form>
        </div>
        <hr>

        <h6>Jadwal</h6>
        <form>
        <div class="row">
            <div class="col-md-5">
                <div class="form-group">
                    <label>Praseminar</label>
                    <div class="col-sm-5">
                        <input type="date" name="" class="form-control">    
                    </div>
                </div>
            </div>
            
            <div class="col-md-5">
                <div class="form-group">
                    <label>Prasidang</label>
                    <div class="col-sm-5">
                        <input type="date" name="" class="form-control">    
                    </div>
                </div>  
            </div>
        </div>
        </form>

        <form>
        <div class="row">
            <div class="col-md-5">
                <div class="form-group">
                    <label>Seminar</label>
                    <div class="col-sm-5">
                        <input type="date" name="" class="form-control">    
                    </div>
                </div>
            </div>

            <div class="col-md-5">
                <div class="form-group">
                    <label>Sidang</label>
                    <div class="col-sm-5">
                        <input type="date" name="" class="form-control">    
                    </div>
                </div>
            </div>
        </div>
        </form>

        <button type="submit" class="btn  btn-primary float-right ml-3 pl-pr-3">Save</button>
        <button type="cancel" class="btn btn-danger float-right pl-pr-3">Cancel</button>
    </div>
         

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>
