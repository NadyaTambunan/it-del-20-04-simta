@extends('layout/template')
@section('container')

      <div class="container">
        <h1 style="text-align: center"> Pemberian Nilai </h1>
        <hr>
        <form action ="/save" method = "POST">
        @csrf
        <div class="form-group row">
                        <label for="stud_name" class="col-sm-2 col-form-label">Prodi</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="stud_name" name="stud_name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="sesion_name" class="col-sm-2 col-form-label">Sesi</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="sesion_name" name="sesion_name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="id_group" class="col-sm-2 col-form-label">ID Kelompok</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="id_group" name="id_group">
                        </div>
                    </div>
            <p class="font-weight-bold">Penilaian</p>
            <div>
            <div class="form-group row">
                <label for="komp_1" class="col-sm-2 col-form-label">Komponen 1</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="komp_1" name="komp_1">
                </div>
            </div>
            <div class="form-group row">
                <label for="komp_2" class="col-sm-2 col-form-label">Komponen 2</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="komp_2" name="komp_2">
                </div>
            </div>
            <div class="form-group row">
                <label for="komp_3" class="col-sm-2 col-form-label">Komponen 3</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="komp_3" name="komp_3">
                </div>
            </div>
            <div class="form-group row">
                <label for="result" class="col-sm-2 col-form-label">Hasil Akhir</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name="result" id="result">
                </div>
            </div>
            <br>
            <div>
                <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
            </div>
            </div>

        </form>
      </div>
@endsection