
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
		    <p class="mb-1">Keterangan <br>{{ $detailshow->keterangan }}</p>
		    <hr>
		     <small>Sumber <b>{{ $detailshow->sumber }}</b></small> <br>
		     <small>Tanggal <b>{{ $detailshow->tgl }}</b></small>
		  </a>
		  
		</div>

		<h4 class="mt-3">Detail -- Revisi dan Bug --</h4>

		<div class="list-group mt-3">
         	<p>Revisi / Bug Ke -</p>	
		  <a href="#" class="list-group-item list-group-item-action">
		    <div class="d-flex w-100 justify-content-between">
		      <h5 class="mb-1">Nama Pekerjaan  <b></b></h5>
		      	
		     	
		      
		    </div>
		    
		     <small>Tanggal <b></b></small> <br>
		     <small>Status <b></b></small> <br>
		     <small>Persentase <b></b></small> <br>
		     <hr>
		     <p class="mb-1">Keterangan <br><b></b></p>
		  </a>
		  
		</div>

      </div>
    </div>
@endsection
