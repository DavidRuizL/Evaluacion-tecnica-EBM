<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Stretcher;
use Illuminate\Database\Seeder;

class StretcherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Stretcher= new Stretcher;
        $Stretcher ->Manufacturer='';
        $Stretcher ->WhereMarketed='';
        $Stretcher ->StretcherType='Adjustable height';
        $Stretcher ->PositionControl='';
        $Stretcher ->Trendelenburg=0;
        $Stretcher ->ReverseTrendelenburg=0;
        $Stretcher ->Fowler=0;
        $Stretcher ->LegLift='';
        $Stretcher ->KneeFlex='';
        $Stretcher ->Siderails='YES';
        $Stretcher ->RadiolucentTop='';
        $Stretcher ->OxygenTankHolder='YES';
        $Stretcher ->UtilityShelf='YES';
        $Stretcher ->RestrainingStraps='YES';
        $Stretcher ->Bumpers='YES';
        $Stretcher ->Sockets=4;
        $Stretcher ->Diameter=12.7;
        $Stretcher ->Brakes=2;
        $Stretcher ->FrameMaterial='';
        $Stretcher ->PatientPlatform='';            
        $Stretcher ->MattressSurfaceType='';
        $Stretcher ->MaximumPatientWeight=227;        
        $Stretcher ->OptionalAccessories='';
        $Stretcher ->StretcherL=213.4; 
        $Stretcher ->StretcherW=81.8; 
        $Stretcher ->StretcherHeightL=50.8;
        $Stretcher ->StretcherHeightH=101.6;
        $Stretcher ->MattressL=66;  
        $Stretcher ->MattressW=185;             
        $Stretcher ->MattressThickness=0;
        $Stretcher ->MattressWeight=0;        
        $Stretcher ->StretcherWarranty=1;
        $Stretcher ->MattressWarranty=0;      
        $Stretcher ->HydraulicPumpWarranty=0;        
        $Stretcher ->DeliveryTime='';
        $Stretcher ->OtherSpecifications='';                      
        $Stretcher ->UMDNSCode='19020, 19021';        
        $Stretcher ->save();
    }
}
