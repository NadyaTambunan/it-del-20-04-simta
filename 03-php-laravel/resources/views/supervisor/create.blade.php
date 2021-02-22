@extends('layout/template')
@section('container')

  <div class="container">  
  <form action="/simpan" method="POST">
    @csrf
    
    <div class="text-center">
      <h2 class="alert text-center mt-3">Data Dosen Pembimbing</h2>
    </div>

            <div class="col-md-6">
              <div class="form-group row">
                <label for="id" class="col-sm-5 col-form-label">ID Pembimbing</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" name="id" id="id" required>
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group row">
                <label for="name_" class="col-sm-5 col-form-label">Nama Pembimbing</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" name="name_" id="name_" required>
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group row">
                <label for="email" class="col-sm-5 col-form-label">Email</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" name="email" id="email" required>
                </div>
              </div>
            </div>

            <div class="col-md-6">
                <div class="form-group row">
                  <label for="pass" class="col-sm-5 col-form-label">Password</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="pass" id="pass" required>
                  </div>
                </div>
              </div>


          <button type="submit" style="margin-left: 30%;" class="btn  btn-primary center">Save</button>
        </div>
    
  </form>
  </div>

  @endsection