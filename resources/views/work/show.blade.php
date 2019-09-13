
@extends('layout.page')

@section('title', $title)

@section('content')
    <div class="row">
      <div class="col-md-12">
        <h3>{{ $title }}</h3>

        <form>
          
          <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Nama/Aplikasi</label>
            <div class="col-sm-10">
              <input type="text" name="nama" class="form-control-plaintext" placeholder="Masukkan Nama/Judul Pekerjaan/Aplikasi" value="{{ $work->nama }}" >
            </div>
          </div>
          <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Tanggal</label>
            <div class="col-sm-6">
              <input type="type" name="tgl" class="form-control-plaintext" value="{{ $work->tgl }}">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Sumber</label>
            <div class="col-sm-4">
              <input type="text" name="sumber" class="form-control-plaintext" value="{{ $work->sumber }}" >
            </div>
          </div>
          <div class="form-group row">
            <label  class="col-sm-2 col-form-label">Jenis Pekerjaan</label>
            <div class="col-sm-4">
               
                <input type="text" name="jenis_pekerjaan" class="form-control-plaintext" value="{{ $work->jenis_pekerjaan }}">
            </div>
          </div>
          <div class="form-group row">
            <label  class="col-sm-2 col-form-label">Programer</label>
            <div class="col-sm-4">
               <input type="text" name="programer" class="form-control-plaintext" value="{{ $work->programer }}">

            </div>
          </div>
          <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Kerangan</label>
            <div class="col-sm-10">
             <input type="text" name="keterangan" class="form-control-plaintext" value="{{ $work->keterangan }}">
            </div>
          </div>
        </form>

      </div>
    </div>
@endsection
