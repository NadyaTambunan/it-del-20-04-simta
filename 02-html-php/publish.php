<?php

$conn = mysqli_connect("127.0.0.1", "p04_g36d", "F8q3O6KCEp", "p04_db");

function query($query){
	global $conn;
	$result = mysqli_query($conn,$query);
	$rows = [];
	while($row = mysqli_fetch_assoc($result)){
		$rows[] = $row;
	}

	return $rows;

}

// Check connection
if ($conn->connect_error) {
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

    <link rel="stylesheet" href="style/navigation.css">

    <!-- SESUAIKAN JUDUL TEMAN SEKALIAN -->

    <title>Publish Karya Tulis</title>
  </head>
  <body id="page-top">
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light fix-top" id="mainNav">
        <!-- class : fix-top menjadikan menu tetap di atas -->
        <div class="container">
            <!-- Setiap ingin menambah konten, jangan lupa menggunakan class : "container" agar tetap konsisten ukurannya -->
            <a class="navbar-brand" href="#page-top "><h1>SIMTA</h1> Sistem Informasi Manajemen TA </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">    
                <!-- ml-auto berfungsi untuk membuat menu ke sebelah kanan -->

                <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#beranda">Beranda<span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Artefak & Laporan
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

                      <a class="dropdown-item" href="#">Upload Artefak&Laporan</a>                      
                      <a class="dropdown-item" href="#">Upload Laporan Kemajuan</a>                       
                  </div>
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
         <form action="/action_page.php">

          <style>
             .files input {
              outline: 2px dashed #92b0b3;
              outline-offset: -10px;
              -webkit-transition: outline-offset .15s ease-in-out, background-color .15s linear;
              transition: outline-offset .15s ease-in-out, background-color .15s linear;
              padding: 120px 0px 85px 35%;
              text-align: center !important;
              margin: 0;
              width: 100% !important;
          }
          .files input:focus{     outline: 2px dashed #92b0b3;  outline-offset: -10px;
              -webkit-transition: outline-offset .15s ease-in-out, background-color .15s linear;
              transition: outline-offset .15s ease-in-out, background-color .15s linear; border:1px solid #92b0b3;
          }
          .files{ position:relative}
          .files:after {  pointer-events: none;
              position: absolute;
              top: 60px;
              left: 0;
              width: 50px;
              right: 0;
              height: 56px;
              content: "";
              background-image: url(https://image.flaticon.com/icons/png/128/109/109612.png);
              display: block;
              margin: 0 auto;
              background-size: 100%;
              background-repeat: no-repeat;
          }
          .color input{ background-color:#f1f1f1;}
          .files:before {
              position: absolute;
              bottom: 10px;
              left: 0;  pointer-events: none;
              width: 100%;
              right: 0;
              height: 57px;
              content: " or drag it here. ";
              display: block;
              margin: 0 auto;
              color: #2ea591;
              font-weight: 600;
              text-transform: capitalize;
              text-align: center;
          }

          .dropdown:hover > .dropdown-menu, .dropright:hover > .dropdown-menu{
              display: block;
          }

            .btn-success{
              float: right;
            }
            .btn-danger{
              float: right;
            }
          </style>

          <style type="text/css">
            .btn-danger{ margin-right: 10px;}
          </style>

          <div class="text-center">
            <h2 class="alert text-center mt-3">Publish Karya Tulis</h2>
          </div>

          <div class="dropdown">
            <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Status
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#">Publik</a>
              <a class="dropdown-item" href="#">Non Publik</a>
            </div>
          </div>

          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">No.</th>
                <th scope="col">ID</th>
                <th scope="col">Judul</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Kelompok</th>
                <th scope="col">Sesi</th>
                <th scope="col">Cek</th>
              </tr>
              <?php
              include "functions.php";
              $query = mysqli_query ("SELECT * FROM artefak")or die(mysqli_error());
              $nomor = 1;
              while($result = mysqli_fetch_array($query_mysql)){

              }
              ?>
              <tr>
                <td><?php echo $nomor++; ?></td>
                <td><?php echo $data['id_artefak']; ?></td>
                <td><?php echo $data['judul_artefak']; ?></td>
                <td><?php echo $data['tanggal']; ?></td>
                <td><?php echo $data['id_kelompok']; ?></td>
                <td><?php echo $data['sesi']; ?></td>
               
              </tr>
            </thead>
            <tbody>

              <tr>
                <th scope="row">1</th>
                <td>ID 1</td>
                <td>Judul 1</td>
                <td>Tanggal 1</td>
                <td>Kel 1</td>
                <td>Sesi 1</td>
                <td><input type="checkbox" name="Judul 1" />&nbsp;</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>ID 2</td>
                <td>Judul 2</td>
                <td>Tanggal 2</td>
                <td>Kel 2</td>
                <td>Sesi 2</td>
                <td><input type="checkbox" name="Judul 2" />&nbsp;</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>ID 3</td>
                <td>Judul 3</td>
                <td>Tanggal 3</td>
                <td>Kel 3</td>
                <td>Sesi 3</td>
                <td><input type="checkbox" name="Judul 3" />&nbsp;</td>
              </tr>
              <tr>
                <th scope="row">4</th>
                <td>ID 4</td>
                <td>Judul 4</td>
                <td>Tanggal 4</td>
                <td>Kel 4</td>
                <td>Sesi 4</td>
                <td><input type="checkbox" name="Judul 4" />&nbsp;</td>
              </tr>
              <tr>
                <th scope="row">5</th>
                <td>ID 5</td>
                <td>Judul 5</td>
                <td>Tanggal 5</td>
                <td>Kel 5</td>
                <td>Sesi 5</td>
                <td><input type="checkbox" name="Judul 5" />&nbsp;</td>
              </tr>
          
            </tbody>
          </table>

          <button type="button" class="btn btn-success text-center">Publish</button> 
          <button type="button" class="btn btn-danger text-center">Unpublish</button>
          
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