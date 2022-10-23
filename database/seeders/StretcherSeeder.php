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


               // ARJO INC           MARCA
        //Lifeguard LG20      MODELO
        $Stretcher5= new Stretcher;
        $Stretcher5 ->Manufacturer="ARJO INC ";
        $Stretcher5 ->WhereMarketed='Worldwide';
        $Stretcher5 ->StretcherType='Adjustable height';
        $Stretcher5 ->PositionControl='Dual footpedals';
        $Stretcher5 ->Trendelenburg=12;
        $Stretcher5 ->ReverseTrendelenburg=0;
        $Stretcher5 ->Fowler=87;
        $Stretcher5 ->LegLift='No';
        $Stretcher5 ->KneeFlex='No';
        $Stretcher5 ->Siderails='Fold-down';
        $Stretcher5 ->RadiolucentTop='YES';
        $Stretcher5 ->OxygenTankHolder='YES';
        $Stretcher5 ->UtilityShelf='YES';
        $Stretcher5 ->RestrainingStraps='YES';
        $Stretcher5 ->Bumpers='YES';
        $Stretcher5 ->Sockets=4;
        $Stretcher5 ->Diameter=20;
        $Stretcher5 ->Brakes=4;
        $Stretcher5 ->FrameMaterial='Mild steel coated in Rilsan nylon';
        $Stretcher5 ->PatientPlatform='Nylon coated';            
        $Stretcher5 ->MattressSurfaceType='';
        $Stretcher5 ->MaximumPatientWeight=180;        
        $Stretcher5 ->OptionalAccessories='YES'; // SON MUCHOS ACCESSORIES
        $Stretcher5 ->StretcherL=211;
        $Stretcher5 ->StretcherW=77;
        $Stretcher5 ->StretcherHeightL=60;
        $Stretcher5 ->StretcherHeightH=92;
        $Stretcher5 ->MattressL=196;  
        $Stretcher5 ->MattressW=67;            
        $Stretcher5 ->MattressThickness=6.5;
        $Stretcher5 ->MattressWeight=120;        
        $Stretcher5 ->StretcherWarranty=1;
        $Stretcher5 ->MattressWarranty=1;      
        $Stretcher5 ->HydraulicPumpWarranty=1;        
        $Stretcher5 ->DeliveryTime='';
        $Stretcher5 ->OtherSpecifications='YES';                      
        $Stretcher5 ->UMDNSCode='15726, 19021';        
        $Stretcher5 ->save();




        // HILL ROM CO          MARCA
        //P8000 PSS Powered Procedural   MODELO
        $Stretcher6= new Stretcher;
        $Stretcher6 ->Manufacturer="HILL ROM CO";
        $Stretcher6 ->WhereMarketed='USA, CANADA';
        $Stretcher6 ->StretcherType='Hydraulic, electric';
        $Stretcher6 ->PositionControl='Footpedals';
        $Stretcher6 ->Trendelenburg=18;
        $Stretcher6 ->ReverseTrendelenburg=18;
        $Stretcher6 ->Fowler=90;
        $Stretcher6 ->LegLift='Optional';
        $Stretcher6 ->KneeFlex='Optional';
        $Stretcher6 ->Siderails='Fold-down';
        $Stretcher6 ->RadiolucentTop='Optional';
        $Stretcher6 ->OxygenTankHolder='Vertical';
        $Stretcher6 ->UtilityShelf='Optional';
        $Stretcher6 ->RestrainingStraps='YES';
        $Stretcher6 ->Bumpers='YES';
        $Stretcher6 ->Sockets=4;
        $Stretcher6 ->Diameter=20.3;
        $Stretcher6 ->Brakes=4;
        $Stretcher6 ->FrameMaterial='Steel/epoxy';
        $Stretcher6 ->PatientPlatform='Steel or resin';            
        $Stretcher6 ->MattressSurfaceType='Foam';
        $Stretcher6 ->MaximumPatientWeight=317.5;        
        $Stretcher6 ->OptionalAccessories='YES'; // SON MUCHOS ACCESSORIES
        $Stretcher6 ->StretcherL=210;
        $Stretcher6 ->StretcherW=91;
        $Stretcher6 ->StretcherHeightL=52.6;
        $Stretcher6 ->StretcherHeightH=87;
        $Stretcher6 ->MattressL=190.5;  
        $Stretcher6 ->MattressW=66;            
        $Stretcher6 ->MattressThickness=7.6;
        $Stretcher6 ->MattressWeight=200;        
        $Stretcher6 ->StretcherWarranty=3;
        $Stretcher6 ->MattressWarranty=2;      
        $Stretcher6 ->HydraulicPumpWarranty=3;        
        $Stretcher6 ->DeliveryTime='3 weeks';
        $Stretcher6 ->OtherSpecifications='YES';                      
        $Stretcher6 ->UMDNSCode='15726, 19021';        
        $Stretcher6 ->save();


         // Schmitz und Soehne GmbH        MARCA
        //280.1800.0 (280.2020.0)          MODELO
        $Stretcher7= new Stretcher;
        $Stretcher7 ->Manufacturer="Schmitz und Soehne GmbH";
        $Stretcher7 ->WhereMarketed='Worldwide';
        $Stretcher7 ->StretcherType='Hydraulic';
        $Stretcher7 ->PositionControl='Manual, Hydraulic';
        $Stretcher7 ->Trendelenburg=11;
        $Stretcher7 ->ReverseTrendelenburg=11;
        $Stretcher7 ->Fowler=70;
        $Stretcher7 ->LegLift='NO';
        $Stretcher7 ->KneeFlex='NO';
        $Stretcher7 ->Siderails='YES';
        $Stretcher7 ->RadiolucentTop='YES';
        $Stretcher7 ->OxygenTankHolder='Optional';
        $Stretcher7 ->UtilityShelf='NO';
        $Stretcher7 ->RestrainingStraps='Optional';
        $Stretcher7 ->Bumpers='Shaped for collision protection';
        $Stretcher7 ->Sockets=4;
        $Stretcher7 ->Diameter=15;
        $Stretcher7 ->Brakes=2;
        $Stretcher7 ->FrameMaterial='Steel/aluminium';
        $Stretcher7 ->PatientPlatform='PLastic, laminated wood, steel, aluminium';            
        $Stretcher7 ->MattressSurfaceType='Memory foam';
        $Stretcher7 ->MaximumPatientWeight=225;        
        $Stretcher7 ->OptionalAccessories='YES'; // SON MUCHOS ACCESSORIES
        $Stretcher7 ->StretcherL=226;
        $Stretcher7 ->StretcherW=72;
        $Stretcher7 ->StretcherHeightL=64.5;
        $Stretcher7 ->StretcherHeightH=101.5;
        $Stretcher7 ->MattressL=200;  
        $Stretcher7 ->MattressW=60;            
        $Stretcher7 ->MattressThickness=157;
        $Stretcher7 ->MattressWeight=200;        
        $Stretcher7 ->StretcherWarranty=1;
        $Stretcher7 ->MattressWarranty=1;      
        $Stretcher7 ->HydraulicPumpWarranty=1;        
        $Stretcher7 ->DeliveryTime='4-6weeks';
        $Stretcher7 ->OtherSpecifications='YES';                      
        $Stretcher7 ->UMDNSCode='15726, 19021';        
        $Stretcher7 ->save();

    }
}
