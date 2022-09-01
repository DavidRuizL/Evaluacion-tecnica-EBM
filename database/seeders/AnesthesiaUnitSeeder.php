<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\AnesthesiaUnit;
use Illuminate\Database\Seeder;

class AnesthesiaUnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $AUnit1 = new AnesthesiaUnit;
        $AUnit1->Manufacturer='Basic-Performance Anesthesia Units';
        $AUnit1->WhereMarketed='';
        $AUnit1->FDAClearance='';
        $AUnit1->Configuration='';
        $AUnit1->PipelineGasInletsO2='YES';
        $AUnit1->PipelineGasInletsN2O='YES';
        $AUnit1->PipelineGasInletsAir='YES';
        $AUnit1->GasCylinderYokesO2='YES';
        $AUnit1->GasCylinderYokesN2O='YES';
        $AUnit1->GasCylinderYokesAir='';
        $AUnit1->VaporizersDesflurane='YES';
        $AUnit1->VaporizersEnflurane='YES';
        $AUnit1->VaporizersHalothane='YESi';
        $AUnit1->VaporizersIsoflurane='YES';
        $AUnit1->VaporizersSevoflurane='YES';
        $AUnit1->Type='';
        $AUnit1->ElectronicallyControlled='';
        $AUnit1->Interlock='YES';
        $AUnit1->O2FailSafe='YES';
        $AUnit1->HypoxicMixtureFailSafe='YES';
        $AUnit1->AutomaticVentilator='YES';
        $AUnit1->VM_Manual_spontaneous='YES';
        $AUnit1->VM_VCV='YES';
        $AUnit1->VM_SIMV='';
        $AUnit1->VM_AdvancedModes='';
        $AUnit1->RangeCC=49;
        $AUnit1->CC=200;
        $AUnit1->RangeLm=20;
        $AUnit1->bpmH=60;
        $AUnit1->bpmL=5;
        $AUnit1->InspiratoryFlowH=120;
        $AUnit1->InspiratoryFlowL=0;
        $AUnit1->InspiratoryPause=0;
        $AUnit1->Pressurelimit=70;
        $AUnit1->PEEP=20;
        $AUnit1->OtherControls='';
        $AUnit1->SystemChecks='YES';
        $AUnit1->ScavengingSystem='YES';
        $AUnit1 ->save();
    }
}
