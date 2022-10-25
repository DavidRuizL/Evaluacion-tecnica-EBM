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
        <h1 align="center">Anesthesia Unit Technical Criteria</h1>
        <br />
        <div class="row tbl-fixed" style="overflow: auto"> 
          <table border="1" class="table table-hover table-ligth  table-bordered table-stripe" >
            <thead class="table-secondary">
              <tr>
                <th rowspan="2"></th>
                <th rowspan="2">Manufacturer</th>
                <th rowspan="2">Where Marketed</th>
                <th rowspan="2">FDA Clearance</th>
                <th rowspan="2">Configuration</th>
                <th colspan="3">Gas Inlets</th>
                <th colspan="3">Cylinder Yokes </th>
                <th rowspan="2">Vaporizers Desflurane</th>
                <th rowspan="2">Vaporizers Enflurane</th>
                <th rowspan="2">Vaporizers Halothane</th>
                <th rowspan="2">Vaporizers Isoflurane</th>
                <th rowspan="2">Vaporizers Sevoflurane</th>
                <th rowspan="2">Type</th>
                <th rowspan="2">Electronically Controlled</th>
                <th rowspan="2">Interlock</th>
                <th rowspan="2">O2 Fail_Safe</th>
                <th rowspan="2">Hypoxic Fail_Safe</th>
                <th rowspan="2">Automatic Ventilator</th>
                <th rowspan="2">Ventilation Manual spontaneous</th> 
                <th rowspan="2">Ventilation VCV</th>
                <th rowspan="2">Ventilation SIMV</th>
                <th rowspan="2">Ventilation Advanced Modes</th>
                <th rowspan="2">Range CC</th>
                <th rowspan="2">CC</th>
                <th rowspan="2">Range (L/m)</th>
                <th colspan="2">BPM</th>
                <th colspan="2">InspiratoryFlow </th>

                <th rowspan="2">Inspiratory Pause (%)</th>
                <th rowspan="2">Pressure limit</th>
                <th rowspan="2">PEEP</th>
                <th rowspan="2">Other Controls</th>
                <th rowspan="2">System Checks</th>
                <th rowspan="2">Scavenging System</th>             

                {{-- //DISPLAYS --}}
                <th rowspan="2">Number</th>
                <th rowspan="2">Type Display</th>
                <th rowspan="2">Integrated PM</th>
                <th rowspan="2">Interface PM</th>
                <th rowspan="2">User Interface</th>
                <th rowspan="2">Prioritized Alarms</th>
                {{-- //DIMENSIONS --}}
                <th rowspan="2">HxWxD</th>
                <th rowspan="2">Weight</th>
                <th rowspan="2">Shelves</th>
                <th rowspan="2">Drawers</th>
                <th rowspan="2">Central Brake</th>
                <th rowspan="2">Power VAC</th>
                <th rowspan="2">Auxiliary Outlets</th>
                <th rowspan="2">Backup Battery</th>
                <th rowspan="2">Use per Charge</th>
                {{-- //PURCHASE INFORMATION\ --}}
                <th rowspan="2">Warranty</th>
                <th rowspan="2">Service Contract</th>
                <th rowspan="2">Delivery Time</th>
                <th rowspan="2">Other Specifications</th>
              </tr>
              <tr>
              <th scope="col">O2</th>
              <th scope="col">N2O</th>
              <th scope="col">AIR</th>
              <th scope="col">O2</th>
              <th scope="col">N2O</th>
              <th scope="col">AIR</th>  
              <th scope="col">High</th>
              <th scope="col">Low</th>  
              <th scope="col">High</th>
              <th scope="col">Low</th>  
              </tr>
            </thead>
              <tbody>
                @foreach ($anesthesiaunits as $anesthesiaunit)
                    <tr>
                      <td><a href="{{route('aunit.edit' , $anesthesiaunit->id)}}" class="btn btn-primary">Edit</a> </td>         
                      <td>{{$anesthesiaunit->Manufacturer}}</td>
                      <td>{{$anesthesiaunit->WhereMarketed}}</td>
                      <td>{{$anesthesiaunit->FDAClearance}}</td>
                      <td>{{$anesthesiaunit->Configuration}}</td>
                      <td>{{$anesthesiaunit->PipelineGasInletsO2}}</td>
                      <td>{{$anesthesiaunit->PipelineGasInletsN2O}}</td>
                      <td>{{$anesthesiaunit->PipelineGasInletsAir}}</td>
                      <td>{{$anesthesiaunit->GasCylinderYokesO2}}</td>
                      <td>{{$anesthesiaunit->GasCylinderYokesN2O}}</td>
                      <td>{{$anesthesiaunit->GasCylinderYokesAir}}</td>
                      <td>{{$anesthesiaunit->VaporizersDesflurane}}</td>
                      <td>{{$anesthesiaunit->VaporizersEnflurane}}</td>
                      <td>{{$anesthesiaunit->VaporizersHalothane}}</td>
                      <td>{{$anesthesiaunit->VaporizersIsoflurane}}</td>
                      <td>{{$anesthesiaunit->VaporizersSevoflurane}}</td>
                      <td>{{$anesthesiaunit->Type}}</td>
                      <td>{{$anesthesiaunit->ElectronicallyControlled}}</td>
                      <td>{{$anesthesiaunit->Interlock}}</td>
                      <td>{{$anesthesiaunit->O2FailSafe}}</td>
                      <td>{{$anesthesiaunit->HypoxicMixtureFailSafe}}</td>       
                      <td>{{$anesthesiaunit->AutomaticVentilator}}</td>
                      <td>{{$anesthesiaunit->VM_Manual_spontaneous}}</td>
                      <td>{{$anesthesiaunit->VM_VCV}}</td>
                      <td>{{$anesthesiaunit->VM_SIMV}}</td>
                      <td>{{$anesthesiaunit->VM_AdvancedModes}}</td>
                      <td>{{$anesthesiaunit->RangeCC}}</td>
                      <td>{{$anesthesiaunit->CC}}</td>
                      <td>{{$anesthesiaunit->RangeLm}}</td>
                      <td>{{$anesthesiaunit->bpmH}}</td>
                      <td>{{$anesthesiaunit->bpmL}}</td>
                      <td>{{$anesthesiaunit->InspiratoryFlowH}}</td>
                      <td>{{$anesthesiaunit->InspiratoryFlowL}}</td>
                      <td>{{$anesthesiaunit->InspiratoryPause}}</td>        
                      <td>{{$anesthesiaunit->Pressurelimit}}</td>
                      <td>{{$anesthesiaunit->PEEP}}</td>
                      <td>{{$anesthesiaunit->OtherControls}}</td>
                      <td>{{$anesthesiaunit->SystemChecks}}</td>
                      <td>{{$anesthesiaunit->ScavengingSystem}}</td>
                      {{-- DISPLAYS --}}
                      <td>{{$anesthesiaunit->Number}}</td>
                      <td>{{$anesthesiaunit->TypeD}}</td>
                      <td>{{$anesthesiaunit->IntegratedPM}}</td>
                      <td>{{$anesthesiaunit->InterfacePM}}</td>
                      <td>{{$anesthesiaunit->UserInterface}}</td>
                      <td>{{$anesthesiaunit->PrioritizedAlarms}}</td>
                      <td>{{$anesthesiaunit->HxWxD}}</td>
                      <td>{{$anesthesiaunit->Weight}}</td>
                      <td>{{$anesthesiaunit->Shelves}}</td>
                      <td>{{$anesthesiaunit->Drawers}}</td>
                      <td>{{$anesthesiaunit->CentralBrake}}</td>
                      <td>{{$anesthesiaunit->PowerVAC}}</td>
                      <td>{{$anesthesiaunit->AuxiliaryOutlets}}</td>
                      <td>{{$anesthesiaunit->BackupBattery}}</td>
                      <td>{{$anesthesiaunit->UsePerCharge}}</td>            
                      {{-- PURCHASE INFORMATION --}}
                      <td>{{$anesthesiaunit->Warranty}}</td>
                      <td>{{$anesthesiaunit->ServiceContract}}</td>
                      <td>{{$anesthesiaunit->DeliveryTime}}</td>
                      <td>{{$anesthesiaunit->OtherSpecifications}}</td>                      
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      <br><br>
      <br><br>
    </div>
@endsection