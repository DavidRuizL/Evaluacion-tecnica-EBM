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
        Schema::create('InfusionPumps', function (Blueprint $table) {
            //PUMP CAPABILITIES
            $table->id();  
            $table->string('Manufacturer')->nullable();
            $table->string('FDAClearance')->nullable();
            $table->string('Tabletopambulatory')->nullable();
            $table->string('PCADoseButtonLocation')->nullable();
            $table->string('PumpMechanism')->nullable();
            $table->string('PoleMounting')->nullable();
            $table->integer('Increments')->nullable();
            $table->string('BolusDose')->nullable();
            $table->integer('IncrementBolusDose')->nullable();
            $table->string('LoadingDose')->nullable();
            $table->integer('KVORatemLhr')->nullable();
            $table->integer('Accuracy')->nullable();
            $table->string('NurseCallJack')->nullable();
            $table->string('FreeFlowProtection')->nullable();
            $table->integer('LockoutIntervalRangeMin')->nullable();
            $table->string('AccumulatedDoseLimit')->nullable();
            $table->string('ControlsAccess')->nullable();
            $table->string('ReservoirType')->nullable();
            $table->integer('VolumeCapacitymL')->nullable();
            $table->string('Access')->nullable();
            $table->string('SyringeSizeDetection')->nullable();
            //DISPLAYphp 
            $table->string('Display')->nullable();
            $table->string('DataDisplay')->nullable();
             //ALARMS & INDICATORS
            $table->string('UpdownOcclusion')->nullable();
            $table->string('FlowError')->nullable();
            $table->string('AirInLine')->nullable();
            $table->string('SystemMalfunction')->nullable();
            $table->string('EmptyReservoir')->nullable();
            $table->string('InfusionNearEnd')->nullable();
            $table->string('LowBattery')->nullable();
            $table->string('DepletedBattery')->nullable();
            $table->string('UserPrompts')->nullable();
            $table->string('VolumeControl')->nullable();
            $table->string('MomentarySilence')->nullable();
            //POWER SOURCE
            $table->string('LinePower')->nullable();
            $table->string('Battery')->nullable();
            $table->integer('OperatingTimehr')->nullable();
            $table->string('Rechargetimehr')->nullable();
            $table->string('Weight')->nullable();
            //PURCHASE INFORMATION
            $table->string('Warranty')->nullable();
            $table->string('TrainingWithPurchase')->nullable();
            $table->string('ServiceContract')->nullable();
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
        Schema::dropIfExists('infusionpumps');
    }
};
