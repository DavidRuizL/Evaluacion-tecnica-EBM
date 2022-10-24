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
            $table->string('Manufacturer')->nullable();
            $table->string('WhereMarketed')->nullable();
            $table->string('StretcherType')->nullable();
            $table->string('PositionControl')->nullable();
            $table->integer('Trendelenburg')->nullable();
            $table->integer('ReverseTrendelenburg')->nullable();
            $table->integer('Fowler')->nullable();
            $table->string('LegLift')->nullable();
            $table->string('KneeFlex')->nullable();
            $table->string('Siderails')->nullable();
            $table->string('RadiolucentTop')->nullable();
            $table->string('OxygenTankHolder')->nullable();
            $table->string('UtilityShelf')->nullable();
            $table->string('RestrainingStraps')->nullable();
            $table->string('Bumpers')->nullable();
            $table->integer('Sockets')->nullable();
            $table->integer('Diameter')->nullable();
            $table->integer('Brakes')->nullable();
            $table->string('FrameMaterial')->nullable();
            $table->string('PatientPlatform')->nullable();  
            $table->string('MattressSurfaceType')->nullable();
            $table->integer('MaximumPatientWeight')->nullable();        
            $table->string('OptionalAccessories')->nullable();
            $table->integer('StretcherL')->nullable(); 
            $table->integer('StretcherW')->nullable(); 
            $table->integer('StretcherHeightL')->nullable();
            $table->integer('StretcherHeightH')->nullable();
            $table->integer('MattressL')->nullable();  
            $table->integer('MattressW')->nullable();             
            $table->integer('MattressThickness')->nullable();
            $table->integer('MattressWeight')->nullable();       
            $table->integer('StretcherWarranty')->nullable();
            $table->integer('MattressWarranty')->nullable();     
            $table->integer('HydraulicPumpWarranty')->nullable();        
            $table->string('DeliveryTime')->nullable();
            $table->string('OtherSpecifications')->nullable();                  
            $table->string('UMDNSCode')->nullable();        
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
