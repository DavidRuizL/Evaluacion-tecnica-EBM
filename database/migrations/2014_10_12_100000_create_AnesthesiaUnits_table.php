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
        Schema::create('AnesthesiaUnits', function (Blueprint $table) {
            $table->id();
            $table->string('Manufacturer');
            $table->string('WhereMarketed');
            $table->string('FDAClearance');
            $table->string('Configuration');
            $table->string('PipelineGasInletsO2');
            $table->string('PipelineGasInletsN2O');
            $table->string('PipelineGasInletsAir');
            $table->string('GasCylinderYokesO2');
            $table->string('GasCylinderYokesN2O');
            $table->string('GasCylinderYokesAir');
            $table->string('VaporizersDesflurane');
            $table->string('VaporizersEnflurane');
            $table->string('VaporizersHalothane');
            $table->string('VaporizersIsoflurane');
            $table->string('VaporizersSevoflurane');
            $table->string('Type');
            $table->string('ElectronicallyControlled');
            $table->string('Interlock');
            $table->string('O2FailSafe');
            $table->string('HypoxicMixtureFailSafe');
            $table->string('AutomaticVentilator');
            $table->string('VM_Manual_spontaneous');
            $table->string('VM_VCV');
            $table->string('VM_SIMV');
            $table->string('VM_AdvancedModes');
            $table->Integer('RangeCC');
            $table->integer('CC');
            $table->integer('RangeLm');
            $table->integer('bpmH');
            $table->integer('bpmL');
            $table->integer('InspiratoryFlowH');
            $table->integer('InspiratoryFlowL');
            $table->integer('InspiratoryPause');
            $table->integer('Pressurelimit');
            $table->integer('PEEP');
            $table->string('OtherControls');
            $table->string('SystemChecks');
            $table->string('ScavengingSystem');



            



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
        Schema::dropIfExists('AnesthesiaUnits');
    }
};
