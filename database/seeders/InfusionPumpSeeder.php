<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\InfusionPump;
use Illuminate\Database\Seeder;

class InfusionPumpSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $InfusionPump = new InfusionPump;
        //PUMP CAPABILITIES
       
        $InfusionPump->FDAClearance= '';
        $InfusionPump->Tabletopambulatory= '';
        $InfusionPump->PCADoseButtonLocation= 'On pump or bolus cord';
        $InfusionPump->PumpMechanism= '';
        $InfusionPump->PoleMounting= 'On pump or bolus cord';
        $InfusionPump->Increments= 0.1;
        $InfusionPump->BolusDose= 'Preferred';
        $InfusionPump->IncrementBolusDose= 25;
        $InfusionPump->LoadingDose= 'Preferred';
        $InfusionPump->KVORatemLhr= 5;
        $InfusionPump->Accuracy= 5;
        $InfusionPump->NurseCallJack= '';
        $InfusionPump->FreeFlowProtection= 'Required';
        $InfusionPump->LockoutIntervalRangeMin= 100;
        $InfusionPump->AccumulatedDoseLimit= 'Preferred';
        $InfusionPump->ControlsAccess= 'Key or security code';
        $InfusionPump->ReservoirType= '';
        $InfusionPump->VolumeCapacitymL= 30;
        $InfusionPump->Access= 'Key, lockbox';
        $InfusionPump->SyringeSizeDetection= 'Preferred';
        //DISPLAY
        $InfusionPump->Display = '';
        $InfusionPump->DataDisplay = 'Dose, concentration, lockout interval, rate, patient requests, alarms';
         //ALARMS & INDICATORS
        $InfusionPump->UpdownOcclusion= 'Preferred';
        $InfusionPump->FlowError= 'Preferred';
        $InfusionPump->AirInLine= 'Preferred';
        $InfusionPump->SystemMalfunction= 'Preferred';
        $InfusionPump->EmptyReservoir= 'Preferred';
        $InfusionPump->InfusionNearEnd= 'Preferred';
        $InfusionPump->LowBattery= 'Preferred';
        $InfusionPump->DepletedBattery= 'Preferred';
        $InfusionPump->UserPrompts= '';
        $InfusionPump->VolumeControl= '';
        $InfusionPump->MomentarySilence= '';
        //POWER SOURCE
        $InfusionPump->LinePower= '';
        $InfusionPump->Battery= 'Pumps that accept disposable and rechargeable batteries preferred';
        $InfusionPump->OperatingTimehr= 10;
        $InfusionPump->Rechargetimehr= '';
        $InfusionPump->Weight= '';
        //PURCHASE INFORMATION
        $InfusionPump->Warranty= '';
        $InfusionPump->TrainingWithPurchase= '';
        $InfusionPump->ServiceContract= '';
        $InfusionPump ->save();
    }
}




