@extends('layout/template')
@section('container')

<link rel="stylesheet" href="style/uploadLaporan.css">

      <from action="proses_upload_laporan.php" method="POST">
      <div class="text-center">
        <h2 class="alert text-center mt-3">Upload Artefak & Laporan</h2>
      </div>

      <div class="container">
          <div>
              <section>
                <form>
                  <div class="form-row align-items-center">
                    <div class="col-auto my-1">
                      <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Sesi</label>
                      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                        <option selected>Pilih Sesi</option>
                        <option value="1">Pra Seminar</option>
                        <option value="2">Seminar</option>
                        <option value="3">Pra Sidang</option>
                        <option value="4">Sidang</option>
                        <option value="4">Bimbingan</option>
                      </select>
                    </div>
                </form>
              </section>
            </div>
            
            <br>
            
            <div>
                <section>
                    <form>
                        <div class="form-row align-items-center">
                            <div class="col-auto my-1">
                                <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Sesi</label>
                                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                    <option selected>Jenis Laporan</option>
                                    <option value="1">Artefak</option>
                                    <option value="2">Laporan</option>
                                    <option value="2">Laporan Kemajuan</option>
                                </select>
                            </div>
                    </form>
                </section>
          </div>

          <br>

          <div class="form-group row">
            <label for="input namafile" class="col-sm-2 col-form-label">Pilih File</label>
            <div class="col-sm-7">
                <input type="namafile" class="form-control" id="namafile">
              </div>
              
              <div class="col-sm-3">
                  <input type="file" id="fileinput" placeholder="Browse File" class="">
              </div>
        </div>
               
          <br>

          <div class="form-group row">
              <label for="inputdeskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
              <div class="col-sm-10">
                <textarea class="form-control" name="Deskripsi" aria-label="With textarea"></textarea>
                </div>
            </div>

          <br>

          <div class="form-group row">
            <label for="input deskripsi" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
                <div><p>
                    <div class="drag"><p>
                        <div class="formdrag"><p><br>
                          <br><img src="img/upload.JPG" class="icon"></p>
                          <p>Drag your file here to upload</p>
                      </div>
                  </div></p>
              </div>
           </div>
        </div>

          <br>

          <button type="submit" href="/kirim" class="btn  btn-primary float-right ml-3 pl-pr-3">Kirim</button>
          <button type="cancel" href="/batal" class="btn btn-danger float-right pl-pr-3">Batal</button> 
            
        </div>
    </from>

@endsection 