<?php
$artifact = App\Models\artefak::all();
?>

@extends('layout/template')
@section('container')
      
      <div class="container">
        <form action="/action_page.php">

              <div class="text-center">
              <h2 class="alert text-center mt-3">Publish Karya Tulis</h2>
              </div>

              <div class="dropdown">
                <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Status
                </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Public</a>
                    <a class="dropdown-item" href="#">Non Public</a>
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

                  <tbody>
                    <tr>
                      <?php $no = 0;?>
                      @foreach($artifact as $artifact)
                      <?php $no++ ;?>
                      <td>{{$no}}</td>
                      <td>{{$artifact -> id_artefak}}</td>
                      <td>{{$artifact -> judul_artefak}}</td>
                      <td>{{$artifact -> tanggal}}</td>
                      <td>{{$artifact -> id_kelompok}}</td>
                      <td>{{$artifact -> sesi}}</td>
                      <td><input type="checkbox" name="checkbox[]" value="<?php echo $$artifact>id_artefak;?>"></td>
                    </tr>
                      @endforeach
                  </tbody>
                </thead>
              </table>

              <button type="button" class="btn btn-success text-center">Publish</button> 
              <button type="button" class="btn btn-danger text-center">Unpublish</button>
              

            </form>
          </div>
      </div>
@endsection