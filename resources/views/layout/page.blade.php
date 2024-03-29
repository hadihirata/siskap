<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"  />

    <title>@yield('title')</title>
    <style type="text/css">
      .warna{
        background: rgba(0, 123, 255, 0.06);
      }
    </style>
  </head>
  <body>
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">APP SISKAP <br>
          <span style="font-size: 12px;">-> {{ Auth::user()->username }}</span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-item nav-link" href="{{ url('/work') }}">ListWork</a>
            </li>
            <li class="nav-item">
               <a class="nav-item nav-link" href="{{ url('/detail') }}">DetailWork</a>
            </li>
            <li class="nav-item">
               <a class="nav-item nav-link" href="{{ url('/domain') }}">ListDomain</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               Chart
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Periode</a>                          
                <a class="dropdown-item" href="#">Programer</a>
                <a class="dropdown-item" href="#">Jenis Pekerjaan</a>

               
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Detail</a>
              </div>
            </li>
             <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Print
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Periode</a>                          
                  <a class="dropdown-item" href="#">Programer</a>
                  <a class="dropdown-item" href="#">Jenis Pekerjaan</a>

                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Detail</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Setting
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  @role('administrator')
                  <a class="dropdown-item" href="{{ url('/user') }}">Manage User</a> 
                  @endrole   
                  @role('user')
                   <a class="dropdown-item" href="{{ url('/userprofil') }}">Manage User Profil</a> 
                  @endrole                       
                  

                 
                </div>
              </li>
              <li class="nav-item">
               <a class="nav-item nav-link" href="{{ url('/about') }}">About</a>
            </li>
          </ul>

          <ul class="navbar-nav form-inline my-2 my-lg-0">
            
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               {{ Auth::user()->name }} 
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        
                <a href="{{ route('logout') }}" class="dropdown-item"
                          onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                          Logout
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          {{ csrf_field() }}
                      </form>
              </div>
            </li>
          </ul>
          
          <!--<form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>-->
        </div>
      </div>
      </nav>

      <div  class="container mt-3">
        
        @yield('content')
        
        
      </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>