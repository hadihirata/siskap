
@extends('layout.page')

@section('title', $title)

@section('content')
    <div class="row">
      <div class="col-md-12">
        <h3>{{ $title }}</h3>
        <a href="/work/create"  class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Add</a>
        <a href=""  class="btn btn-secondary btn-sm"><i class="fa fa-copy"></i> Print</a>
        
        @if (session('status'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>{{ session('status') }}</strong> <br>You should check in on some of those fields below.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            
        @endif

        <table class="table mt-3">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Pekerjaan</th>
                <th scope="col">Sumber</th>
                <th scope="col">Tanggal</th>
                <th scope="col" style="width: 150px;">Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($work as $w )
              <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $w->nama }}</td>
                <td>{{ $w->sumber }}</td>
                <td>{{ $w->tgl }}</td>
                <td>
                  <a href="/work/{{ $w->id}}" class="badge badge-primary"><i class="fa fa-search"></i> Show</a>
                	<a href="/work/{{ $w->id}}" class="badge badge-success"><i class="fa fa-pencil"></i> Edit</a>
                	<a href="" class="badge badge-danger"><i class="fa fa-trash"></i> Delete</a>
                </td>
              </tr>
              @endforeach
              
            </tbody>
          </table>

      </div>
    </div>
@endsection
