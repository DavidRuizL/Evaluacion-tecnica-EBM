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
        <h1 align="center">Anesthesia Units</h1>
        <div class="row tbl-fixed" style="overflow-x: auto"> 
          <table border="1" class="table table-hover table-ligth  table-bordered table-stripe">
            <thead class="table-secondary">
              <tr>
                <th rowspan="2">Manufacturer</th>
                <th rowspan="2">Where Marketed</th>
                <th rowspan="2">FDA Clearance</th>
                <th rowspan="2">Configuration</th>
                <th colspan="3">Pipeline Gas Inlets</th>
                <th colspan="3">Gas Cylinder Yokes </th>
                <th rowspan="2">Vaporizers  Desflurane</th>
                <th rowspan="2">Vaporizers  Enflurane</th>
                <th rowspan="2">Vaporizers  Halothane</th>
                <th rowspan="2">Vaporizers  Isoflurane</th>
                <th rowspan="2">Vaporizers  Sevoflurane</th>
                <th rowspan="2">Type</th>
                <th rowspan="2">Electronically Controlled</th>
                <th rowspan="2">Interlock</th>
                <th rowspan="2">O2 Fail Safe</th>
                <th rowspan="2">Hypoxic Fail Safe</th>
                <th rowspan="2">Automatic Ventilator</th>
                <th rowspan="2">Ventilation Manual spontaneous</th> 
                <th rowspan="2">Ventilation VCV</th>
                <th rowspan="2">Ventilation SIMV</th>
                <th rowspan="2">Ventilation Advanced Modes</th>
                <th rowspan="2">Range CC</th>
                <th rowspan="2">CC</th>
                <th rowspan="2">Range (L/m)</th>
                <th colspan="2">Frequency, BPM</th>
                <th colspan="2">Inspiratory Flow </th>

                <th rowspan="2">Inspiratory Pause (%)</th>
                <th rowspan="2">Pressure limit</th>
                <th rowspan="2">PEEP</th>
                <th rowspan="2">Other Controls</th>
                <th rowspan="2">System Checks</th>
                <th rowspan="2">Scavenging System</th>             
                {{-- //AAUNIT --}}
                <th rowspan="2">Airway Pressure</th>
                <th rowspan="2">Where Measured</th>
                <th rowspan="2">High Pressure</th>
                <th rowspan="2">Subatmospheric Pressure</th>
                <th rowspan="2">Continuing Pressure</th>
                <th rowspan="2">Low Pressure</th>
                <th rowspan="2">Other Pressure Alarms</th>
                <th rowspan="2">Expiratory Volume</th>
                <th rowspan="2">Reverse Flow</th>
                <th rowspan="2">High low Minute Volume</th>
                <th rowspan="2">High low Flow</th>
                <th rowspan="2">Other Expiratory Alarms</th> 
                <th rowspan="2">O2 Concentration</th>
                <th rowspan="2">N2O</th>
                <th rowspan="2">Agent Monitors</th>
                <th rowspan="2">Type Agents</th>
                <th rowspan="2">Response Time</th>
                <th rowspan="2">Auto ID</th>
                <th rowspan="2">Agent Concentration</th>
                <th rowspan="2">Other Monitors</th>
                <th rowspan="2">Other Features</th>
                {{-- //DISPLAYS --}}
                <th rowspan="2">Number</th>
                <th rowspan="2">Type D</th>
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
                {{-- //PURCHASE INFORMATION\ --}}
                <th rowspan="2">Warranty</th>
                <th rowspan="2">Service Contract</th>
                <th rowspan="2">Delivery Time</th>
                <th rowspan="2">Other Specifications</th>
                <th rowspan="2">SCORE</th>
              </tr>
              <tr>
                <th scope="col">O2</th>
                <th scope="col">N2O</th>
                <th scope="col">Air</th>
                <th scope="col">O2</th>
                <th scope="col">N2O</th>
                <th scope="col">Air</th>
                <th scope="col">Max</th>
                <th scope="col">Min</th>
                <th scope="col">Max</th>
                <th scope="col">Min</th>
              </tr>
            </thead>
              <style>
                .fuera {background-color : #e06464 !important; }
              </style>
              <tbody>
               @foreach ($anesthesiaunits as $anesthesiaunit)
              <tr>
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
            @endforeach
            @foreach ($aanesthesiaunits as $anesthesiaunit)
                  <td>{{$anesthesiaunit->AirwayPressure}}</td>
                  <td>{{$anesthesiaunit->WhereMeasured}}</td>
                  <td>{{$anesthesiaunit->HighPressure}}</td>
                  <td>{{$anesthesiaunit->SubatmosphericPressure}}</td>
                  <td>{{$anesthesiaunit->ContinuingPressure}}</td>
                  <td>{{$anesthesiaunit->LowPressure}}</td>
                  <td>{{$anesthesiaunit->OtherPressureAlarms}}</td>
                  <td>{{$anesthesiaunit->ExpiratoryVolume}}</td>
                  <td>{{$anesthesiaunit->ReverseFlow}}</td>
                  <td>{{$anesthesiaunit->High_lowMinuteVolume}}</td>
                  <td>{{$anesthesiaunit->High_lowFlow}}</td>
                  <td>{{$anesthesiaunit->OtherExpiratoryAlarms}}</td>
                  <td>{{$anesthesiaunit->O2Concentration}}</td>
                  <td>{{$anesthesiaunit->N2O}}</td>
                  <td>{{$anesthesiaunit->AgentMonitors}}</td>
                  <td>{{$anesthesiaunit->TypeAgents}}</td>
                  <td>{{$anesthesiaunit->ResponseTime}}</td>
                  <td>{{$anesthesiaunit->AutoID}}</td>
                  <td>{{$anesthesiaunit->AgentConcentration}}</td>
                  <td>{{$anesthesiaunit->OtherMonitors}}</td>
                  <td>{{$anesthesiaunit->OtherFeatures}}</td>
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
                  <td>{{$anesthesiaunit->BackupBattery}}</td>
                  <td>{{$anesthesiaunit->UsePerCharge}}</td>
                  {{-- PURCHASE INFORMATION --}}
                  <td>{{$anesthesiaunit->Warranty}}</td>
                  <td>{{$anesthesiaunit->ServiceContract}}</td>
                  <td>{{$anesthesiaunit->DeliveryTime}}</td>
                  <td>{{$anesthesiaunit->OtherSpecifications}}</td>
                  <td>{{$anesthesiaunit->SCORE}}</td>
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
        <h1 align="center">Top 5 Anesthesia Unit</h1>
        <table border="1" class="table table-hover table-ligth  table-bordered">
          <thead class="table-secondary">
            <tr>
              <th scope="col">Manufacturer</th>
              <th scope="col">Where Marketed</th>
              <th scope="col">FDA Clearance</th>
              <th scope="col">SCORE</th>
            </tr>
        </tbody>
      </table>
      <br><br>
      <br><br>
    </div>
@endsection