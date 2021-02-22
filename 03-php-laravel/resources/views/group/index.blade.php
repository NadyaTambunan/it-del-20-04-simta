@extends('layout/template')
@section('container') 

    <div class="container">
    <div class="text-center">
      <h2 class="alert text-center mt-3">Membentuk Kelompok TA</h2>
    </div>

    <div> <a href="groups/create" class="btn btn-primary">Add</a></div>

    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID Kelompok</th>
      <th scope="col">Prodi</th>
      <th scope="col">Angkatan</th>
      <th scope="col">NIM 1</th>
      <th scope="col">Nama 1</th>
      <th scope="col">NIM 2</th>
      <th scope="col">Nama 2</th>
      <th scope="col">NIM 3</th>
      <th scope="col">Nama 3</th>
      <th>Aksi</th>
    </tr>
    <tbody>
    @foreach($group_ as $group_)
    <tr> 
      <td>{{$group_ -> id_group}}</td>
      <td>{{$group_ -> stud_name}}</td>
      <td>{{$group_ -> YEAR}}</td>
      <td>{{$group_ -> nim_1}}</td>
      <td>{{$group_ -> name_1}}</td>
      <td>{{$group_ -> nim_2}}</td>
      <td>{{$group_ -> name_2}}</td>
      <td>{{$group_ -> nim_3}}</td>
      <td>{{$group_ -> name_3}}</td>
      <td>
        <a href="group/editform/{{$group_->id_group}}" class="btn btn-primary">Edit</a>
        <a href="group/delete/{{$group_->id_group}}" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data?')">Delete</a>
      </td> 
    </tr>
    @endforeach
    </tbody>
  </thead>
</table>

@endsection
