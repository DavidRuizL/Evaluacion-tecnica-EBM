<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Oximeter extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $Oximeter = new Oximeter;
            $Oximeter->Manufacturer = 'ECRI Recommended';
            $Oximeter->WhereMarketed= '';
            $Oximeter->FDAClearance= '';
            $Oximeter->CeMark= '';
            $Oximeter->StandAlone= '';
            $Oximeter->MountingOptions= '';
            //DISPLAY
            $Oximeter->Display= 'SpO2, pulse rate, pulse strength and/or signal, low battery';
            $Oximeter->TypeDisplay= 'LCD, LED, others';
            $Oximeter->SpO2Range= '70-100';
            $Oximeter->AccuracyDisplay= '70-100 ±3';
            //PULSE RATE, BPM
            $Oximeter->PulseRatebpm= '30-240';
            $Oximeter->AccuracyPulse= '±5';
            $Oximeter->PerfusionIndex= 'Required, continuous monitors; preferred, spot check monitors';
            $Oximeter->ResponseTime= 'Depends on application';
            
            //ALARMS
            $Oximeter->AudibleAndVisual= 'High/low SpO2 and pulse rate, sensor off, sensor failure, low battery';
            $Oximeter->Visual= 'High/low SpO2 and pulse rate, sensor off, low battery';
            $Oximeter->AlarmOverride= 'Preferred';
            $Oximeter->ReactivationMethod= 'Automatic or manual';
            $Oximeter->VolumeControl= 'Preferred';
            $Oximeter->SelfTestMode= 'Preferred';
            //PROBE TYPES
            $Oximeter->Disposable= '';
            $Oximeter->Reusable= '';
            $Oximeter->PatientRange= 'Adult, pediatric, infant, neonate';
            $Oximeter->CableLength= '';
            //DATA MANAGEMENT
            $Oximeter->DataStored= '';
            $Oximeter->DataSorage= '';
            $Oximeter->MRIConditional= 'Required for use in MRI environment';
            //BatteryType
            $Oximeter->BarreryType= '';
            $Oximeter->BatteryLife= '4 intrahospital, 8 interhospital';
            $Oximeter->Rechargeable= 'Preferred; optional for handheld';
            $Oximeter->ReacharbleTime= '≤16';
            $Oximeter->LowBatteryNotice= 'Preferred';
            //Purchase information
            $Oximeter->LisPrice= '';
            $Oximeter->Warranty= '';
    }
}
