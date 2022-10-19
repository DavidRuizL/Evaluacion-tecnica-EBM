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
      // RECOMENDACIONES ECRI
        $Stretcher= new Stretcher;
        $Stretcher ->Manufacturer="ECRI INSTITUTE'S RECOMMENDED SPECIFICATIONS";
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

         //PERSONALIZADO (3)
        $Stretcher1= new Stretcher;
        $Stretcher1 ->Manufacturer='';
        $Stretcher1 ->WhereMarketed='';
        $Stretcher1 ->StretcherType='Adjustable height';
        $Stretcher1 ->PositionControl='';
        $Stretcher1 ->Trendelenburg=0;
        $Stretcher1 ->ReverseTrendelenburg=0;
        $Stretcher1 ->Fowler=0;
        $Stretcher1 ->LegLift='';
        $Stretcher1 ->KneeFlex='';
        $Stretcher1 ->Siderails='YES';
        $Stretcher1 ->RadiolucentTop='';
        $Stretcher1 ->OxygenTankHolder='YES';
        $Stretcher1 ->UtilityShelf='YES';
        $Stretcher1 ->RestrainingStraps='YES';
        $Stretcher1 ->Bumpers='YES';
        $Stretcher1 ->Sockets=4;
        $Stretcher1 ->Diameter=12.7;
        $Stretcher1 ->Brakes=2;
        $Stretcher1 ->FrameMaterial='';
        $Stretcher1 ->PatientPlatform='';            
        $Stretcher1 ->MattressSurfaceType='';
        $Stretcher1 ->MaximumPatientWeight=227;        
        $Stretcher1 ->OptionalAccessories='';
        $Stretcher1 ->StretcherL=213.4; 
        $Stretcher1 ->StretcherW=81.8; 
        $Stretcher1 ->StretcherHeightL=50.8;
        $Stretcher1 ->StretcherHeightH=101.6;
        $Stretcher1 ->MattressL=66;  
        $Stretcher1 ->MattressW=185;             
        $Stretcher1 ->MattressThickness=0;
        $Stretcher1 ->MattressWeight=0;        
        $Stretcher1 ->StretcherWarranty=1;
        $Stretcher1 ->MattressWarranty=0;      
        $Stretcher1 ->HydraulicPumpWarranty=0;        
        $Stretcher1 ->DeliveryTime='';
        $Stretcher1 ->OtherSpecifications='';                      
        $Stretcher1 ->UMDNSCode='19020, 19021';        
        $Stretcher1 ->save();

        $Stretcher2= new Stretcher;
        $Stretcher2 ->Manufacturer='';
        $Stretcher2 ->WhereMarketed='';
        $Stretcher2 ->StretcherType='Adjustable height';
        $Stretcher2 ->PositionControl='';
        $Stretcher2 ->Trendelenburg=0;
        $Stretcher2 ->ReverseTrendelenburg=0;
        $Stretcher2 ->Fowler=0;
        $Stretcher2 ->LegLift='';
        $Stretcher2 ->KneeFlex='';
        $Stretcher2 ->Siderails='YES';
        $Stretcher2 ->RadiolucentTop='';
        $Stretcher2 ->OxygenTankHolder='YES';
        $Stretcher2 ->UtilityShelf='YES';
        $Stretcher2 ->RestrainingStraps='YES';
        $Stretcher2 ->Bumpers='YES';
        $Stretcher2 ->Sockets=4;
        $Stretcher2 ->Diameter=12.7;
        $Stretcher2 ->Brakes=2;
        $Stretcher2 ->FrameMaterial='';
        $Stretcher2 ->PatientPlatform='';            
        $Stretcher2 ->MattressSurfaceType='';
        $Stretcher2 ->MaximumPatientWeight=227;        
        $Stretcher2 ->OptionalAccessories='';
        $Stretcher2 ->StretcherL=213.4; 
        $Stretcher2 ->StretcherW=81.8; 
        $Stretcher2 ->StretcherHeightL=50.8;
        $Stretcher2 ->StretcherHeightH=101.6;
        $Stretcher2 ->MattressL=66;  
        $Stretcher2 ->MattressW=185;             
        $Stretcher2 ->MattressThickness=0;
        $Stretcher2 ->MattressWeight=0;        
        $Stretcher2 ->StretcherWarranty=1;
        $Stretcher2 ->MattressWarranty=0;      
        $Stretcher2 ->HydraulicPumpWarranty=0;        
        $Stretcher2 ->DeliveryTime='';
        $Stretcher2 ->OtherSpecifications='';                      
        $Stretcher2 ->UMDNSCode='19020, 19021';        
        $Stretcher2 ->save();

        $Stretcher3= new Stretcher;
        $Stretcher3 ->Manufacturer='';
        $Stretcher3 ->WhereMarketed='';
        $Stretcher3 ->StretcherType='Adjustable height';
        $Stretcher3 ->PositionControl='';
        $Stretcher3 ->Trendelenburg=0;
        $Stretcher3 ->ReverseTrendelenburg=0;
        $Stretcher3 ->Fowler=0;
        $Stretcher3 ->LegLift='';
        $Stretcher3 ->KneeFlex='';
        $Stretcher3 ->Siderails='YES';
        $Stretcher3 ->RadiolucentTop='';
        $Stretcher3 ->OxygenTankHolder='YES';
        $Stretcher3 ->UtilityShelf='YES';
        $Stretcher3 ->RestrainingStraps='YES';
        $Stretcher3 ->Bumpers='YES';
        $Stretcher3 ->Sockets=4;
        $Stretcher3 ->Diameter=12.7;
        $Stretcher3 ->Brakes=2;
        $Stretcher3 ->FrameMaterial='';
        $Stretcher3 ->PatientPlatform='';            
        $Stretcher3 ->MattressSurfaceType='';
        $Stretcher3 ->MaximumPatientWeight=227;        
        $Stretcher3 ->OptionalAccessories='';
        $Stretcher3 ->StretcherL=213.4; 
        $Stretcher3 ->StretcherW=81.8; 
        $Stretcher3 ->StretcherHeightL=50.8;
        $Stretcher3 ->StretcherHeightH=101.6;
        $Stretcher3 ->MattressL=66;  
        $Stretcher3 ->MattressW=185;             
        $Stretcher3 ->MattressThickness=0;
        $Stretcher3 ->MattressWeight=0;        
        $Stretcher3 ->StretcherWarranty=1;
        $Stretcher3 ->MattressWarranty=0;      
        $Stretcher3 ->HydraulicPumpWarranty=0;        
        $Stretcher3 ->DeliveryTime='';
        $Stretcher3 ->OtherSpecifications='';                      
        $Stretcher3 ->UMDNSCode='19020, 19021';        
        $Stretcher3 ->save();

        //EQUIPOS SEMILLA
        $Stretcher4= new Stretcher;
        $Stretcher4 ->Manufacturer='Novum Medical Products Inc
NV8002';
        $Stretcher4 ->WhereMarketed='Worldwide';
        $Stretcher4 ->StretcherType='Hydraulic';
        $Stretcher4 ->PositionControl='Automatic with gas-spring assist';
        $Stretcher4 ->Trendelenburg=18;
        $Stretcher4 ->ReverseTrendelenburg=18;
        $Stretcher4 ->Fowler=90;
        $Stretcher4 ->LegLift='YES';
        $Stretcher4 ->KneeFlex='YES';
        $Stretcher4 ->Siderails='Drop-down or tuck-away';
        $Stretcher4 ->RadiolucentTop='NO';
        $Stretcher4 ->OxygenTankHolder='YES';
        $Stretcher4 ->UtilityShelf='Optional';
        $Stretcher4 ->RestrainingStraps='Safety straps';
        $Stretcher4 ->Bumpers='NO';
        $Stretcher4 ->Sockets=4;
        $Stretcher4 ->Diameter=20.3;
        $Stretcher4 ->Brakes=4;
        $Stretcher4 ->FrameMaterial='Powder-coated steel';
        $Stretcher4 ->PatientPlatform='Powder-coated steel';            
        $Stretcher4 ->MattressSurfaceType='Not specified';
        $Stretcher4 ->MaximumPatientWeight=340;        
        $Stretcher4 ->OptionalAccessories='Fixed monitor shelf with footboard, swing-down monitor shelf with footboard, mattress options';
        $Stretcher4 ->StretcherL=210.8; 
        $Stretcher4 ->StretcherW=86.4 ; 
        $Stretcher4 ->StretcherHeightL=59.7;
        $Stretcher4 ->StretcherHeightH=89;
        $Stretcher4 ->MattressL=68.6 ;  
        $Stretcher4 ->MattressW=190.5;             
        $Stretcher4 ->MattressThickness=7.6 ;
        $Stretcher4 ->MattressWeight=137.3;        
        $Stretcher4 ->StretcherWarranty=1;
        $Stretcher4 ->MattressWarranty=90;      
        $Stretcher4 ->HydraulicPumpWarranty=1;        
        $Stretcher4 ->DeliveryTime='6';
        $Stretcher4 ->OtherSpecifications='Patented, integrated surface-to-surface transfer system moves patients without heavy lifting by staff members.';                      
        $Stretcher4 ->UMDNSCode='19021';        
        $Stretcher4 ->save();





    }
}
