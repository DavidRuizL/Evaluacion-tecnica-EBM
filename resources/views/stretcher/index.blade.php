@extends('layouts.layout')

@section('title' , 'Medical Devices')
    
@section('content')
    <style>
  
      table, th, td {
        padding: 5px;
        text-align:center;
        table-layout: fixed;      
        width: 130px;
        border: 1px solid;
        border-collapse: collapse;
      }

      </style>
      <br><br>
      
      <div class="container" >
        <h1 align="center">Stretcher Mobile</h1>
        <div class="row tbl-fixed" style="overflow-x: auto"> 
          <table border="1" class="table table-hover table-ligth  table-bordered table-stripe">
            <thead class="table-secondary">
              <tr>
                <th rowspan="2">Manufacturer</th>
                <th rowspan="2">Where Marketed</th>
                <th rowspan="2">Stretcher Type</th>
                <th rowspan="2">Position Control</th>
                <th rowspan="2">Trendelenburg</th>
                <th rowspan="2">Reverse Trendelenburg</th>

                <th rowspan="2">Fowler</th>
                <th rowspan="2">Leg Lift</th>
                <th rowspan="2">Knee Flex</th>
                <th rowspan="2">Siderails</th>
                <th rowspan="2">Radiolucent Top</th>

                <th rowspan="2">Oxygen Tank Holder</th>
                <th rowspan="2">Utility Shelf</th>
                <th rowspan="2">Restraining Straps</th>
                <th rowspan="2">Bumpers</th>
                <th rowspan="2">Sockets</th>
                <th rowspan="2">Diameter</th>
                <th rowspan="2">Brakes</th>
                <th rowspan="2">Frame Material</th>
                <th rowspan="2">Patient Platform</th>
                <th rowspan="2">Mattress Surface Type</th>
                <th rowspan="2">Maximum Patient Weight</th> 
                <th rowspan="2">Optional Accessories</th>
                <th colspan="2">Stretcher </th>
                <th colspan="2">Height</th>
                <th colspan="2">Mattress </th>
                <th  rowspan="2">Mattress Thickness</th>
                <th  rowspan="2">Mattress Weight</th>
                <th  rowspan="2">Stretcher Warranty</th>
                <th  rowspan="2">Mattress Warranty</th>
                <th  rowspan="2">Hydraulic Pump</th>
                <th  rowspan="2">Delivery Time</th>
                <th  rowspan="2">Other Specifications</th>
                <th  rowspan="2">UMDNS Code</th>
                <th  rowspan="2">SCORE</th>
              </tr>
              <tr>
                 <th scope="col">Length</th>
                 <th scope="col">Width</th>
                 <th scope="col">Min</th>
                 <th scope="col">Max</th>
                 <th scope="col">Length</th>
                 <th scope="col">Width</th>
            </thead>
            <style>
                .fuera {background-color : #e06464 !important; }
              </style>
              <tbody>
                   @foreach ($stretchers as $stretcher)
              <tr>
                  <td>{{$stretcher->Manufacturer}}</td>
                  <td>{{$stretcher->WhereMarketed}}</td>
                  <td>{{$stretcher->StretcherType}}</td>
                  <td>{{$stretcher->PositionControl}}</td>
                  <td>{{$stretcher->Trendelenburg}}</td>
                  <td>{{$stretcher->ReverseTrendelenburg}}</td>
                  <td>{{$stretcher->Fowler}}</td>
                  <td>{{$stretcher->LegLift}}</td>
                  <td>{{$stretcher->KneeFlex}}</td>
                  <td>{{$stretcher->Siderails}}</td>
                  <td>{{$stretcher->RadiolucentTop}}</td>
                  <td>{{$stretcher->OxygenTankHolder}}</td>
                  <td>{{$stretcher->UtilityShelf}}</td>
                  <td>{{$stretcher->RestrainingStraps}}</td>
                  <td>{{$stretcher->Bumpers}}</td>
                  <td>{{$stretcher->Sockets}}</td>
                  <td>{{$stretcher->Diameter}}</td>
                  <td>{{$stretcher->Brakes}}</td>
                  <td>{{$stretcher->FrameMaterial}}</td>
                  <td>{{$stretcher->PatientPlatform}}</td>
                  <td>{{$stretcher->MattressSurfaceType}}</td>
                  <td>{{$stretcher->MaximumPatientWeight}}</td>
                  <td>{{$stretcher->OptionalAccessories}}</td>
                  <td>{{$stretcher->StretcherL}}</td>
                  <td>{{$stretcher->StretcherW}}</td>
                  <td>{{$stretcher->StretcherHeightL}}</td>
                  <td>{{$stretcher->StretcherHeightH}}</td>
                  <td>{{$stretcher->MattressL}}</td>
                  <td>{{$stretcher->MattressW}}</td>
                  <td>{{$stretcher->MattressThickness}}</td>
                  <td>{{$stretcher->MattressWeight}}</td>
                  <td>{{$stretcher->StretcherWarranty}}</td>
                  <td>{{$stretcher->MattressWarranty}}</td>
                  <td>{{$stretcher->HydraulicPump}}</td>
                  <td>{{$stretcher->DeliveryTime}}</td>
                  <td>{{$stretcher->OtherSpecifications}}</td>
                  <td>{{$stretcher->UMDNSCode}}</td>
              </tr>
            @endforeach
          </tbody>
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
        </div>
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