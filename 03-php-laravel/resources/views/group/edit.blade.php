@extends('layout/template')
@section('container')

  <div class="container">  
  <form action="/group/edit/{{ $group-> id_group }}" method="POST">
    @method("PUT")
    @csrf
    
    <div class="text-center">
      <h2 class="alert text-center mt-3">Membentuk Kelompok TA</h2>
    </div>

            <div class="col-md-6">
              <div class="form-group row">
                <label for="id_group" class="col-sm-5 col-form-label">ID Kelompok</label>
                <div class="col-sm-6">
                  <input type="text"  value = "{{ $group-> id_group }}" class="form-control" name="id_group" id="id_group" required>
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group row">
                <label for="stud_name" class="col-sm-5 col-form-label">Prodi</label>
                <div class="col-sm-6">
                  <input type="text"  value = "{{ $group-> stud_name }}" class="form-control" name="stud_name" id="stud_name" required>
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group row">
                <label for="YEAR" class="col-sm-5 col-form-label">Angkatan</label>
                <div class="col-sm-6">
                  <input type="text"  value = "{{ $group-> YEAR }}" class="form-control" name="YEAR" id="YEAR" required>
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group row">
                <label for="nim_1" class="col-sm-5 col-form-label">NIM Mahasiswa 1</label>
              <div class="col-sm-6">
                <input type="text"  value = "{{ $group-> nim_1 }}" class="form-control" name="nim_1" id="nim_1" required>
              </div>
               </div>
            </div>

            <div class="col-md-6">
              <div class="form-group row">
                <label for="name_1" class="col-sm-5 col-form-label">Nama Mahasiswa 1</label>
                <div class="col-sm-6">
                  <input type="text" value = "{{ $group-> name_1 }}" class="form-control" name="name_1" id="name_1" required>
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group row">
                <label for="nim_2" class="col-sm-5 col-form-label">NIM Mahasiswa 2</label>
                <div class="col-sm-6">
                  <input type="text"  value = "{{ $group-> nim_2 }}" class="form-control" name="nim_2" id="nim_2" required>
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group row">
                <label for="name_2" class="col-sm-5 col-form-label">Nama Mahasiswa 2</label>
                <div class="col-sm-6">
                  <input type="text"  value = "{{ $group-> name_2 }}" class="form-control" name="name_2" id="name_2" required>
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group row">
                <label for="nim_3" class="col-sm-5 col-form-label">NIM Mahasiswa 3</label>
                <div class="col-sm-6">
                  <input type="text"  value = "{{ $group-> nim_3 }}" class="form-control" name="nim_3" id="nim_3" >
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group row">
                <label for="name_3" class="col-sm-5 col-form-label">Nama Mahasiswa 3</label>
                <div class="col-sm-6">
                  <input type="text" value = "{{ $group-> name_3 }}" class="form-control" name="name_3" id="name_3" >
                </div>
              </div>
            </div>

          <button type="submit" style="margin-left: 30%;" class="btn  btn-primary center">Update</button>
        </div>
    
  </form>
  </div>

  @endsection