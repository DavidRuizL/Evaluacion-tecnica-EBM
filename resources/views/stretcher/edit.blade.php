@extends('layouts.layout')

@section('title' , 'Ingresar nuevo control')

@section('content')
<br><br>
<style>
.abs-center {
  display: flex;
  align-items: center;
  justify-content: center;
}
</style>
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<h1 align="center">Edit Technical Criteria</h1>
<br><br>
<div class='container'>
    <form action="{{route('stretcher.update' ,$stretcher->id)}}"  method="post" >
        @csrf
        @method('PUT')
        <div class="row g-3">
              <div class="form-group col-md-4 mb-3">
                  <label for="" class="form-label">Manufacturer: </label>
                  <input type="text" id="Manufacturer" name="Manufacturer" class="form-control" value="{{ $stretcher->Manufacturer}}">
              </div>
              <div class="form-group col-md-4 mb-3" >
                  <label for="" class="form-label">Where Marketed: </label>
                  <input type="text" id="WhereMarketed" name="WhereMarketed" class="form-control"  value="{{ $stretcher->WhereMarketed}}">
              </div>
              <div class="form-group col-md-4 mb-3">
                  <label for="" class="form-label">Stretcher Type: </label>
                  <input type="text" id="StretcherType" name="StretcherType" class="form-control"  value="{{ $stretcher->StretcherType}}">
              </div>
        </div>
        <div class="row g-3">
            <div class="col-md-4 mb-3">
                <label for="" class="form-label"> Position Control: </label>
                <input type="text" id="PositionControl" name="PositionControl" class="form-control"  value="{{ $stretcher->PositionControl}}">
            </div>
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">Trendelenburg: </label>
                <input type="text" id="Trendelenburg" name="Trendelenburg" class="form-control" value="{{ $stretcher->Trendelenburg}}">
            </div>
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">ReverseTrendelenburg: </label>
                <input type="text" id="ReverseTrendelenburg" name="ReverseTrendelenburg" class="form-control"  value="{{ $stretcher->ReverseTrendelenburg}}">
            </div>
        </div>
        <div class="row g-3">
              <div class="col-md-4 mb-3">
                  <label for="" class="form-label">Fowler: </label>
                  <input type="text" id="Fowler" name="Fowler" class="form-control" value="{{ $stretcher->Fowler}}">
              </div>
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">Leg Lift: </label>
                <input type="text" id="LegLift" name="LegLift" class="form-control"  value="{{ $stretcher->LegLift}}"> 
            </div>
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">Knee Flex: </label>
                <input type="text" id="KneeFlex" name="KneeFlex" class="form-control"  value="{{ $stretcher->KneeFlex}}">
            </div>
        </div>
        <div class="row g-3">
            <div class="col-md-4 mb-3">
                <label for="" class="form-label"> Side rails: </label>
                <input type="text" id="Siderails" name="Siderails" class="form-control"  value="{{ $stretcher->Siderails}}">
            </div>
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">Radiolucent Top: </label>
                <input type="text" id="RadiolucentTop" name="RadiolucentTop" class="form-control"  value="{{ $stretcher->RadiolucentTop}}">
            </div>
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">Oxygen Tank Holder: </label>
                <input type="text" id="OxygenTankHolder" name="OxygenTankHolder" class="form-control"  value="{{ $stretcher->OxygenTankHolder}}">
            </div>
        </div>
        <div class="row g-3">
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">Utility Shelf: </label>
                <input type="text" id="UtilityShelf" name="UtilityShelf" class="form-control"  value="{{ $stretcher->UtilityShelf}}">
            </div>
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">Restraining BumpersStraps: </label>
                <input type="text" id="RestrainingStraps" name="RestrainingStraps" class="form-control"  value="{{ $stretcher->RestrainingStraps}}"> 
            </div>
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">Bumpers: </label>
                <input type="text" id="Bumpers" name="Bumpers" class="form-control"  value="{{ $stretcher->Bumpers}}">
            </div>
        </div>
        <div class="row g-3">
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">Sockets: </label>
                <input type="text" id="Sockets" name="Sockets" class="form-control"  value="{{ $stretcher->Sockets}}">
            </div>
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">Diameter: </label>
                <input type="text" id="Diameter" name="Diameter" class="form-control" value="{{ $stretcher->Diameter}}">
            </div>
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">Brakes: </label>
                <input type="text" id="Brakes" name="Brakes" class="form-control"  value="{{ $stretcher->Brakes}}">
            </div>
        </div>
        <div class="row g-3">
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">Frame Material: </label>
                <input type="text" id="FrameMaterial" name="FrameMaterial" class="form-control" value="{{ $stretcher->FrameMaterial}}">
            </div>
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">Patient Platform: </label>
                <input type="text" id="PatientPlatform" name="PatientPlatform" class="form-control"  value="{{ $stretcher->Manufacturer}}">
            </div>
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">Mattress Surface Type: </label>
                <input type="text" id="MattressSurfaceType" name="MattressSurfaceType" class="form-control"  value="{{ $stretcher->MattressSurfaceType}}">
            </div>
        </div>
        <div class="row g-3">
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">Maximum Patient Weight: </label>
                <input type="text" id="MaximumPatientWeight" name="MaximumPatientWeight" class="form-control" value="{{ $stretcher->MaximumPatientWeight}}">
            </div>
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">Optional Accessories: </label>
                <input type="text" id="OptionalAccessories" name="OptionalAccessories" class="form-control"  value="{{ $stretcher->OptionalAccessories}}">
            </div>
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">Stretcher length: </label>
                <input type="text" id="StretcherL" name="StretcherL" class="form-control" value="{{ $stretcher->StretcherL}}">
            </div>
        </div>
        <div class="row g-3">
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">Stretcher width: </label>
                <input type="text" id="StretcherW" name="StretcherW" class="form-control"  value="{{ $stretcher->StretcherW}}"> 
            </div>
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">Height min: </label>
                <input type="text" id="StretcherHeightL" name="StretcherHeightL" class="form-control"  value="{{ $stretcher->StretcherHeightL}}">
            </div>
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">Height max: </label>
                <input type="text" id="StretcherHeightH" name="StretcherHeightH" class="form-control"  value="{{ $stretcher->StretcherHeightH}}">
            </div>
        </div>
        <div class="row g-3">
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">Mattress length: </label>
                <input type="text" id="MattressL" name="MattressL" class="form-control" value="{{ $stretcher->MattressL}}">
            </div>
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">Mattress width: </label>
                <input type="text" id="MattressW" name="MattressW" class="form-control"  value="{{ $stretcher->MattressW}}">
            </div>
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">Mattress thickness: </label>
                <input type="text" id="MattressThickness" name="MattressThickness" class="form-control" value="{{ $stretcher->MattressThickness}}">
            </div>
        </div>
        <div class="row g-3">
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">Mattress weight: </label>
                <input type="text" id="MattressWeight" name="MattressWeight" class="form-control"  value="{{ $stretcher->MattressWeight}}"> 
            </div>
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">Stretcher Warranty: </label>
                <input type="text" id="StretcherWarranty" name="StretcherWarranty" class="form-control"  value="{{ $stretcher->StretcherWarranty}}">
            </div>
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">Mattress warranty: </label>
                <input type="text" id="MattressWarranty" name="MattressWarranty" class="form-control"  value="{{ $stretcher->MattressWarranty}}">
            </div>
        </div>
        <div class="row g-3">
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">Hydraulic Pump Warranty: </label>
                <input type="text" id="HydraulicPumpWarranty" name="HydraulicPumpWarranty" class="form-control" value="{{ $stretcher->HydraulicPumpWarranty}}">
            </div>
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">DeliveryTime: </label>
                <input type="text" id="DeliveryTime" name="DeliveryTime" class="form-control"  value="{{ $stretcher->DeliveryTime}}">
            </div>
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">Other UMDNSCodeSpecifications: </label>
                <input type="text" id="OtherSpecifications" name="OtherSpecifications" class="form-control"  value="{{ $stretcher->OtherSpecifications}}"> 
            </div>
        </div>
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">UMDNS Code: </label>
                <input type="text" id="UMDNSCode" name="UMDNSCode" class="form-control"  value="{{ $stretcher->UMDNSCode}}">
            </div> 
            <br><br>
            <div class="container">
            <div class="abs-center">
        <button type="submit" class= "btn btn-primary" id="send">Guardar</button>
        <a href="/stretcher/criteria" class="btn btn-danger" tabindex="5">Cancelar</a>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
    $(document).ready(function(){
        $("#send").click(function(){
            var seleccion= $(this).children("option:selected").val();
            alert("<?php echo $stretcher["Manufacturer"]; ?>" + "  Has been updated");
        });
    });
    </script>
            </div>
            </div>
    </form>
     <br><br>
    <br><br>
    <br><br>
    <br><br>
</div>
@endsection