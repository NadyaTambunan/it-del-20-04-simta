@extends('layout.template')
@section('container')

<div class="container">
        <!-- list-group -->
        <h1 class="text-center">Upload Artefak & Laporan</h1>

        <section>
          <form>
            <div class="form-row align-items-center mt-4">
              <div class="col-auto my-1">
                <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Sesi</label>
                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                  <option selected>Sesi ...</option>
                  <option value="1">Pra Seminar</option>
                  <option value="2">Seminar</option>
                  <option value="3">Pra Sidang</option>
                  <option value="4">Sidang</option>
                  <option value="4">Bimbingan</option>
                </select>
              </div>
          </form>
        </section>
        
        
        <section>
          <form>
            <div class="form-row align-items-center">
              <div class="col-auto my-1">
                <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Sesi</label>
                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                  <option selected>File ...</option>
                  <option value="1">Artefak</option>
                  <option value="2">Laporan</option>
                  <option value="2">Laporan Kemajuan</option>
                </select>
              </div>
          </form>
        </section>
        

        <div class="input-group mb-3 mt-5">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroupFileAddon01">Pilih File</span>
          </div>
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
            <label class="custom-file-label" for="inputGroupFile01"></label>
          </div>
        </div>
        
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text">Deskripsi</span>
          </div>
          <textarea class="form-control" aria-label="With textarea"></textarea>
        </div>

        <section>
          <div class="form-group files color mt-3">
            <label>Upload Your File </label>
            <input type="file" class="form-control" multiple="" >
          </div>
        </section>
        <button type="submit" class="btn  btn-primary float-right ml-3 pl-pr-3">Kirim</button>
        <button type="cancel" class="btn btn-danger float-right pl-pr-3">Batal</button>

      </div>

@endsection