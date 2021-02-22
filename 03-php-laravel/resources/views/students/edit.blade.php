@extends('layout/template')
@section('container')

<div class="container">  
  <form action="{{url('/students/edit')}}" method="POST">
    @csrf
    
    <div class="text-center">
      <h2 class="alert text-center mt-3">Data Mahasiswa</h2>
    </div>

            <div class="col-md-6">
              <div class="form-group row">
                <label for="id" class="col-sm-5 col-form-label">id</label>
                <div class="col-sm-6">
                  <input type="text" value="{{$students->id}}" class="form-control" name="id" id="id" required>
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group row">
                <label for="nim" class="col-sm-5 col-form-label">Nim</label>
                <div class="col-sm-6">
                <input type="text" value="{{$students->nim}}" class="form-control" name="nim" id="nim" required>
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group row">
                <label for="name_" class="col-sm-5 col-form-label">Name</label>
                <div class="col-sm-6">
                <input type="text" value="{{$students->name_}}" class="form-control" name="name_" id="name_" required>
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group row">
                <label for="email" class="col-sm-5 col-form-label">Email</label>
              <div class="col-sm-6">
              <input type="text" value="{{$students->email}}" class="form-control" name="email" id="email" required>
              </div>
               </div>
            </div>

            <div class="col-md-6">
              <div class="form-group row">
                <label for="stud_name" class="col-sm-5 col-form-label">Program Studi</label>
                <div class="col-sm-6">
                <input type="text" value="{{$students->stud_name}}" class="form-control" name="stud_name" id="stud_name" required>
                </div>
              </div>
            </div>

          <button type="submit" style="margin-left: 30%;" class="btn  btn-primary center">Update</button>
        </div>
    
  </form>
  </div>

  @endsection