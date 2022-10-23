@extends('layouts.layout')

@section('title' , 'Medical Devices')
    
@section('content')
    <style>


      table{
        padding: 5px;
        text-align:center;
        table-layout: fixed;      
        width: 60%;
        height: 40%;
        border: 1px solid;
        border-collapse: collapse;
      }
  .abs-center {
  display: flex;
  align-items: center;
  justify-content: center;
}
  
      th, td {
        padding: 5px;
        text-align:center;
        table-layout: fixed;      
        width: 130px;
        border: 1px solid;
        border-collapse: collapse;
      }

      </style>
          <br />
      <div class="container" >
        <br />
          <br />
        <h1 align="center">Stretcher Mobile vs Personalized 3</h1>
        <div class="row tbl-fixed" style="overflow: auto"> 
          <table border="1" class="table table-hover table-ligth  table-bordered table-stripe" >
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
                <th  rowspan="2">Hydraulic Pump Warranty</th>
                <th  rowspan="2">Delivery Time</th>
                <th  rowspan="2">Other Specifications</th>
                <th  rowspan="2">UMDNS Code</th>
                <th  rowspan="2">SCORE</th>
                <th  rowspan="2"></th>
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
             @php($scoreList = [ ])
              <tbody>
                   @foreach ($stretchers as $stretcher)

                        @if(($stretcher->id ==1) OR ($stretcher->id ==2) OR ($stretcher->id ==3) OR ($stretcher->id ==4))
                        @else       
                            @php($score=0)

                            <tr>
                                <td>{{$stretcher->Manufacturer}}</td>
                                <td>{{$stretcher->WhereMarketed}}</td>

                               @if((($stretcher->StretcherType) !=NULL ) OR (($stretchers[3]->StretcherType) ==NULL ) )
                                  <td>{{$stretcher->StretcherType}}</td>
                                  @php($score++)
                                @else               
                                  <td class="fuera">{{$stretcher->StretcherType}}</td>
                                @endif

                               @if(((($stretcher->PositionControl) !=NULL) AND (($stretcher->PositionControl) !='NO') ) OR (($stretchers[3]->PositionControl) ==NULL ) )
                                  <td>{{$stretcher->PositionControl}}</td>
                                  @php($score++)
                                @else               
                                  <td class="fuera">{{$stretcher->PositionControl}}</td>
                                @endif                                

                                @if(($stretcher->Trendelenburg) >=($stretchers[3]->Trendelenburg)  )
                                  <td>{{$stretcher->Trendelenburg}}</td>
                                  @php($score++)
                                @else               
                                  <td class="fuera">{{$stretcher->Trendelenburg}}</td>
                                @endif

                                @if(($stretcher->ReverseTrendelenburg) >=($stretchers[3]->ReverseTrendelenburg)  )
                                  <td>{{$stretcher->ReverseTrendelenburg}}</td>
                                  @php($score++)
                                @else               
                                  <td class="fuera">{{$stretcher->ReverseTrendelenburg}}</td>
                                @endif

                                @if(($stretcher->Fowler) >=($stretchers[3]->Fowler)  )
                                  <td>{{$stretcher->Fowler}}</td>
                                  @php($score++)
                                @else               
                                  <td class="fuera">{{$stretcher->Fowler}}</td>
                                @endif

                               @if(((($stretcher->LegLift) !=NULL) AND (($stretcher->LegLift) !='NO') ) OR (($stretchers[3]->LegLift) ==NULL ) )
                                  <td>{{$stretcher->LegLift}}</td>
                                  @php($score++)
                                @else               
                                  <td class="fuera">{{$stretcher->LegLift}}</td>
                                @endif       

                               @if(((($stretcher->KneeFlex) !=NULL) AND (($stretcher->KneeFlex) !='NO') ) OR (($stretchers[3]->KneeFlex) ==NULL ) )
                                  <td>{{$stretcher->KneeFlex}}</td>
                                  @php($score++)
                                @else               
                                  <td class="fuera">{{$stretcher->KneeFlex}}</td>
                                @endif                                       

                               @if(((($stretcher->Siderails) !=NULL) AND (($stretcher->Siderails) !='NO') ) OR (($stretchers[3]->Siderails) ==NULL ) )
                                  <td>{{$stretcher->Siderails}}</td>
                                  @php($score++)
                                @else               
                                  <td class="fuera">{{$stretcher->Siderails}}</td>
                                @endif          

                               @if(((($stretcher->RadiolucentTop) !=NULL) AND (($stretcher->RadiolucentTop) !='NO') ) OR (($stretchers[3]->RadiolucentTop) ==NULL ) )
                                  <td>{{$stretcher->RadiolucentTop}}</td>
                                  @php($score++)
                                @else               
                                  <td class="fuera">{{$stretcher->RadiolucentTop}}</td>
                                @endif                                         

                               @if(((($stretcher->OxygenTankHolder) !=NULL) AND (($stretcher->OxygenTankHolder) !='NO') ) OR (($stretchers[3]->OxygenTankHolder) ==NULL ) )
                                  <td>{{$stretcher->OxygenTankHolder}}</td>
                                  @php($score++)
                                @else               
                                  <td class="fuera">{{$stretcher->OxygenTankHolder}}</td>
                                @endif                                       

                                @if(((($stretcher->UtilityShelf) !=NULL) AND (($stretcher->UtilityShelf) !='NO') ) OR (($stretchers[3]->UtilityShelf) ==NULL ) )
                                  <td>{{$stretcher->UtilityShelf}}</td>
                                  @php($score++)
                                @else               
                                  <td class="fuera">{{$stretcher->UtilityShelf}}</td>
                                @endif       

                               @if(((($stretcher->RestrainingStraps) !=NULL) AND (($stretcher->RestrainingStraps) !='NO') ) OR (($stretchers[3]->RestrainingStraps) ==NULL ) )
                                  <td>{{$stretcher->RestrainingStraps}}</td>
                                  @php($score++)
                                @else               
                                  <td class="fuera">{{$stretcher->RestrainingStraps}}</td>
                                @endif                                       

                               @if(((($stretcher->Bumpers) !=NULL) AND (($stretcher->Bumpers) !='NO') ) OR (($stretchers[3]->Bumpers) ==NULL ) )
                                  <td>{{$stretcher->Bumpers}}</td>
                                  @php($score++)
                                @else               
                                  <td class="fuera">{{$stretcher->Bumpers}}</td>
                                @endif                                       

                                @if(($stretcher->Sockets) >=($stretchers[3]->Sockets)  )
                                  <td>{{$stretcher->Sockets}}</td>
                                  @php($score++)
                                @else               
                                  <td class="fuera">{{$stretcher->Sockets}}</td>
                                @endif

                                @if(($stretcher->Diameter) >=($stretchers[3]->Diameter)  )
                                  <td>{{$stretcher->Diameter}}</td>
                                  @php($score++)
                                @else               
                                  <td class="fuera">{{$stretcher->Diameter}}</td>
                                @endif

                                @if(($stretcher->Brakes) >=($stretchers[3]->Brakes)  )
                                  <td>{{$stretcher->Brakes}}</td>
                                  @php($score++)
                                @else               
                                  <td class="fuera">{{$stretcher->Brakes}}</td>
                                @endif                                

                                <td>{{$stretcher->FrameMaterial}}</td>
                                <td>{{$stretcher->PatientPlatform}}</td>
                                <td>{{$stretcher->MattressSurfaceType}}</td>

                                @if(($stretcher->MaximumPatientWeight) >=($stretchers[3]->MaximumPatientWeight)  )
                                  <td>{{$stretcher->MaximumPatientWeight}}</td>
                                  @php($score++)
                                @else               
                                  <td class="fuera">{{$stretcher->MaximumPatientWeight}}</td>
                                @endif       

                                <td>{{$stretcher->OptionalAccessories}}</td>

                                @if(($stretcher->StretcherL) <($stretchers[3]->StretcherL)  )
                                  <td>{{$stretcher->StretcherL}}</td>
                                  @php($score++)
                                @else               
                                  <td class="fuera">{{$stretcher->StretcherL}}</td>
                                @endif                                       

                                 @if(($stretcher->StretcherW) <($stretchers[3]->StretcherW)  )
                                  <td>{{$stretcher->StretcherW}}</td>
                                  @php($score++)
                                @else               
                                  <td class="fuera">{{$stretcher->StretcherW}}</td>
                                @endif                                      

                                @if(($stretcher->StretcherHeightL) >=($stretchers[3]->StretcherHeightL)  )
                                  <td>{{$stretcher->StretcherHeightL}}</td>
                                  @php($score++)
                                @else               
                                  <td class="fuera">{{$stretcher->StretcherHeightL}}</td>
                                @endif       

                                @if(($stretcher->StretcherHeightH) <($stretchers[3]->StretcherHeightH)  )
                                  <td>{{$stretcher->StretcherHeightH}}</td>
                                  @php($score++)
                                @else               
                                  <td class="fuera">{{$stretcher->StretcherHeightH}}</td>
                                @endif                                     

                                @if(($stretcher->MattressL) >=($stretchers[3]->MattressL)  )
                                  <td>{{$stretcher->MattressL}}</td>
                                  @php($score++)
                                @else               
                                  <td class="fuera">{{$stretcher->MattressL}}</td>
                                @endif                                       

                                @if(($stretcher->MattressW) >=($stretchers[3]->MattressW)  )
                                  <td>{{$stretcher->MattressW}}</td>
                                  @php($score++)
                                @else               
                                  <td class="fuera">{{$stretcher->MattressW}}</td>
                                @endif                                    

                                @if(($stretcher->MattressThickness) >=($stretchers[3]->MattressThickness)  )
                                  <td>{{$stretcher->MattressThickness}}</td>
                                  @php($score++)
                                @else               
                                  <td class="fuera">{{$stretcher->MattressThickness}}</td>
                                @endif                                            

                                @if(($stretcher->MattressWeight) <($stretchers[3]->MattressWeight)  )
                                  <td>{{$stretcher->MattressWeight}}</td>
                                  @php($score++)
                                @else               
                                  <td class="fuera">{{$stretcher->MattressWeight}}</td>
                                @endif      

                                @if(($stretcher->StretcherWarranty) >=($stretchers[3]->StretcherWarranty)  )
                                  <td>{{$stretcher->StretcherWarranty}}</td>
                                  @php($score++)
                                @else               
                                  <td class="fuera">{{$stretcher->StretcherWarranty}}</td>
                                @endif                                           

                                @if(($stretcher->MattressWarranty) >=($stretchers[3]->MattressWarranty)  )
                                  <td>{{$stretcher->MattressWarranty}}</td>
                                  @php($score++)
                                @else               
                                  <td class="fuera">{{$stretcher->MattressWarranty}}</td>
                                @endif                                            

                                @if(($stretcher->HydraulicPump) >=($stretchers[3]->HydraulicPump)  )
                                  <td>{{$stretcher->HydraulicPump}}</td>
                                  @php($score++)
                                @else               
                                  <td class="fuera">{{$stretcher->HydraulicPump}}</td>
                                @endif                                       

                                <td>{{$stretcher->DeliveryTime}}</td>
                                <td>{{$stretcher->OtherSpecifications}}</td>
                                <td>{{$stretcher->UMDNSCode}}</td>
                                @php($score=round($score*(25/7)))
                                <td> {{ $score }}</div></td>
                                <td><a href="{{route('stretcher.edit' , $stretcher->id)}}" class="btn btn-primary">Edit</a>
                            </td>
                            </tr>
                            @php($scoreList+= [ $stretcher->id=> $score ])
                        @endif
                  @endforeach
            </tbody>
          </table>
        </div>
         <br><br>
      <table class="table table-light table-stripe">
      <div class="container">
        <h1 align="center">Top 3 Stretcher</h1>
        <table border="1" class="table table-hover table-ligth  table-bordered">
          <thead class="table-secondary">
            <tr>
              <th scope="col">Manufacturer</th>
              <th scope="col">Where Marketed</th>
              <th scope="col">Stretcher Type</th>
              <th scope="col">SCORE</th>
            </tr>
        </thead>
        <tbody>
          @for ($i =0; $i <=2; $i++)
            @php($key_of_max = array_search( max($scoreList) , $scoreList)) 
            <tr>
              <td>{{$stretchers[$key_of_max]->Manufacturer}}</td>
              <td>{{$stretchers[$key_of_max]->WhereMarketed}}</td>
              <td>{{$stretchers[$key_of_max]->StretcherType}}</td>
              <td>{{max($scoreList)}}</td>
            </tr>
            <?php
            unset($scoreList[$key_of_max]);
            ?>
          @endfor
        </tbody>
      </table>
      <br><br>
         <div class="abs-center">
        <a href="/stretcher/select" class="btn btn-primary" >Back</a>
        </div>
      <br><br>
      <br><br>
    </div>
@endsection