<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AAnesthesiaUnit extends Model
{
    use HasFactory;
    protected $table = "aanesthesiaunits";

    protected $fillable = ['AirwayPressure','WhereMeasured','HighPressure','SubatmosphericPressure','ContinuingPressure','LowPressure','OtherPressureAlarms','ExpiratoryVolume','ReverseFlow','High_lowMinuteVolume','High_lowFlow','OtherExpiratoryAlarms','O2Concentration','N2O','AgentMonitors', 'TypeAgents', 'ResponseTime', 'AutoID', 'AgentConcentration', 'OtherMonitors', 'OtherFeatures',
        //DISPLAYS
        'Number', 'TypeD', 'IntegratedPM', 'InterfacePM', 'UserInterface', 'PrioritizedAlarms',
        //
        'HxWxD', 'Weight', 'Shelves', 'Drawers', 'CentralBrake', 'PowerVAC', 'AuxiliaryOutlets', 'BackupBattery', 'UsePerCharge', 
        //PURCHASE INFORMATION
        'Warranty', 'ServiceContract', 'DeliveryTime','OtherSpecifications', ];
}
