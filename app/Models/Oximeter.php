<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oximeter extends Model
{
    use HasFactory;
    protected $table = "Oximeters";

    protected $fillable = [
        
            //OXIMETER CAPABILITIES
            'Manufacturer','WhereMarketed','FDAClearance','CeMark','Stand-Alone','MountingOptions',
            //DISPLAY
            'Display','TypeDisplay', 'SpO2Range','Accuracy',
            //PULSE RATE, BPM
            'PulseRate(bpm)', 'Accuracy', 'PerfusionIndex', 'ResponseTime', 
            
            //ALARMS
            'AudibleAndVisual', 'Visual', 'AlarmOverride','ReactivationMethod','VolumeControl',
            'SelfTestMode',
            //PROBE TYPES
            'Disposable','Reusable','PatientRange','CableLength',
            //DATA MANAGEMENT
            'DataStored','DataSorage','MRIConditional',
            //BatteryType
            'BarreryType','BatteryLife','Rechargeable','ReacharbleTime','LowBatteryNotice',
            //Purchase information
            'LisPrice','Warranty',
        
        ];
}


