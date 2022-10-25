<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/128/1688/1688400.png" />

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
    <div style="color:rgb(11, 5, 5); background-color: rgb(163, 214, 234);" >
          <nav class="navbar navbar-dark" style="color:rgb(11, 5, 5); background-color:  rgb(163, 214, 234);">
              <div class="container-fluid">
                
                  <a href="/home" class="navbar-brand" style="color:rgb(11, 5, 5); background-color:  rgb(163, 214, 234);"><b>Technical Evaluation</b></a>
                  <button type="button"
                      class="navbar-toggler"
                      data-bs-toggle="collapse"
                      data-bs-target="#MenuNavegacion">
                          <span class="navbar-toggler-icon"></span>
                  </button>
              </div>
    
        <div id="MenuNavegacion" class="collapse navbar-collapse">
          <ul class="navbar-nav ms-3">
                      <li class="nav-item active dropdown">
                        <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" style="color:rgb(11, 5, 5)">
                         EVALUATE DEVICES
                        </a>
                        <ul class="dropdown-menu">
                          <form action="{{route('stretcher.select')}}" method="get">
                            <li><a class="dropdown-item" href="{{route('stretcher.select')}}">Stretcher</a></li>
                          </form>
                          <form action="{{route('aunit.select')}}" method="get">
                            <li><a class="dropdown-item" href="{{route('aunit.select')}}">Anesthesia Unit</a></li>
                          </form>
                        </ul>
                    </li>
                    <li class="nav-item active dropdown">
                        <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" style="color:rgb(11, 5, 5)">
                          CREATE DEVICE
                        </a>  
                        <ul class="dropdown-menu">
                          <form action="{{route('stretcher.create')}}" method="get">
                            <li><a class="dropdown-item" href="{{route('stretcher.create')}}">Stretcher</a></li>
                          </form>
                          <form action="{{route('aunit.create')}}" method="get">
                            <li><a class="dropdown-item" href="{{route('aunit.create')}}">Anesthesia Unit</a></li>
                          </form>
                        </ul>
                    </li>
          
                    <li class="nav-item active dropdown">
                      <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" style="color:rgb(11, 5, 5)">
                        TECHNICAL CRITERIA
                      </a>
                        <ul class="dropdown-menu">
                          <form action="{{route('stretcher.criteria')}}" method="get">
                            <li><a class="dropdown-item" href="{{route('stretcher.criteria')}}">Stretcher</a></li>
                          </form>
                          <form action="{{route('aunit.criteria')}}" method="get">
                            <li><a class="dropdown-item" href="{{route('aunit.criteria')}}">Anesthesia Unit</a></li>
                          </form>
                        </ul>
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
  background: rgb(163, 214, 234);
  width: 100%;
  text-align: center
  text-shadow: 0px 1px rgba( 0, 0, 0, 0.3 );">





    <div class="float-right d-none d-xs-block">
      <b>Version</b> 4.0.8
    </div>
    <div class="container-fluid text-center p-0.5">
          <strong>Medellín, Colombia</strong> 

          <p class="small"></p>
    </div>
    
  </footer>