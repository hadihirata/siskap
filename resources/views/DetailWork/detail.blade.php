
@extends('layout.page')

@section('title', $title)

@section('content')
    <div class="row">
      <div class="col-md-12">
        <h3>{{ $title }}</h3>

        <div class="list-group mt-3">
         
		  <a href="#" class="list-group-item list-group-item-action warna">
		    <div class="d-flex w-100 justify-content-between">
		      <h5 class="mb-1">Nama Pekerjaan  <b>{{ $detailshow->nama }}</b></h5>
		      	
		     	
		      
		    </div>
		    <p class="mb-1">Keterangan <br>{{ $detailshow->keterangan }}</p>
		    <hr>
		     <small>Sumber <b>{{ $detailshow->sumber }}</b></small> <br>
		     <small>Tanggal <b>{{ $detailshow->tgl }}</b></small>


		  </a>
		 <a href="/detail/{{ $detailshow->id }}/create"  class="btn btn-primary "><i class="fa fa-plus"></i> Add</a>
		  
		</div>

		<h4 class="mt-3">Detail -- Revisi dan Bug --</h4>

		
		<div class="card" >
		  <div class="card-body">
		  	<p>Revisi / Bug Ke -</p>
		    <h5 class="card-title">Nama Pekerjaan</h5>
			<small>Tanggal <b></b></small> <br>
		    <small>Status <b></b></small> <br>
		    <small>Persentase <b></b></small> <br>
		    <hr>
		    <p class="mb-1">Keterangan <br><b></b></p>
		    <a href="" class="badge badge-info"><i class="fa fa-search"></i> Show</a>
            <a href="" class="badge badge-warning" ><i class="fa fa-pencil"></i> Edit</a>
            <form action="" method="post">
	           {{ csrf_field() }}
	            <input type="hidden" name="_method" value="DELETE">
	          <button type="submit" class="badge badge-danger" ><i class="fa fa-trash"></i> Delete</button>
          </form>
		  </div>
		</div>

      </div>
    </div>
@endsection
