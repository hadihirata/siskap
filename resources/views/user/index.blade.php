
@extends('layout.page')

@section('title', $title)

@section('content')
    <div class="row">
      <div class="col-md-12">
        <h3>{{ $title }}</h3>
        <a href="/user/create"  class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Add User</a>
        <!--<a href=""  class="btn btn-secondary btn-sm"><i class="fa fa-copy"></i> Print</a>-->
        
        @if (session('status'))
            <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
              <strong>{{ session('status') }}</strong> <br> List Work 
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            
        @endif

        <table class="table mt-3">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">level</th>
                <th scope="col" style="width:160px;" >Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($user as $w )
              <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $w->username }}</td>
                <td>{{ $w->email }}</td>
                <td>{{ $w->level }}</td>
                <td>
                  <!--<a href="/user/{{ $w->id}}" class="badge badge-info"><i class="fa fa-search"></i> Show</a>-->

                	<a href="/user/{{ $w->id}}/edit" class="btn btn-warning btn-sm" style="float: left;margin-right: 5px;"><i class="fa fa-pencil"></i> Edit</a>  
                	<!--<a href="" class="badge badge-danger"><i class="fa fa-trash"></i> Delete</a>-->
                  <form action="/user/{{ $w->id}}" method="post" >
                   {{ csrf_field() }}
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</button>
                  </form>
                </td>
              </tr>
              @endforeach
              
            </tbody>
          </table>

      </div>
    </div>
@endsection
