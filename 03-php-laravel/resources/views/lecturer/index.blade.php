@extends('layout/template')
@section('container') 

    <div class="container">
    <div class="text-center">
      <h2 class="alert text-center mt-3">Pembimbing & Penguji TA</h2>
    </div>

    <div> <a href="lecturer/create" class="btn btn-primary">Add</a></div>

    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID Kelompok</th>
      <th scope="col">Pembimbing 1</th>
      <th scope="col">Pembimbing 2</th>
      <th scope="col">Penguji 1</th>
      <th scope="col">Penguji 2</th>
      <th scope="col">Penguji 3</th>
      <th>Aksi</th>
    </tr>
    <tbody>
    @foreach($lecturer as $lecturer)
    <tr> 
      <td>{{$lecturer -> id_group}}</td>
      <td>{{$lecturer -> sup_name_1}}</td>
      <td>{{$lecturer-> sup_name_2}}</td>
      <td>{{$lecturer -> tes_name_1}}</td>
      <td>{{$lecturer -> tes_name_2}}</td>
      <td>{{$lecturer -> tes_name_3}}</td>
      <td>
        <a href="/lecturer/editform/{{$lecturer->id}}" class="btn btn-primary">Edit</a>
        <a href="/lecturer/delete/{{$lecturer->id}}" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data?')">Delete</a>
      </td> 
    </tr>
    @endforeach
    </tbody>
  </thead>
</table>

@endsection
