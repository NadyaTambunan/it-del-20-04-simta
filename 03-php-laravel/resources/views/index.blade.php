@extends('layout/template')
@section('container')

        <div class="container d-flex align-items-center p-3 my-3 text-white-50 bg-secondary rounded shadow-sm">
          <img class="rounded-circle img-thumbnail mr-3" src="{{('style/img/Annes.JPG')}}" alt="" width="10%">

          <div class="lh-100">
            @foreach($user as $user)
            <h5 class="mb-0 text-dark-50 lh-100">{{$user -> name}}</h5>
            <small><strong> NIM :</strong> {{$user -> username}} | Information System</small>
            @endforeach
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
        
        @endsection