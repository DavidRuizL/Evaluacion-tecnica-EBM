<?php

namespace App\Http\Controllers;

use App\Models\Stretcher;
use Illuminate\Http\Request;

class StretcherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stretcher=  \App\Models\Stretcher::all();
        return view('stretcher.index')->with('stretchers', $stretcher);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('stretcher.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Stretcher = new Stretcher();
        $Stretcher ->Manufacturer=$request->get('Manufacturer');
        $Stretcher ->WhereMarketed=$request->get('WhereMarketed');
        $Stretcher ->StretcherType=$request->get('StretcherType');
        $Stretcher ->PositionControl=$request->get('PositionControl');
        $Stretcher ->Trendelenburg=$request->get('Trendelenburg');
        $Stretcher ->ReverseTrendelenburg=$request->get('ReverseTrendelenburg');
        $Stretcher ->Fowler=$request->get('Fowler');
        $Stretcher ->LegLift=$request->get('LegLift');
        $Stretcher ->KneeFlex=$request->get('KneeFlex');
        $Stretcher ->Siderails=$request->get('Siderails');
        $Stretcher ->RadiolucentTop=$request->get('RadiolucentTop');
        $Stretcher ->OxygenTankHolder=$request->get('OxygenTankHolder');
        $Stretcher ->UtilityShelf=$request->get('UtilityShelf');
        $Stretcher ->RestrainingStraps=$request->get('RestrainingStraps');
        $Stretcher ->Bumpers=$request->get('Bumpers');
        $Stretcher ->Sockets=$request->get('Sockets');
        $Stretcher ->Diameter=$request->get('Diameter');
        $Stretcher ->Brakes=$request->get('Brakes');
        $Stretcher ->FrameMaterial=$request->get('FrameMaterial');
        $Stretcher ->PatientPlatform=$request->get('PatientPlatform');            
        $Stretcher ->MattressSurfaceType=$request->get('MattressSurfaceType');
        $Stretcher ->MaximumPatientWeight= $request->get('MaximumPatientWeight');
        $Stretcher ->OptionalAccessories=$request->get('OptionalAccessories');
        $Stretcher ->StretcherL=$request->get('StretcherL');
        $Stretcher ->StretcherW=$request->get('StretcherW');
        $Stretcher ->StretcherHeightL=$request->get('StretcherHeightL');
        $Stretcher ->StretcherHeightH=$request->get('StretcherHeightH');
        $Stretcher ->MattressL=$request->get('MattressL');
        $Stretcher ->MattressW=$request->get('MattressW');             
        $Stretcher ->MattressThickness=$request->get('MattressThickness');
        $Stretcher ->MattressWeight=$request->get('MattressWeight');       
        $Stretcher ->StretcherWarranty=$request->get('StretcherWarranty');
        $Stretcher ->MattressWarranty=$request->get('MattressWarranty');    
        $Stretcher ->HydraulicPumpWarranty=$request->get('HydraulicPumpWarranty');        
        $Stretcher ->DeliveryTime=$request->get('DeliveryTime');
        $Stretcher ->OtherSpecifications=$request->get('OtherSpecifications');                   
        $Stretcher ->UMDNSCode=$request->get('UMDNSCode');       
        $Stretcher ->save();
        return redirect('/stretcher');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Stretcher  $stretcher
     * @return \Illuminate\Http\Response
     */
    public function show(Stretcher $stretcher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Stretcher  $stretcher
     * @return \Illuminate\Http\Response
     */
    public function edit(Stretcher $stretcher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Stretcher  $stretcher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stretcher $stretcher)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Stretcher  $stretcher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stretcher $stretcher)
    {
        //
    }
}
