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
            $table->string('FDAClearance');
            $table->string('Tabletopambulatory');
            $table->string('PCADoseButtonLocation');
            $table->string('PumpMechanism');
            $table->string('PoleMounting');
            $table->string('Increments');
            $table->string('BolusDose');
            $table->string('IncrementBolusDose');
            $table->string('LoadingDose');
            $table->string('KVORatemLhr');
            $table->string('Accuracy');
            $table->string('NurseCallJack');
            $table->string('FreeFlowProtection');
            $table->string('LockoutIntervalRangeMin');
            $table->string('AccumulatedDoseLimit');
            $table->string('ControlsAccess');
            $table->string('ReservoirType');
            $table->string('VolumeCapacitymL');
            $table->string('Access');
            $table->string('SyringeSizeDetection');
            //DISPLAYphp 
            $table->string('Display');
            $table->string('DataDisplay');
             //ALARMS & INDICATORS
            $table->string('UpdownOcclusion');
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
            $table->string('OperatingTimehr');
            $table->string('Rechargetimehr');
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
        Schema::dropIfExists('infusionpumps');
    }
};
