@extends('layout/template')
@section('container') 

    <div class="container">
    <div class="text-center">
      <h2 class="alert text-center mt-3">Data Dosen Penguji</h2>
    </div>

    <div> <a href="tester/create" class="btn btn-primary">Add</a></div>

    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID Penguji</th>
      <th scope="col">Nama Penguji</th>
      <th scope="col">Email</th>
      <th>Aksi</th>
    </tr>
    <tbody>
    <tr>
      @foreach($tester as $tester)
      <td>{{$tester -> id}}</td>
      <td>{{$tester -> name_}}</td>
      <td>{{$tester -> email}}</td>
      <td>
        <a href="/tester/editform/{{$tester->id}}" class="btn btn-primary">Edit</a>
        <a href="/tester/delete/{{$tester->id}}" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data?')">Delete</a>
      </td> 
    </tr>
    @endforeach
    </tbody>
  </thead>
</table>

@endsection