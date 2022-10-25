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
    <form action="{{route('aunit.update' ,$anesthesiaunit->id)}}"  method="post" >
        @csrf
        @method('PUT')
        <div class="row g-3">
              <div class="form-group col-md-4 mb-3">
                  <label for="" class="form-label">Manufacturer: </label>
                  <input type="text" id="Manufacturer" name="Manufacturer" class="form-control" value="{{ $anesthesiaunit->Manufacturer}}">
              </div>
              <div class="form-group col-md-4 mb-3" >
                  <label for="" class="form-label">Where Marketed: </label>
                  <input type="text" id="WhereMarketed" name="WhereMarketed" class="form-control"  value="{{ $anesthesiaunit->WhereMarketed}}">
              </div>
              <div class="form-group col-md-4 mb-3">
                  <label for="" class="form-label">FDA Clearance: </label>
                  <input type="text" id="FDAClearance" name="FDAClearance" class="form-control"  value="{{ $anesthesiaunit->FDAClearance}}">
              </div>
        </div>
        <div class="row g-3">
            <div class="col-md-4 mb-3">
                <label for="" class="form-label"> Configuration: </label>
                <input type="text" id="Configuration" name="Configuration" class="form-control"  value="{{ $anesthesiaunit->Configuration}}">
            </div>
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">Pipeline Gas Inlets O2: </label>
                <input type="text" id="PipelineGasInletsO2" name="PipelineGasInletsO2" class="form-control" value="{{ $anesthesiaunit->PipelineGasInletsO2}}">
            </div>
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">Pipeline Gas Inlets N2O: </label>
                <input type="text" id="PipelineGasInletsN2O" name="PipelineGasInletsN2O" class="form-control"  value="{{ $anesthesiaunit->PipelineGasInletsN2O}}">
            </div>
        </div>
        <div class="row g-3">
              <div class="col-md-4 mb-3">
                  <label for="" class="form-label">Pipeline Gas Inlets Air: </label>
                  <input type="text" id="PipelineGasInletsAir" name="PipelineGasInletsAir" class="form-control" value="{{ $anesthesiaunit->PipelineGasInletsAir}}">
              </div>
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">Gas Cylinder Yokes O2: </label>
                <input type="text" id="GasCylinderYokesO2" name="GasCylinderYokesO2" class="form-control"  value="{{ $anesthesiaunit->GasCylinderYokesO2}}"> 
            </div>
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">Gas Cylinder Yokes N2O: </label>
                <input type="text" id="GasCylinderYokesN2O" name="GasCylinderYokesN2O" class="form-control"  value="{{ $anesthesiaunit->KneeFlex}}">
            </div>
        </div>
        <div class="row g-3">
            <div class="col-md-4 mb-3">
                <label for="" class="form-label"> Gas Cylinder Yokes Air: </label>
                <input type="text" id="GasCylinderYokesAir" name="GasCylinderYokesAir" class="form-control"  value="{{ $anesthesiaunit->GasCylinderYokesAir}}">
            </div>
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">Vaporizers Desflurane: </label>
                <input type="text" id="VaporizersDesflurane" name="VaporizersDesflurane" class="form-control"  value="{{ $anesthesiaunit->VaporizersDesflurane}}">
            </div>
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">Vaporizers Enflurane: </label>
                <input type="text" id="VaporizersEnflurane" name="VaporizersEnflurane" class="form-control"  value="{{ $anesthesiaunit->VaporizersEnflurane}}">
            </div>
        </div>
        <div class="row g-3">
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">Vaporizers Halothane: </label>
                <input type="text" id="VaporizersHalothane" name="VaporizersHalothane" class="form-control"  value="{{ $anesthesiaunit->VaporizersHalothane}}">
            </div>
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">Vaporizers Isoflurane: </label>
                <input type="text" id="VaporizersIsoflurane" name="VaporizersIsoflurane" class="form-control"  value="{{ $anesthesiaunit->VaporizersIsoflurane}}"> 
            </div>
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">Vaporizers Sevoflurane: </label>
                <input type="text" id="VaporizersSevoflurane" name="VaporizersSevoflurane" class="form-control"  value="{{ $anesthesiaunit->VaporizersSevoflurane}}">
            </div>
        </div>
        <div class="row g-3">
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">Type: </label>
                <input type="text" id="Type" name="Type" class="form-control"  value="{{ $anesthesiaunit->Type}}">
            </div>
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">Electronically Controlled: </label>
                <input type="text" id="ElectronicallyControlled" name="ElectronicallyControlled" class="form-control" value="{{ $anesthesiaunit->ElectronicallyControlled}}">
            </div>
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">bpmL: </label>
                <input type="text" id="bpmL" name="bpmL" class="form-control"  value="{{ $anesthesiaunit->bpmL}}">
            </div>
        </div>
        <div class="row g-3">
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">O2 FailSafe: </label>
                <input type="text" id="O2FailSafe" name="O2FailSafe" class="form-control" value="{{ $anesthesiaunit->O2FailSafe}}">
            </div>
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">Hypoxic Mixture FailSafe: </label>
                <input type="text" id="HypoxicMixtureFailSafe" name="HypoxicMixtureFailSafe" class="form-control"  value="{{ $anesthesiaunit->HypoxicMixtureFailSafe}}">
            </div>
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">Automatic Ventilator: </label>
                <input type="text" id="AutomaticVentilator" name="AutomaticVentilator" class="form-control"  value="{{ $anesthesiaunit->AutomaticVentilator}}">
            </div>
        </div>
        <div class="row g-3">
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">VM Manual spontaneous: </label>
                <input type="text" id="VM_Manual_spontaneous" name="VM_Manual_spontaneous" class="form-control" value="{{ $anesthesiaunit->VM_Manual_spontaneous}}">
            </div>
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">Optional Accessories: </label>
                <input type="text" id="OptionalAccessories" name="OptionalAccessories" class="form-control"  value="{{ $anesthesiaunit->OptionalAccessories}}">
            </div>
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">VM VCV: </label>
                <input type="text" id="VM_VCV" name="VM_VCV" class="form-control" value="{{ $anesthesiaunit->VM_VCV}}">
            </div>
        </div>
        <div class="row g-3">
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">VM SIMV: </label>
                <input type="text" id="VM_SIMV" name="VM_SIMV" class="form-control"  value="{{ $anesthesiaunit->VM_SIMV}}"> 
            </div>
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">VM Advanced Modes: </label>
                <input type="text" id="VM_AdvancedModes" name="VM_AdvancedModes" class="form-control"  value="{{ $anesthesiaunit->VM_AdvancedModes}}">
            </div>
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">Range CC: </label>
                <input type="text" id="RangeCC" name="RangeCC" class="form-control"  value="{{ $anesthesiaunit->RangeCC}}">
            </div>
        </div>
        <div class="row g-3">
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">CC: </label>
                <input type="text" id="CC" name="CC" class="form-control" value="{{ $anesthesiaunit->CC}}">
            </div>
        <div class="row g-3">
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">Range L/m: </label>
                <input type="text" id="RangeLm" name="RangeLm" class="form-control"  value="{{ $anesthesiaunit->RangeLm}}">
            </div>
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">High Bpm : </label>
                <input type="text" id="bpmH" name="bpmH" class="form-control" value="{{ $anesthesiaunit->bpmH}}">
            </div>
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">Low Bpm : </label>
                <input type="text" id="bpmL" name="bpmL" class="form-control"  value="{{ $anesthesiaunit->bpmL}}">
            </div>
        </div>
        <div class="row g-3">
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">High Inspiratory Flow : </label>
                <input type="text" id="InspiratoryFlowH" name="InspiratoryFlowH" class="form-control" value="{{ $anesthesiaunit->InspiratoryFlowH}}">
            </div>
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">Low Inspiratory Flow : </label>
                <input type="text" id="InspiratoryFlowL" name="InspiratoryFlowL" class="form-control"  value="{{ $anesthesiaunit->InspiratoryFlowL}}">
            </div>
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">Inspiratory Pause: </label>
                <input type="text" id="InspiratoryPause" name="InspiratoryPause" class="form-control"  value="{{ $anesthesiaunit->InspiratoryPause}}">
            </div>
        </div>
        <div class="row g-3">
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">Pressure Limit: </label>
                <input type="text" id="Pressurelimit" name="Pressurelimit" class="form-control" value="{{ $anesthesiaunit->Pressurelimit}}">
            </div>
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">PEEP: </label>
                <input type="text" id="PEEP" name="PEEP" class="form-control"  value="{{ $anesthesiaunit->PEEP}}">
            </div>
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">Other Controls: </label>
                <input type="text" id="OtherControls" name="OtherControls" class="form-control" value="{{ $anesthesiaunit->OtherControls}}">
            </div>
        </div>
        <div class="row g-3">
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">System Checks: </label>
                <input type="text" id="SystemChecks" name="SystemChecks" class="form-control"  value="{{ $anesthesiaunit->SystemChecks}}"> 
            </div>
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">Scavenging System: </label>
                <input type="text" id="ScavengingSystem" name="ScavengingSystem" class="form-control"  value="{{ $anesthesiaunit->ScavengingSystem}}">
            </div>
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">Displays Number: </label>
                <input type="text" id="Number" name="Number" class="form-control"  value="{{ $anesthesiaunit->Number}}">
            </div>
        </div>
        <div class="row g-3">
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">Displays Type: </label>
                <input type="text" id="TypeD" name="TypeD" class="form-control" value="{{ $anesthesiaunit->TypeD}}">
            </div>
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">Integrated Physiological Monitoring: </label>
                <input type="text" id="IntegratedPM" name="IntegratedPM" class="form-control"  value="{{ $anesthesiaunit->IntegratedPM}}">
            </div>
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">Interface With Physiological Monitors: </label>
                <input type="text" id="InterfacePM" name="InterfacePM" class="form-control" value="{{ $anesthesiaunit->InterfacePM}}">
            </div>
        </div>
        <div class="row g-3">
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">User Interface: </label>
                <input type="text" id="UserInterface" name="UserInterface" class="form-control"  value="{{ $anesthesiaunit->UserInterface}}"> 
            </div>
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">Prioritized Alarms: </label>
                <input type="text" id="PrioritizedAlarms" name="PrioritizedAlarms" class="form-control"  value="{{ $anesthesiaunit->PrioritizedAlarms}}">
            </div>
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">Dimension HxWxD: </label>
                <input type="text" id="HxWxD" name="HxWxD" class="form-control"  value="{{ $anesthesiaunit->HxWxD}}">
            </div>
        </div>
        <div class="row g-3">
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">Weight: </label>
                <input type="text" id="Weight" name="Weight" class="form-control" value="{{ $anesthesiaunit->Weight}}">
            </div>
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">Shelves: </label>
                <input type="text" id="Shelves" name="Shelves" class="form-control"  value="{{ $anesthesiaunit->Shelves}}">
            </div>
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">Drawers: </label>
                <input type="text" id="Drawers" name="Drawers" class="form-control"  value="{{ $anesthesiaunit->Drawers}}"> 
            </div>
        </div>
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">Central Brake: </label>
                <input type="text" id="CentralBrake" name="CentralBrake" class="form-control"  value="{{ $anesthesiaunit->CentralBrake}}">
            </div> 




        <div class="row g-3">
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">Power VAC: </label>
                <input type="text" id="PowerVAC" name="PowerVAC" class="form-control" value="{{ $anesthesiaunit->PowerVAC}}">
            </div>
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">Auxiliary Outlets: </label>
                <input type="text" id="AuxiliaryOutlets" name="AuxiliaryOutlets" class="form-control"  value="{{ $anesthesiaunit->AuxiliaryOutlets}}">
            </div>
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">BackupBattery: </label>
                <input type="text" id="BackupBattery" name="BackupBattery" class="form-control" value="{{ $anesthesiaunit->BackupBattery}}">
            </div>
        </div>
        <div class="row g-3">
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">Use Per Charge: </label>
                <input type="text" id="UsePerCharge" name="UsePerCharge" class="form-control"  value="{{ $anesthesiaunit->UsePerCharge}}"> 
            </div>
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">Warranty: </label>
                <input type="text" id="Warranty" name="Warranty" class="form-control"  value="{{ $anesthesiaunit->Warranty}}">
            </div>
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">ServiceContract: </label>
                <input type="text" id="ServiceContract" name="ServiceContract" class="form-control"  value="{{ $anesthesiaunit->ServiceContract}}">
            </div>
        </div>
        <div class="row g-3">
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">Delivery Time: </label>
                <input type="text" id="DeliveryTime" name="DeliveryTime" class="form-control" value="{{ $anesthesiaunit->DeliveryTime}}">
            </div>
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">Other Specifications: </label>
                <input type="text" id="OtherSpecifications" name="OtherSpecifications" class="form-control"  value="{{ $anesthesiaunit->OtherSpecifications}}">
            </div>
        </div>
            <br><br>
            <div class="container">
            <div class="abs-center">
        <button type="submit" class= "btn btn-primary" id="send">Guardar</button>
        <a href="/aunit/criteria" class="btn btn-danger" tabindex="5">Cancelar</a>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
    $(document).ready(function(){
        $("#send").click(function(){
            var seleccion= $(this).children("option:selected").val();
            alert("<?php echo $anesthesiaunit["Manufacturer"]; ?>" + "  Has been updated");
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