<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <title>@yield('title')</title>
    </head>
  <body>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>@yield('title')</title>
  </head>
  <body>
    <div style="color:rgb(11, 5, 5); background-color: rgb(0, 255, 225);" >
      {{-- <figure style= "width:150px;
          height:150px;
          background-color: rgb(0, 255, 225);
          /* background: url('https://i1.pnghost.com/1/21/3/pngdb-la-estrella-antioquia-university-of-ces-public-universidad-de-png-D6ubqJJp0STq66KwUGEkMUeNs_t.jpg'); */
          float:left;
          margin-top:60px;
          margin-left:20px;"> </figure> --}}
          <h1 align="center" style="color:rgb(11, 5, 5); background-color: rgb(0, 255, 225);" >Technical Evaluation</h1>
          <nav class="navbar navbar-dark" style="background-color: rgb(0, 255, 225);">
              <div class="container-fluid">
                  <a href="/home" class="navbar-brand" style="color:rgb(11, 5, 5); background-color: rgb(0, 255, 225);">Medical Devices</a>
                  <button type="button"
                      class="navbar-toggler"
                      data-bs-toggle="collapse"
                      data-bs-target="#MenuNavegacion">
                          <span class="navbar-toggler-icon"></span>
                  </button>
              </div>
    
        <div id="MenuNavegacion" class="collapse navbar-collapse">
          <ul class="navbar-nav ms-3">
            {{-- <li class="nav-item">
                          <a class="nav-link active" href="#">Ingreso de paciente</a>
                      </li>
            <li class="nav-item">
              <form action="{{route('users.index')}}" method="get">
                          <a class="nav-link active" href="{{route('users.index')}}">Consulta masiva</a>
                      </li>
            <li class="nav-item">
                          <a class="nav-link active" href="{{route('users.search')}}">Consulta de paciente</a>
                      </li> --}}

                      <li class="nav-item active dropdown">
                        <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                          DEVICES
                        </a>
                        <ul class="dropdown-menu">
                          <form action="{{route('stretcher.index')}}" method="get">
                            <li><a class="dropdown-item" href="{{route('stretcher.index')}}">Stretcher</a></li>
                          </form>
                          <form action="{{route('aunit.index')}}" method="get">
                            <li><a class="dropdown-item" href="{{route('aunit.index')}}">Anesthesia Unit</a></li>
                          </form>
                        </ul>
                    </li>
          
                    <li class="nav-item active dropdown">
                      <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                        CRITERIA
                      </a>
                      {{-- <ul class="dropdown-menu">
                        <form action="{{route('users.search')}}" method="get">
                          <li><a class="dropdown-item" href="{{route('users.search')}}">Edit Criteria/New Criteria</a></li>
                        </form>
                      </ul> --}}
                  </li>
          </ul>
        </div>
      </nav>
    </div>



    @yield('content')
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  
  
  @yield('footer')
  <footer class="main-footer" style="margin-bottom: 0px !important; position: relative; position:fixed;
  left:0px;
  bottom:0px;
  background: rgb(0, 255, 225);
  width: 100%;
  text-align: center
  text-shadow: 0px 1px rgba( 0, 0, 0, 0.3 );">





    <div class="float-right d-none d-xs-block">
      <b>Version</b> 4.0.8
    </div>
    <div class="container-fluid text-center p-0.5">
          <strong>Contactenos:  </strong> 
          +57 1802381
          <p class="small">Medellín, Colombia</p>
    </div>
    
  </footer>