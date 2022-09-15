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
        Schema::create('infusion_pumps', function (Blueprint $table) {
            $table->id();
            //PUMP CAPABILITIES
            $table->id();
            $table->string('FDAClearance');
            $table->string('Tabletop/ambulatory');
            $table->string('PCADoseButtonLocation');
            $table->string('PumpMechanism');
            $table->string('PoleMounting');
            $table->string('Increments');
            $table->string('BolusDose');
            $table->string('IncrementBolusDose');
            $table->string('LoadingDose');
            $table->string('KVORate(mL/hr)');
            $table->string('Accuracy(%)');
            $table->string('NurseCallJack');
            $table->string('FreeFlowProtection');
            $table->string('LockoutIntervalRange(min)');
            $table->string('AccumulatedDoseLimit');
            $table->string('ControlsAccess');
            $table->string('ReservoirType');
            $table->string('VolumeCapacity(mL)');
            $table->string('Access');
            $table->string('SyringeSizeDetection');
            //DISPLAY
            $table->string('Display');
            $table->string('DataDisplay');
             //ALARMS & INDICATORS
            $table->string('Up/downOcclusion');
            $table->string('FlowError');
            $table->string('AirInLine');
            $table->string('SystemMalfunction');
            $table->string('EmptyReservoir');
            $table->string('InfusionNearEnd');
            $table->string('LowBattery');
            $table->string('DepletedBattery');
            $table->string('UserPrompts');
            $table->string('VolumeControl');
            $table->string('MomentarySilence');
            //POWER SOURCE
            $table->string('LinePower');
            $table->string('Battery');
            $table->string('OperatingTime(hr)');
            $table->string('Recharge time(hr)');
            $table->string('Weight');
            //PURCHASE INFORMATION
            $table->string('Warranty');
            $table->string('TrainingWithPurchase');
            $table->string('ServiceContract');
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
        Schema::dropIfExists('infusion_pumps');
    }
};