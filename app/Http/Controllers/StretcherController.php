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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
