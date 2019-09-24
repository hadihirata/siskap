
@extends('layout.page')

@section('title', $title)

@section('content')
    <div class="row">
      <div class="col-md-12">
        <h3>{{ $title }}</h3>


        <form action="/work" method="post" >

         {{ csrf_field() }}
         <input type="hidden" name="id_pekerjaan" value="{{ $work->id }}">
          
          <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Tanggal</label>
            <div class="col-sm-6">
              <input type="date" name="tgl" class="form-control" >
            </div>
          </div>
          
          <div class="form-group row">
            <label  class="col-sm-2 col-form-label">Status Pengerjaan</label>
            <div class="col-sm-4">
               <select class="custom-select my-1 mr-sm-2" name="status_pengerjaan">
                  <option selected>Choose...</option>
                  <option value="new">New</option>
                  <option value="revisi">Revisi</option>
                  <option value="publish">Publish</option>
                  
                </select>

            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Persentase Pengerjaan</label>
            <div class="col-sm-4">
              <input type="text" name="persentase_pengerjaan" class="form-control" value="" >
              
            </div>
          </div>
          
          <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Kerangan</label>
            <div class="col-sm-10">
             <textarea class="form-control" name="keterangan" placeholder="Required example textarea"></textarea>
            </div>
          </div>
          <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Upload Gambar</label>
            <div class="col-sm-3">
             <div class="custom-file">
              <input type="file" class="custom-file-input" id="validatedCustomFile">
              <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
              <div class="invalid-feedback">Example invalid custom file feedback</div>
            </div>
            </div>
          </div>
          <div class="form-group row">
           
            <div class="col-sm-12">
              <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i>  Save</button>
              <button type="cancel" class="btn btn-danger"><i class="fa fa-remove"></i>  Cancel</button>
              <a href="{{ url('/detail') }}" >Back List</a>
            </div>
          </div>
        </form>

      </div>
    </div>
@endsection
