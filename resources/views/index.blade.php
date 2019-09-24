
@extends('layout.page')

@section('title', $title)

@section('content')
    <div class="row">
      <div class="col-md-12">
        <h2>Aplikasi Rekap Pekerjaan</h2>
        <hr>

        <h3>User</h3>
        <ul class="list-group">
		  <li class="list-group-item d-flex justify-content-between align-items-center">
		   	<a href="">Joni Trimulya</a>
		    <span class="badge badge-primary badge-pill">14</span>
		  </li>
		  <li class="list-group-item d-flex justify-content-between align-items-center">
		    <a href="">Taufik</a>
		    <span class="badge badge-primary badge-pill">2</span>
		  </li>
		  <li class="list-group-item d-flex justify-content-between align-items-center">
		    <a href="">Muhammad Ramadhan</a>
		    <span class="badge badge-primary badge-pill">1</span>
		  </li>
		   <li class="list-group-item d-flex justify-content-between align-items-center">
		    <a href="">Hadi</a>
		    <span class="badge badge-primary badge-pill">1</span>
		  </li>
		</ul>
		<br>
		 <h3>Work</h3>
        <ul class="list-group">
		  <li class="list-group-item d-flex justify-content-between align-items-center">
		   	<a href="">Website</a>
		    <span class="badge badge-primary badge-pill">14</span>
		  </li>
		  <li class="list-group-item d-flex justify-content-between align-items-center">
		    <a href="">Aplikasi</a>
		    <span class="badge badge-primary badge-pill">2</span>
		  </li>
		  
		</ul>
      </div>

     
      </div>
    </div>
@endsection
