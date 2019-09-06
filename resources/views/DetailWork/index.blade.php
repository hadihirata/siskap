
@extends('layout.page')

@section('title', $title)

@section('content')
    <div class="row">
      <div class="col-md-12">
        <h3>{{ $title }}</h3>

        <div class="list-group mt-3">
          @foreach ($work as $w )
		  <a href="/detail/{{ $w->id}}" class="list-group-item list-group-item-action">
		    <div class="d-flex w-100 justify-content-between">
		      <h5 class="mb-1">Nama Pekerjaan <b>{{ $w->nama }}</b></h5>
		      	<small> Detail</small>
		     	
		      
		    </div>
		   
		     <small>Sumber <b>{{ $w->sumber }}</b></small> <br>
		     <small>Tangal <b>{{ $w->tgl }}</b></small>
		     <hr>
		      <p class="mb-1">Deskripsi : {{ $w->keterangan }}</p>
		  </a>
		   @endforeach
		</div>

      </div>
    </div>
@endsection
