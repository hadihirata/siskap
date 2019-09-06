
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
		    <p class="mb-1">Keterangan <b>{{ $w->keterangan }}</b></p>
		     <small>Sumber <b>{{ $w->sumber }}</b></small> <br>
		     <small>Tangal <b>{{ $w->tgl }}</b></small>
		  </a>
		   @endforeach
		</div>

      </div>
    </div>
@endsection
