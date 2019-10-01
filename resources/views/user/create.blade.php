
@extends('layout.page')

@section('title', $title)

@section('content')
    <div class="row">
      <div class="col-md-12">
        <h3>{{ $title }}</h3>


        <form action="/work" method="post" >

         {{ csrf_field() }}
          <div class="form-group row ">
            <label for="staticEmail" class="col-sm-2 col-form-label">Username</label>
            <div class="col-sm-4">
              <input type="text" name="username" class="form-control {{ $errors->has('username') ? 'is-invalid':'' }}" placeholder="Masukkan Username" value="{{ old('username') }}">
              <p class="text-danger">{{ $errors->first('username') }}</p>
            </div>
          </div>
          <div class="form-group row ">
            <label for="staticEmail" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
              <input type="text" name="name" class="form-control {{ $errors->has('name') ? 'is-invalid':'' }}" placeholder="Masukkan Name" value="{{ old('name') }}">
              <p class="text-danger">{{ $errors->first('name') }}</p>
            </div>
          </div>
          <div class="form-group row ">
            <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
              <input type="text" name="email" class="form-control {{ $errors->has('email') ? 'is-invalid':'' }}" placeholder="Masukkan Name" value="{{ old('email') }}">
              <p class="text-danger">{{ $errors->first('email') }}</p>
            </div>
          </div>

           <div class="form-group row">
            <label  class="col-sm-2 col-form-label">Level</label>
            <div class="col-sm-4">
               <select class="custom-select my-1 mr-sm-2" name="level">
                  <option selected>Choose...</option>
                  <option value="admin">Admin</option>
                  <option value="user">User</option>
                 
                </select>

            </div>
          </div>
        
          <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-4">
              <input type="text" name="password" class="form-control {{ $errors->has('password') ? 'is-invalid':'' }}" value="{{ old('password') }}" >
              <p class="text-danger">{{ $errors->first('password') }}</p>
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
