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
        Schema::create('AAnesthesiaUnits', function (Blueprint $table) {
            //MONITORS
            $table->id();
            $table->string('AirwayPressure');
            $table->string('WhereMeasured');
            $table->string('HighPressure');
            $table->string('SubatmosphericPressure');
            $table->string('ContinuingPressure');
            $table->string('LowPressure');
            $table->string('OtherPressureAlarms');
            $table->string('ExpiratoryVolume');
            $table->string('ReverseFlow');
            $table->string('High_lowMinuteVolume');
            $table->string('High_lowFlow');
            $table->string('OtherExpiratoryAlarms');
            $table->string('O2Concentration');
            $table->integer('ResponseTime');
            $table->string('N2O');
            $table->string('AgentMonitors');
            $table->string('AutoID');
            $table->string('AgentConcentration');
            $table->string('OtherMonitors');
            $table->string('OtherFeatures');
            //DISPLAYS
            $table->string('Number');
            $table->string('TypeD');
            $table->string('IntegratedPM');
            $table->string('InterfacePM');
            $table->string('UserInterface');
            $table->string('PrioritizedAlarms');

            $table->string('HxWxD');
            $table->string('Weight');
            $table->string('Shelves');
            $table->string('Drawers');
            $table->string('CentralBrake');
            $table->string('PowerVAC');
            $table->string('AuxiliaryOutlets');
            $table->string('BackupBattery');
            $table->string('UsePerCharge');
            //PURCHASE INFORMATION
            $table->string('Warranty');
            $table->string('ServiceContract');
            $table->string('DeliveryTime');
            $table->string('OtherSpecifications');
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
        Schema::dropIfExists('AAnesthesiaUnits');
    }
};
