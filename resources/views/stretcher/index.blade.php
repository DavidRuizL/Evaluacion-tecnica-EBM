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
        <h1 align="center">Stretcher Mobile vs ECRI</h1>
          <br><br>
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

                               @if((($stretcher->StretcherType) !=NULL ) OR (($stretchers[0]->StretcherType) ==NULL ) )
                                  <td>{{$stretcher->StretcherType}}</td>
                                  @php($score++)
                                @else               
                                  <td class="fuera">{{$stretcher->StretcherType}}</td>
                                @endif

                               @if(((($stretcher->PositionControl) !=NULL) AND (($stretcher->PositionControl) !='NO') ) OR (($stretchers[0]->PositionControl) ==NULL ) )
                                  <td>{{$stretcher->PositionControl}}</td>
                                  @php($score++)
                                @else               
                                  <td class="fuera">{{$stretcher->PositionControl}}</td>
                                @endif                                

                                @if((($stretcher->Trendelenburg) >=($stretchers[0]->Trendelenburg)) OR ($stretchers[0]->Trendelenburg==0) )
                                  <td>{{$stretcher->Trendelenburg}}</td>
                                  @php($score++)
                                @else               
                                  <td class="fuera">{{$stretcher->Trendelenburg}}</td>
                                @endif

                                @if((($stretcher->ReverseTrendelenburg) >=($stretchers[0]->ReverseTrendelenburg)) OR ($stretchers[0]->ReverseTrendelenburg==0) )
                                  <td>{{$stretcher->ReverseTrendelenburg}}</td>
                                  @php($score++)
                                @else               
                                  <td class="fuera">{{$stretcher->ReverseTrendelenburg}}</td>
                                @endif

                                @if((($stretcher->Fowler) >=($stretchers[0]->Fowler) OR ($stretchers[0]->Fowler==0) ))
                                  <td>{{$stretcher->Fowler}}</td>
                                  @php($score++)
                                @else               
                                  <td class="fuera">{{$stretcher->Fowler}}</td>
                                @endif

                               @if(((($stretcher->LegLift) !=NULL) AND (($stretcher->LegLift) !='NO') ) OR (($stretchers[0]->LegLift) ==NULL ) )
                                  <td>{{$stretcher->LegLift}}</td>
                                  @php($score++)
                                @else               
                                  <td class="fuera">{{$stretcher->LegLift}}</td>
                                @endif       

                               @if(((($stretcher->KneeFlex) !=NULL) AND (($stretcher->KneeFlex) !='NO') ) OR (($stretchers[0]->KneeFlex) ==NULL ) )
                                  <td>{{$stretcher->KneeFlex}}</td>
                                  @php($score++)
                                @else               
                                  <td class="fuera">{{$stretcher->KneeFlex}}</td>
                                @endif                                       

                               @if(((($stretcher->Siderails) !=NULL) AND (($stretcher->Siderails) !='NO') ) OR (($stretchers[0]->Siderails) ==NULL ) )
                                  <td>{{$stretcher->Siderails}}</td>
                                  @php($score++)
                                @else               
                                  <td class="fuera">{{$stretcher->Siderails}}</td>
                                @endif          

                               @if(((($stretcher->RadiolucentTop) !=NULL) AND (($stretcher->RadiolucentTop) !='NO') ) OR (($stretchers[0]->RadiolucentTop) ==NULL ) )
                                  <td>{{$stretcher->RadiolucentTop}}</td>
                                  @php($score++)
                                @else               
                                  <td class="fuera">{{$stretcher->RadiolucentTop}}</td>
                                @endif                                         

                               @if(((($stretcher->OxygenTankHolder) !=NULL) AND (($stretcher->OxygenTankHolder) !='NO') ) OR (($stretchers[0]->OxygenTankHolder) ==NULL ) )
                                  <td>{{$stretcher->OxygenTankHolder}}</td>
                                  @php($score++)
                                @else               
                                  <td class="fuera">{{$stretcher->OxygenTankHolder}}</td>
                                @endif                                       

                                @if(((($stretcher->UtilityShelf) !=NULL) AND (($stretcher->UtilityShelf) !='NO') ) OR (($stretchers[0]->UtilityShelf) ==NULL ) )
                                  <td>{{$stretcher->UtilityShelf}}</td>
                                  @php($score++)
                                @else               
                                  <td class="fuera">{{$stretcher->UtilityShelf}}</td>
                                @endif       

                               @if(((($stretcher->RestrainingStraps) !=NULL) AND (($stretcher->RestrainingStraps) !='NO') ) OR (($stretchers[0]->RestrainingStraps) ==NULL ) )
                                  <td>{{$stretcher->RestrainingStraps}}</td>
                                  @php($score++)
                                @else               
                                  <td class="fuera">{{$stretcher->RestrainingStraps}}</td>
                                @endif                                       

                               @if(((($stretcher->Bumpers) !=NULL) AND (($stretcher->Bumpers) !='NO') ) OR (($stretchers[0]->Bumpers) ==NULL ) )
                                  <td>{{$stretcher->Bumpers}}</td>
                                  @php($score++)
                                @else               
                                  <td class="fuera">{{$stretcher->Bumpers}}</td>
                                @endif                                       

                                @if((($stretcher->Sockets) >=($stretchers[0]->Sockets))  OR ($stretchers[0]->Sockets==0) )
                                  <td>{{$stretcher->Sockets}}</td>
                                  @php($score++)
                                @else               
                                  <td class="fuera">{{$stretcher->Sockets}}</td>
                                @endif

                                @if((($stretcher->Diameter) >=($stretchers[0]->Diameter)) OR ($stretchers[0]->Diameter==0)  )
                                  <td>{{$stretcher->Diameter}}</td>
                                  @php($score++)
                                @else               
                                  <td class="fuera">{{$stretcher->Diameter}}</td>
                                @endif

                                @if((($stretcher->Brakes) >=($stretchers[0]->Brakes)) OR ($stretchers[0]->Brakes==0)  )  
                                  <td>{{$stretcher->Brakes}}</td>
                                  @php($score++)
                                @else               
                                  <td class="fuera">{{$stretcher->Brakes}}</td>
                                @endif                                

                                <td>{{$stretcher->FrameMaterial}}</td>
                                <td>{{$stretcher->PatientPlatform}}</td>
                                <td>{{$stretcher->MattressSurfaceType}}</td>

                                @if((($stretcher->MaximumPatientWeight) >=($stretchers[0]->MaximumPatientWeight) )OR ($stretchers[0]->MaximumPatientWeight==0)  )  
                                  <td>{{$stretcher->MaximumPatientWeight}}</td>
                                  @php($score++)
                                @else               
                                  <td class="fuera">{{$stretcher->MaximumPatientWeight}}</td>
                                @endif       

                                <td>{{$stretcher->OptionalAccessories}}</td>

                                @if((($stretcher->StretcherL) <=($stretchers[0]->StretcherL) ) OR ($stretchers[0]->StretcherL==0)  )
                                  <td>{{$stretcher->StretcherL}}</td>
                                  @php($score++)
                                @else               
                                  <td class="fuera">{{$stretcher->StretcherL}}</td>
                                @endif                                       

                                 @if((($stretcher->StretcherW) <=($stretchers[0]->StretcherW)) OR ($stretchers[0]->StretcherW==0)  )
                                  <td>{{$stretcher->StretcherW}}</td>
                                  @php($score++)
                                @else               
                                  <td class="fuera">{{$stretcher->StretcherW}}</td>
                                @endif                                      

                                @if((($stretcher->StretcherHeightL) >=($stretchers[0]->StretcherHeightL))OR ($stretchers[0]->StretcherHeightL==0))
                                  <td>{{$stretcher->StretcherHeightL}}</td>
                                  @php($score++)
                                @else               
                                  <td class="fuera">{{$stretcher->StretcherHeightL}}</td>
                                @endif       

                                @if((($stretcher->StretcherHeightH) <=($stretchers[0]->StretcherHeightH)) OR ($stretchers[0]->StretcherHeightH==0))
                                  <td>{{$stretcher->StretcherHeightH}}</td>
                                  @php($score++)
                                @else               
                                  <td class="fuera">{{$stretcher->StretcherHeightH}}</td>
                                @endif                                     

                                @if(((($stretcher->MattressL) >=($stretchers[0]->MattressL)))  OR ($stretchers[0]->StretcherW==0))
                                  <td>{{$stretcher->MattressL}}</td>
                                  @php($score++)
                                @else               
                                  <td class="fuera">{{$stretcher->MattressL}}</td>
                                @endif                                       

                                @if(((($stretcher->MattressW) >=($stretchers[0]->MattressW)))  OR ($stretchers[0]->StretcherW==0))
                                  <td>{{$stretcher->MattressW}}</td>
                                  @php($score++)
                                @else               
                                  <td class="fuera">{{$stretcher->MattressW}}</td>
                                @endif                                    

                                @if(((($stretcher->MattressThickness) >=($stretchers[0]->MattressThickness)))  OR ($stretchers[0]->StretcherW==0))
                                  <td>{{$stretcher->MattressThickness}}</td>
                                  @php($score++)
                                @else               
                                  <td class="fuera">{{$stretcher->MattressThickness}}</td>
                                @endif                                            

                                @if((($stretcher->MattressWeight) <=($stretchers[0]->MattressWeight)) OR ($stretchers[0]->MattressWeight==0) )
                                  <td>{{$stretcher->MattressWeight}}</td>
                                  @php($score++)
                                @else               
                                  <td class="fuera">{{$stretcher->MattressWeight}}</td>
                                @endif      

                                @if((($stretcher->StretcherWarranty) >=($stretchers[0]->StretcherWarranty)) OR ($stretchers[0]->StretcherW==0) )
                                  <td>{{$stretcher->StretcherWarranty}}</td>
                                  @php($score++)
                                @else               
                                  <td class="fuera">{{$stretcher->StretcherWarranty}}</td>
                                @endif                                           

                                @if((($stretcher->MattressWarranty) >=($stretchers[0]->MattressWarranty))  OR ($stretchers[0]->StretcherW==0))
                                  <td>{{$stretcher->MattressWarranty}}</td>
                                  @php($score++)
                                @else               
                                  <td class="fuera">{{$stretcher->MattressWarranty}}</td>
                                @endif                                            

                                @if((($stretcher->HydraulicPump) >=($stretchers[0]->HydraulicPump)) OR ($stretchers[0]->StretcherW==0) )
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