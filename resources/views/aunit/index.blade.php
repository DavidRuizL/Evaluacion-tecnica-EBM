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
                <th scope="col">Manufacturer</th>
                <th scope="col">Where Marketed</th>
                <th scope="col">FDA Clearance</th>
                <th scope="col">Configuration</th>
                <th scope="col">Pipeline Gas Inlets O2</th>
                <th scope="col">Pipeline Gas Inlets N2O</th>
                <th scope="col">Pipeline Gas Inlets Air</th>
                <th scope="col">Gas Cylinder Yokes O2</th>
                <th scope="col">Gas Cylinder Yokes N2O</th>
                <th scope="col">Gas Cylinder Yokes Air</th>
                <th scope="col">Vaporizers Desflurane</th>
                <th scope="col">Vaporizers Enflurane</th>
                <th scope="col">Vaporizers Halothane</th>
                <th scope="col">Vaporizers Isoflurane</th>
                <th scope="col">Vaporizers Sevoflurane</th>
                <th scope="col">Type</th>
                <th scope="col">Electronically Controlled</th>
                <th scope="col">Interlock</th>
                <th scope="col">O2 Fail Safe</th>

                <th scope="col">Hypoxic Mixture Fail Safe</th>
                <th scope="col">Automatic Ventilator</th>
                <th scope="col">VM Manual spontaneous</th> 
                <th scope="col">VM VCV</th>
                <th scope="col">VM SIMV</th>
                <th scope="col">VM AdvancedModes</th>
                <th scope="col">Range CC</th>
                <th scope="col">CC</th>
                <th scope="col">Range (L/m)</th>
                <th scope="col">bpmH</th>
                <th scope="col">bpmL</th>
                <th scope="col">Inspiratory FlowH</th>
                <th scope="col">Inspiratory FlowL</th>
                <th scope="col">Inspiratory Pause</th>
                <th scope="col">Pressure limit</th>
                <th scope="col">PEEP</th>
                <th scope="col">Other Controls</th>
                <th scope="col">System Checks</th>
                <th scope="col">Scavenging System</th>
                
                {{-- //AAUNIT --}}
                <th scope="col">Airway Pressure</th>
                <th scope="col">Where Measured</th>
                <th scope="col">High Pressure</th>
                <th scope="col">Subatmospheric Pressure</th>
                <th scope="col">Continuing Pressure</th>
                <th scope="col">Low Pressure</th>
                <th scope="col">Other Pressure Alarms</th>
                <th scope="col">Expiratory Volume</th>
                <th scope="col">Reverse Flow</th>
                <th scope="col">High low Minute Volume</th>
                <th scope="col">High low Flow</th>
                <th scope="col">Other Expiratory Alarms</th> 
                <th scope="col">O2 Concentration</th>
                <th scope="col">N2O</th>
                <th scope="col">Agent Monitors</th>
                <th scope="col">Type Agents</th>
                <th scope="col">Response Time</th>
                <th scope="col">Auto ID</th>
                <th scope="col">Agent Concentration</th>
                <th scope="col">Other Monitors</th>
                <th scope="col">Other Features</th>
                {{-- //DISPLAYS --}}
                <th scope="col">Number</th>
                <th scope="col">Type D</th>
                <th scope="col">Integrated PM</th>
                <th scope="col">Interface PM</th>
                <th scope="col">User Interface</th>
                <th scope="col">Prioritized Alarms</th>
                {{-- //DIMENSIONS --}}
                <th scope="col">HxWxD</th>
                <th scope="col">Weight</th>
                <th scope="col">Shelves</th>
                <th scope="col">Drawers</th>
                <th scope="col">Central Brake</th>
                <th scope="col">Power VAC</th>
                <th scope="col">Auxiliary Outlets</th>
                <th scope="col">Backup Battery</th>
                {{-- //PURCHASE INFORMATION\ --}}
                <th scope="col">Warranty</th>
                <th scope="col">Service Contract</th>
                <th scope="col">Delivery Time</th>
                <th scope="col">Other Specifications</th>
                <th scope="col">SCORE</th>

              </tr>
            </thead>
            <style>
                .fuera {background-color : #e06464 !important; }
              </style>
              <tbody>
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