@extends('layouts.layout')

@section('title' , 'Ingresar nuevo control')

@section('content')
<br><br>
<h1 align="center">NEW DEVICE</h1>
<div class='container'>
    <form action="{{route('stretcher.index')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Manufacturer: </label>
            <input type="text" id="Manufacturer" name="Manufacturer" class="form-control" tabindex="2" placeholder="ej: Los Pinos...">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Where Marketed: </label>
            <input type="text" id="WhereMarketed" name="WhereMarketed" class="form-control" tabindex="3" placeholder="ej: Colombia...">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Stretcher Type: </label>
            <input type="text" id="StretcherType" name="StretcherType" class="form-control" tabindex="4" placeholder="ej: Adjustable height, Hydraulic...">
        </div>
        <div class="mb-3">
            <label for="" class="form-label"> Position Control: </label>
            <input type="text" id="PositionControl" name="PositionControl" class="form-control" tabindex="5" placeholder="ej: Manual crank, vertical adjustment...">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Trendelenburg: </label>
            <input type="text" id="Trendelenburg" name="Trendelenburg" class="form-control" tabindex="6" placeholder="ej: 0°,12°,16°...">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">ReverseTrendelenburg: </label>
            <input type="text" id="ReverseTrendelenburg" name="ReverseTrendelenburg" class="form-control" tabindex="7" placeholder="ej: 0°,12°,16°...">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Fowler: </label>
            <input type="text" id="Fowler" name="Fowler" class="form-control" tabindex="8" placeholder="ej: 0°,12°,16°...">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Leg Lift: </label>
            <input type="text" id="LegLift" name="LegLift" class="form-control" tabindex="9" placeholder="YES/NO"> 
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Knee Flex: </label>
            <input type="text" id="KneeFlex" name="KneeFlex" class="form-control" tabindex="4" placeholder="YES/NO">
        </div>
        <div class="mb-3">
            <label for="" class="form-label"> Side rails: </label>
            <input type="text" id="Siderails" name="Siderails" class="form-control" tabindex="5" placeholder="ej: YES, NO, Drop/fold-down...">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Radiolucent Top: </label>
            <input type="text" id="RadiolucentTop" name="RadiolucentTop" class="form-control" tabindex="6" placeholder="YES/NO">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Oxygen Tank Holder: </label>
            <input type="text" id="OxygenTankHolder" name="OxygenTankHolder" class="form-control" tabindex="7" placeholder="YES/NO">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Utility Shelf: </label>
            <input type="text" id="UtilityShelf" name="UtilityShelf" class="form-control" tabindex="8" placeholder="YES/NO">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Restraining BumpersStraps: </label>
            <input type="text" id="RestrainingStraps" name="RestrainingStraps" class="form-control" tabindex="9" placeholder="YES/NO"> 
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Bumpers: </label>
            <input type="text" id="Bumpers" name="Bumpers" class="form-control" tabindex="3" placeholder="YES/NO">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Sockets: </label>
            <input type="text" id="Sockets" name="Sockets" class="form-control" tabindex="4" placeholder="ej: 1, 2, 3...">
        </div>
         <div class="mb-3">
            <label for="" class="form-label">Diameter: </label>
            <input type="text" id="Diameter" name="Diameter" class="form-control" tabindex="6" placeholder="Diameter (cm)">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Brakes: </label>
            <input type="text" id="Brakes" name="Brakes" class="form-control" tabindex="7" placeholder="ej: 1, 2, 3...">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Frame Material: </label>
            <input type="text" id="FrameMaterial" name="FrameMaterial" class="form-control" tabindex="8" placeholder="ej: Steel...">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Patient Platform: </label>
            <input type="text" id="PatientPlatform" name="PatientPlatform" class="form-control" tabindex="3" placeholder="ej: Plastic bed board and side rails">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Mattress Surface Type: </label>
            <input type="text" id="MattressSurfaceType" name="MattressSurfaceType" class="form-control" tabindex="4" placeholder="ej: Foam cushion, vinyl cover...">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Maximum Patient Weight: </label>
            <input type="text" id="MaximumPatientWeight" name="MaximumPatientWeight" class="form-control" tabindex="6" placeholder="Patient Weight (Kg)">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Optional Accessories: </label>
            <input type="text" id="OptionalAccessories" name="OptionalAccessories" class="form-control" tabindex="7" placeholder="ej: Monitor shelf, extended height, siderail covers...">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Stretcher length: </label>
            <input type="text" id="StretcherL" name="StretcherL" class="form-control" tabindex="8" placeholder="Dimension (cm)">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Stretcher width: </label>
            <input type="text" id="StretcherW" name="StretcherW" class="form-control" tabindex="9" placeholder="Dimension (cm)"> 
        </div>
                <div class="mb-3">
            <label for="" class="form-label">Height min: </label>
            <input type="text" id="StretcherHeightL" name="StretcherHeightL" class="form-control" tabindex="3" placeholder="Dimension (cm)">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Height max: </label>
            <input type="text" id="StretcherHeightH" name="StretcherHeightH" class="form-control" tabindex="4" placeholder="Dimension (cm)">
        </div>
         <div class="mb-3">
            <label for="" class="form-label">Mattress length: </label>
            <input type="text" id="MattressL" name="MattressL" class="form-control" tabindex="6" placeholder="Dimension (cm)">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Mattress width: </label>
            <input type="text" id="MattressW" name="MattressW" class="form-control" tabindex="7" placeholder="Dimension (cm)">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Mattress thickness: </label>
            <input type="text" id="MattressThickness" name="MattressThickness" class="form-control" tabindex="8" placeholder="Dimension (cm)">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Mattress weight: </label>
            <input type="text" id="MattressWeight" name="MattressWeight" class="form-control" tabindex="9" placeholder="Weight (Kg)"> 
        </div>
                <div class="mb-3">
            <label for="" class="form-label">Stretcher Warranty: </label>
            <input type="text" id="StretcherWarranty" name="StretcherWarranty" class="form-control" tabindex="3" placeholder="Stretcher Warranty (years)">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Mattress warranty: </label>
            <input type="text" id="MattressWarranty" name="MattressWarranty" class="form-control" tabindex="4" placeholder="Stretcher Warranty (years)">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Hydraulic Pump Warranty: </label>
            <input type="text" id="HydraulicPumpWarranty" name="HydraulicPumpWarranty" class="form-control" tabindex="6" placeholder="Stretcher Warranty (years)">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">DeliveryTime: </label>
            <input type="text" id="DeliveryTime" name="DeliveryTime" class="form-control" tabindex="7" placeholder="Stretcher Warranty (weeks)">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Other UMDNSCodeSpecifications: </label>
            <input type="text" id="OtherSpecifications" name="OtherSpecifications" class="form-control" tabindex="9" placeholder="..."> 
        </div>
                <div class="mb-3">
            <label for="" class="form-label">UMDNS Code: </label>
            <input type="text" id="UMDNSCode" name="UMDNSCode" class="form-control" tabindex="3" placeholder="UMDNS Codes">
        </div> 
        <button type="submit" class= "btn btn-primary" tabindex="6">Guardar</button>
        <a href="/stretcher" class="btn btn-danger" tabindex="5">Cancelar</a>
    </form>
     <br><br>
    <br><br>
    <br><br>
    <br><br>
</div>
@endsection