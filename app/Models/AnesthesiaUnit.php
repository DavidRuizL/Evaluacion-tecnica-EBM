<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnesthesiaUnit extends Model
{
    use HasFactory;
    protected $table = "anesthesiaunits";

    protected $fillable = ['Manufacturer', 'WhereMarketed', 'FDAClearance', 'Configuration', 'PipelineGasInletsO2', 'PipelineGasInletsN2O','PipelineGasInletsAir','GasCylinderYokesO2', 'GasCylinderYokesN2O', 'GasCylinderYokesAir', 'VaporizersDesflurane', 'VaporizersEnflurane', 'VaporizersHalothane','VaporizersIsoflurane','VaporizersSevoflurane','Type','ElectronicallyControlled','Interlock','O2FailSafe','HypoxicMixtureFailSafe','AutomaticVentilator','VM_Manual_spontaneous','VM_VCV','VM_SIMV ','VM_AdvancedModes','RangeCC','CC','RangeLm','bpmH','bpmL','InspiratoryFlowH','InspiratoryFlowL','InspiratoryPause','Pressurelimit','PEEP','OtherControls','SystemChecks','ScavengingSystem',
    ];
}
