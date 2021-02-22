@extends('layout/template')
@section('container') 

    <div class="container">
    <div class="text-center">
      <h2 class="alert text-center mt-3">Publish Laporan Tugas Akhir</h2>
    </div>

    <?php $nomor=1; ?>
    <table class="table table-striped">
  <thead>
    <tr>
    <th scope="col">No</th>
      <th scope="col">Id</th>
      <th scope="col">Description</th>
      <th scope="col">Session</th>
      <th>Aksi</th>
    </tr>
    <tbody>
    @foreach($artifact as $artifact)
    <tr> 
      <td><?php echo $nomor++;?></td>
      <td>{{$artifact -> id}}</td>
      <td>{{$artifact -> description}}</td>
      <td>{{$artifact -> sesion_name}}</td>
      <td>
        <a href="/publish/editform/{{$artifact-> id}}" class="btn btn-primary">Edit</a>
        <a href="{{url('/publish/delete', $artifact->id)}}" class="btn btn-danger">Delete</a>
      </td> 
    </tr>
    @endforeach
    </tbody>
  </thead>
</table>

@endsection