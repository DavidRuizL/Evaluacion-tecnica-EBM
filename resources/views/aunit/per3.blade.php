@extends('layouts.layout')

@section('title' , 'Medical Devices')
    
@section('content')
    <style>
    .abs-center {
  display: flex;
  align-items: center;
  justify-content: center;
}

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
                <th rowspan="2"></th>
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
                @php($scoreList = [ ])

               @foreach ($anesthesiaunits as $anesthesiaunit)
               {{-- ($anesthesiaunit->id ==1) OR --}}
                  @if( ($anesthesiaunit->id ==1) OR ($anesthesiaunit->id ==2) OR ($anesthesiaunit->id ==3) OR ($anesthesiaunit->id ==4))
                  @else       
                    @php($score=0)
                    <tr>
                        <td>{{$anesthesiaunit->Manufacturer}}</td>
                        <td>{{$anesthesiaunit->WhereMarketed}}</td>

                        @if(((($anesthesiaunit->FDAClearance) !=NULL) AND (($anesthesiaunit->FDAClearance) !='NO') ) OR (($anesthesiaunits[3]->FDAClearance) ==NULL ) )
                          <td>{{$anesthesiaunit->FDAClearance}}</td>
                          @php($score++)
                        @else               
                          <td class="fuera">{{$anesthesiaunit->FDAClearance}}</td>
                        @endif                               

                        <td>{{$anesthesiaunit->Configuration}}</td>

                        @if(((($anesthesiaunit->PipelineGasInletsO2) !=NULL) AND (($anesthesiaunit->PipelineGasInletsO2) !='NO') ) OR (($anesthesiaunits[3]->PipelineGasInletsO2) ==NULL ) )
                        <td>{{$anesthesiaunit->PipelineGasInletsO2}}</td>
                        @php($score++)
                        @else               
                          <td class="fuera">{{$anesthesiaunit->PipelineGasInletsO2}}</td>
                        @endif    
                        
                        @if(((($anesthesiaunit->PipelineGasInletsN2O) !=NULL) AND (($anesthesiaunit->PipelineGasInletsN2O) !='NO') ) OR (($anesthesiaunits[3]->PipelineGasInletsN2O) ==NULL ) )
                          <td>{{$anesthesiaunit->PipelineGasInletsN2O}}</td>
                          @php($score++)
                        @else               
                          <td class="fuera">{{$anesthesiaunit->PipelineGasInletsN2O}}</td>
                        @endif    

                        @if(((($anesthesiaunit->PipelineGasInletsAir) !=NULL) AND (($anesthesiaunit->PipelineGasInletsAir) !='NO') ) OR (($anesthesiaunits[3]->PipelineGasInletsAir) ==NULL ) )
                        <td>{{$anesthesiaunit->PipelineGasInletsAir}}</td>
                        @php($score++)
                        @else               
                          <td class="fuera">{{$anesthesiaunit->PipelineGasInletsAir}}</td>
                        @endif                            

                        @if(((($anesthesiaunit->GasCylinderYokesO2) !=NULL) AND (($anesthesiaunit->GasCylinderYokesO2) !='NO') ) OR (($anesthesiaunits[3]->GasCylinderYokesO2) ==NULL ) )
                          <td>{{$anesthesiaunit->GasCylinderYokesO2}}</td>
                          @php($score++)
                        @else               
                          <td class="fuera">{{$anesthesiaunit->GasCylinderYokesO2}}</td>
                        @endif       

                        @if(((($anesthesiaunit->GasCylinderYokesN2O) !=NULL) AND (($anesthesiaunit->GasCylinderYokesN2O) !='NO') ) OR (($anesthesiaunits[3]->GasCylinderYokesN2O) ==NULL ) )
                          <td>{{$anesthesiaunit->GasCylinderYokesN2O}}</td>
                          @php($score++)
                        @else               
                          <td class="fuera">{{$anesthesiaunit->GasCylinderYokesN2O}}</td>
                        @endif         

                        @if(((($anesthesiaunit->GasCylinderYokesAir) !=NULL) AND (($anesthesiaunit->GasCylinderYokesAir) !='NO') ) OR (($anesthesiaunits[3]->GasCylinderYokesAir) ==NULL ) )
                          <td>{{$anesthesiaunit->GasCylinderYokesAir}}</td>
                          @php($score++)
                        @else               
                          <td class="fuera">{{$anesthesiaunit->GasCylinderYokesAir}}</td>
                        @endif                              

                        @if(((($anesthesiaunit->VaporizersDesflurane) !=NULL) AND (($anesthesiaunit->VaporizersDesflurane) !='NO') ) OR (($anesthesiaunits[3]->VaporizersDesflurane) ==NULL ) )
                          <td>{{$anesthesiaunit->VaporizersDesflurane}}</td>
                          @php($score++)
                        @else               
                          <td class="fuera">{{$anesthesiaunit->VaporizersDesflurane}}</td>
                        @endif       

                        @if(((($anesthesiaunit->VaporizersEnflurane) !=NULL) AND (($anesthesiaunit->VaporizersEnflurane) !='NO') ) OR (($anesthesiaunits[3]->VaporizersEnflurane) ==NULL ) )
                          <td>{{$anesthesiaunit->VaporizersEnflurane}}</td>
                          @php($score++)
                        @else               
                          <td class="fuera">{{$anesthesiaunit->VaporizersEnflurane}}</td>
                        @endif      

                        @if(((($anesthesiaunit->VaporizersHalothane) !=NULL) AND (($anesthesiaunit->VaporizersHalothane) !='NO') ) OR (($anesthesiaunits[3]->VaporizersHalothane) ==NULL ) )
                          <td>{{$anesthesiaunit->VaporizersHalothane}}</td>
                          @php($score++)
                        @else               
                          <td class="fuera">{{$anesthesiaunit->VaporizersHalothane}}</td>
                        @endif                             

                        @if(((($anesthesiaunit->VaporizersIsoflurane) !=NULL) AND (($anesthesiaunit->VaporizersIsoflurane) !='NO') ) OR (($anesthesiaunits[3]->VaporizersIsoflurane) ==NULL ) )
                          <td>{{$anesthesiaunit->VaporizersIsoflurane}}</td>
                          @php($score++)
                        @else               
                          <td class="fuera">{{$anesthesiaunit->VaporizersIsoflurane}}</td>
                        @endif                                  

                        @if(((($anesthesiaunit->VaporizersSevoflurane) !=NULL) AND (($anesthesiaunit->VaporizersSevoflurane) !='NO') ) OR (($anesthesiaunits[3]->VaporizersSevoflurane) ==NULL ) )
                          <td>{{$anesthesiaunit->VaporizersSevoflurane}}</td>
                          @php($score++)
                        @else               
                          <td class="fuera">{{$anesthesiaunit->VaporizersSevoflurane}}</td>
                        @endif                                         
                     
                        <td>{{$anesthesiaunit->Type}}</td>

                        @if(((($anesthesiaunit->ElectronicallyControlled) !=NULL) AND (($anesthesiaunit->ElectronicallyControlled) !='NO') ) OR (($anesthesiaunits[3]->ElectronicallyControlled) ==NULL ) )
                          <td>{{$anesthesiaunit->ElectronicallyControlled}}</td>
                          @php($score++)
                        @else               
                          <td class="fuera">{{$anesthesiaunit->ElectronicallyControlled}}</td>
                        @endif      

                        @if(((($anesthesiaunit->Interlock) !=NULL) AND (($anesthesiaunit->Interlock) !='NO') ) OR (($anesthesiaunits[3]->Interlock) ==NULL ) )
                          <td>{{$anesthesiaunit->Interlock}}</td>
                          @php($score++)
                        @else               
                          <td class="fuera">{{$anesthesiaunit->Interlock}}</td>
                        @endif      

                        @if(((($anesthesiaunit->O2FailSafe) !=NULL) AND (($anesthesiaunit->O2FailSafe) !='NO') ) OR (($anesthesiaunits[3]->O2FailSafe) ==NULL ) )
                          <td>{{$anesthesiaunit->O2FailSafe}}</td>
                          @php($score++)
                        @else               
                          <td class="fuera">{{$anesthesiaunit->O2FailSafe}}</td>
                        @endif      

                        @if(((($anesthesiaunit->HypoxicMixtureFailSafe) !=NULL) AND (($anesthesiaunit->HypoxicMixtureFailSafe) !='NO') ) OR (($anesthesiaunits[3]->HypoxicMixtureFailSafe) ==NULL ) )
                          <td>{{$anesthesiaunit->HypoxicMixtureFailSafe}}</td>
                          @php($score++)
                        @else               
                          <td class="fuera">{{$anesthesiaunit->HypoxicMixtureFailSafe}}</td>
                        @endif  

                        @if(((($anesthesiaunit->AutomaticVentilator) !=NULL) AND (($anesthesiaunit->AutomaticVentilator) !='NO') ) OR (($anesthesiaunits[3]->AutomaticVentilator) ==NULL ) )
                          <td>{{$anesthesiaunit->AutomaticVentilator}}</td>
                          @php($score++)
                        @else               
                          <td class="fuera">{{$anesthesiaunit->AutomaticVentilator}}</td>
                        @endif  

                        @if(((($anesthesiaunit->VM_Manual_spontaneous) !=NULL) AND (($anesthesiaunit->VM_Manual_spontaneous) !='NO') ) OR (($anesthesiaunits[3]->VM_Manual_spontaneous) ==NULL ) )
                          <td>{{$anesthesiaunit->VM_Manual_spontaneous}}</td>
                          @php($score++)
                        @else               
                          <td class="fuera">{{$anesthesiaunit->VM_Manual_spontaneous}}</td>
                        @endif  

                        @if(((($anesthesiaunit->VM_VCV) !=NULL) AND (($anesthesiaunit->VM_VCV) !='NO') ) OR (($anesthesiaunits[3]->VM_VCV) ==NULL ) )
                          <td>{{$anesthesiaunit->VM_VCV}}</td>
                          @php($score++)
                        @else               
                          <td class="fuera">{{$anesthesiaunit->VM_VCV}}</td>
                        @endif                          

                        @if(((($anesthesiaunit->VM_SIMV) !=NULL) AND (($anesthesiaunit->VM_SIMV) !='NO') ) OR (($anesthesiaunits[3]->VM_SIMV) ==NULL ) )
                          <td>{{$anesthesiaunit->VM_SIMV}}</td>
                          @php($score++)
                        @else               
                          <td class="fuera">{{$anesthesiaunit->VM_SIMV}}</td>
                        @endif                          

                        @if(((($anesthesiaunit->VM_AdvancedModes) !=NULL) AND (($anesthesiaunit->VM_AdvancedModes) !='NO') ) OR (($anesthesiaunits[3]->VM_AdvancedModes) ==NULL ) )
                          <td>{{$anesthesiaunit->VM_AdvancedModes}}</td>
                          @php($score++)
                        @else               
                          <td class="fuera">{{$anesthesiaunit->VM_AdvancedModes}}</td>
                        @endif                           

                        @if(((($anesthesiaunit->RangeCC) <=($anesthesiaunits[3]->RangeCC))) OR ($anesthesiaunits[3]->RangeCC==0)  )
                          <td>{{$anesthesiaunit->RangeCC}}</td>
                          @php($score++)
                        @else               
                          <td class="fuera">{{$anesthesiaunit->RangeCC}}</td>
                        @endif              

                        @if((($anesthesiaunit->CC) <=($anesthesiaunits[3]->CC))  OR ($anesthesiaunits[3]->CC==0) )
                          <td>{{$anesthesiaunit->CC}}</td>
                          @php($score++)
                        @else               
                          <td class="fuera">{{$anesthesiaunit->CC}}</td>
                        @endif    

                        @if((($anesthesiaunit->RangeLm) <=($anesthesiaunits[3]->RangeLm)) OR ($anesthesiaunits[3]->CC==0)  )
                          <td>{{$anesthesiaunit->RangeLm}}</td>
                          @php($score++)
                        @else               
                          <td class="fuera">{{$anesthesiaunit->RangeLm}}</td>
                        @endif                            

                        @if((($anesthesiaunit->bpmH) <=($anesthesiaunits[3]->bpmH)) OR ($anesthesiaunits[3]->CC==0)  )
                          <td>{{$anesthesiaunit->bpmH}}</td>
                          @php($score++)
                        @else               
                          <td class="fuera">{{$anesthesiaunit->bpmH}}</td>
                        @endif    

                        @if((($anesthesiaunit->bpmL) <=($anesthesiaunits[3]->bpmL)) OR ($anesthesiaunits[3]->CC==0) )
                          <td>{{$anesthesiaunit->bpmL}}</td>
                          @php($score++)
                        @else               
                          <td class="fuera">{{$anesthesiaunit->bpmL}}</td>
                        @endif    

                        @if((($anesthesiaunit->InspiratoryFlowH) <=($anesthesiaunits[3]->InspiratoryFlowH)) OR ($anesthesiaunits[3]->CC==0)  )
                          <td>{{$anesthesiaunit->InspiratoryFlowH}}</td>
                          @php($score++)
                        @else               
                          <td class="fuera">{{$anesthesiaunit->InspiratoryFlowH}}</td>
                        @endif                            

                        @if((($anesthesiaunit->InspiratoryFlowL) <=($anesthesiaunits[3]->InspiratoryFlowL)) OR ($anesthesiaunits[3]->CC==0) )
                          <td>{{$anesthesiaunit->InspiratoryFlowL}}</td>
                          @php($score++)
                        @else               
                          <td class="fuera">{{$anesthesiaunit->InspiratoryFlowL}}</td>
                        @endif                                  

                        @if((($anesthesiaunit->InspiratoryPause) >=($anesthesiaunits[3]->InspiratoryPause)) OR ($anesthesiaunits[3]->CC==0) )
                          <td>{{$anesthesiaunit->InspiratoryPause}}</td>
                          @php($score++)
                        @else               
                          <td class="fuera">{{$anesthesiaunit->InspiratoryPause}}</td>
                        @endif           

                        @if((($anesthesiaunit->Pressurelimit) <=($anesthesiaunits[3]->Pressurelimit) )OR ($anesthesiaunits[3]->CC==0) )
                          <td>{{$anesthesiaunit->Pressurelimit}}</td>
                          @php($score++)
                        @else               
                          <td class="fuera">{{$anesthesiaunit->Pressurelimit}}</td>
                        @endif       

                        @if((($anesthesiaunit->PEEP) <=($anesthesiaunits[3]->PEEP))  OR ($anesthesiaunits[3]->CC==0))
                          <td>{{$anesthesiaunit->PEEP}}</td>
                          @php($score++)
                        @else               
                          <td class="fuera">{{$anesthesiaunit->PEEP}}</td>
                        @endif       

                        <td>{{$anesthesiaunit->OtherControls}}</td>

                        @if(((($anesthesiaunit->SystemChecks) !=NULL) AND (($anesthesiaunit->SystemChecks) !='NO') ) OR (($anesthesiaunits[3]->SystemChecks) ==NULL ) )
                        <td>{{$anesthesiaunit->SystemChecks}}</td>
                        @php($score++)
                        @else               
                          <td class="fuera">{{$anesthesiaunit->SystemChecks}}</td>
                        @endif                  
    
                        @if(((($anesthesiaunit->ScavengingSystem) !=NULL) AND (($anesthesiaunit->ScavengingSystem) !='NO') ) OR (($anesthesiaunits[3]->ScavengingSystem) ==NULL ) )
                          <td>{{$anesthesiaunit->ScavengingSystem}}</td>
                          @php($score++)
                        @else               
                          <td class="fuera">{{$anesthesiaunit->ScavengingSystem}}</td>
                        @endif 
                          

                      {{-- DISPLAYS --}}
                        @if((($anesthesiaunit->Number) >=($anesthesiaunits[3]->Number) )OR ($anesthesiaunits[3]->CC==0) )
                          <td>{{$anesthesiaunit->Number}}</td>
                          @php($score++)
                        @else               
                          <td class="fuera">{{$anesthesiaunit->Number}}</td>
                        @endif       
                      
                      <td>{{$anesthesiaunit->TypeD}}</td>

                        @if(((($anesthesiaunit->IntegratedPM) !=NULL) AND (($anesthesiaunit->IntegratedPM) !='NO') ) OR (($anesthesiaunits[3]->AgentConcentration) ==NULL ) )
                        <td>{{$anesthesiaunit->IntegratedPM}}</td>
                        @php($score++)
                        @else               
                         <td class="fuera">{{$anesthesiaunit->IntegratedPM}}</td>
                        @endif         

                        @if(((($anesthesiaunit->InterfacePM) !=NULL) AND (($anesthesiaunit->InterfacePM) !='NO') ) OR (($anesthesiaunits[3]->InterfacePM) ==NULL ) )
                        <td>{{$anesthesiaunit->InterfacePM}}</td>
                        @php($score++)
                        @else               
                         <td class="fuera">{{$anesthesiaunit->IntegratedPM}}</td>
                        @endif         

                      <td>{{$anesthesiaunit->UserInterface}}</td>

                        @if((($anesthesiaunit->PrioritizedAlarms) <=($anesthesiaunits[3]->PrioritizedAlarms)) OR ($anesthesiaunits[3]->CC==0) )
                          <td>{{$anesthesiaunit->PrioritizedAlarms}}</td>
                          @php($score++)
                        @else               
                          <td class="fuera">{{$anesthesiaunit->PrioritizedAlarms}}</td>
                        @endif       

                      <td>{{$anesthesiaunit->HxWxD}}</td>
                      <td>{{$anesthesiaunit->Weight}}</td>
                      <td>{{$anesthesiaunit->Shelves}}</td>
                      <td>{{$anesthesiaunit->Drawers}}</td>
                      <td>{{$anesthesiaunit->CentralBrake}}</td>
                      <td>{{$anesthesiaunit->PowerVAC}}</td>
                      <td>{{$anesthesiaunit->AuxiliaryOutlets}}</td>
  
                        @if(((($anesthesiaunit->BackupBattery) !=NULL) AND (($anesthesiaunit->BackupBattery) !='NO') ) OR (($anesthesiaunits[3]->BackupBattery) ==NULL ) )
                        <td>{{$anesthesiaunit->BackupBattery}}</td>
                        @php($score++)
                        @else               
                         <td class="fuera">{{$anesthesiaunit->BackupBattery}}</td>
                        @endif         

                        @if((($anesthesiaunit->UsePerCharge) >=($anesthesiaunits[3]->UsePerCharge) )OR ($anesthesiaunits[3]->CC==0) )
                          <td>{{$anesthesiaunit->UsePerCharge}}</td>
                          @php($score++)
                          @php($score=round($score*(100/39)))
                        @else               
                          <td class="fuera">{{$anesthesiaunit->UsePerCharge}}</td>
                        @endif                             

                      {{-- PURCHASE INFORMATION --}}
                      <td>{{$anesthesiaunit->Warranty}}</td>
                      <td>{{$anesthesiaunit->ServiceContract}}</td>
                      <td>{{$anesthesiaunit->DeliveryTime}}</td>
                      <td>{{$anesthesiaunit->OtherSpecifications}}</td>
                      <td>{{$score}}</td>
                      <td><a href="{{route('aunit.edit' , $anesthesiaunit->id)}}" class="btn btn-primary">Edit</a>
                            </td>                          
                      @php($scoreList+= [ $anesthesiaunit->id=> $score ])
                  @endif
                  
            
              </tr>
              @endforeach
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
          @for ($i =0; $i <=2; $i++)
            @php($key_of_max = array_search( max($scoreList) , $scoreList)) 
            <tr>
              <td>{{$anesthesiaunits[$key_of_max]->Manufacturer}}</td>
              <td>{{$anesthesiaunits[$key_of_max]->WhereMarketed}}</td>
              <td>{{$anesthesiaunits[$key_of_max]->Configuration}}</td>
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
        <a href="/aunit/select" class="btn btn-primary" >Back</a>
        </div>
          <br><br>
      <br><br>
    </div>
@endsection