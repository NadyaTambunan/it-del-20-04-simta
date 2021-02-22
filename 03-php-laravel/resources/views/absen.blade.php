@extends('layout/template')
@section('container') 
<div class="container">
        <h1 style="text-align: center">Absen Bimbingan</h1>

        <hr>
        <div>
            <form action="submit" method="POST">
                @csrf

                <div class="form-group row">
                    <label for="tanggal" class="col-2 col-form-label">Tanggal Bimbingan</label>
                        <div class="col-10">
                            <input class="form-control" type="date" name="tanggal" id="tanggal">
                        </div>
                </div>

                <div class="form-group row">
                    <label for="id_pembimbing" class="col-2 col-form-label">ID Pembimbing</label>
                        <div class="col-10">
                            <input class="form-control" type="text" name="id_pembimbing" id="id_pembimbing">
                        </div>
                </div>

                <p class="font-weight-bold">Mahasiswa</p>

                    <div class="form-group row">
                        <label for="prodi" class="col-2 col-form-label">Prodi</label>
                            <div class="col-10">
                                <input class="form-control" type="text" name="prodi" id="prodi">
                            </div>
                    </div>

                    <div class="form-group row">
                        <label for="id_kelompok" class="col-2 col-form-label">Kelompok</label>
                            <div class="col-10">
                                <input class="form-control" type="text" name="id_kelompok" id="id_kelompok">
                            </div>
                    </div>

                    <div class="form-group row">
                        <label for="topik" class="col-2 col-form-label">Topik</label>
                            <div class="col-10">
                                <input class="form-control" type="text" name="topik" id="topik">
                            </div>
                    </div>

                    <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>   
            </form>
        </div>

        
    </div>
    @endsection

       
    
