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
        Schema::create('Defibrillators', function (Blueprint $table) {
            $table->id();
            //Energy selection, J
            $table->string('Manufacturer')->nullable();
            $table->string('Internal')->nullable();
            $table->string('External')->nullable();
            $table->string('PaddleControls')->nullable();
            $table->string('WaveformShape')->nullable();
            $table->string('Synchronizer')->nullable();
            $table->string('PediatricPaddles')->nullable();
            $table->string('OptionalPaddles')->nullable();
            $table->string('DisposablePediatricElectrodes')->nullable();
            $table->string('AEDMode')->nullable();
            //ECG MONITOR
            $table->string('RealIimeCPRFeedback')->nullable();
            $table->string('ECGMonitorType')->nullable();
            $table->string('ECGMonitorScreen')->nullable();
            $table->string('LeadConfiguration')->nullable();
            $table->string('ThroughThePaddlesMonitoring')->nullable();
            $table->string('HRDisplay')->nullable();
            $table->string('HRAlarms')->nullable();
            $table->string('LeadFaultIndicator')->nullable();
            $table->string('ExternalPacemaker')->nullable();
            $table->string('PacingMode')->nullable();
            $table->string('PacingRate')->nullable();
            $table->string('OutputCurrent')->nullable();
            $table->string('PulseWidth')->nullable();
            $table->string('EcgRecorder')->nullable();
            $table->string('SummaryFeature')->nullable();
            //BATTERY
            $table->string('LinePower')->nullable();
            $table->string('BatteryPower')->nullable();
            $table->string('Type')->nullable();
            $table->string('IntegratedOrRemovable')->nullable();
            $table->string('OperatingTime')->nullable();
            $table->string('RechargeTime')->nullable();
            $table->string('Weight')->nullable();
            $table->string('ExternalOutputs')->nullable();
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
