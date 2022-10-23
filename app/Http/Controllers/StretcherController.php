<?php

namespace App\Http\Controllers;

use App\Models\Stretcher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StretcherController extends Controller
{

      public function select()
    {
        return view('stretcher.select');
    }

  public function criteria()
   {
       $stretcher=  \App\Models\Stretcher::where("id","<",5)->get(); 
       return view('stretcher.criteria')->with('stretchers', $stretcher);
   }
   public function index1()
{
   $stretcher=  \App\Models\Stretcher::all();
   return view('stretcher.per1')->with('stretchers', $stretcher);
}
   public function index2()
{
   $stretcher=  \App\Models\Stretcher::all();
   return view('stretcher.per2')->with('stretchers', $stretcher);
}
   public function index3()
{
   $stretcher=  \App\Models\Stretcher::all();
   return view('stretcher.per3')->with('stretchers', $stretcher);
}
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
    public function edit($id)
    {
          $stretcher= Stretcher::findOrFail($id);
          return view('stretcher.edit', compact('stretcher'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Stretcher  $stretcher
     * @return \Illuminate\Http\Response
     */
          public function updatec(Request $request,  $criteria)
    {
        $Stretcher= Stretcher::findOrFail($criteria);
        $Stretcher ->DeliveryTime=$request->input('criteria');
        $Stretcher ->save();
        return redirect()->route('stretcher.index');

    }
    public function update(Request $request,  $id)
    {
        $Stretcher= Stretcher::findOrFail($id);
        $Stretcher ->Manufacturer=$request->input('Manufacturer');
        $Stretcher ->WhereMarketed=$request->input('WhereMarketed');
        $Stretcher ->StretcherType=$request->input('StretcherType');
        $Stretcher ->PositionControl=$request->input('PositionControl');
        $Stretcher ->Trendelenburg=$request->input('Trendelenburg');
        $Stretcher ->ReverseTrendelenburg=$request->input('ReverseTrendelenburg');
        $Stretcher ->Fowler=$request->input('Fowler');
        $Stretcher ->LegLift=$request->input('LegLift');
        $Stretcher ->KneeFlex=$request->input('KneeFlex');
        $Stretcher ->Siderails=$request->input('Siderails');
        $Stretcher ->RadiolucentTop=$request->input('RadiolucentTop');
        $Stretcher ->OxygenTankHolder=$request->input('OxygenTankHolder');
        $Stretcher ->UtilityShelf=$request->input('UtilityShelf');
        $Stretcher ->RestrainingStraps=$request->input('RestrainingStraps');
        $Stretcher ->Bumpers=$request->input('Bumpers');
        $Stretcher ->Sockets=$request->input('Sockets');
        $Stretcher ->Diameter=$request->input('Diameter');
        $Stretcher ->Brakes=$request->input('Brakes');
        $Stretcher ->FrameMaterial=$request->input('FrameMaterial');
        $Stretcher ->PatientPlatform=$request->input('PatientPlatform');            
        $Stretcher ->MattressSurfaceType=$request->input('MattressSurfaceType');
        $Stretcher ->MaximumPatientWeight= $request->input('MaximumPatientWeight');
        $Stretcher ->OptionalAccessories=$request->input('OptionalAccessories');
        $Stretcher ->StretcherL=$request->input('StretcherL');
        $Stretcher ->StretcherW=$request->input('StretcherW');
        $Stretcher ->StretcherHeightL=$request->input('StretcherHeightL');
        $Stretcher ->StretcherHeightH=$request->input('StretcherHeightH');
        $Stretcher ->MattressL=$request->input('MattressL');
        $Stretcher ->MattressW=$request->input('MattressW');             
        $Stretcher ->MattressThickness=$request->input('MattressThickness');
        $Stretcher ->MattressWeight=$request->input('MattressWeight');       
        $Stretcher ->StretcherWarranty=$request->input('StretcherWarranty');
        $Stretcher ->MattressWarranty=$request->input('MattressWarranty');    
        $Stretcher ->HydraulicPumpWarranty=$request->input('HydraulicPumpWarranty');        
        $Stretcher ->DeliveryTime=$request->input('DeliveryTime');
        $Stretcher ->OtherSpecifications=$request->input('OtherSpecifications');                   
        $Stretcher ->UMDNSCode=$request->input('UMDNSCode');       
        $Stretcher ->save();
        return redirect()->route('stretcher.index');

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
