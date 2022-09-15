<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfusionPump extends Model
{
    use HasFactory;
    protected $table = "infusionpumps";

    protected $fillable = [
        
            //PUMP CAPABILITIES
            'FDAClearance','Tabletop/ambulatory','PCADoseButtonLocation','PumpMechanism','PoleMounting','Increments','BolusDose','IncrementBolusDose','LoadingDose','KVORate(mL/hr)','Accuracy(%)','NurseCallJack','FreeFlowProtection','LockoutIntervalRange(min)',
            'AccumulatedDoseLimit','ControlsAccess','ReservoirType','VolumeCapacity(mL)', 'Access', 'SyringeSizeDetection',
            //DISPLAY
            'Display','DataDisplay', 
            //ALARMS & INDICATORS
            'Up/downOcclusion', 'FlowError', 'AirInLine', 'SystemMalfunction', 'EmptyReservoir', 'InfusionNearEnd', 'LowBattery', 'DepletedBattery', 'UserPrompts', 
            'VolumeControl','MomentarySilence',
            //POWER SOURCE
            'LinePower', 'Battery', 'OperatingTime(hr)','Recharge time(hr)','Weight',
            //PURCHASE INFORMATION
            'Warranty','TrainingWithPurchase','ServiceContract'];
}
