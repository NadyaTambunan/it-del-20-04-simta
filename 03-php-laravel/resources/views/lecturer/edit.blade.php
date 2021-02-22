@extends('layout/template')
@section('container')

  <div class="container">  
  <form action="/lecturer/edit/{{$lecturer->id}}" method="POST">
    @method("PUT")
    @csrf
    
    <div class="text-center">
      <h2 class="alert text-center mt-3">Menentukan Pembimbing & Penguji Kelompok</h2>
    </div>

            <div class="col-md-6">
              <div class="form-group row">
                <label for="id_group" class="col-sm-5 col-form-label">ID Kelompok</label>
                <div class="col-sm-6">
                  <input type="text" value = "{{ $lecturer-> id_group }}" class="form-control" name="id_group" id="id_group" required>
                </div>
              </div>
            </div>

            <div class="col-md-6"><p class="font-weight-bold">Dosen Pembimbing</p></div>

            <div class="col-md-6">
              <div class="form-group row">
                <label for="idsup_1" class="col-sm-5 col-form-label">ID Dosen 1</label>
                <div class="col-sm-6">
                  <input type="text" value = "{{ $lecturer-> idsup_1 }}" class="form-control" name="idsup_1" required>
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group row">
                <label for="sup_name_1" class="col-sm-5 col-form-label">Nama Dosen 1</label>
                <div class="col-sm-6">
                  <input type="text" value = "{{ $lecturer-> sup_name_1 }}" class="form-control" name="sup_name_1" required>
                </div>
              </div>
            </div>
            
            <div class="col-md-6">
              <div class="form-group row">
                <label for="idsup_2" class="col-sm-5 col-form-label">ID Dosen 2</label>
              <div class="col-sm-6">
                <input type="text" value = "{{ $lecturer-> idsup_2 }}" class="form-control" name="idsup_2">
              </div>
               </div>
            </div>

            <div class="col-md-6">
              <div class="form-group row">
                <label for="sup_name_2" class="col-sm-5 col-form-label">Nama Dosen 2</label>
                <div class="col-sm-6">
                  <input type="text" value = "{{ $lecturer-> sup_name_2 }}" class="form-control" name="sup_name_2">
                </div>
              </div>
            </div>

            <div class="col-md-6"><p class="font-weight-bold">Dosen Penguji</p></div>

            <div class="col-md-6">
              <div class="form-group row">
                <label for="idtes_1" class="col-sm-5 col-form-label">ID Dosen 1</label>
                <div class="col-sm-6">
                  <input type="text" value = "{{ $lecturer-> idtes_1 }}" class="form-control" name="idtes_1">
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group row">
                <label for="tes_name_1" class="col-sm-5 col-form-label">Nama Dosen 1</label>
                <div class="col-sm-6">
                  <input type="text" value = "{{ $lecturer-> tes_name_1 }}" class="form-control" name="tes_name_1"  required>
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group row">
                <label for="idtes_2" class="col-sm-5 col-form-label">ID Dosen 2</label>
                <div class="col-sm-6">
                  <input type="text" value = "{{ $lecturer-> idtes_2 }}" class="form-control" name="idtes_2" required>
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group row">
                <label for="tes_name_2" class="col-sm-5 col-form-label">Nama Dosen 2</label>
                <div class="col-sm-6">
                  <input type="text" value = "{{ $lecturer-> tes_name_2 }}"class="form-control" name="tes_name_2" required >
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group row">
                <label for="idtes_3" class="col-sm-5 col-form-label">ID Dosen 3</label>
                <div class="col-sm-6">
                  <input type="text" value = "{{ $lecturer-> idtes_3 }}" class="form-control" name="idtes_3">
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group row">
                <label for="tes_name_3" class="col-sm-5 col-form-label">Nama Dosen 3</label>
                <div class="col-sm-6">
                  <input type="text" value = "{{ $lecturer-> tes_name_3 }}" class="form-control" name="tes_name_3">
                </div>
              </div>
            </div>

          <button type="submit" style="margin-left: 30%;" class="btn  btn-primary center">Update</button>
        </div>
    
  </form>
  </div>

  @endsection