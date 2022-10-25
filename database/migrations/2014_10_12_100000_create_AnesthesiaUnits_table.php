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
            $table->id()->nullable();
            $table->string('Manufacturer')->nullable();
            $table->string('WhereMarketed')->nullable();
            $table->string('FDAClearance')->nullable();
            $table->string('Configuration')->nullable();
            $table->string('PipelineGasInletsO2')->nullable();
            $table->string('PipelineGasInletsN2O')->nullable();
            $table->string('PipelineGasInletsAir')->nullable();
            $table->string('GasCylinderYokesO2')->nullable();
            $table->string('GasCylinderYokesN2O')->nullable();
            $table->string('GasCylinderYokesAir')->nullable();
            $table->string('VaporizersDesflurane')->nullable();
            $table->string('VaporizersEnflurane')->nullable();
            $table->string('VaporizersHalothane')->nullable();
            $table->string('VaporizersIsoflurane')->nullable();
            $table->string('VaporizersSevoflurane')->nullable();
            $table->string('Type')->nullable();
            $table->string('ElectronicallyControlled')->nullable();
            $table->string('Interlock')->nullable();
            $table->string('O2FailSafe')->nullable();
            $table->string('HypoxicMixtureFailSafe')->nullable();
            $table->string('AutomaticVentilator')->nullable();
            $table->string('VM_Manual_spontaneous')->nullable();
            $table->string('VM_VCV')->nullable();
            $table->string('VM_SIMV')->nullable();
            $table->string('VM_AdvancedModes')->nullable();
            $table->Integer('RangeCC')->nullable();
            $table->integer('CC')->nullable();
            $table->integer('RangeLm')->nullable();
            $table->integer('bpmH')->nullable();
            $table->integer('bpmL')->nullable();
            $table->integer('InspiratoryFlowH')->nullable();
            $table->integer('InspiratoryFlowL')->nullable();
            $table->integer('InspiratoryPause')->nullable();
            $table->integer('Pressurelimit')->nullable();
            $table->integer('PEEP')->nullable();
            $table->string('OtherControls')->nullable();
            $table->string('SystemChecks')->nullable();
            $table->string('ScavengingSystem')->nullable();



            



           $table->string('Number')->nullable();
            $table->string('TypeD')->nullable();
            $table->string('IntegratedPM')->nullable();
            $table->string('InterfacePM')->nullable();
            $table->string('UserInterface')->nullable();
            $table->string('PrioritizedAlarms')->nullable();

            $table->string('HxWxD')->nullable();
            $table->string('Weight')->nullable();
            $table->string('Shelves')->nullable();
            $table->string('Drawers')->nullable();
            $table->string('CentralBrake')->nullable();
            $table->string('PowerVAC')->nullable();
            $table->string('AuxiliaryOutlets')->nullable();
            $table->string('BackupBattery')->nullable();
            $table->integer('UsePerCharge')->nullable();
            //PURCHASE INFORMATION
            $table->string('Warranty')->nullable();
            $table->string('ServiceContract')->nullable();
            $table->string('DeliveryTime')->nullable();
            $table->string('OtherSpecifications')->nullable();
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
