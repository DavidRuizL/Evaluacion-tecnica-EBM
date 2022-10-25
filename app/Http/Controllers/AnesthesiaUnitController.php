<?php

namespace App\Http\Controllers;

use \App\Models\AnesthesiaUnit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnesthesiaUnitController extends Controller
{
        public function select()
      {
          return view('/aunit/select');
      }

    public function criteria()
    {
        $anesthesiaunit=   \App\Models\AnesthesiaUnit::where("id","<",5)->get(); 
        return view('aunit.criteria')->with('anesthesiaunits', $anesthesiaunit);
    }
    public function index1()
  {
    $anesthesiaunit=   \App\Models\AnesthesiaUnit::all();
    return view('aunit.per1')->with('anesthesiaunits', $anesthesiaunit);
  }
    public function index2()
  {
    $anesthesiaunit=   \App\Models\AnesthesiaUnit::all();
    return view('aunit.per2')->with('anesthesiaunits', $anesthesiaunit);
  }
    public function index3()
  {
    $anesthesiaunit=   \App\Models\AnesthesiaUnit::all();
    return view('aunit.per3')->with('anesthesiaunits', $anesthesiaunit);
  }
      /**
       * Display a listing of the resource.
       *
       * @return \Illuminate\Http\Response
       */
      public function index()
      {
          $anesthesiaunit=   \App\Models\AnesthesiaUnit::all();
          return view('aunit.index')->with('anesthesiaunits', $anesthesiaunit);
      }


      /**
       * Show the form for creating a new resource.
       *
       * @return \Illuminate\Http\Response
       */
      public function create()
      {
          return view('aunit.create');
      }

      /**
       * Store a newly created resource in storage.
       *
       * @param  \Illuminate\Http\Request  $request
       * @return \Illuminate\Http\Response
       */
      public function store(Request $request)
      {
        $anesthesiaunit = new AnesthesiaUnit;
        $anesthesiaunit->Manufacturer=$request->get('Manufacturer');
        $anesthesiaunit->WhereMarketed=$request->get('WhereMarketed');
        $anesthesiaunit->FDAClearance=$request->get('FDAClearance');
        $anesthesiaunit->Configuration=$request->get('Configuration');
        $anesthesiaunit->PipelineGasInletsO2=$request->get('PipelineGasInletsO2');
        $anesthesiaunit->PipelineGasInletsN2O=$request->get('PipelineGasInletsN2O');
        $anesthesiaunit->PipelineGasInletsAir=$request->get('PipelineGasInletsAir');
        $anesthesiaunit->GasCylinderYokesO2=$request->get('GasCylinderYokesO2');
        $anesthesiaunit->GasCylinderYokesN2O=$request->get('GasCylinderYokesN2O');
        $anesthesiaunit->GasCylinderYokesAir=$request->get('GasCylinderYokesAir');
        $anesthesiaunit->VaporizersDesflurane=$request->get('VaporizersDesflurane');
        $anesthesiaunit->VaporizersEnflurane=$request->get('VaporizersEnflurane');
        $anesthesiaunit->VaporizersHalothane=$request->get('VaporizersHalothane');
        $anesthesiaunit->VaporizersIsoflurane=$request->get('VaporizersIsoflurane');
        $anesthesiaunit->VaporizersSevoflurane=$request->get('VaporizersSevoflurane');
        $anesthesiaunit->Type=$request->get('Type');
        $anesthesiaunit->ElectronicallyControlled=$request->get('ElectronicallyControlled');
        $anesthesiaunit->Interlock=$request->get('Interlock');
        $anesthesiaunit->O2FailSafe=$request->get('O2FailSafe');
        $anesthesiaunit->HypoxicMixtureFailSafe=$request->get('HypoxicMixtureFailSafe');
        $anesthesiaunit->AutomaticVentilator=$request->get('AutomaticVentilator');
        $anesthesiaunit->VM_Manual_spontaneous=$request->get('VM_Manual_spontaneous');
        $anesthesiaunit->VM_VCV=$request->get('VM_VCV');
        $anesthesiaunit->VM_SIMV=$request->get('VM_SIMV');
        $anesthesiaunit->VM_AdvancedModes=$request->get('VM_AdvancedModes');
        $anesthesiaunit->RangeCC=$request->get('RangeCC');
        $anesthesiaunit->CC=$request->get('CC');
        $anesthesiaunit->RangeLm=$request->get('RangeLm');
        $anesthesiaunit->bpmH=$request->get('bpmH');
        $anesthesiaunit->bpmL=$request->get('bpmL');
        $anesthesiaunit->InspiratoryFlowH=$request->get('InspiratoryFlowH');
        $anesthesiaunit->InspiratoryFlowL=$request->get('InspiratoryFlowL');
        $anesthesiaunit->InspiratoryPause=$request->get('InspiratoryPause');
        $anesthesiaunit->Pressurelimit=$request->get('Pressurelimit');
        $anesthesiaunit->PEEP=$request->get('PEEP');
        $anesthesiaunit->OtherControls=$request->get('OtherControls');
        $anesthesiaunit->SystemChecks=$request->get('SystemChecks');
        $anesthesiaunit->ScavengingSystem=$request->get('ScavengingSystem');

        $anesthesiaunit->Number=$request->get('Number');
        $anesthesiaunit->TypeD=$request->get('TypeD');
        $anesthesiaunit->IntegratedPM=$request->get('IntegratedPM');
        $anesthesiaunit->InterfacePM=$request->get('InterfacePM');
        $anesthesiaunit->UserInterface=$request->get('UserInterface');
        $anesthesiaunit->PrioritizedAlarms=$request->get('PrioritizedAlarms');
        $anesthesiaunit->HxWxD=$request->get('HxWxD');
        $anesthesiaunit->Weight=$request->get('Weight');
        $anesthesiaunit->Shelves=$request->get('Shelves');
        $anesthesiaunit->Drawers=$request->get('Drawers');
        $anesthesiaunit->CentralBrake=$request->get('CentralBrake');
        $anesthesiaunit->PowerVAC=$request->get('PowerVAC');
        $anesthesiaunit->AuxiliaryOutlets=$request->get('AuxiliaryOutlets');
        $anesthesiaunit->BackupBattery=$request->get('BackupBattery');
        $anesthesiaunit->UsePerCharge=$request->get('UsePerCharge');
        //PURCHASE INFORMATION
        $anesthesiaunit->Warranty=$request->get('Warranty');
        $anesthesiaunit->ServiceContract=$request->get('ServiceContract');
        $anesthesiaunit->DeliveryTime=$request->get('DeliveryTime');
        $anesthesiaunit->OtherSpecifications=$request->get('OtherSpecifications');
        $anesthesiaunit ->save();   
          return redirect('/aunit/select');
      }

      /**
       * Display the specified resource.
       *
       * @param   \App\Models\AnesthesiaUnit  $anesthesiaunit
       * @return \Illuminate\Http\Response
       */
      public function show(anesthesiaunit $anesthesiaunit)
      {
          //
      }

      /**
       * Show the form for editing the specified resource.
       *
       * @param   \App\Models\AnesthesiaUnit  $anesthesiaunit
       * @return \Illuminate\Http\Response
       */
      public function edit($id)
      {
            $anesthesiaunit= anesthesiaunit::findOrFail($id);
            return view('aunit.edit', compact('anesthesiaunit'));
      }

      /**
       * Update the specified resource in storage.
       *
       * @param  \Illuminate\Http\Request  $request
       * @param   \App\Models\AnesthesiaUnit  $anesthesiaunit
       * @return \Illuminate\Http\Response
       */

      public function update(Request $request,  $id)
      {
       $anesthesiaunit = anesthesiaunit::findOrFail($id);
        $anesthesiaunit->Manufacturer=$request->input('Manufacturer');
        $anesthesiaunit->WhereMarketed=$request->input('WhereMarketed');
        $anesthesiaunit->FDAClearance=$request->input('FDAClearance');
        $anesthesiaunit->Configuration=$request->input('Configuration');
        $anesthesiaunit->PipelineGasInletsO2=$request->input('PipelineGasInletsO2');
        $anesthesiaunit->PipelineGasInletsN2O=$request->input('PipelineGasInletsN2O');
        $anesthesiaunit->PipelineGasInletsAir=$request->input('PipelineGasInletsAir');
        $anesthesiaunit->GasCylinderYokesO2=$request->input('GasCylinderYokesO2');
        $anesthesiaunit->GasCylinderYokesN2O=$request->input('GasCylinderYokesN2O');
        $anesthesiaunit->GasCylinderYokesAir=$request->input('GasCylinderYokesAir');
        $anesthesiaunit->VaporizersDesflurane=$request->input('VaporizersDesflurane');
        $anesthesiaunit->VaporizersEnflurane=$request->input('VaporizersEnflurane');
        $anesthesiaunit->VaporizersHalothane=$request->input('VaporizersHalothane');
        $anesthesiaunit->VaporizersIsoflurane=$request->input('VaporizersIsoflurane');
        $anesthesiaunit->VaporizersSevoflurane=$request->input('VaporizersSevoflurane');
        $anesthesiaunit->Type=$request->input('Type');
        $anesthesiaunit->ElectronicallyControlled=$request->input('ElectronicallyControlled');
        $anesthesiaunit->Interlock=$request->input('Interlock');
        $anesthesiaunit->O2FailSafe=$request->input('O2FailSafe');
        $anesthesiaunit->HypoxicMixtureFailSafe=$request->input('HypoxicMixtureFailSafe');
        $anesthesiaunit->AutomaticVentilator=$request->input('AutomaticVentilator');
        $anesthesiaunit->VM_Manual_spontaneous=$request->input('VM_Manual_spontaneous');
        $anesthesiaunit->VM_VCV=$request->input('VM_VCV');
        $anesthesiaunit->VM_SIMV=$request->input('VM_SIMV');
        $anesthesiaunit->VM_AdvancedModes=$request->input('VM_AdvancedModes');
        $anesthesiaunit->RangeCC=$request->input('RangeCC');
        $anesthesiaunit->CC=$request->input('CC');
        $anesthesiaunit->RangeLm=$request->input('RangeLm');
        $anesthesiaunit->bpmH=$request->input('bpmH');
        $anesthesiaunit->bpmL=$request->input('bpmL');
        $anesthesiaunit->InspiratoryFlowH=$request->input('InspiratoryFlowH');
        $anesthesiaunit->InspiratoryFlowL=$request->input('InspiratoryFlowL');
        $anesthesiaunit->InspiratoryPause=$request->input('InspiratoryPause');
        $anesthesiaunit->Pressurelimit=$request->input('Pressurelimit');
        $anesthesiaunit->PEEP=$request->input('PEEP');
        $anesthesiaunit->OtherControls=$request->input('OtherControls');
        $anesthesiaunit->SystemChecks=$request->input('SystemChecks');
        $anesthesiaunit->ScavengingSystem=$request->input('ScavengingSystem');

        $anesthesiaunit->Number=$request->input('Number');
        $anesthesiaunit->TypeD=$request->input('TypeD');
        $anesthesiaunit->IntegratedPM=$request->input('IntegratedPM');
        $anesthesiaunit->InterfacePM=$request->input('InterfacePM');
        $anesthesiaunit->UserInterface=$request->input('UserInterface');
        $anesthesiaunit->PrioritizedAlarms=$request->input('PrioritizedAlarms');
        $anesthesiaunit->HxWxD=$request->input('HxWxD');
        $anesthesiaunit->Weight=$request->input('Weight');
        $anesthesiaunit->Shelves=$request->input('Shelves');
        $anesthesiaunit->Drawers=$request->input('Drawers');
        $anesthesiaunit->CentralBrake=$request->input('CentralBrake');
        $anesthesiaunit->PowerVAC=$request->input('PowerVAC');
        $anesthesiaunit->AuxiliaryOutlets=$request->input('AuxiliaryOutlets');
        $anesthesiaunit->BackupBattery=$request->input('BackupBattery');
        $anesthesiaunit->UsePerCharge=$request->input('UsePerCharge');
        //PURCHASE INFORMATION
        $anesthesiaunit->Warranty=$request->input('Warranty');
        $anesthesiaunit->ServiceContract=$request->input('ServiceContract');
        $anesthesiaunit->DeliveryTime=$request->input('DeliveryTime');
        $anesthesiaunit->OtherSpecifications=$request->input('OtherSpecifications');
        $anesthesiaunit ->save();   
          return redirect()->route('aunit.select');

      }

      /**
       * Remove the specified resource from storage.
       *
       * @param   \App\Models\AnesthesiaUnit  $anesthesiaunit
       * @return \Illuminate\Http\Response
       */
      public function destroy(anesthesiaunit $anesthesiaunit)
      {
          //
      }
}
