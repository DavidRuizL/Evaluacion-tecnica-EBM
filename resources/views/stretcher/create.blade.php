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

<h1 align="center">NEW DEVICE</h1>
<div class='container'>
    <form action="{{route('stretcher.index')}}" method="post" >
        @csrf
        <div class="row g-3">
              <div class="form-group col-md-4 mb-3">
                  <label for="" class="form-label">Manufacturer: </label>
                  <input type="text" id="Manufacturer" name="Manufacturer" class="form-control" placeholder="ej: Los Pinos...">
              </div>
              <div class="form-group col-md-4 mb-3" >
                  <label for="" class="form-label">Where Marketed: </label>
                  <input type="text" id="WhereMarketed" name="WhereMarketed" class="form-control"  placeholder="ej: Colombia...">
              </div>
              <div class="form-group col-md-4 mb-3">
                  <label for="" class="form-label">Stretcher Type: </label>
                  <input type="text" id="StretcherType" name="StretcherType" class="form-control"  placeholder="ej: Adjustable height, Hydraulic...">
              </div>
        </div>
        <div class="row g-3">
            <div class="col-md-4 mb-3">
                <label for="" class="form-label"> Position Control: </label>
                <input type="text" id="PositionControl" name="PositionControl" class="form-control"  placeholder="ej: Manual crank, vertical adjustment...">
            </div>
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">Trendelenburg: </label>
                <input type="text" id="Trendelenburg" name="Trendelenburg" class="form-control" placeholder="ej: 0°,12°,16°...">
            </div>
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">ReverseTrendelenburg: </label>
                <input type="text" id="ReverseTrendelenburg" name="ReverseTrendelenburg" class="form-control"  placeholder="ej: 0°,12°,16°...">
            </div>
        </div>
        <div class="row g-3">
              <div class="col-md-4 mb-3">
                  <label for="" class="form-label">Fowler: </label>
                  <input type="text" id="Fowler" name="Fowler" class="form-control" placeholder="ej: 0°,12°,16°...">
              </div>
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">Leg Lift: </label>
                <input type="text" id="LegLift" name="LegLift" class="form-control"  placeholder="YES/NO"> 
            </div>
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">Knee Flex: </label>
                <input type="text" id="KneeFlex" name="KneeFlex" class="form-control"  placeholder="YES/NO">
            </div>
        </div>
        <div class="row g-3">
            <div class="col-md-4 mb-3">
                <label for="" class="form-label"> Side rails: </label>
                <input type="text" id="Siderails" name="Siderails" class="form-control"  placeholder="ej: YES, NO, Drop/fold-down...">
            </div>
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">Radiolucent Top: </label>
                <input type="text" id="RadiolucentTop" name="RadiolucentTop" class="form-control"  placeholder="YES/NO">
            </div>
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">Oxygen Tank Holder: </label>
                <input type="text" id="OxygenTankHolder" name="OxygenTankHolder" class="form-control"  placeholder="YES/NO">
            </div>
        </div>
        <div class="row g-3">
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">Utility Shelf: </label>
                <input type="text" id="UtilityShelf" name="UtilityShelf" class="form-control"  placeholder="YES/NO">
            </div>
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">Restraining BumpersStraps: </label>
                <input type="text" id="RestrainingStraps" name="RestrainingStraps" class="form-control"  placeholder="YES/NO"> 
            </div>
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">Bumpers: </label>
                <input type="text" id="Bumpers" name="Bumpers" class="form-control"  placeholder="YES/NO">
            </div>
        </div>
        <div class="row g-3">
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">Sockets: </label>
                <input type="text" id="Sockets" name="Sockets" class="form-control"  placeholder="ej: 1, 2, 3...">
            </div>
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">Diameter: </label>
                <input type="text" id="Diameter" name="Diameter" class="form-control" placeholder="Diameter (cm)">
            </div>
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">Brakes: </label>
                <input type="text" id="Brakes" name="Brakes" class="form-control"  placeholder="ej: 1, 2, 3...">
            </div>
        </div>
        <div class="row g-3">
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">Frame Material: </label>
                <input type="text" id="FrameMaterial" name="FrameMaterial" class="form-control" placeholder="ej: Steel...">
            </div>
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">Patient Platform: </label>
                <input type="text" id="PatientPlatform" name="PatientPlatform" class="form-control"  placeholder="ej: Plastic bed board and side rails">
            </div>
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">Mattress Surface Type: </label>
                <input type="text" id="MattressSurfaceType" name="MattressSurfaceType" class="form-control"  placeholder="ej: Foam cushion, vinyl cover...">
            </div>
        </div>
        <div class="row g-3">
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">Maximum Patient Weight: </label>
                <input type="text" id="MaximumPatientWeight" name="MaximumPatientWeight" class="form-control" placeholder="Patient Weight (Kg)">
            </div>
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">Optional Accessories: </label>
                <input type="text" id="OptionalAccessories" name="OptionalAccessories" class="form-control"  placeholder="ej: Monitor shelf, extended height, siderail covers...">
            </div>
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">Stretcher length: </label>
                <input type="text" id="StretcherL" name="StretcherL" class="form-control" placeholder="Dimension (cm)">
            </div>
        </div>
        <div class="row g-3">
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">Stretcher width: </label>
                <input type="text" id="StretcherW" name="StretcherW" class="form-control"  placeholder="Dimension (cm)"> 
            </div>
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">Height min: </label>
                <input type="text" id="StretcherHeightL" name="StretcherHeightL" class="form-control"  placeholder="Dimension (cm)">
            </div>
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">Height max: </label>
                <input type="text" id="StretcherHeightH" name="StretcherHeightH" class="form-control"  placeholder="Dimension (cm)">
            </div>
        </div>
        <div class="row g-3">
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">Mattress length: </label>
                <input type="text" id="MattressL" name="MattressL" class="form-control" placeholder="Dimension (cm)">
            </div>
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">Mattress width: </label>
                <input type="text" id="MattressW" name="MattressW" class="form-control"  placeholder="Dimension (cm)">
            </div>
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">Mattress thickness: </label>
                <input type="text" id="MattressThickness" name="MattressThickness" class="form-control" placeholder="Dimension (cm)">
            </div>
        </div>
        <div class="row g-3">
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">Mattress weight: </label>
                <input type="text" id="MattressWeight" name="MattressWeight" class="form-control"  placeholder="Weight (Kg)"> 
            </div>
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">Stretcher Warranty: </label>
                <input type="text" id="StretcherWarranty" name="StretcherWarranty" class="form-control"  placeholder="Stretcher Warranty (years)">
            </div>
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">Mattress warranty: </label>
                <input type="text" id="MattressWarranty" name="MattressWarranty" class="form-control"  placeholder="Stretcher Warranty (years)">
            </div>
        </div>
        <div class="row g-3">
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">Hydraulic Pump Warranty: </label>
                <input type="text" id="HydraulicPumpWarranty" name="HydraulicPumpWarranty" class="form-control" placeholder="Stretcher Warranty (years)">
            </div>
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">DeliveryTime: </label>
                <input type="text" id="DeliveryTime" name="DeliveryTime" class="form-control"  placeholder="Stretcher Warranty (weeks)">
            </div>
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">Other UMDNSCodeSpecifications: </label>
                <input type="text" id="OtherSpecifications" name="OtherSpecifications" class="form-control"  placeholder="..."> 
            </div>
        </div>
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">UMDNS Code: </label>
                <input type="text" id="UMDNSCode" name="UMDNSCode" class="form-control"  placeholder="UMDNS Codes">
            </div> 
            <br><br>
            <div class="abs-center">
        <button type="submit" class= "btn btn-primary" tabindex="6">Guardar</button>
        <a href="/stretcher" class="btn btn-danger" tabindex="5">Cancelar</a>
            </div>
    </form>
     <br><br>
    <br><br>
    <br><br>
    <br><br>
</div>
@endsection