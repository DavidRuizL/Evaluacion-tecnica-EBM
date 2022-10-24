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
      @php($criteria=0)  
      <div class="container" >
        <br />
        <br />
        <h1 align="center">Stretcher Mobile Technical Criteria</h1>
        <br />
        <div class="row tbl-fixed" style="overflow: auto"> 
          <table border="1" class="table table-hover table-ligth  table-bordered table-stripe" >
            <thead class="table-secondary">
              <tr>
                <th  rowspan="2"></th>
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
              </tr>
              <tr>
                 <th scope="col">Length</th>
                 <th scope="col">Width</th>
                 <th scope="col">Min</th>
                 <th scope="col">Max</th>
                 <th scope="col">Length</th>
                 <th scope="col">Width</th>
            </thead>
              <tbody>
                   @foreach ($stretchers as $stretcher)

                            <tr>
                            <td><a href="{{route('stretcher.edit' , $stretcher->id)}}" class="btn btn-primary">Edit</a>
                            </td>                              
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
          </table>
        </div>
      <br><br>
      <br><br>
    </div>
@endsection