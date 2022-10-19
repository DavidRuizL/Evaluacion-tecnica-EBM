@extends('layouts.layout')

@section('title' , 'Medical Devices')
    
@section('content')
    <style>
  
      table, th, td {
        padding: 5px;
        text-align:center;
        width: 130px;
        table-layout: fixed;      
        border: 1px solid;
        border-collapse: collapse;
      }

      </style>
      <style>
        .fuera {background-color : #e06464 !important; }
      </style>
      @php($scoreList = [ ])
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
                <th rowspan="2">High/low Minute Volume</th>
                <th rowspan="2">High/low Flow</th>
                <th rowspan="2">Other Expiratory Alarms</th> 
                          
                <th rowspan="2">O2 Concentration</th>
                <th rowspan="2">Response Time</th>      
                <th rowspan="2">N2O</th>
                <th rowspan="2">Agent Monitors</th>
                {{-- <th rowspan="2">Type Agents</th> --}}

                <th rowspan="2">Auto ID</th>
                <th rowspan="2">Agent Concentration</th>
                <th rowspan="2">Other Monitors</th>
                <th rowspan="2">Other Features</th>
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
                <th rowspan="2">SCORE</th>
              </tr>
              <tr>
              <th scope="col">O2</th>
              <th scope="col">N2O</th>
              <th scope="col">AIR</th>
              <th scope="col">O2</th>
              <th scope="col">N2O</th>
              <th scope="col">AIR</th>  
              </tr>
            </thead>
              <tbody>
                @for ($i =1; $i <=1; $i++)
               {{-- @foreach ($anesthesiaunits as $anesthesiaunit)
                  @if(($anesthesiaunit->id ==3) OR ($anesthesiaunit->id ==4))
                  @else        --}}
                    @php($score=0)
                    <tr>
                        <td>{{$anesthesiaunits[$i]->Manufacturer}}</td>
                        <td>{{$anesthesiaunits[$i]->WhereMarketed}}</td>

                        @if(((($anesthesiaunits[$i]->FDAClearance) !=NULL) AND (($anesthesiaunits[$i]->FDAClearance) !='NO') ) OR (($anesthesiaunits[1]->FDAClearance) ==NULL ) )
                          <td>{{$anesthesiaunits[$i]->FDAClearance}}</td>
                          @php($score++)
                        @else               
                          <td class="fuera">{{$anesthesiaunits[$i]->FDAClearance}}</td>
                        @endif                               

                        <td>{{$aanesthesiaunits[$i]->Configuration}}</td>

                        @if(((($anesthesiaunits[$i]->PipelineGasInletsO2) !=NULL) AND (($anesthesiaunits[$i]->PipelineGasInletsO2) !='NO') ) OR (($anesthesiaunits[1]->PipelineGasInletsO2) ==NULL ) )
                        <td>{{$anesthesiaunits[$i]->PipelineGasInletsO2}}</td>
                        @php($score++)
                        @else               
                          <td class="fuera">{{$anesthesiaunits[$i]->PipelineGasInletsO2}}</td>
                        @endif    
                        
                        @if(((($anesthesiaunits[$i]->PipelineGasInletsN2O) !=NULL) AND (($anesthesiaunits[$i]->PipelineGasInletsN2O) !='NO') ) OR (($anesthesiaunits[1]->PipelineGasInletsN2O) ==NULL ) )
                          <td>{{$anesthesiaunits[$i]->PipelineGasInletsN2O}}</td>
                          @php($score++)
                        @else               
                          <td class="fuera">{{$anesthesiaunits[$i]->PipelineGasInletsN2O}}</td>
                        @endif    

                        @if(((($anesthesiaunits[$i]->PipelineGasInletsAir) !=NULL) AND (($anesthesiaunits[$i]->PipelineGasInletsAir) !='NO') ) OR (($anesthesiaunits[1]->PipelineGasInletsAir) ==NULL ) )
                        <td>{{$anesthesiaunits[$i]->PipelineGasInletsAir}}</td>
                        @php($score++)
                        @else               
                          <td class="fuera">{{$anesthesiaunits[$i]->PipelineGasInletsAir}}</td>
                        @endif                            

                        @if(((($anesthesiaunits[$i]->GasCylinderYokesO2) !=NULL) AND (($anesthesiaunits[$i]->GasCylinderYokesO2) !='NO') ) OR (($anesthesiaunits[1]->GasCylinderYokesO2) ==NULL ) )
                          <td>{{$anesthesiaunits[$i]->GasCylinderYokesO2}}</td>
                          @php($score++)
                        @else               
                          <td class="fuera">{{$anesthesiaunits[$i]->GasCylinderYokesO2}}</td>
                        @endif       

                        @if(((($anesthesiaunits[$i]->GasCylinderYokesN2O) !=NULL) AND (($anesthesiaunits[$i]->GasCylinderYokesN2O) !='NO') ) OR (($anesthesiaunits[1]->GasCylinderYokesN2O) ==NULL ) )
                          <td>{{$anesthesiaunits[$i]->GasCylinderYokesN2O}}</td>
                          @php($score++)
                        @else               
                          <td class="fuera">{{$anesthesiaunit->GasCylinderYokesN2O}}</td>
                        @endif         

                        @if(((($anesthesiaunits[$i]->GasCylinderYokesAir) !=NULL) AND (($anesthesiaunits[$i]->GasCylinderYokesAir) !='NO') ) OR (($anesthesiaunits[1]->GasCylinderYokesAir) ==NULL ) )
                          <td>{{$anesthesiaunits[$i]->GasCylinderYokesAir}}</td>
                          @php($score++)
                        @else               
                          <td class="fuera">{{$anesthesiaunits[$i]->GasCylinderYokesAir}}</td>
                        @endif                              

                        @if(((($anesthesiaunits[$i]->VaporizersDesflurane) !=NULL) AND (($anesthesiaunits[$i]->VaporizersDesflurane) !='NO') ) OR (($anesthesiaunits[1]->VaporizersDesflurane) ==NULL ) )
                          <td>{{$anesthesiaunits[$i]->VaporizersDesflurane}}</td>
                          @php($score++)
                        @else               
                          <td class="fuera">{{$anesthesiaunits[$i]->VaporizersDesflurane}}</td>
                        @endif       

                        @if(((($anesthesiaunits[$i]->VaporizersEnflurane) !=NULL) AND (($anesthesiaunits[$i]->VaporizersEnflurane) !='NO') ) OR (($anesthesiaunits[1]->VaporizersEnflurane) ==NULL ) )
                          <td>{{$anesthesiaunits[$i]->VaporizersEnflurane}}</td>
                          @php($score++)
                        @else               
                          <td class="fuera">{{$anesthesiaunits[$i]->VaporizersEnflurane}}</td>
                        @endif      

                        @if(((($anesthesiaunits[$i]->VaporizersHalothane) !=NULL) AND (($anesthesiaunits[$i]->VaporizersHalothane) !='NO') ) OR (($anesthesiaunits[1]->VaporizersHalothane) ==NULL ) )
                          <td>{{$anesthesiaunits[$i]->VaporizersHalothane}}</td>
                          @php($score++)
                        @else               
                          <td class="fuera">{{$anesthesiaunits[$i]->VaporizersHalothane}}</td>
                        @endif                             

                        @if(((($anesthesiaunits[$i]->VaporizersIsoflurane) !=NULL) AND (($anesthesiaunits[$i]->VaporizersIsoflurane) !='NO') ) OR (($anesthesiaunits[1]->VaporizersIsoflurane) ==NULL ) )
                          <td>{{$anesthesiaunits[$i]->VaporizersIsoflurane}}</td>
                          @php($score++)
                        @else               
                          <td class="fuera">{{$anesthesiaunits[$i]->VaporizersIsoflurane}}</td>
                        @endif                                  

                        @if(((($anesthesiaunits[$i]->VaporizersSevoflurane) !=NULL) AND (($anesthesiaunits[$i]->VaporizersSevoflurane) !='NO') ) OR (($anesthesiaunits[1]->VaporizersSevoflurane) ==NULL ) )
                          <td>{{$anesthesiaunits[$i]->VaporizersSevoflurane}}</td>
                          @php($score++)
                        @else               
                          <td class="fuera">{{$anesthesiaunits[$i]->VaporizersSevoflurane}}</td>
                        @endif                                         
                     
                        <td>{{$anesthesiaunits[$i]->Type}}</td>

                        @if(((($anesthesiaunits[$i]->ElectronicallyControlled) !=NULL) AND (($anesthesiaunits[$i]->ElectronicallyControlled) !='NO') ) OR (($anesthesiaunits[1]->ElectronicallyControlled) ==NULL ) )
                          <td>{{$anesthesiaunits[$i]->ElectronicallyControlled}}</td>
                          @php($score++)
                        @else               
                          <td class="fuera">{{$anesthesiaunits[$i]->ElectronicallyControlled}}</td>
                        @endif      

                        @if(((($anesthesiaunits[$i]->Interlock) !=NULL) AND (($anesthesiaunits[$i]->Interlock) !='NO') ) OR (($anesthesiaunits[1]->Interlock) ==NULL ) )
                          <td>{{$anesthesiaunits[$i]->Interlock}}</td>
                          @php($score++)
                        @else               
                          <td class="fuera">{{$anesthesiaunits[$i]->Interlock}}</td>
                        @endif      

                        @if(((($anesthesiaunits[$i]->O2FailSafe) !=NULL) AND (($anesthesiaunits[$i]->O2FailSafe) !='NO') ) OR (($anesthesiaunits[1]->O2FailSafe) ==NULL ) )
                          <td>{{$anesthesiaunits[$i]->O2FailSafe}}</td>
                          @php($score++)
                        @else               
                          <td class="fuera">{{$anesthesiaunits[$i]->O2FailSafe}}</td>
                        @endif      

                        @if(((($anesthesiaunits[$i]->HypoxicMixtureFailSafe) !=NULL) AND (($anesthesiaunits[$i]->HypoxicMixtureFailSafe) !='NO') ) OR (($anesthesiaunits[1]->HypoxicMixtureFailSafe) ==NULL ) )
                          <td>{{$anesthesiaunits[$i]->HypoxicMixtureFailSafe}}</td>
                          @php($score++)
                        @else               
                          <td class="fuera">{{$anesthesiaunits[$i]->HypoxicMixtureFailSafe}}</td>
                        @endif  

                        @if(((($anesthesiaunits[$i]->AutomaticVentilator) !=NULL) AND (($anesthesiaunits[$i]->AutomaticVentilator) !='NO') ) OR (($anesthesiaunits[1]->AutomaticVentilator) ==NULL ) )
                          <td>{{$anesthesiaunits[$i]->AutomaticVentilator}}</td>
                          @php($score++)
                        @else               
                          <td class="fuera">{{$anesthesiaunits[$i]->AutomaticVentilator}}</td>
                        @endif  

                        @if(((($anesthesiaunits[$i]->VM_Manual_spontaneous) !=NULL) AND (($anesthesiaunits[$i]->VM_Manual_spontaneous) !='NO') ) OR (($anesthesiaunits[1]->VM_Manual_spontaneous) ==NULL ) )
                          <td>{{$anesthesiaunits[$i]->VM_Manual_spontaneous}}</td>
                          @php($score++)
                        @else               
                          <td class="fuera">{{$anesthesiaunits[$i]->VM_Manual_spontaneous}}</td>
                        @endif  

                        @if(((($anesthesiaunits[$i]->VM_VCV) !=NULL) AND (($anesthesiaunits[$i]->VM_VCV) !='NO') ) OR (($anesthesiaunits[1]->VM_VCV) ==NULL ) )
                          <td>{{$anesthesiaunits[$i]->VM_VCV}}</td>
                          @php($score++)
                        @else               
                          <td class="fuera">{{$anesthesiaunits[$i]->VM_VCV}}</td>
                        @endif                          

                        @if(((($anesthesiaunits[$i]->VM_SIMV) !=NULL) AND (($anesthesiaunits[$i]->VM_SIMV) !='NO') ) OR (($anesthesiaunits[1]->VM_SIMV) ==NULL ) )
                          <td>{{$anesthesiaunits[$i]->VM_SIMV}}</td>
                          @php($score++)
                        @else               
                          <td class="fuera">{{$anesthesiaunits[$i]->VM_SIMV}}</td>
                        @endif                          

                        @if(((($anesthesiaunits[$i]->VM_AdvancedModes) !=NULL) AND (($anesthesiaunits[$i]->VM_AdvancedModes) !='NO') ) OR (($anesthesiaunits[1]->VM_AdvancedModes) ==NULL ) )
                          <td>{{$anesthesiaunits[$i]->VM_AdvancedModes}}</td>
                          @php($score++)
                        @else               
                          <td class="fuera">{{$anesthesiaunits[$i]->VM_AdvancedModes}}</td>
                        @endif                           

                        @if(($anesthesiaunits[$i]->RangeCC) <=($anesthesiaunits[1]->RangeCC)  )
                          <td>{{$anesthesiaunits[$i]->RangeCC}}</td>
                          @php($score++)
                        @else               
                          <td class="fuera">{{$anesthesiaunits[$i]->RangeCC}}</td>
                        @endif              

                        @if(($anesthesiaunits[$i]->CC) <=($anesthesiaunits[1]->CC)  )
                          <td>{{$anesthesiaunits[$i]->CC}}</td>
                          @php($score++)
                        @else               
                          <td class="fuera">{{$anesthesiaunits[$i]->CC}}</td>
                        @endif    

                        @if(($anesthesiaunits[$i]->RangeLm) <=($anesthesiaunits[1]->RangeLm)  )
                          <td>{{$anesthesiaunits[$i]->RangeLm}}</td>
                          @php($score++)
                        @else               
                          <td class="fuera">{{$anesthesiaunits[$i]->RangeLm}}</td>
                        @endif                            

                        @if(($anesthesiaunits[$i]->bpmH) <=($anesthesiaunits[1]->bpmH)  )
                          <td>{{$anesthesiaunits[$i]->bpmH}}</td>
                          @php($score++)
                        @else               
                          <td class="fuera">{{$anesthesiaunits[$i]->bpmH}}</td>
                        @endif    

                        @if(($anesthesiaunits[$i]->bpmL) <=($anesthesiaunits[1]->bpmL)  )
                          <td>{{$anesthesiaunits[$i]->bpmL}}</td>
                          @php($score++)
                        @else               
                          <td class="fuera">{{$anesthesiaunits[$i]->bpmL}}</td>
                        @endif    

                        @if(($anesthesiaunits[$i]->InspiratoryFlowH) <=($anesthesiaunits[1]->InspiratoryFlowH)  )
                          <td>{{$anesthesiaunits[$i]->InspiratoryFlowH}}</td>
                          @php($score++)
                        @else               
                          <td class="fuera">{{$anesthesiaunits[$i]->InspiratoryFlowH}}</td>
                        @endif                            

                        @if(($anesthesiaunits[$i]->InspiratoryFlowL) <=($anesthesiaunits[1]->InspiratoryFlowL)  )
                          <td>{{$anesthesiaunits[$i]->InspiratoryFlowL}}</td>
                          @php($score++)
                        @else               
                          <td class="fuera">{{$anesthesiaunits[$i]->InspiratoryFlowL}}</td>
                        @endif                                  

                        @if(($anesthesiaunits[$i]->InspiratoryPause) >=($anesthesiaunits[1]->InspiratoryPause)  )
                          <td>{{$anesthesiaunits[$i]->InspiratoryPause}}</td>
                          @php($score++)
                        @else               
                          <td class="fuera">{{$anesthesiaunits[$i]->InspiratoryPause}}</td>
                        @endif           

                        @if(($anesthesiaunits[$i]->Pressurelimit) <=($anesthesiaunits[1]->Pressurelimit)  )
                          <td>{{$anesthesiaunits[$i]->Pressurelimit}}</td>
                          @php($score++)
                        @else               
                          <td class="fuera">{{$anesthesiaunits[$i]->Pressurelimit}}</td>
                        @endif       

                        @if(($anesthesiaunits[$i]->PEEP) <=($anesthesiaunits[1]->PEEP)  )
                          <td>{{$anesthesiaunits[$i]->PEEP}}</td>
                          @php($score++)
                        @else               
                          <td class="fuera">{{$anesthesiaunits[$i]->PEEP}}</td>
                        @endif       

                        <td>{{$anesthesiaunits[$i]->OtherControls}}</td>

                        @if(((($anesthesiaunits[$i]->SystemChecks) !=NULL) AND (($anesthesiaunits[$i]->SystemChecks) !='NO') ) OR (($anesthesiaunits[1]->SystemChecks) ==NULL ) )
                        <td>{{$anesthesiaunits[$i]->SystemChecks}}</td>
                        @php($score++)
                        @else               
                          <td class="fuera">{{$anesthesiaunits[$i]->SystemChecks}}</td>
                        @endif                  
    
                        @if(((($anesthesiaunits[$i]->ScavengingSystem) !=NULL) AND (($anesthesiaunits[$i]->ScavengingSystem) !='NO') ) OR (($anesthesiaunits[1]->ScavengingSystem) ==NULL ) )
                          <td>{{$anesthesiaunits[$i]->ScavengingSystem}}</td>
                          @php($score++)
                        @else               
                          <td class="fuera">{{$anesthesiaunits[$i]->ScavengingSystem}}</td>
                        @endif     
                  {{-- @endif
            @endforeach
            @foreach ($aanesthesiaunits as $anesthesiaunit)
                  @if(($anesthesiaunit->id ==3) OR ($anesthesiaunit->id ==4))
                  @else     --}}

                        @if(((($aanesthesiaunits[$i]->AirwayPressure) !=NULL) AND (($aanesthesiaunits[$i]->AirwayPressure) !='NO') ) OR (($aanesthesiaunits[1]->AirwayPressure) ==NULL ) )
                          <td>{{$aanesthesiaunits[$i]->AirwayPressure}}</td>
                          @php($score++)
                        @else               
                          <td class="fuera">{{$aanesthesiaunits[$i]->AirwayPressure}}</td>
                        @endif                        

                      <td>{{$aanesthesiaunits[$i]->WhereMeasured}}</td>

                        @if(((($aanesthesiaunits[$i]->HighPressure) !=NULL) AND (($aanesthesiaunits[$i]->HighPressure) !='NO') ) OR (($aanesthesiaunits[1]->HighPressure) ==NULL ) )
                          <td>{{$aanesthesiaunits[$i]->HighPressure}}</td>
                          @php($score++)
                        @else               
                          <td class="fuera">{{$aanesthesiaunits[$i]->HighPressure}}</td>
                        @endif                                

                        @if(((($aanesthesiaunits[$i]->SubatmosphericPressure) !=NULL) AND (($aanesthesiaunits[$i]->SubatmosphericPressure) !='NO') ) OR (($aanesthesiaunits[1]->SubatmosphericPressure) ==NULL ) )
                          <td>{{$aanesthesiaunits[$i]->SubatmosphericPressure}}</td>
                          @php($score++)
                        @else               
                          <td class="fuera">{{$aanesthesiaunits[$i]->SubatmosphericPressure}}</td>
                        @endif   

                        @if(((($aanesthesiaunits[$i]->ContinuingPressure) !=NULL) AND (($aanesthesiaunits[$i]->ContinuingPressure) !='NO') ) OR (($aanesthesiaunits[1]->ContinuingPressure) ==NULL ) )
                          <td>{{$aanesthesiaunits[$i]->ContinuingPressure}}</td>
                          @php($score++)
                        @else               
                          <td class="fuera">{{$aanesthesiaunits[$i]->ContinuingPressure}}</td>
                        @endif      
                        
                        @if(((($aanesthesiaunits[$i]->LowPressure) !=NULL) AND (($aanesthesiaunits[$i]->LowPressure) !='NO') ) OR (($aanesthesiaunits[1]->LowPressure) ==NULL ) )
                          <td>{{$aanesthesiaunits[$i]->LowPressure}}</td>
                          @php($score++)
                        @else               
                          <td class="fuera">{{$aanesthesiaunits[$i]->LowPressure}}</td>
                        @endif                           
   
                      <td>{{$aanesthesiaunits[$i]->OtherPressureAlarms}}</td>

                        @if(((($aanesthesiaunits[$i]->ExpiratoryVolume) !=NULL) AND (($aanesthesiaunits[$i]->ExpiratoryVolume) !='NO') ) OR (($aanesthesiaunits[1]->ExpiratoryVolume) ==NULL ) )
                          <td>{{$aanesthesiaunits[$i]->ExpiratoryVolume}}</td>
                          @php($score++)
                        @else               
                          <td class="fuera">{{$aanesthesiaunits[$i]->ExpiratoryVolume}}</td>
                        @endif     

                        @if(((($aanesthesiaunits[$i]->ReverseFlow) !=NULL) AND (($aanesthesiaunits[$i]->ReverseFlow) !='NO') ) OR (($aanesthesiaunits[1]->ReverseFlow) ==NULL ) )
                          <td>{{$aanesthesiaunits[$i]->ReverseFlow}}</td>
                          @php($score++)
                        @else               
                          <td class="fuera">{{$anesthesiaunit->ReverseFlow}}</td>
                        @endif                                

                        @if(((($aanesthesiaunits[$i]->High_lowMinuteVolume) !=NULL) AND (($aanesthesiaunits[$i]->High_lowMinuteVolume) !='NO') ) OR (($aanesthesiaunits[1]->High_lowMinuteVolume) ==NULL ) )
                          <td>{{$aanesthesiaunits[$i]->High_lowMinuteVolume}}</td>
                          @php($score++)
                        @else               
                          <td class="fuera">{{$aanesthesiaunits[$i]->High_lowMinuteVolume}}</td>
                        @endif                                  

                        @if(((($aanesthesiaunits[$i]->High_lowFlow) !=NULL) AND (($aanesthesiaunits[$i]->High_lowFlow) !='NO') ) OR (($aanesthesiaunits[1]->High_lowFlow) ==NULL ) )
                          <td>{{$aanesthesiaunits[$i]->High_lowFlow}}</td>
                          @php($score++)
                        @else               
                          <td class="fuera">{{$aanesthesiaunits[$i]->High_lowFlow}}</td>
                        @endif     

                      <td>{{$aanesthesiaunits[$i]->OtherExpiratoryAlarms}}</td>
                        
                        @if(((($aanesthesiaunits[$i]->O2Concentration) !=NULL) AND (($aanesthesiaunits[$i]->O2Concentration) !='NO') ) OR (($aanesthesiaunits[1]->O2Concentration) ==NULL ) )
                          <td>{{$aanesthesiaunits[$i]->O2Concentration}}</td>
                          @php($score++)
                        @else               
                          <td class="fuera">{{$aanesthesiaunits[$i]->O2Concentration}}</td>
                        @endif                                  

                        @if(((($aanesthesiaunits[$i]->ResponseTime) !=NULL) AND (($aanesthesiaunits[$i]->ResponseTime) !='NO') ) OR (($aanesthesiaunits[1]->ResponseTime) ==NULL ) )
                          <td>{{$aanesthesiaunits[$i]->ResponseTime}}</td>
                          @php($score++)
                        @else               
                          <td class="fuera">{{$aanesthesiaunits[$i]->ResponseTime}}</td>
                        @endif          

                        @if(((($aanesthesiaunits[$i]->N2O) !=NULL) AND (($aanesthesiaunits[$i]->N2O) !='NO') ) OR (($aanesthesiaunits[1]->N2O) ==NULL ) )
                          <td>{{$aanesthesiaunits[$i]->N2O}}</td>
                          @php($score++)
                        @else               
                          <td class="fuera">{{$aanesthesiaunits[$i]->N2O}}</td>
                        @endif                               

                        @if(((($aanesthesiaunits[$i]->AgentMonitors) !=NULL) AND (($aanesthesiaunits[$i]->AgentMonitors) !='NO') ) OR (($aanesthesiaunits[1]->AgentMonitors) ==NULL ) )
                        <td>{{$aanesthesiaunits[$i]->AgentMonitors}}</td>
                        @php($score++)
                        @else               
                         <td class="fuera">{{$aanesthesiaunits[$i]->AgentMonitors}}</td>
                        @endif                          

                        {{-- @if(((($anesthesiaunit->TypeAgents) !=NULL) AND (($anesthesiaunit->TypeAgents) !='NO') ) OR (($aanesthesiaunits[1]->TypeAgents) ==NULL ) )
                        <td>{{$anesthesiaunit->TypeAgents}}</td>
                        @php($score++)
                        @else               
                         <td class="fuera">{{$anesthesiaunit->TypeAgents}}</td>
                        @endif                             
                      <td>{{$anesthesiaunit->TypeAgents}}</td> --}}

                        @if(((($aanesthesiaunits[$i]->AutoID) !=NULL) AND (($aanesthesiaunits[$i]->AutoID) !='NO') ) OR (($aanesthesiaunits[1]->AutoID) ==NULL ) )
                        <td>{{$aanesthesiaunits[$i]->AutoID}}</td>
                        @php($score++)
                        @else               
                         <td class="fuera">{{$aanesthesiaunits[$i]->AutoID}}</td>
                        @endif                             

                        @if(((($aanesthesiaunits[$i]->AgentConcentration) !=NULL) AND (($aanesthesiaunits[$i]->AgentConcentration) !='NO') ) OR (($aanesthesiaunits[1]->AgentConcentration) ==NULL ) )
                        <td>{{$aanesthesiaunits[$i]->AgentConcentration}}</td>
                        @php($score++)
                        @else               
                         <td class="fuera">{{$aanesthesiaunits[$i]->AutoAgentConcentrationID}}</td>
                        @endif             

                      <td>{{$aanesthesiaunits[$i]->OtherMonitors}}</td>
                      <td>{{$aanesthesiaunits[$i]->OtherFeatures}}</td>

                      {{-- DISPLAYS --}}
                        @if(($aanesthesiaunits[$i]->Number) <=($aanesthesiaunits[1]->Number)  )
                          <td>{{$aanesthesiaunits[$i]->Number}}</td>
                          @php($score++)
                        @else               
                          <td class="fuera">{{$aanesthesiaunits[$i]->Number}}</td>
                        @endif       
                      
                      <td>{{$aanesthesiaunits[$i]->TypeD}}</td>

                        @if(((($aanesthesiaunits[$i]->IntegratedPM) !=NULL) AND (($aanesthesiaunits[$i]->IntegratedPM) !='NO') ) OR (($aanesthesiaunits[1]->AgentConcentration) ==NULL ) )
                        <td>{{$aanesthesiaunits[$i]->IntegratedPM}}</td>
                        @php($score++)
                        @else               
                         <td class="fuera">{{$aanesthesiaunits[$i]->IntegratedPM}}</td>
                        @endif         

                        @if(((($aanesthesiaunits[$i]->InterfacePM) !=NULL) AND (($aanesthesiaunits[$i]->InterfacePM) !='NO') ) OR (($aanesthesiaunits[1]->InterfacePM) ==NULL ) )
                        <td>{{$aanesthesiaunits[$i]->InterfacePM}}</td>
                        @php($score++)
                        @else               
                         <td class="fuera">{{$aanesthesiaunits[$i]->IntegratedPM}}</td>
                        @endif         

                      <td>{{$aanesthesiaunits[$i]->UserInterface}}</td>

                        @if(($aanesthesiaunits[$i]->PrioritizedAlarms) <=($aanesthesiaunits[1]->PrioritizedAlarms)  )
                          <td>{{$aanesthesiaunits[$i]->PrioritizedAlarms}}</td>
                          @php($score++)
                        @else               
                          <td class="fuera">{{$aanesthesiaunits[$i]->PrioritizedAlarms}}</td>
                        @endif       

                      <td>{{$aanesthesiaunits[$i]->HxWxD}}</td>
                      <td>{{$aanesthesiaunits[$i]->Weight}}</td>
                      <td>{{$aanesthesiaunits[$i]->Shelves}}</td>
                      <td>{{$aanesthesiaunits[$i]->Drawers}}</td>
                      <td>{{$aanesthesiaunits[$i]->CentralBrake}}</td>
                      <td>{{$aanesthesiaunits[$i]->PowerVAC}}</td>
                      <td>{{$aanesthesiaunits[$i]->AuxiliaryOutlets}}</td>
  
                        @if(((($aanesthesiaunits[$i]->BackupBattery) !=NULL) AND (($aanesthesiaunits[$i]->BackupBattery) !='NO') ) OR (($aanesthesiaunits[1]->BackupBattery) ==NULL ) )
                        <td>{{$aanesthesiaunits[$i]->BackupBattery}}</td>
                        @php($score++)
                        @else               
                         <td class="fuera">{{$aanesthesiaunits[$i]->BackupBattery}}</td>
                        @endif         

                        @if(($aanesthesiaunits[$i]->UsePerCharge) >=($aanesthesiaunits[1]->UsePerCharge)  )
                          <td>{{$aanesthesiaunits[$i]->UsePerCharge}}</td>
                          @php($score++)
                        @else               
                          <td class="fuera">{{$aanesthesiaunits[$i]->UsePerCharge}}</td>
                        @endif                             

                      {{-- PURCHASE INFORMATION --}}
                      <td>{{$aanesthesiaunits[$i]->Warranty}}</td>
                      <td>{{$aanesthesiaunits[$i]->ServiceContract}}</td>
                      <td>{{$aanesthesiaunits[$i]->DeliveryTime}}</td>
                      <td>{{$aanesthesiaunits[$i]->OtherSpecifications}}</td>
                      <td>{{$score}}</td>
                      @php($scoreList+= [ $aanesthesiaunits[$i]->id=> $score ])
                  {{-- @endif
                  
            @endforeach --}}
              </tr>
              @endfor
            </tbody>
          </table>
        </div>
         <br><br>
      <table class="table table-light table-stripe">
      <div class="container">
        <h1 align="center">Top 3 Anesthesia Unit</h1>
        <table border="1" class="table table-hover table-ligth  table-bordered">
          <thead class="table-secondary">
            <tr>
              <th scope="col">Manufacturer</th>
              <th scope="col">Where Marketed</th>
              <th scope="col">Configuration</th>
              <th scope="col">SCORE</th>
            </tr>
           </thead>
           <tbody>
              @for ($i =0; $i <=1; $i++)
               @php($key_of_max = array_search( max($scoreList) , $scoreList)) 
                <tr>
                  <td>{{$anesthesiaunits[$key_of_max-2]->Manufacturer}}</td>
                  <td>{{$anesthesiaunits[$key_of_max-2]->WhereMarketed}}</td>
                  <td>{{$anesthesiaunits[$key_of_max-2]->Configuration}}</td>
                  <td>{{max($scoreList)}}</td>
                </tr>
            {{-- @php(unset($scoreList[$key_of_max])) --}}
          @endfor
        </tbody>
      </table>
      <br><br>
      <br><br>
    </div>
@endsection