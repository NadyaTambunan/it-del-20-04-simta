@extends('layout/template')
@section('container')
    <div class="container">
    <div class="text-center">
      <h2 class="alert text-center mt-3">Nilai Kelompok TA</h2>
    </div>
    <div> <a href="grade/new-grade" class="btn btn-primary">Add</a></div>
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID Kelompok</th>
      <th scope="col">Prodi</th>
      <th scope="col">Sesi</th>
      <th scope="col">Komponen 1</th>
      <th scope="col">Komponen 2</th>
      <th scope="col">Komponen 3</th>
      <th scope="col">Hasil Akhir</th>
    </tr>
    <tbody>
    <tr>
      @foreach($grade as $grade)
      <td>{{$grade -> id_group}}</td>
      <td>{{$grade -> stud_name}}</td>
      <td>{{$grade -> sesion_name}}</td>
      <td>{{$grade -> komp_1}}</td>
      <td>{{$grade -> komp_2}}</td>
      <td>{{$grade -> komp_3}}</td>
      <td>{{$grade -> result}}</td>
    </tr>
    @endforeach
    </tbody>
  </thead>
</table>

@endsection