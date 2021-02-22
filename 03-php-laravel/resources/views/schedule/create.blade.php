@extends('layout/template')
@section('container')

<div class="container">  
  <form action="{{url('/schedule/save')}}" method="POST">
    @csrf
    
    <div class="text-center">
      <h2 class="alert text-center mt-3">Membentuk Jadwal Kelompok</h2>
    </div>

            <div class="col-md-6">
              <div class="form-group row">
                <label for="id" class="col-sm-5 col-form-label">ID Kelompok</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" name="id" id="id" required>
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group row">
                <label for="jadprasem" class="col-sm-5 col-form-label">Pra Seminar</label>
                <div class="col-sm-6">
                <input type="date" class="form-control" name="jadprasem" id="jadprasem" required>
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group row">
                <label for="jadsem" class="col-sm-5 col-form-label">Seminar</label>
                <div class="col-sm-6">
                <input type="date" class="form-control" name="jadsem" id="jadsem" required>
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group row">
                <label for="jadprasid" class="col-sm-5 col-form-label">Pra Sidang</label>
              <div class="col-sm-6">
              <input type="date" class="form-control" name="jadprasid" id="jadprasid" required>
              </div>
               </div>
            </div>

            <div class="col-md-6">
              <div class="form-group row">
                <label for="jadsid" class="col-sm-5 col-form-label">Sidang</label>
                <div class="col-sm-6">
                <input type="date" class="form-control" name="jadsid" id="jadsid" required>
                </div>
              </div>
            </div>

          <button type="submit" style="margin-left: 30%;" class="btn  btn-primary center">Save</button>
        </div>
    
  </form>
  </div>

  @endsection
