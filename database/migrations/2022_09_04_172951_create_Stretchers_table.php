<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Stretchers', function (Blueprint $table) {
            $table->id();
            $table->string('Manufacturer');
            $table->string('WhereMarketed');
            $table->string('StretcherType');
            $table->string('PositionControl');
            $table->integer('Trendelenburg');
            $table->integer('ReverseTrendelenburg');
            $table->integer('Fowler');
            $table->string('LegLift');
            $table->string('KneeFlex');
            $table->string('Siderails');
            $table->string('RadiolucentTop');
            $table->string('OxygenTankHolder');
            $table->string('UtilityShelf');
            $table->string('RestrainingStraps');
            $table->string('Bumpers');
            $table->integer('Sockets');
            $table->integer('Diameter');
            $table->integer('Brakes');
            $table->string('FrameMaterial');
            $table->string('PatientPlatform');            
            $table->string('MattressSurfaceType');
            $table->integer('MaximumPatientWeight');        
            $table->string('OptionalAccessories');
            $table->integer('StretcherL'); 
            $table->integer('StretcherW'); 
            $table->integer('StretcherHeightL');
            $table->integer('StretcherHeightH');
            $table->integer('MattressL');  
            $table->integer('MattressW');             
            $table->integer('MattressThickness');
            $table->integer('MattressWeight');        
            $table->integer('StretcherWarranty');
            $table->integer('MattressWarranty');      
            $table->integer('HydraulicPumpWarranty');        
            $table->string('DeliveryTime');
            $table->string('OtherSpecifications');                      
            $table->string('UMDNSCode');        
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Stretchers');
    }
};
