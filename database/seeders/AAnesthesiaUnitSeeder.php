<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
 use App\Models\AAnesthesiaUnit;
use Illuminate\Database\Seeder;

class AAnesthesiaUnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $AAUnit1 = new AAnesthesiaUnit;
        //MONITORS
        $AAUnit1->AirwayPressure='YES';
        $AAUnit1->WhereMeasured='';
        $AAUnit1->HighPressure='YES';
        $AAUnit1->SubatmosphericPressure='YES';
        $AAUnit1->ContinuingPressure='YES';
        $AAUnit1->LowPressure='YES';
        $AAUnit1->OtherPressureAlarms='';
        $AAUnit1->ExpiratoryVolume='YES';
        $AAUnit1->ReverseFlow='';
        $AAUnit1->High_lowMinuteVolume='';
        $AAUnit1->High_lowFlow='';
        $AAUnit1->OtherExpiratoryAlarms='';
        $AAUnit1->O2Concentration='YES';
        $AAUnit1->ResponseTime=30;
        $AAUnit1->N2O='YES';
        $AAUnit1->AgentMonitors='YES';
        $AAUnit1->AutoID='YES';
        $AAUnit1->AgentConcentration='YES';
        $AAUnit1->OtherMonitors='';
        $AAUnit1->OtherFeatures='';
        //DISPLAY
        $AAUnit1->Number=1;
        $AAUnit1->TypeD='';
        $AAUnit1->IntegratedPM='YES';
        $AAUnit1->InterfacePM='YES';
        $AAUnit1->UserInterface='';
        $AAUnit1->PrioritizedAlarms='YES';
        $AAUnit1->HxWxD='';
        $AAUnit1->Weight='';
        $AAUnit1->Shelves='';
        $AAUnit1->Drawers='';
        $AAUnit1->CentralBrake='';
        $AAUnit1->PowerVAC='';
        $AAUnit1->AuxiliaryOutlets='';
        $AAUnit1->BackupBattery='YES';
        $AAUnit1->UsePerCharge=0.5;
        //PURCHASE INFORMATION
        $AAUnit1->Warranty='';
        $AAUnit1->ServiceContract='';
        $AAUnit1->DeliveryTime='';
        $AAUnit1->OtherSpecifications='';
        $AAUnit1 ->save();

    }
}
