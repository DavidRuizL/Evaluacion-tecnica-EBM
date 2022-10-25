<?php

namespace App\Http\Controllers;

use App\Models\Defibrillator; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DefibrillatorController extends Controller
{
      public function select()
    {
        return view('defibrillator.select');
    }

  public function criteria()
   {
       $defibrillator=  \App\Models\Defibrillator::where("id","<",5)->get(); 
       return view('defibrillator.criteria')->with('defibrillators', $defibrillator);
   }
   public function index1()
{
   $defibrillator=  \App\Models\Defibrillator::all();
   return view('defibrillator.per1')->with('defibrillators', $defibrillator);
}
   public function index2()
{
   $defibrillator=  \App\Models\Defibrillator::all();
   return view('defibrillator.per2')->with('defibrillators', $defibrillator);
}
   public function index3()
{
   $defibrillator=  \App\Models\Defibrillator::all();
   return view('defibrillator.per3')->with('defibrillators', $defibrillator);
}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $defibrillator=  \App\Models\Defibrillator::all();
        return view('defibrillator.index')->with('defibrillators', $defibrillator);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('defibrillator.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $defibrillator = new defibrillator();
        $defibrillator ->Manufacturer=$request->get('Manufacturer');
        $defibrillator ->WhereMarketed=$request->get('WhereMarketed');
        $defibrillator ->defibrillatorType=$request->get('defibrillatorType');
        $defibrillator ->PositionControl=$request->get('PositionControl');
        $defibrillator ->Trendelenburg=$request->get('Trendelenburg');
        $defibrillator ->ReverseTrendelenburg=$request->get('ReverseTrendelenburg');
        $defibrillator ->Fowler=$request->get('Fowler');
        $defibrillator ->LegLift=$request->get('LegLift');
        $defibrillator ->KneeFlex=$request->get('KneeFlex');
        $defibrillator ->Siderails=$request->get('Siderails');
        $defibrillator ->RadiolucentTop=$request->get('RadiolucentTop');
        $defibrillator ->OxygenTankHolder=$request->get('OxygenTankHolder');
        $defibrillator ->UtilityShelf=$request->get('UtilityShelf');
        $defibrillator ->RestrainingStraps=$request->get('RestrainingStraps');
        $defibrillator ->Bumpers=$request->get('Bumpers');
        $defibrillator ->Sockets=$request->get('Sockets');
        $defibrillator ->Diameter=$request->get('Diameter');
        $defibrillator ->Brakes=$request->get('Brakes');
        $defibrillator ->FrameMaterial=$request->get('FrameMaterial');
        $defibrillator ->PatientPlatform=$request->get('PatientPlatform');            
        $defibrillator ->MattressSurfaceType=$request->get('MattressSurfaceType');
        $defibrillator ->MaximumPatientWeight= $request->get('MaximumPatientWeight');
        $defibrillator ->OptionalAccessories=$request->get('OptionalAccessories');
        $defibrillator ->defibrillatorL=$request->get('defibrillatorL');
        $defibrillator ->defibrillatorW=$request->get('defibrillatorW');
        $defibrillator ->defibrillatorHeightL=$request->get('defibrillatorHeightL');
        $defibrillator ->defibrillatorHeightH=$request->get('defibrillatorHeightH');
        $defibrillator ->MattressL=$request->get('MattressL');
        $defibrillator ->MattressW=$request->get('MattressW');             
        $defibrillator ->MattressThickness=$request->get('MattressThickness');
        $defibrillator ->MattressWeight=$request->get('MattressWeight');       
        $defibrillator ->defibrillatorWarranty=$request->get('defibrillatorWarranty');
        $defibrillator ->MattressWarranty=$request->get('MattressWarranty');    
        $defibrillator ->HydraulicPumpWarranty=$request->get('HydraulicPumpWarranty');        
        $defibrillator ->DeliveryTime=$request->get('DeliveryTime');
        $defibrillator ->OtherSpecifications=$request->get('OtherSpecifications');                   
        $defibrillator ->UMDNSCode=$request->get('UMDNSCode');       
        $defibrillator ->save();
        return redirect('/defibrillator/select');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Defibrillator  $defibrillator
     * @return \Illuminate\Http\Response
     */
    public function show(defibrillator $defibrillator)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Defibrillator  $defibrillator
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
          $defibrillator= defibrillator::findOrFail($id);
          return view('defibrillator.edit', compact('defibrillator'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Defibrillator  $defibrillator
     * @return \Illuminate\Http\Response
     */
          public function updatec(Request $request,  $criteria)
    {
        $defibrillator= defibrillator::findOrFail($criteria);
        $defibrillator ->DeliveryTime=$request->input('criteria');
        $defibrillator ->save();
        return redirect()->route('defibrillator.index');

    }
    public function update(Request $request,  $id)
    {
        $defibrillator= defibrillator::findOrFail($id);
        $defibrillator ->Manufacturer=$request->input('Manufacturer');
        $defibrillator ->WhereMarketed=$request->input('WhereMarketed');
        $defibrillator ->defibrillatorType=$request->input('defibrillatorType');
        $defibrillator ->PositionControl=$request->input('PositionControl');
        $defibrillator ->Trendelenburg=$request->input('Trendelenburg');
        $defibrillator ->ReverseTrendelenburg=$request->input('ReverseTrendelenburg');
        $defibrillator ->Fowler=$request->input('Fowler');
        $defibrillator ->LegLift=$request->input('LegLift');
        $defibrillator ->KneeFlex=$request->input('KneeFlex');
        $defibrillator ->Siderails=$request->input('Siderails');
        $defibrillator ->RadiolucentTop=$request->input('RadiolucentTop');
        $defibrillator ->OxygenTankHolder=$request->input('OxygenTankHolder');
        $defibrillator ->UtilityShelf=$request->input('UtilityShelf');
        $defibrillator ->RestrainingStraps=$request->input('RestrainingStraps');
        $defibrillator ->Bumpers=$request->input('Bumpers');
        $defibrillator ->Sockets=$request->input('Sockets');
        $defibrillator ->Diameter=$request->input('Diameter');
        $defibrillator ->Brakes=$request->input('Brakes');
        $defibrillator ->FrameMaterial=$request->input('FrameMaterial');
        $defibrillator ->PatientPlatform=$request->input('PatientPlatform');            
        $defibrillator ->MattressSurfaceType=$request->input('MattressSurfaceType');
        $defibrillator ->MaximumPatientWeight= $request->input('MaximumPatientWeight');
        $defibrillator ->OptionalAccessories=$request->input('OptionalAccessories');
        $defibrillator ->defibrillatorL=$request->input('defibrillatorL');
        $defibrillator ->defibrillatorW=$request->input('defibrillatorW');
        $defibrillator ->defibrillatorHeightL=$request->input('defibrillatorHeightL');
        $defibrillator ->defibrillatorHeightH=$request->input('defibrillatorHeightH');
        $defibrillator ->MattressL=$request->input('MattressL');
        $defibrillator ->MattressW=$request->input('MattressW');             
        $defibrillator ->MattressThickness=$request->input('MattressThickness');
        $defibrillator ->MattressWeight=$request->input('MattressWeight');       
        $defibrillator ->defibrillatorWarranty=$request->input('defibrillatorWarranty');
        $defibrillator ->MattressWarranty=$request->input('MattressWarranty');    
        $defibrillator ->HydraulicPumpWarranty=$request->input('HydraulicPumpWarranty');        
        $defibrillator ->DeliveryTime=$request->input('DeliveryTime');
        $defibrillator ->OtherSpecifications=$request->input('OtherSpecifications');                   
        $defibrillator ->UMDNSCode=$request->input('UMDNSCode');       
        $defibrillator ->save();
        return redirect()->route('defibrillator.select');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Defibrillator  $defibrillator
     * @return \Illuminate\Http\Response
     */
    public function destroy(defibrillator $defibrillator)
    {
        //
    }
}
