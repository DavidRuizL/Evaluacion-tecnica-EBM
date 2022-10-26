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

        $AUnit1->Number=1;
        $AUnit1->TypeD='';
        $AUnit1->IntegratedPM='YES';
        $AUnit1->InterfacePM='YES';
        $AUnit1->UserInterface='';
        $AUnit1->PrioritizedAlarms='YES';
        $AUnit1->HxWxD='';
        $AUnit1->Weight='';
        $AUnit1->Shelves='';
        $AUnit1->Drawers='';
        $AUnit1->CentralBrake='';
        $AUnit1->PowerVAC='';
        $AUnit1->AuxiliaryOutlets='';
        $AUnit1->BackupBattery='YES';
        $AUnit1->UsePerCharge=0.5;
        //PURCHASE INFORMATION
        $AUnit1->Warranty='';
        $AUnit1->ServiceContract='';
        $AUnit1->DeliveryTime='';
        $AUnit1->OtherSpecifications='';
        $AUnit1 ->save();        


//PERSONALIZADO 1
// Spacelabs Healthcare Inc An OSI Systems Co   MARCA
// BleaseFocus                                  MODELO
        $AUnit2 = new AnesthesiaUnit;
        $AUnit2->Manufacturer='Personalized 1';
        $AUnit2->WhereMarketed='Worldwide';
        $AUnit2->FDAClearance='YES';
        $AUnit2->Configuration='Mobile';
        $AUnit2->PipelineGasInletsO2='YES';
        $AUnit2->PipelineGasInletsN2O='YES';
        $AUnit2->PipelineGasInletsAir='YES';
        $AUnit2->GasCylinderYokesO2='YES';
        $AUnit2->GasCylinderYokesN2O='YES';
        $AUnit2->GasCylinderYokesAir='NO';
        $AUnit2->VaporizersDesflurane='NO';
        $AUnit2->VaporizersEnflurane='YES';
        $AUnit2->VaporizersHalothane='YES';
        $AUnit2->VaporizersIsoflurane='YES';
        $AUnit2->VaporizersSevoflurane='YES';
        $AUnit2->Type='Plenum-type variable bypass, fully compensated';
        $AUnit2->ElectronicallyControlled='NO';
        $AUnit2->Interlock='Fully compatible';
        $AUnit2->O2FailSafe='Multigas cutoff, full alarms';
        $AUnit2->HypoxicMixtureFailSafe='Gear-driven ratio system';
        $AUnit2->AutomaticVentilator='Blease 700/900';
        $AUnit2->VM_Manual_spontaneous='YES';
        $AUnit2->VM_VCV='YES';
        $AUnit2->VM_SIMV='YES';
        $AUnit2->VM_AdvancedModes='YES';
        $AUnit2->RangeCC=20;
        $AUnit2->CC=500;
        $AUnit2->RangeLm=25;
        $AUnit2->bpmH=99;
        $AUnit2->bpmL=2;
        $AUnit2->InspiratoryFlowH=100;
        $AUnit2->InspiratoryFlowL=0;
        $AUnit2->InspiratoryPause=50;
        $AUnit2->Pressurelimit=100;
        $AUnit2->PEEP=20;
        $AUnit2->OtherControls='YES';
        $AUnit2->SystemChecks='Self-verification and leak test';
        $AUnit2->ScavengingSystem='Active vacuum or exhaust AGSS, high or low flow';
        $AUnit2->Number=2;
        $AUnit2->TypeD='21.3';
        $AUnit2->IntegratedPM='YES';
        $AUnit2->InterfacePM='YES';
        $AUnit2->UserInterface='Touchscreen with ComWheel';
        $AUnit2->PrioritizedAlarms='Optional';
        $AUnit2->HxWxD='149 x 63 x 75';
        $AUnit2->Weight='80 ';
        $AUnit2->Shelves='Top shelf 58 x 37';
        $AUnit2->Drawers='Two 38 x 34 x 19';
        $AUnit2->CentralBrake='NO';
        $AUnit2->PowerVAC='100-260';
        $AUnit2->AuxiliaryOutlets='4';
        $AUnit2->BackupBattery='YES';
        $AUnit2->UsePerCharge=2;
        //PURCASE INFORMATION
        $AUnit2->Warranty='1';
        $AUnit2->ServiceContract='Optional';
        $AUnit2->DeliveryTime='1-2 month';
        $AUnit2->OtherSpecifications='YES';
        $AUnit2 ->save();     
        
        
        //PERSONALIZADO 2
        $AUnit3 = new AnesthesiaUnit;
        $AUnit3->Manufacturer='Personalized 2';
        $AUnit3->WhereMarketed='';
        $AUnit3->FDAClearance='';
        $AUnit3->Configuration='';
        $AUnit3->PipelineGasInletsO2='YES';
        $AUnit3->PipelineGasInletsN2O='YES';
        $AUnit3->PipelineGasInletsAir='YES';
        $AUnit3->GasCylinderYokesO2='YES';
        $AUnit3->GasCylinderYokesN2O='YES';
        $AUnit3->GasCylinderYokesAir='';
        $AUnit3->VaporizersDesflurane='YES';
        $AUnit3->VaporizersEnflurane='YES';
        $AUnit3->VaporizersHalothane='YESi';
        $AUnit3->VaporizersIsoflurane='YES';
        $AUnit3->VaporizersSevoflurane='YES';
        $AUnit3->Type='';
        $AUnit3->ElectronicallyControlled='';
        $AUnit3->Interlock='YES';
        $AUnit3->O2FailSafe='YES';
        $AUnit3->HypoxicMixtureFailSafe='YES';
        $AUnit3->AutomaticVentilator='YES';
        $AUnit3->VM_Manual_spontaneous='YES';
        $AUnit3->VM_VCV='YES';
        $AUnit3->VM_SIMV='';
        $AUnit3->VM_AdvancedModes='';
        $AUnit3->RangeCC=49;
        $AUnit3->CC=200;
        $AUnit3->RangeLm=20;
        $AUnit3->bpmH=60;
        $AUnit3->bpmL=5;
        $AUnit3->InspiratoryFlowH=120;
        $AUnit3->InspiratoryFlowL=0;
        $AUnit3->InspiratoryPause=0;
        $AUnit3->Pressurelimit=70;
        $AUnit3->PEEP=20;
        $AUnit3->OtherControls='';
        $AUnit3->SystemChecks='YES';
        $AUnit3->ScavengingSystem='YES';
        $AUnit3->Number=2;
        $AUnit3->TypeD='';
        $AUnit3->IntegratedPM='YES';
        $AUnit3->InterfacePM='YES';
        $AUnit3->UserInterface='';
        $AUnit3->PrioritizedAlarms='YES';
        $AUnit3->HxWxD='';
        $AUnit3->Weight='';
        $AUnit3->Shelves='';
        $AUnit3->Drawers='';
        $AUnit3->CentralBrake='';
        $AUnit3->PowerVAC='';
        $AUnit3->AuxiliaryOutlets='';
        $AUnit3->BackupBattery='YES';
        $AUnit3->UsePerCharge=0.5;
        //PURCSE INFORMATION
        $AUnit3->Warranty='';
        $AUnit3->ServiceContract='';
        $AUnit3->DeliveryTime='';
        $AUnit3->OtherSpecifications='';
        $AUnit3 ->save(); 


        //PERSONALIZADO 3
        $AUnit4 = new AnesthesiaUnit;
        $AUnit4->Manufacturer='Personalized 3';
        $AUnit4->WhereMarketed='';
        $AUnit4->FDAClearance='';
        $AUnit4->Configuration='';
        $AUnit4->PipelineGasInletsO2='YES';
        $AUnit4->PipelineGasInletsN2O='YES';
        $AUnit4->PipelineGasInletsAir='YES';
        $AUnit4->GasCylinderYokesO2='YES';
        $AUnit4->GasCylinderYokesN2O='YES';
        $AUnit4->GasCylinderYokesAir='';
        $AUnit4->VaporizersDesflurane='YES';
        $AUnit4->VaporizersEnflurane='YES';
        $AUnit4->VaporizersHalothane='YESi';
        $AUnit4->VaporizersIsoflurane='YES';
        $AUnit4->VaporizersSevoflurane='YES';
        $AUnit4->Type='';
        $AUnit4->ElectronicallyControlled='';
        $AUnit4->Interlock='YES';
        $AUnit4->O2FailSafe='YES';
        $AUnit4->HypoxicMixtureFailSafe='YES';
        $AUnit4->AutomaticVentilator='YES';
        $AUnit4->VM_Manual_spontaneous='YES';
        $AUnit4->VM_VCV='YES';
        $AUnit4->VM_SIMV='';
        $AUnit4->VM_AdvancedModes='';
        $AUnit4->RangeCC=49;
        $AUnit4->CC=200;
        $AUnit4->RangeLm=20;
        $AUnit4->bpmH=60;
        $AUnit4->bpmL=5;
        $AUnit4->InspiratoryFlowH=120;
        $AUnit4->InspiratoryFlowL=0;
        $AUnit4->InspiratoryPause=0;
        $AUnit4->Pressurelimit=70;
        $AUnit4->PEEP=20;
        $AUnit4->OtherControls='';
        $AUnit4->SystemChecks='YES';
        $AUnit4->ScavengingSystem='YES';
        $AUnit4->Number=1;
        $AUnit4->TypeD='';
        $AUnit4->IntegratedPM='YES';
        $AUnit4->InterfacePM='YES';
        $AUnit4->UserInterface='';
        $AUnit4->PrioritizedAlarms='YES';
        $AUnit4->HxWxD='';
        $AUnit4->Weight='';
        $AUnit4->Shelves='';
        $AUnit4->Drawers='';
        $AUnit4->CentralBrake='';
        $AUnit4->PowerVAC='';
        $AUnit4->AuxiliaryOutlets='';
        $AUnit4->BackupBattery='YES';
        $AUnit4->UsePerCharge=0.5;
        //PURCSE INFORMATION
        $AUnit4->Warranty='';
        $AUnit4->ServiceContract='';
        $AUnit4->DeliveryTime='';
        $AUnit4->OtherSpecifications='';
        $AUnit4 ->save(); 

//Draeger Inc     MARCA
//Apollo          MODELO
        $AUnit5 = new AnesthesiaUnit;
        $AUnit5->Manufacturer='Draeger Inc';
        $AUnit5->WhereMarketed='Japan, USA';
        $AUnit5->FDAClearance='YES';
        $AUnit5->Configuration='Cart';
        $AUnit5->PipelineGasInletsO2='YES';
        $AUnit5->PipelineGasInletsN2O='YES';
        $AUnit5->PipelineGasInletsAir='YES';
        $AUnit5->GasCylinderYokesO2='YES';
        $AUnit5->GasCylinderYokesN2O='YES';
        $AUnit5->GasCylinderYokesAir='YES';
        $AUnit5->VaporizersDesflurane='YES';
        $AUnit5->VaporizersEnflurane='YES';
        $AUnit5->VaporizersHalothane='YES';
        $AUnit5->VaporizersIsoflurane='YES';
        $AUnit5->VaporizersSevoflurane='YES';
        $AUnit5->Type='Variable bypass, removable mount';
        $AUnit5->ElectronicallyControlled='NO';
        $AUnit5->Interlock='YES';
        $AUnit5->O2FailSafe='YES';
        $AUnit5->HypoxicMixtureFailSafe='O2 ratio controller';
        $AUnit5->AutomaticVentilator='YES';
        $AUnit5->VM_Manual_spontaneous='YES';
        $AUnit5->VM_VCV='NO';
        $AUnit5->VM_SIMV='NO';
        $AUnit5->VM_AdvancedModes='NO';
        $AUnit5->RangeCC=20;
        $AUnit5->CC=400;
        $AUnit5->RangeLm=25;
        $AUnit5->bpmH=100;
        $AUnit5->bpmL=3;
        $AUnit5->InspiratoryFlowH=150;
        $AUnit5->InspiratoryFlowL=0.1;
        $AUnit5->InspiratoryPause=60;
        $AUnit5->Pressurelimit=70;
        $AUnit5->PEEP=20;
        $AUnit5->OtherControls='YES';
        $AUnit5->SystemChecks='Manual checklist, fully automated self-test';
        $AUnit5->ScavengingSystem='Optional active or passive AGSS';
        $AUnit5->Number=1;
        $AUnit5->TypeD='TFT color flat panel';
        $AUnit5->IntegratedPM='YES';
        $AUnit5->InterfacePM='YES';
        $AUnit5->UserInterface='Membrane keys, rotary knob';
        $AUnit5->PrioritizedAlarms='3 (caution, advisory, alarm)';
        $AUnit5->HxWxD='150 x 85 x 80';
        $AUnit5->Weight='165 ';
        $AUnit5->Shelves='63 x 51 ';
        $AUnit5->Drawers='44 x 28 x 14';
        $AUnit5->CentralBrake='YES';
        $AUnit5->PowerVAC='100-240';
        $AUnit5->AuxiliaryOutlets='YES';
        $AUnit5->BackupBattery='YES';
        $AUnit5->UsePerCharge=0.5;
        //PURCASE INFORMATION
        $AUnit5->Warranty='1';
        $AUnit5->ServiceContract='YES';
        $AUnit5->DeliveryTime='1 month';
        $AUnit5->OtherSpecifications='YES';
        $AUnit5 ->save(); 



// Mindray     MARCA
// A5          MODELO
        $AUnit6 = new AnesthesiaUnit;
        $AUnit6->Manufacturer='Mindray';
        $AUnit6->WhereMarketed='Worldwide';
        $AUnit6->FDAClearance='YES';
        $AUnit6->Configuration='Cart';
        $AUnit6->PipelineGasInletsO2='YES';
        $AUnit6->PipelineGasInletsN2O='YES';
        $AUnit6->PipelineGasInletsAir='YES';
        $AUnit6->GasCylinderYokesO2='YES';
        $AUnit6->GasCylinderYokesN2O='YES';
        $AUnit6->GasCylinderYokesAir='YES';
        $AUnit6->VaporizersDesflurane='YES';
        $AUnit6->VaporizersEnflurane='YES';
        $AUnit6->VaporizersHalothane='YES';
        $AUnit6->VaporizersIsoflurane='YES';
        $AUnit6->VaporizersSevoflurane='YES';
        $AUnit6->Type='Variable bypass';
        $AUnit6->ElectronicallyControlled='NO';
        $AUnit6->Interlock='YES';
        $AUnit6->O2FailSafe='Pneumatic';
        $AUnit6->HypoxicMixtureFailSafe='Pneumatic ratio system';
        $AUnit6->AutomaticVentilator='YES';
        $AUnit6->VM_Manual_spontaneous='YES';
        $AUnit6->VM_VCV='YES';
        $AUnit6->VM_SIMV='YES';
        $AUnit6->VM_AdvancedModes='YES';
        $AUnit6->RangeCC=20;
        $AUnit6->CC=100;
        $AUnit6->RangeLm=100;
        $AUnit6->bpmH=100;
        $AUnit6->bpmL=4;
        $AUnit6->InspiratoryFlowH=120;
        $AUnit6->InspiratoryFlowL=0;
        $AUnit6->InspiratoryPause=60;
        $AUnit6->Pressurelimit=100;
        $AUnit6->PEEP=30;
        $AUnit6->OtherControls='YES';
        $AUnit6->SystemChecks='Semiautomatic leak and compliance check, self-diagnosis of processor';
        $AUnit6->ScavengingSystem='Active or passive, optional DGSS';
        $AUnit6->Number=1;
        $AUnit6->TypeD='TFT color flat panel';
        $AUnit6->IntegratedPM='YES';
        $AUnit6->InterfacePM='YES';
        $AUnit6->UserInterface='Membrane keys, rotary knob';
        $AUnit6->PrioritizedAlarms='3 (caution, advisory, alarm)';
        $AUnit6->HxWxD='150 x 85 x 80';
        $AUnit6->Weight='165 ';
        $AUnit6->Shelves='63 x 51 ';
        $AUnit6->Drawers='44 x 28 x 14';
        $AUnit6->CentralBrake='YES';
        $AUnit6->PowerVAC='100-240';
        $AUnit6->AuxiliaryOutlets='YES';
        $AUnit6->BackupBattery='YES';
        $AUnit6->UsePerCharge=0.5;
        //PURCASE INFORMATION
        $AUnit6->Warranty='1';
        $AUnit6->ServiceContract='1-3 years';
        $AUnit6->DeliveryTime='1 month';
        $AUnit6->OtherSpecifications='YES';
        $AUnit6 ->save();  
        
// Penlon Ltd       MARCA
// Prima 450        MODELO
        $AUnit7= new AnesthesiaUnit;
        $AUnit7->Manufacturer='Penlon Ltd';
        $AUnit7->WhereMarketed='Worldwide';
        $AUnit7->FDAClearance='YES';
        $AUnit7->Configuration='Mobile';
        $AUnit7->PipelineGasInletsO2='YES';
        $AUnit7->PipelineGasInletsN2O='YES';
        $AUnit7->PipelineGasInletsAir='YES';
        $AUnit7->GasCylinderYokesO2='YES';
        $AUnit7->GasCylinderYokesN2O='NO';
        $AUnit7->GasCylinderYokesAir='YES';
        $AUnit7->VaporizersDesflurane='YES';
        $AUnit7->VaporizersEnflurane='YES';
        $AUnit7->VaporizersHalothane='YES';
        $AUnit7->VaporizersIsoflurane='YES';
        $AUnit7->VaporizersSevoflurane='YES';
        $AUnit7->Type='Traditional plenum type';
        $AUnit7->ElectronicallyControlled='Desflurane only';
        $AUnit7->Interlock='YES';
        $AUnit7->O2FailSafe='YES';
        $AUnit7->HypoxicMixtureFailSafe='Integrated mechanical Anti-Hypoxic Device ';
        $AUnit7->AutomaticVentilator='Optional AV-S';
        $AUnit7->VM_Manual_spontaneous='YES';
        $AUnit7->VM_VCV='YES';
        $AUnit7->VM_SIMV='YES';
        $AUnit7->VM_AdvancedModes='YES';
        $AUnit7->RangeCC=20;
        $AUnit7->CC=600;
        $AUnit7->RangeLm=50;
        $AUnit7->bpmH=100;
        $AUnit7->bpmL=4;
        $AUnit7->InspiratoryFlowH=70;
        $AUnit7->InspiratoryFlowL=0;
        $AUnit7->InspiratoryPause=60;
        $AUnit7->Pressurelimit=10-80;
        $AUnit7->PEEP=4-20;
        $AUnit7->OtherControls='YES';
        $AUnit7->SystemChecks='Ventilator self-test, compliance and leak test';
        $AUnit7->ScavengingSystem='Optional active scavenging';
        $AUnit7->Number=1;
        $AUnit7->TypeD='21.3';
        $AUnit7->IntegratedPM='NO';
        $AUnit7->InterfacePM='Philips, CapsuleTech';
        $AUnit7->UserInterface='YES';
        $AUnit7->PrioritizedAlarms='YES';
        $AUnit7->HxWxD='139 x 71 x 70';
        $AUnit7->Weight='110 ';
        $AUnit7->Shelves='71 x 35';
        $AUnit7->Drawers='12 x 54 x 35';
        $AUnit7->CentralBrake='NO';
        $AUnit7->PowerVAC='100-240';
        $AUnit7->AuxiliaryOutlets='4';
        $AUnit7->BackupBattery='YES';
        $AUnit7->UsePerCharge=1;
        //PURCSE INFORMATION
        $AUnit7->Warranty='1';
        $AUnit7->ServiceContract='YES';
        $AUnit7->DeliveryTime='1-2 month';
        $AUnit7->OtherSpecifications='YES';
        $AUnit7->save(); 

// Spacelabs Healthcare Inc An OSI Systems Co   MARCA
// BleaseFocus                                  MODELO
        $AUnit8= new AnesthesiaUnit;
        $AUnit8->Manufacturer='Spacelabs Healthcare Inc An OSI Systems';
        $AUnit8->WhereMarketed='Worldwide';
        $AUnit8->FDAClearance='YES';
        $AUnit8->Configuration='Mobile';
        $AUnit8->PipelineGasInletsO2='YES';
        $AUnit8->PipelineGasInletsN2O='YES';
        $AUnit8->PipelineGasInletsAir='YES';
        $AUnit8->GasCylinderYokesO2='YES';
        $AUnit8->GasCylinderYokesN2O='YES';
        $AUnit8->GasCylinderYokesAir='NO';
        $AUnit8->VaporizersDesflurane='NO';
        $AUnit8->VaporizersEnflurane='YES';
        $AUnit8->VaporizersHalothane='YES';
        $AUnit8->VaporizersIsoflurane='YES';
        $AUnit8->VaporizersSevoflurane='YES';
        $AUnit8->Type='Plenum-type variable bypass, fully compensated';
        $AUnit8->ElectronicallyControlled='NO';
        $AUnit8->Interlock='Fully compatible';
        $AUnit8->O2FailSafe='Multigas cutoff, full alarms';
        $AUnit8->HypoxicMixtureFailSafe='Gear-driven ratio system';
        $AUnit8->AutomaticVentilator='Blease 700/900';
        $AUnit8->VM_Manual_spontaneous='YES';
        $AUnit8->VM_VCV='YES';
        $AUnit8->VM_SIMV='YES';
        $AUnit8->VM_AdvancedModes='YES';
        $AUnit8->RangeCC=20;
        $AUnit8->CC=500;
        $AUnit8->RangeLm=25;
        $AUnit8->bpmH=99;
        $AUnit8->bpmL=2;
        $AUnit8->InspiratoryFlowH=100;
        $AUnit8->InspiratoryFlowL=0;
        $AUnit8->InspiratoryPause=50;
        $AUnit8->Pressurelimit=100;
        $AUnit8->PEEP=20;
        $AUnit8->OtherControls='YES';
        $AUnit8->SystemChecks='Self-verification and leak test';
        $AUnit8->ScavengingSystem='Active vacuum or exhaust AGSS, high or low flow';
        $AUnit8->Number=1;
        $AUnit8->TypeD='21.3';
        $AUnit8->IntegratedPM='YES';
        $AUnit8->InterfacePM='YES';
        $AUnit8->UserInterface='Touchscreen with ComWheel';
        $AUnit8->PrioritizedAlarms='Optional';
        $AUnit8->HxWxD='149 x 63 x 75';
        $AUnit8->Weight='80 ';
        $AUnit8->Shelves='Top shelf 58 x 37';
        $AUnit8->Drawers='Two 38 x 34 x 19';
        $AUnit8->CentralBrake='NO';
        $AUnit8->PowerVAC='100-260';
        $AUnit8->AuxiliaryOutlets='4';
        $AUnit8->BackupBattery='YES';
        $AUnit8->UsePerCharge=2;
        //PURCE INFORMATION
        $AUnit8->Warranty='1';
        $AUnit8->ServiceContract='Optional';
        $AUnit8->DeliveryTime='1-2 month';
        $AUnit8->OtherSpecifications='YES';
        $AUnit8->save();     
    }
}



       






 



