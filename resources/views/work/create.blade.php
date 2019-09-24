
@extends('layout.page')

@section('title', $title)

@section('content')
    <div class="row">
      <div class="col-md-12">
        <h3>{{ $title }}</h3>


        <form action="/work" method="post" >

         {{ csrf_field() }}
          <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
              <input type="text" name="nama" class="form-control {{ $errors->has('nama') ? 'is-invalid':'' }}" placeholder="Masukkan Nama/Judul Pekerjaan/Aplikasi" value="{{ old('nama') }}">
              <p class="text-danger">{{ $errors->first('nama') }}</p>
            </div>
          </div>
          <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Tanggal</label>
            <div class="col-sm-6">
              <input type="date" name="tgl" class="form-control" >
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Sumber</label>
            <div class="col-sm-4">
              <input type="text" name="sumber" class="form-control {{ $errors->has('sumber') ? 'is-invalid':'' }}" value="{{ old('sumber') }}" >
              <p class="text-danger">{{ $errors->first('sumber') }}</p>
            </div>
          </div>
          <div class="form-group row">
            <label  class="col-sm-2 col-form-label">Jenis Pekerjaan</label>
            <div class="col-sm-4">
               <select class="custom-select my-1 mr-sm-2" name="jenis_pekerjaan">
                  <option selected>Choose...</option>
                  <option value="aplikasi">Aplikasi</option>
                  <option value="website">Website</option>
                  <option value="lain-lain">Lain-lain (Flash,ppt ..)</option>
                </select>

            </div>
          </div>
          <div class="form-group row">
            <label  class="col-sm-2 col-form-label">Programer</label>
            <div class="col-sm-4">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="programer" value="joni">
                  <label class="form-check-label" for="gridCheck1">
                    Joni Trimulya
                  </label>

                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="programer" value="taufik">
                  <label class="form-check-label" for="gridCheck1">
                    Taufik
                  </label>
                  
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="programer" value="ramadhan">
                  <label class="form-check-label" for="gridCheck1">
                    Ramadhan
                  </label>
                  
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="programer" value="hadi">
                  <label class="form-check-label" for="gridCheck1">
                    Hadi
                  </label>
                  
                </div>

            </div>
          </div>
          <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Kerangan</label>
            <div class="col-sm-10">
             <textarea class="form-control" name="keterangan" placeholder="Required example textarea"></textarea>
            </div>
          </div>
          <div class="form-group row">
           
            <div class="col-sm-12">
              <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i>  Save</button>
              <button type="cancel" class="btn btn-danger"><i class="fa fa-remove"></i>  Cancel</button>
              <a href="{{ url('/work') }}" >Back List</a>
            </div>
          </div>
        </form>

      </div>
    </div>
@endsection
