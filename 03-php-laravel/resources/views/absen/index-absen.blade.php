@extends('layout/template')
@section('container')
    <div class="container">
    <div class="text-center">
      <h2 class="alert text-center mt-3">Absensi</h2>
    </div>
    <div> <a href="absen/new-absen" class="btn btn-primary">Add</a></div>
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Tanggal Bimbingan</th>
      <th scope="col">ID Pembimbing</th>
      <th scope="col">Prodi</th>
      <th scope="col">ID Kelompok</th>
      <th scope="col">Topik</th>
    </tr>
    <tbody>
    <tr>
      @foreach($absen as $absen)
      <td>{{$absen -> absent_date}}</td>
      <td>{{$absen -> id_sup}}</td>
      <td>{{$absen -> stud_name}}</td>
      <td>{{$absen -> id_group}}</td>
      <td>{{$absen -> topic}}</td>
    </tr>
    @endforeach
    </tbody>
  </thead>
</table>

@endsection