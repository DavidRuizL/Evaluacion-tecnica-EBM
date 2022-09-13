@extends('layouts.layout')

@section('title' , 'Medical Devices')
    
@section('content')
    <style>
  
      table, th, td {
        padding: 5px;
        text-align:center;
              
      }
      </style>
      <br><br>
      <div class="container" >
        <h1 align="center">Stretcher Mobile</h1>
        <table border="1" class="table table-hover table-ligth  table-bordered">
          <thead class="table-secondary">
            <tr>
              <th scope="col">Manufacturer</th>
              <th scope="col">Where Marketed</th>
              <th scope="col">Stretcher Type</th>
              <th scope="col">Position Control</th>
              <th scope="col">Trendelenburg</th>
              <th scope="col">Reverse Trendelenburg</th>

              <th scope="col">Fowler</th>
              <th scope="col">LegLift</th>
              <th scope="col">KneeFlex</th>
              <th scope="col">Siderails</th>
              <th scope="col">Radiolucent Top</th>

              <th scope="col">Oxygen Tank Holder</th>
              <th scope="col">Utility Shelf</th>
              <th scope="col">Restraining Straps</th>
              <th scope="col">Bumpers</th>
              <th scope="col">Sockets</th>
              <th scope="col">Diameter</th>
              <th scope="col">Brakes</th>
              <th scope="col">Frame Material</th>
              <th scope="col">Patient Platform</th>
              <th scope="col">Mattress Surface Type</th>
              <th scope="col">Maximum Patient Weight</th> 
              <th scope="col">Optional Accessories</th>
              <th scope="col">StretcherL</th>
              <th scope="col">StretcherW</th>
              <th scope="col">StretcherHeightL</th>
              <th scope="col">StretcherHeightH</th>
              <th scope="col">MattressL</th>
              <th scope="col">MattressW</th>
              <th scope="col">Mattress Thickness</th>
              <th scope="col">Mattress Weight</th>
              <th scope="col">Stretcher Warranty</th>
              <th scope="col">Mattress Warranty</th>
              <th scope="col">Hydraulic Pump</th>
              <th scope="col">Delivery Time</th>
              <th scope="col">Other Specifications</th>
              <th scope="col">UMDNSCode</th>
              <th scope="col">SCORE</th>

            </tr>
          </thead>
          <style>
              .fuera {background-color : #e06464 !important; }
            </style>
            <tbody>
              {{-- @foreach ($controles as $control)
              <tr>
                  <th scope="row">{{$control->created_at }}</th>


                  @if(($control->tp1 >=10.6) AND ($control->tp1 <=15.8) )
                    <td>{{$control->tp1}}</td>
                  @else               
                    <td class="fuera">{{$control->tp1}}</td>
                  @endif

                  @if(($control->ptt1 >=24.1) AND ($control->ptt1 <=36.1) )
                    <td>{{$control->ptt1}}</td>
                  @else               
                    <td class="fuera">{{$control->ptt1}}</td>
                  @endif
                  
                  @if(($control->at1 >=89.1) AND ($control->at1 <=134) )
                    <td>{{$control->at1}}</td>
                  @else               
                    <td class="fuera">{{$control->at1}}</td>
                  @endif
                  
                  @if(($control->tt1 >=13.7) AND ($control->tt1 <=20.5) )
                    <td>{{$control->tt1}}</td>
                  @else               
                    <td class="fuera">{{$control->tt1}}</td>
                  @endif
                  
                  @if(($control->fb1 >=276) AND ($control->fb1 <=414) )
                    <td>{{$control->fb1}}</td>
                  @else               
                    <td class="fuera">{{$control->fb1}}</td>
                  @endif


                  @if(($control->tp2 >=32.3) AND ($control->tp2 <=48.4) )
                    <td>{{$control->tp2}}</td>
                  @else               
                    <td class="fuera">{{$control->tp2}}</td>
                  @endif

                  @if(($control->ptt2 >=48.9) AND ($control->ptt2 <=73.4) )
                    <td>{{$control->ptt2}}</td>
                  @else               
                    <td class="fuera">{{$control->ptt2}}</td>
                  @endif
                  
                  @if(($control->at2 >=48.3) AND ($control->at2 <=72.4) )
                    <td>{{$control->at2}}</td>
                  @else               
                    <td class="fuera">{{$control->at2}}</td>
                  @endif
                  
                  @if(($control->tt2 >=18.4) AND ($control->tt2 <=27.6) )
                    <td>{{$control->tt2}}</td>
                  @else               
                    <td class="fuera">{{$control->tt2}}</td>
                  @endif
                  
                  @if(($control->fb2 >=123) AND ($control->fb2 <=184) )
                    <td>{{$control->fb2}}</td>
                  @else               
                    <td class="fuera">{{$control->fb2}}</td>
                  @endif

                  @if(($control->tp3 >=45.2) AND ($control->tp3 <=67.6) )
                    <td>{{$control->tp3}}</td>
                  @else               
                    <td class="fuera">{{$control->tp3}}</td>
                  @endif

                  @if(($control->ptt3 >=55.9) AND ($control->ptt3 <=83.8) )
                    <td>{{$control->ptt3}}</td>
                  @else               
                    <td class="fuera">{{$control->ptt3}}</td>
                  @endif
                  
                  @if(($control->at3 >=34) AND ($control->at3 <=51) )
                    <td>{{$control->at3}}</td>
                  @else               
                    <td class="fuera">{{$control->at3}}</td>
                  @endif
                  
                  @if(($control->tt3 >=21.9) AND ($control->tt3 <=32.9) )
                    <td>{{$control->tt3}}</td>
                  @else               
                    <td class="fuera">{{$control->tt3}}</td>
                  @endif
                  
                  @if(($control->fb3 >=84.9) AND ($control->fb3 <=127) )
                    <td>{{$control->fb3}}</td>
                  @else               
                    <td class="fuera">{{$control->fb3}}</td>
                  @endif

              </tr>
            @endforeach --}}
          </tbody>
        </table>
         <br><br>
      <table class="table table-light table-stripe">
      <div class="container">
        <h1 align="center">Top 5 Stretcher</h1>
        <table border="1" class="table table-hover table-ligth  table-bordered">
          <thead class="table-secondary">
            <tr>
              <th scope="col">Manufacturer</th>
              <th scope="col">Where Marketed</th>
              <th scope="col">Stretcher Type</th>
              <th scope="col">SCORE</th>
            </tr>
        </tbody>
      </table>
      <br><br>
      <br><br>
    </div>
@endsection