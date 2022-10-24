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
        Schema::create('Oximeters', function (Blueprint $table) {
            $table->id();
            //OXIMETER CAPABILITIES

            $table->string('Manufacturer');
            $table->string('WhereMarketed');
            $table->string('FDAClearance');
            $table->string('CeMark');
            $table->string('StandAlone');
            $table->string('MountingOptions');
            //DISPLAY
            $table->string('Display');
            $table->string('TypeDisplay');
            $table->string ('SpO2Range');
            $table->string('AccuracyDisplay');
            //PULSE RATE, BPM
            $table->string('PulseRatebpm');
            $table->string ('AccuracyPulse');
            $table->string ('PerfusionIndex');
            $table->string('ResponseTime');
            
            //ALARMS
            $table->string('AudibleAndVisual');
            $table->string ('Visual');
             $table->string('AlarmOverride');
             $table->string('ReactivationMethod');
             $table->string('VolumeControl');
             $table->string('SelfTestMode');
            //PROBE TYPES
            $table->string('Disposable');
            $table->string('Reusable');
            $table->string('PatientRange');
            $table->string('CableLength');
            //DATA MANAGEMENT
            $table->string('DataStored');
            $table->string('DataSorage');
            $table->string('MRIConditional');
            //BatteryType
            $table->string('BarreryType');
            $table->string('BatteryLife');
            $table->string('Rechargeable');
            $table->string('ReacharbleTime');
            $table->string('LowBatteryNotice');
            //Purchase information
            $table->string('LisPrice');
            $table->string('Warranty');
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
        Schema::dropIfExists('oximeters');
    }
};
