<?php
$kelompok = App\Models\absen::all();
?>

@extends('layout/template')
@section('container') 

    <div class="container">
    <div class="text-center">
      <h2 class="alert text-center mt-3">Absensi Bimbingan
                                            Kelompok TA</h2>
    </div>

    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Tanggal</th>
      <th scope="col">ID Pembimbing</th>
      <th scope="col">Prodi</th>
      <th scope="col">ID Kelompok</th>
      <th scope="col">Topik</th>
    </tr>
    <tbody>
    <tr>
      @foreach($kelompok as $kelompok)
      <td>{{$kelompok -> tanggal}}</td>
      <td>{{$kelompok -> id_pembimbing}}</td>
      <td>{{$kelompok -> prodi}}</td>
      <td>{{$kelompok -> id_kelompok}}</td>
      <td>{{$kelompok -> topik}}</td>
    </tr>
    @endforeach
    </tbody>
  </thead>
</table>

@endsection