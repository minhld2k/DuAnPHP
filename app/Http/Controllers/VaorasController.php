<?php

namespace App\Http\Controllers;

use App\vaoras;
use Illuminate\Http\Request;

class VaorasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\vaoras  $vaoras
     * @return \Illuminate\Http\Response
     */
    public function show(vaoras $vaoras)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\vaoras  $vaoras
     * @return \Illuminate\Http\Response
     */
    public function edit(vaoras $vaoras)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\vaoras  $vaoras
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, vaoras $vaoras)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\vaoras  $vaoras
     * @return \Illuminate\Http\Response
     */
    public function destroy(vaoras $vaoras)
    {
        //
    }
    public function themOrUpdate(Request $request){
        $vaoras = new vaoras();
        $vaoras->nhanvienid = $request->nhanvienid;
        $vaoras->thoigian = $request->thoigian;
        $vaoras->save();
        return redirect()->route('vaora.show');
    }
}
