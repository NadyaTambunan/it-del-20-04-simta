@extends('layout/template')
@section('container')
    
  <form action="save" method="POST">
    @csrf
    <div class="container">
        <div class="row">
                <div class="col-2">
                
                </div>
                <div class="col-md-8">
                <div class="text-center">
                    <h2 class="alert text-center mt-4">Setting</h2>
                </div>
                        <div class="form-group">
                            <label for="inputAddress">Nama Depan</label>
                            <input type="text" class="form-control" id="inputFirstName" placeholder="Yohanes Ray Febriyanto">
                        </div>
                        <div class="form-group">
                            <label for="inputAddress2">Nama Belakang</label>
                            <input type="text" class="form-control" id="inputLastName" placeholder="Silitonga">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                            <label for="inputEmail">Email</label>
                            <input type="email" class="form-control" id="inputEmail"  placeholder="yohanesrfsilitonga@gmail.com">
                            </div>
                            <div class="form-group col-md-6">
                            <label for="inputPassword4">Password</label>
                            <input type="password" class="form-control" id="inputPassword">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Nomor HP</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="085297687678">
                        </div>
                        <div class="form-group">
                            <label for="inputAddress2">Alamat</label>
                            <input type="text" class="form-control" id="inputAddress2" placeholder="Laguboti St.">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                            <label for="inputCity">Kota</label>
                            <input type="text" class="form-control" id="inputKota">
                            </div>
                            <div class="form-group col-md-4">
                            <label for="inputCity">Kabupaten</label>
                            <input type="text" class="form-control" id="inputKabupaten">
                            </div>
                            <div class="form-group col-md-2">
                            <label for="inputZip">Kode Pos</label>
                            <input type="text" class="form-control" id="inputZip">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck">
                            <label class="form-check-label" for="gridCheck">
                                Check me out
                            </label>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                </div>
                <div class="col-2">

                </div>
            </div>
    
    </div>
  </form>

  @endsection