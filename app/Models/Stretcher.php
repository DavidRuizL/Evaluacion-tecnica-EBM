<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stretcher extends Model
{
    use HasFactory;
    protected $table = "stretchers";

    protected $fillable = ['Manufacturer', 'WhereMarketed', 'StretcherType', 'PositionControl', 'Trendelenburg', 'ReverseTrendelenburg','Fowler','LegLift', 'KneeFlex', 'Siderails', 'RadiolucentTop', 'OxygenTankHolder', 'UtilityShelf','RestrainingStraps','Bumpers','Sockets','Diameter','Brakes','FrameMaterial','PatientPlatform','MattressSurfaceType','MaximumPatientWeight','OptionalAccessories','StretcherL ','StretcherW ','StretcherHeightL','StretcherHeightH','MattressL','MattressW','MattressThickness','MattressWeight','StretcherWarranty','MattressWarranty','HydraulicPump','DeliveryTime','OtherSpecifications','UMDNSCode',];
}
