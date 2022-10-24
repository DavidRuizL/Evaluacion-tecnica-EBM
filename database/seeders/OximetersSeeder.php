<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Oximeter;
use Illuminate\Database\Seeder;

class OximetersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $Oximeters = new Oximeter;
            $Oximeters->Manufacturer = 'ECRI Recommended';
            $Oximeters->WhereMarketed= '';
            $Oximeters->FDAClearance= '';
            $Oximeters->CeMark= '';
            $Oximeters->StandAlone= '';
            $Oximeters->MountingOptions= '';
            //DISPLAY
            $Oximeters->Display= 'SpO2, pulse rate, pulse strength and/or signal, low battery';
            $Oximeters->TypeDisplay= 'LCD, LED, others';
            $Oximeters->SpO2Range= '70-100';
            $Oximeters->AccuracyDisplay= '70-100 ±3';
            //PULSE RATE, BPM
            $Oximeters->PulseRatebpm= '30-240';
            $Oximeters->AccuracyPulse= '±5';
            $Oximeters->PerfusionIndex= 'Required, continuous monitors; preferred, spot check monitors';
            $Oximeters->ResponseTime= 'Depends on application';
            
            //ALARMS
            $Oximeters->AudibleAndVisual= 'High/low SpO2 and pulse rate, sensor off, sensor failure, low battery';
            $Oximeters->Visual= 'High/low SpO2 and pulse rate, sensor off, low battery';
            $Oximeters->AlarmOverride= 'Preferred';
            $Oximeters->ReactivationMethod= 'Automatic or manual';
            $Oximeters->VolumeControl= 'Preferred';
            $Oximeters->SelfTestMode= 'Preferred';
            //PROBE TYPES
            $Oximeters->Disposable= '';
            $Oximeters->Reusable= '';
            $Oximeters->PatientRange= 'Adult, pediatric, infant, neonate';
            $Oximeters->CableLength= '';
            //DATA MANAGEMENT
            $Oximeters->DataStored= '';
            $Oximeters->DataSorage= '';
            $Oximeters->MRIConditional= 'Required for use in MRI environment';
            //BatteryType
            $Oximeters->BarreryType= '';
            $Oximeters->BatteryLife= '4 intrahospital, 8 interhospital';
            $Oximeters->Rechargeable= 'Preferred; optional for handheld';
            $Oximeters->ReacharbleTime= '≤16';
            $Oximeters->LowBatteryNotice= 'Preferred';
            //Purchase information
            $Oximeters->LisPrice= '';
            $Oximeters->Warranty= '';
            $Oximeters ->save();
    }
}
