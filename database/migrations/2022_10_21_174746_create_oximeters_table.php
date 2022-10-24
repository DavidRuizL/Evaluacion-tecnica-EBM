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

            $table->string('Manufacturer')->nullable();
            $table->string('WhereMarketed')->nullable();
            $table->string('FDAClearance')->nullable();
            $table->string('CeMark')->nullable();
            $table->string('StandAlone')->nullable();
            $table->string('MountingOptions')->nullable();
            //DISPLAY
            $table->string('Display')->nullable();
            $table->string('TypeDisplay')->nullable();
            $table->integer ('SpO2Range')->nullable();
            $table->integer('AccuracyDisplay')->nullable();
            //PULSE RATE, BPM
            $table->integer('PulseRatebpm')->nullable();
            $table->integer ('AccuracyPulse')->nullable();
            $table->string ('PerfusionIndex')->nullable();
            $table->string('ResponseTime')->nullable();
            
            //ALARMS
            $table->string('AudibleAndVisual')->nullable();
            $table->string ('Visual')->nullable();
             $table->string('AlarmOverride')->nullable();
             $table->string('ReactivationMethod')->nullable();
             $table->string('VolumeControl')->nullable();
             $table->string('SelfTestMode')->nullable();
            //PROBE TYPES
            $table->string('Disposable')->nullable();
            $table->string('Reusable')->nullable();
            $table->string('PatientRange')->nullable();
            $table->string('CableLength')->nullable();
            //DATA MANAGEMENT
            $table->string('DataStored')->nullable();
            $table->string('DataSorage')->nullable();
            $table->string('MRIConditional')->nullable();
            //BatteryType
            $table->string('BarreryType')->nullable();
            $table->integer('BatteryLife')->nullable();
            $table->string('Rechargeable')->nullable();
            $table->integer('ReacharbleTime')->nullable();
            $table->string('LowBatteryNotice')->nullable();
            //Purchase information
            $table->string('LisPrice')->nullable();
            $table->string('Warranty')->nullable();
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
