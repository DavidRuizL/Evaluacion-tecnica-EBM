<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Defibrillator extends Model
{
    use HasFactory;
    protected $table = "defibrillators";

    protected $fillable = [
        //Energy selection, J
        'Manufacturer','Internal','External','PaddleControls','WaveformShape','Synchronizer','PediatricPaddles','OptionalPaddles','DisposablePediatricElectrodes','AEDMode',
        //ECG MONITOR
        'RealIimeCPRFeedback','ECGMonitorType','ECGMonitorScreen','LeadConfiguration','ThroughThePaddlesMonitoring','HRDisplay', 'HRAlarms', 'LeadFaultIndicator', 'ExternalPacemaker', 'PacingMode', 'PacingRate', 'OutputCurrent', 
        'PulseWidth', 'EcgRecorder', 'SummaryFeature', 
        //BATTERY
        'LinePower', 'BatteryPower', 'Type',
        'IntegratedOrRemovable', 'OperatingTime', 'RechargeTime', 'Weight', 'ExternalOutputs', ];
}
