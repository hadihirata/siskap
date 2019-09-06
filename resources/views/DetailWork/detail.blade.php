
@extends('layout.page')

@section('title', $title)

@section('content')
    <div class="row">
      <div class="col-md-12">
        <h3>{{ $title }}</h3>

        <div class="list-group mt-3">
         
		  <a href="#" class="list-group-item list-group-item-action">
		    <div class="d-flex w-100 justify-content-between">
		      <h5 class="mb-1">Nama Pekerjaan  <b>{{ $detailshow->nama }}</b></h5>
		      	
		     	
		      
		    </div>
		    <p class="mb-1">Keterangan <br><b>{{ $detailshow->keterangan }}</b></p>
		     <small>Sumber <b>{{ $detailshow->sumber }}</b></small> <br>
		     <small>Tanggal <b>{{ $detailshow->tgl }}</b></small>
		  </a>
		  
		</div>

      </div>
    </div>
@endsection
