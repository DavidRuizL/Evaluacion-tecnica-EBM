<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Defibrillator;
use Illuminate\Database\Seeder;

class DefibrillatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
            $Defibrillator = new Defibrillator;
            //Energy selection, J
            $Defibrillator->Manufacturer = '';
            $Defibrillator->Internal= '';
            $Defibrillator->External= '';
            $Defibrillator->PaddleControls= '';
            $Defibrillator->WaveformShape= '';
            $Defibrillator->Synchronizer= '';
            $Defibrillator->PediatricPaddles= '';
            $Defibrillator->OptionalPaddles= '';
            $Defibrillator->DisposablePediatricElectrodes= '';
            $Defibrillator->AEDMode= '';
            //ECG MONITOR
            $Defibrillator->RealIimeCPRFeedback= '';
            $Defibrillator->ECGMonitorType= '';
            $Defibrillator->ECGMonitorScreen= '';
            $Defibrillator->LeadConfiguration= '';
            $Defibrillator->ThroughThePaddlesMonitoring= '';
            $Defibrillator->HRDisplay= '';
            $Defibrillator->HRAlarms= '';
            $Defibrillator->LeadFaultIndicator= '';
            $Defibrillator->ExternalPacemaker= '';
            $Defibrillator->PacingMode= '';
            $Defibrillator->PacingRate= '';
            $Defibrillator->OutputCurrent= '';
            $Defibrillator->PulseWidth= '';
            $Defibrillator->EcgRecorder= '';
            $Defibrillator->SummaryFeature= '';
            //BATTERY
            $Defibrillator->LinePower= '';  
            $Defibrillator->BatteryPower= '';
            $Defibrillator->Type= '';
            $Defibrillator->IntegratedOrRemovable= '';
            $Defibrillator->OperatingTime= '';
            $Defibrillator->RechargeTime= '';
            $Defibrillator->Weight= '';
            $Defibrillator->ExternalOutputs= '';
            $Defibrillator ->save();
    }
}
