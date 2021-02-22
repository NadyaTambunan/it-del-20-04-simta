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

    <link rel="stylesheet" href="bootstrap-datepicker-master/dist/css/bootstrap-datepicker.css">

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

                <li class="nav-item {{ request()-> is('beranda') ? 'active' : ''}}">

                <a class="nav-link js-scroll-trigger" href="/index">Beranda<span class="sr-only">(current)</span></a>

                </li>

                <li class="nav-item dropdown {{ request()-> is('upload-laporan') ? 'active' : ''}}
                                             {{ request()-> is('upload-artefak') ? 'active' : ''}}" >
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Artefak & Laporan
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

                      <a class="dropdown-item" href="/upload-artefak">Upload Artefak&Laporan</a>                      
                      <a class="dropdown-item" href="/upload-laporan">Upload Laporan Kemajuan</a>                       
                  </div>
              </li>

              <li class="nav-item dropdown  {{ request()-> is('groups') ? 'active' : ''}} 
                                            {{ request()-> is('groups/lecturer') ? 'active' : ''}}
                                            {{ request()-> is('publish') ? 'active' : ''}} 
                                            {{ request()-> is('nilai') ? 'active' : ''}}
                                            {{ request()-> is('absen') ? 'active' : ''}}  ">
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
                              <a class="dropdown-item" href="/groups">Membentuk Kelompok TA</a>
                              <a class="dropdown-item" href="/groups/lecturer">Pembimbing & Penguji TA</a>
                              <a class="dropdown-item" href="/schedule/index">Jadwal Kelompok TA</a>
                              <a class="dropdown-item" href="/publish/index">Publikasi</a>

                          </div>
                      </div>
                      <div class="dropdown-divider"></div>
                      <div class="dropdown-item dropright ">
                            <!-- <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropright
                            </button> -->
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dosen Pembimbing
                            </a>
                          <div class="dropdown-menu ">
                            <!-- Dropdown menu links -->
                            <a class="dropdown-item " href="/grade">Penilaian</a>
                            <a class="dropdown-item" href="/absen">Absen</a>
                          </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown {{ request()-> is('students') ? 'active' : ''}}" >
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Data
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

                      <a class="dropdown-item" href="/supervisor">Dosen Pembimbing</a>                      
                      <a class="dropdown-item" href="/tester">Dosen Penguji</a>
                      <a class="dropdown-item" href="/students/index">Mahasiswa</a>                                            
                  </div>
              </li>
                <li class="nav-item dropdown {{ request()-> is('setting') ? 'active' : ''}} ">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user"></i> Yohanes Silitonga
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

                        <a class="dropdown-item" href="/setting">Setting</a>
                        
                        <a class="dropdown-item" href="/logout">Log out</a>
                    </div>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#notification"> <i class="fas fa-bell fa-2x"></i> </a>
                </li>
                
            </ul>
            </div>
        </div>
      </nav>

      @yield('container')
        
        <!-- Footer -->
        <footer class="page-footer font-small blue mt-5">

          <!-- Copyright -->
          <div class="footer-copyright text-center py-3">© 2020 Copyright:
            <a href="https://mdbootstrap.com/"> Sistem Informasi Manajement TA - Kelompok 04</a>
          </div>
          <!-- Copyright -->

        </footer>
        <!-- Footer -->
        
      

      

       
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="bootstrap-datepicker-master/dist/js/bootstrap-datepicker.js"></script>

    <script type="text/javascript">
      $(function () {
        $('#datepicker').datepicker({
          format: 'dd-mm-yy',
          autoclose: true,
          todayHighlight: true,
        });
      });
    </script>
  </body>
</html>
