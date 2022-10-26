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
        $Stretcher1 ->Manufacturer='Personalized 1';
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
        $Stretcher2 ->Manufacturer='Personalized 2';
        $Stretcher2 ->WhereMarketed='Worldwide';
        $Stretcher2 ->StretcherType='Hydraulic';
        $Stretcher2 ->PositionControl='Automatic with gas-spring assist';
        $Stretcher2 ->Trendelenburg=18;
        $Stretcher2 ->ReverseTrendelenburg=18;
        $Stretcher2 ->Fowler=90;
        $Stretcher2 ->LegLift='YES';
        $Stretcher2 ->KneeFlex='YES';
        $Stretcher2 ->Siderails='Drop-down or tuck-away';
        $Stretcher2 ->RadiolucentTop='NO';
        $Stretcher2 ->OxygenTankHolder='YES';
        $Stretcher2 ->UtilityShelf='Optional';
        $Stretcher2 ->RestrainingStraps='Safety straps';
        $Stretcher2 ->Bumpers='NO';
        $Stretcher2 ->Sockets=4;
        $Stretcher2 ->Diameter=20.3;
        $Stretcher2 ->Brakes=4;
        $Stretcher2 ->FrameMaterial='Powder-coated steel';
        $Stretcher2 ->PatientPlatform='Powder-coated steel';            
        $Stretcher2 ->MattressSurfaceType='Not specified';
        $Stretcher2 ->MaximumPatientWeight=340;        
        $Stretcher2 ->OptionalAccessories='Fixed monitor shelf with footboard, swing-down monitor shelf with footboard, mattress options';
        $Stretcher2 ->StretcherL=210.8; 
        $Stretcher2 ->StretcherW=86.4 ; 
        $Stretcher2 ->StretcherHeightL=59.7;
        $Stretcher2 ->StretcherHeightH=89;
        $Stretcher2 ->MattressL=68.6 ;  
        $Stretcher2 ->MattressW=190.5;             
        $Stretcher2 ->MattressThickness=7.6 ;
        $Stretcher2 ->MattressWeight=137.3;        
        $Stretcher2 ->StretcherWarranty=1;
        $Stretcher2 ->MattressWarranty=90;      
        $Stretcher2 ->HydraulicPumpWarranty=1;        
        $Stretcher2 ->DeliveryTime='6';
        $Stretcher2 ->OtherSpecifications='Patented, integrated surface-to-surface transfer system moves patients without heavy lifting by staff members.';                      
        $Stretcher2 ->UMDNSCode='19021';        
        $Stretcher2 ->save();

        $Stretcher3= new Stretcher;
        $Stretcher3 ->Manufacturer='Personalized 3';
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

// Stryker Medical Div Stryker Corp      MARCA
        // Prime Zoom 1125                       MODELO
        $Stretcher8= new Stretcher;
        $Stretcher8 ->Manufacturer="Stryker Medical Div Stryker Corp";
        $Stretcher8 ->WhereMarketed='Worldwide';
        $Stretcher8 ->StretcherType='Hydraulic';
        $Stretcher8 ->PositionControl='Footpedal';
        $Stretcher8 ->Trendelenburg=18;
        $Stretcher8 ->ReverseTrendelenburg=18;
        $Stretcher8 ->Fowler=90;
        $Stretcher8 ->LegLift='YES';
        $Stretcher8 ->KneeFlex='Optional';
        $Stretcher8 ->Siderails='Glideaway';
        $Stretcher8 ->RadiolucentTop='NO';
        $Stretcher8 ->OxygenTankHolder='Litter-mounted';
        $Stretcher8 ->UtilityShelf='YES';
        $Stretcher8 ->RestrainingStraps='Optional';
        $Stretcher8 ->Bumpers='Integrated';
        $Stretcher8 ->Sockets=4;
        $Stretcher8 ->Diameter=20;
        $Stretcher8 ->Brakes=2;
        $Stretcher8 ->FrameMaterial='Steel';
        $Stretcher8 ->PatientPlatform='Composite';            
        $Stretcher8 ->MattressSurfaceType='Isoflex SE / Confortgel';
        $Stretcher8 ->MaximumPatientWeight=318;        
        $Stretcher8 ->OptionalAccessories='YES'; // SON MUCHOS ACCESSORIES
        $Stretcher8 ->StretcherL=218;
        $Stretcher8 ->StretcherW=86;
        $Stretcher8 ->StretcherHeightL=58;
        $Stretcher8 ->StretcherHeightH=86.4;
        $Stretcher8 ->MattressL=191;  
        $Stretcher8 ->MattressW=75.3;            
        $Stretcher8 ->MattressThickness=10.2;
        $Stretcher8 ->MattressWeight=200;        
        $Stretcher8 ->StretcherWarranty=1;
        $Stretcher8 ->MattressWarranty=1;      
        $Stretcher8 ->HydraulicPumpWarranty=0;        
        $Stretcher8 ->DeliveryTime='';
        $Stretcher8 ->OtherSpecifications='';                      
        $Stretcher8 ->UMDNSCode='19021';        
        $Stretcher8 ->save();


        // Advanced Instrumentations   MARCA
        // ST-100                      MODELO
        $Stretcher9= new Stretcher;
        $Stretcher9 ->Manufacturer="Advanced Instrumentations";
        $Stretcher9 ->WhereMarketed='Worldwide';
        $Stretcher9 ->StretcherType='Hydraulic';
        $Stretcher9 ->PositionControl='Manual crank, Vertical adjustment';
        $Stretcher9 ->Trendelenburg=0;
        $Stretcher9 ->ReverseTrendelenburg=0;
        $Stretcher9 ->Fowler=45;
        $Stretcher9 ->LegLift='NO';
        $Stretcher9 ->KneeFlex='NO';
        $Stretcher9 ->Siderails='Drop /Fold-down';
        $Stretcher9 ->RadiolucentTop='NO';
        $Stretcher9 ->OxygenTankHolder='YES';
        $Stretcher9 ->UtilityShelf='NO';
        $Stretcher9 ->RestrainingStraps='NO';
        $Stretcher9 ->Bumpers='YES';
        $Stretcher9 ->Sockets=1;
        $Stretcher9 ->Diameter=15;
        $Stretcher9 ->Brakes=2;
        $Stretcher9 ->FrameMaterial='Steel';
        $Stretcher9 ->PatientPlatform='PLastic bed board and side rails';            
        $Stretcher9 ->MattressSurfaceType='Foam cushion, vinyl cover';
        $Stretcher9 ->MaximumPatientWeight=250;        
        $Stretcher9 ->OptionalAccessories='NO'; // SON MUCHOS ACCESSORIES
        $Stretcher9 ->StretcherL=188;
        $Stretcher9 ->StretcherW=61;
        $Stretcher9 ->StretcherHeightL=56.8;
        $Stretcher9 ->StretcherHeightH=85.8;
        $Stretcher9 ->MattressL=0;  
        $Stretcher9 ->MattressW=0;            
        $Stretcher9 ->MattressThickness=0;
        $Stretcher9 ->MattressWeight=98.4;        
        $Stretcher9 ->StretcherWarranty=2;
        $Stretcher9 ->MattressWarranty=2;      
        $Stretcher9 ->HydraulicPumpWarranty=2;        
        $Stretcher9 ->DeliveryTime='2-4 weeks';
        $Stretcher9 ->OtherSpecifications='';                      
        $Stretcher9 ->UMDNSCode='19021';        
        $Stretcher9 ->save();

// Anetic Aid   MARCA
        // QA3 Series   MODELO
        $Stretcher10= new Stretcher;
        $Stretcher10 ->Manufacturer="Anetic Aid";
        $Stretcher10 ->WhereMarketed='Worldwide';
        $Stretcher10 ->StretcherType='Hydraulic';
        $Stretcher10 ->PositionControl='Manual';
        $Stretcher10 ->Trendelenburg=12;
        $Stretcher10 ->ReverseTrendelenburg=0;
        $Stretcher10 ->Fowler=45;
        $Stretcher10 ->LegLift='NO';
        $Stretcher10 ->KneeFlex='NO';
        $Stretcher10 ->Siderails='YES';
        $Stretcher10 ->RadiolucentTop='Emergency version only';
        $Stretcher10 ->OxygenTankHolder='YES';
        $Stretcher10 ->UtilityShelf='YES';
        $Stretcher10 ->RestrainingStraps='NO';
        $Stretcher10 ->Bumpers='YES';
        $Stretcher10 ->Sockets=2;
        $Stretcher10 ->Diameter=15;
        $Stretcher10 ->Brakes=2;
        $Stretcher10 ->FrameMaterial='Covered steel (molding)';
        $Stretcher10 ->PatientPlatform='Molded construction';            
        $Stretcher10 ->MattressSurfaceType='';
        $Stretcher10 ->MaximumPatientWeight=320;        
        $Stretcher10 ->OptionalAccessories='YES'; // SON MUCHOS ACCESSORIES
        $Stretcher10 ->StretcherL=215;
        $Stretcher10 ->StretcherW=80.5;
        $Stretcher10 ->StretcherHeightL=47.5;
        $Stretcher10 ->StretcherHeightH=77.5;
        $Stretcher10 ->MattressL=20.3;  
        $Stretcher10 ->MattressW=70.5;            
        $Stretcher10 ->MattressThickness=9;
        $Stretcher10 ->MattressWeight=128;        
        $Stretcher10 ->StretcherWarranty=1;
        $Stretcher10 ->MattressWarranty=1;      
        $Stretcher10 ->HydraulicPumpWarranty=1;        
        $Stretcher10 ->DeliveryTime='4-6 weeks';
        $Stretcher10 ->OtherSpecifications='';                      
        $Stretcher10 ->UMDNSCode='15726, 19021';        
        $Stretcher10 ->save();

    }
}
