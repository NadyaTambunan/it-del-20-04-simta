@extends('layout/template')
@section('container')

<div class="container">  
  <form action="{{url('/publish/edit')}}" method="POST">
    @csrf
    
    <div class="text-center">
      <h2 class="alert text-center mt-3">Publish Laporan Tugas Akhir</h2>
    </div>

            <div class="col-md-6">
              <div class="form-group row">
                <label for="id" class="col-sm-5 col-form-label">Id</label>
                <div class="col-sm-6">
                  <input type="text" value="{{$artifact->id}}" class="form-control" name="id" id="id" required>
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group row">
                <label for="description" class="col-sm-5 col-form-label">Description</label>
                <div class="col-sm-6">
                  <input type="text" value="{{$artifact->description}}" class="form-control" name="description" id="description" required>
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group row">
                <label for="sesion_name" class="col-sm-5 col-form-label">Session</label>
                <div class="col-sm-6">
                <input type="text" value="{{$artifact->sesion_name}}" class="form-control" name="sesion_name" id="sesion_name" required>
                </div>
              </div>
            </div>

          <button type="submit" style="margin-left: 30%;" class="btn  btn-primary center">Update</button>
        </div>
    
  </form>
  </div>

  @endsection