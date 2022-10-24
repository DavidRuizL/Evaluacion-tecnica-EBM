<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Stretcher;
use Illuminate\Database\Seeder;


class InfusionPumpsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        $InfusionPumps = new InfusionPumps;
        //PUMP CAPABILITIES
       
        $InfusionPumps->FDAClearance= '';
        $InfusionPumps->Tabletopambulatory= '';
        $InfusionPumps->PCADoseButtonLocation= 'On pump or bolus cord';
        $InfusionPumps->PumpMechanism= '';
        $InfusionPumps->PoleMounting= 'On pump or bolus cord';
        $InfusionPumps->Increments= '0.1 mL/hr ';
        $InfusionPumps->BolusDose= 'Preferred';
        $InfusionPumps->IncrementBolusDose= '0.1-25 mL';
        $InfusionPumps->LoadingDose= 'Preferred';
        $InfusionPumps->KVORatemLhr= '1-5';
        $InfusionPumps->Accuracy= '5';
        $InfusionPumps->NurseCallJack= '';
        $InfusionPumps->FreeFlowProtection= 'Required';
        $InfusionPumps->LockoutIntervalRangeMin= '≤5-100';
        $InfusionPumps->AccumulatedDoseLimit= 'Preferred';
        $InfusionPumps->ControlsAccess= 'Key or security code';
        $InfusionPumps->ReservoirType= '';
        $InfusionPumps->VolumeCapacitymL= '≥30';
        $InfusionPumps->Access= 'Key, lockbox';
        $InfusionPumps->SyringeSizeDetection= 'Preferred';
        //DISPLAY
        $InfusionPumps->Display = '';
        $InfusionPumps->DataDisplay = 'Dose, concentration, lockout interval, rate, patient requests, alarms';
         //ALARMS & INDICATORS
        $InfusionPumps->UpdownOcclusion= 'Preferred';
        $InfusionPumps->FlowError= 'Preferred';
        $InfusionPumps->AirInLine= 'Preferred';
        $InfusionPumps->SystemMalfunction= 'Preferred';
        $InfusionPumps->EmptyReservoir= 'Preferred';
        $InfusionPumps->InfusionNearEnd= 'Preferred';
        $InfusionPumps->LowBattery= 'Preferred';
        $InfusionPumps->DepletedBattery= 'Preferred';
        $InfusionPumps->UserPrompts= '';
        $InfusionPumps->VolumeControl= '';
        $InfusionPumps->MomentarySilence= '';
        //POWER SOURCE
        $InfusionPumps->LinePower= '';
        $InfusionPumps->Battery= 'Pumps that accept disposable and rechargeable batteries preferred';
        $InfusionPumps->OperatingTimehr= '≥5 @ 10 mL/hr';
        $InfusionPumps->Rechargetimehr= '';
        $InfusionPumps->Weight;
        //PURCHASE INFORMATION
        $InfusionPumps->Warranty;
        $InfusionPumps->TrainingWithPurchase= '';
        $InfusionPumps->ServiceContract= '';
        $InfusionPumps ->save();
        
    }
}
