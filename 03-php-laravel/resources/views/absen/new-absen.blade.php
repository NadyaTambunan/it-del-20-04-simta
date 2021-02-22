@extends('layout/template')
@section('container') 
<div class="container">
        <h1 style="text-align: center">Absen Bimbingan</h1>

        <hr>
        <div>
            <form action="/save" method="POST">
                @csrf

                <div class="form-group row">
                    <label for="absent_date" class="col-2 col-form-label">Tanggal Bimbingan</label>
                        <div class="col-10">
                            <input class="form-control" type="date" name="absent_date" id="absent_date">
                        </div>
                </div>

                <div class="form-group row">
                    <label for="id_sup" class="col-2 col-form-label">ID Pembimbing</label>
                        <div class="col-10">
                            <input class="form-control" type="text" name="id_sup" id="id_sup">
                        </div>
                </div>

                <p class="font-weight-bold">Mahasiswa</p>

                    <div class="form-group row">
                        <label for="stud_name" class="col-2 col-form-label">Prodi</label>
                            <div class="col-10">
                                <input class="form-control" type="text" name="stud_name" id="stud_name">
                            </div>
                    </div>

                    <div class="form-group row">
                        <label for="id_group" class="col-2 col-form-label">ID Kelompok</label>
                            <div class="col-10">
                                <input class="form-control" type="text" name="id_group" id="id_group">
                            </div>
                    </div>

                    <div class="form-group row">
                        <label for="topic" class="col-2 col-form-label">Topik</label>
                            <div class="col-10">
                                <input class="form-control" type="text" name="topic" id="topic">
                            </div>
                    </div>

                    <button type="submit" class="btn btn-primary btn-lg btn-block">Save</button>   
            </form>
        </div>

        
    </div>
    @endsection

       
    
