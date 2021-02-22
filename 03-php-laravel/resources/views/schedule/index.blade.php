@extends('layout/template')
@section('container') 

    <div class="container">
    <div class="text-center">
      <h2 class="alert text-center mt-3">Jadwal Kelompok</h2>
    </div>

    <div> <a href="/schedule/create" class="btn btn-primary">Add</a></div>

    <?php $nomor=1; ?>
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">ID Kelompok</th>
      <th scope="col">Pra Seminar</th>
      <th scope="col">Seminar</th>
      <th scope="col">Pra Sidang</th>
      <th scope="col">Sidang</th>
      <th>Aksi</th>
    </tr>
    <tbody>
    @foreach($group_schedules as $group_schedule)
    <tr> 
      <td><?php echo $nomor++;?></td>
      <td>{{$group_schedule -> id}}</td>
      <td>{{$group_schedule -> pra_seminar}}</td>
      <td>{{$group_schedule -> seminar}}</td>
      <td>{{$group_schedule -> pra_sidang}}</td>
      <td>{{$group_schedule -> sidang}}</td>
      <td>
        <a href="/schedule/editform/{{$group_schedule-> id}}" class="btn btn-primary">Edit</a>
        <a href="{{url('/schedule/delete', $group_schedule->id)}}" class="btn btn-danger">Delete</a>
      </td> 
    </tr>
    @endforeach
    </tbody>
  </thead>
</table>

@endsection
