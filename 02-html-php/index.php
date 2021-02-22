<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/055b2fddae.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="01-html-css/style/navigation.css">

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
                        <i class="fas fa-user"></i> Nama Akun,
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

                        <a class="dropdown-item" href="#">Setting</a>
                        
                        <a class="dropdown-item" href="logout.php">Log out</a>
                    </div>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#notification"> <i class="fas fa-bell fa-2x"></i> </a>
                </li>
                
            </ul>
            </div>
        </div>
      </nav>

      <main role="main" class="container">
        <div class="d-flex align-items-center p-3 my-3 text-white-50 bg-secondary rounded shadow-sm">
          <img class="rounded-circle img-thumbnail mr-3" src="01-html-css/img/Annes.JPG" alt="" width="10%">
          <div class="lh-100">
            <h5 class="mb-0 text-dark-50 lh-100">Yohanes Ray Febriyanto Silitonga</h5>
            <small><strong> NIM :</strong> 12S10826 | Information System</small>
          </div>
        </div>

        <main role="main" class="container">
          <div class="row">
            <div class="col-md-8 blog-main">
              <div class="my-3 p-3 bg-white rounded shadow-sm">
                <h4 class="border-bottom border-gray pb-2 mb-0"><i class="fas fa-university mr-2"></i>Status Akademik</h4>
                <div class="media text-muted pt-3">
                  <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                    Informasi selengkapnya mengenai status akademik silahkan menghubungi fakultas akademik masing-masing.
                  </p>
                </div>
                <div class="container">
                  <div class="container">
                    <div class="row justify-content-center mb-2">
                        <div class="col text-center">
                          <h6 class="border-bottom border-gray pb-2 mb-2 mt-3"><i class="fas fa-user-graduate mr-2"></i>Semester Akademik Sekarang</h6>
                          <h3>2020/2021 Gasal</h3>
                        </div>
                        <div class="col text-center">
                          <h6 class="border-bottom border-gray pb-2 mb-2 mt-3"><i class="fas fa-school mr-2"></i>Semester Studi</h6>
                          <h3>7</h3>
                        </div>
                    </div>
                  </div>
                  <div class="container">
                    <div class="row justify-content-center mb-2">
                        <div class="col text-center">
                          <h6 class="border-bottom border-gray pb-2 mb-2 mt-3"><i class="fas fa-graduation-cap mr-2"></i>Status Mahasiswa</h6>
                          <h1><span class="badge badge-primary pl-3 pr-3">Aktif</span></h1>
                        </div>
                    </div>
                  </div>
                </div>
                
              </div>
              

              <div class="row mb-2">
                <div class="col-md-6">
                  <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                      <strong class="d-inline-block mb-2 text-primary">Artefak</strong>
                      <h3 class="mb-0">Artikel Tugas Ahir</h3>
                      <div class="mb-1 text-muted">Nov 12</div>
                      <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                      <a href="#" class="stretched-link">Continue reading</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                      <strong class="d-inline-block mb-2 text-success">Laporan Tugas Akhir</strong>
                      <h3 class="mb-0">Revisi Tugas Akhir</h3>
                      <div class="mb-1 text-muted">Nov 01</div>
                      <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                      <a href="#" class="stretched-link">Continue reading</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                    </div>
                  </div>
                </div>
                <div class=" mx-auto">
                        <nav aria-label="Page navigation example">
                          <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                          </ul>
                        </nav>  
                </div>
              </div>

              

              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Topik Tugas Akhir</th>
                    <th scope="col">Pertemuan</th>
                    <th scope="col" rowspan="4">Jadwal</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Kecerdasan Buatan</td>
                    <td>1</td>
                    <td>Sabtu, 27 November 2020 <br>
                        Mulai : 09-00 - 11.00 wib <br>
                        Ruang : Daring (online)
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Aplikasi Pelayanan Dan Pengelolaan Data </td>
                    <td>2</td>
                    <td>Sabtu, 28 November 2020 <br>
                        Mulai : 09-00 - 11.00 wib <br>
                        Ruang : Daring (online)
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Implementasi Framework Codeignter</td>
                    <td>3</td>
                    <td>Sabtu, 29 November 2020 <br>
                        Mulai : 09-00 - 11.00 wib <br>
                        Ruang : Daring (online)
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>Integrasi Sistem Informasi Akademik</td>
                    <td>4</td>
                    <td>Sabtu, 30 November 2020 <br>
                        Mulai : 09-00 - 11.00 wib <br>
                        Ruang : Daring (online)
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">5</th>
                    <td>Analisa dan Desain Sistem </td>
                    <td>5</td>
                    <td>Sabtu, 01 Desember 2020 <br>
                        Mulai : 09-00 - 11.00 wib <br>
                        Ruang : Daring (online)
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">6</th>
                    <td>Sistem Informasi Pariwisata</td>
                    <td>6</td>
                    <td>Sabtu, 02 Desember 2020 <br>
                        Mulai : 09-00 - 11.00 wib <br>
                        Ruang : Daring (online)
                    </td>
                  </tr>
                </tbody>
              </table>


            </div><!-- /.blog-main -->
            
            

            <aside class="col-md-4 blog-sidebar">
            <div class="p-4 mb-3 bg-white rounded">
                <div class="container text-center">
                  <form action="">
                    <div class="form-group col">
                      <label for="">Online User <i class="fas fa-users"></i></label>
                    </div>
                  </form>
                  <table class="table">
                    <caption>
                      <div class="container text-center ml-4">
                        <nav aria-label="Page navigation example">
                          <ul class="pagination">
                            <li class="page-item">
                              <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                              </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                              <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                              </a>
                            </li>
                          </ul>
                        </nav>
                      </div>
                    
                  </div>
                    </caption>
                    <thead>
                      <tr>
                        <th scope="col">Nim</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Waktu</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">12S18026</th>
                        <td>Yohanes Silitonga</td>
                        <td>12:25 - 28 Nov 2020</td>
                      </tr>
                      <tr>
                        <th scope="row">12S18011</th>
                        <td>Nadya Putri Tambunan</td>
                        <td>13:01 - 01 Des 2020</td>
                      </tr>
                      <tr>
                        <th scope="row">12S18038</th>
                        <td>Naomi Simatupang  </td>
                        <td>15:02 - 03 Des 2020</td>
                      </tr>
                    </tbody>
                    
                  </table>
                           
                </div>
                
              </div>

              <div class="p-4 mb-3 bg-light rounded">
                <div class="container text-center">
                  <form action="">
                    <div class="form-group col">
                      <label for="">Tanggal Tugas Akhir <i class="fas fa-calendar-week ml-2"></i></label>
                      <input type="text" id="datepicker">
                    </div>
                  </form>
                  <table class="table">
                    <caption>
                      <div class="container text-center ml-4">
                        <nav aria-label="Page navigation example">
                          <ul class="pagination">
                            <li class="page-item">
                              <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                              </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                              <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                              </a>
                            </li>
                          </ul>
                        </nav>
                      </div>
                    
                  </div>
                    </caption>
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Tugas</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Dosen</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Revisi ke-1</td>
                        <td>28 Nov</td>
                        <td>MSS</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Laporan</td>
                        <td>01 Des</td>
                        <td>TGS</td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>Revisi ke-2</td>
                        <td>03 Des</td>
                        <td>MSS</td>
                      </tr>
                    </tbody>
                    
                  </table>
                           
                </div>
                
              </div>
        
              <div class="p-4">
                <div class="card border-primary mb-3" style="max-width: 18rem;">
                  <div class="card-header"><i class="fas fa-calendar-week mr-2"></i>Kalender Akademik</div>
                  <div class="card-body">
                    <h5 class="card-title"><a class="text-primary" href="">TA 2020/2021 Gasal</a></h5>
                  </div>
                </div>
                <div class="card border-secondary mb-3" style="max-width: 18rem;">
                  <div class="card-header"><i class="far fa-calendar-alt mr-2"></i>Jadwal Kuliah</div>
                  <div class="card-body ">
                    <h5 class="card-title"><a class="text-secondary" href="">Jadwal Kuliah TA 2020/2021 Gasal</a></h5>
                  </div>  
                </div>
                <div class="card border-success mb-3" style="max-width: 18rem;">
                  <div class="card-header"><i class="fas fa-calendar-check mr-2"></i>Jadwal Tugas Akhir</div>
                  <div class="card-body ">
                    <h5 class="card-title"><a class="text-success" href="">Jadwal Bimbingan Tugas Akhir TA 2020/2021 Gasal</a></h5>
                  </div>
                </div>
              </div>
        
            </aside><!-- /.blog-sidebar -->
        
          </div><!-- /.row -->
        
        </main><!-- /.container -->
        
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