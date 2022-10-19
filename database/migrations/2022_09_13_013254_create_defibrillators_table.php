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
        Schema::create('defibrillators', function (Blueprint $table) {
            $table->id();
            //Energy selection, J
            $table->string('Manufacturer');
            $table->string('Internal');
            $table->string('External');
            $table->string('PaddleControls');
            $table->string('WaveformShape');
            $table->string('Synchronizer');
            $table->string('PediatricPaddles');
            $table->string('OptionalPaddles');
            $table->string('DisposablePediatricElectrodes');
            $table->string('AEDMode');
            //ECG MONITOR
            $table->string('RealIimeCPRFeedback');
            $table->string('ECGMonitorType');
            $table->string('ECGMonitorScreen');
            $table->string('LeadConfiguration');
            $table->string('ThroughThePaddlesMonitoring');
            $table->string('HRDisplay');
            $table->string('HRAlarms');
            $table->string('LeadFaultIndicator');
            $table->string('ExternalPacemaker');
            $table->string('PacingMode');
            $table->string('PacingRate');
            $table->string('OutputCurrent');
            $table->string('PulseWidth');
            $table->string('EcgRecorder');
            $table->string('SummaryFeature');
            //BATTERY
            $table->string('LinePower');  
            $table->string('BatteryPower');
            $table->string('Type');
            $table->string('IntegratedOrRemovable');
            $table->string('OperatingTime');
            $table->string('RechargeTime');
            $table->string('Weight');
            $table->string('ExternalOutputs');
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
        Schema::dropIfExists('defibrillators');
    }
};
