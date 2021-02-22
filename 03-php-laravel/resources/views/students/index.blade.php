@extends('layout/template')
@section('container') 

    <div class="container">
    <div class="text-center">
      <h2 class="alert text-center mt-3">Data Mahasiswa</h2>
    </div>

    <div> <a href="/students/create" class="btn btn-primary">Add</a></div>

    <?php $nomor=1; ?>
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">id</th>
      <th scope="col">Nim</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Program Studi</th>
      <th>Aksi</th>
    </tr>
    <tbody>
    @foreach($students as $students)
    <tr> 
      <td><?php echo $nomor++;?></td>
      <td>{{$students -> id}}</td>
      <td>{{$students -> nim}}</td>
      <td>{{$students -> name_}}</td>
      <td>{{$students -> email}}</td>
      <td>{{$students -> stud_name}}</td>
      <td>
        <a href="/students/editform/{{$students-> nim}}" class="btn btn-primary">Edit</a>
        <a href="{{url('/students/delete', $students->nim)}}" class="btn btn-danger">Delete</a>
      </td> 
    </tr>
    @endforeach
    </tbody>
  </thead>
</table>

@endsection
