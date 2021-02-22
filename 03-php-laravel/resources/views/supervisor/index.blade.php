@extends('layout/template')
@section('container') 

    <div class="container">
    <div class="text-center">
      <h2 class="alert text-center mt-3">Dosen Pembimbing</h2>
    </div>

    <div> <a href="supervisor/create" class="btn btn-primary">Add</a></div>

    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID Pembimbing</th>
      <th scope="col">Nama Pembimbing</th>
      <th scope="col">Email</th>
      <th>Aksi</th>
    </tr>
    <tbody>
    <tr>
      @foreach($supervisor as $supervisor)
      <td>{{$supervisor -> id}}</td>
      <td>{{$supervisor -> name_}}</td>
      <td>{{$supervisor -> email}}</td>
      <td>
        <a href="/supervisor/editform/{{$supervisor->id}}" class="btn btn-primary">Edit</a>
        <a href="/supervisor/delete/{{$supervisor->id}}" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data?')">Delete</a>
      </td> 
    </tr>
    @endforeach
    </tbody>
  </thead>
</table>

@endsection