<?php

namespace App\Http\Controllers;

use App\phieuthues;
use Illuminate\Http\Request;

class PhieuthuesController extends Controller
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
     * @param  \App\phieuthues  $phieuthues
     * @return \Illuminate\Http\Response
     */
    public function show(phieuthues $phieuthues)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\phieuthues  $phieuthues
     * @return \Illuminate\Http\Response
     */
    public function edit(phieuthues $phieuthues)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\phieuthues  $phieuthues
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, phieuthues $phieuthues)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\phieuthues  $phieuthues
     * @return \Illuminate\Http\Response
     */
    public function destroy(phieuthues $phieuthues)
    {
        //
    }

    public function themOrUpdate(Request $request){
        if (!isset($request->id)) {
            $phieuthue = new phieuthues();
            $phieuthue->id = rand(0,9999999999999);
            $phieuthue->tenphieu = $request->tenphieu;
            $phieuthue->ngaythue = implode("-",array_reverse(explode("-",$request->ngaythue)));
        }else{
            $phieuthue = phieuthues :: find($request->id);
            $phieuthue->tenphieu = $request->tenphieu;
            $phieuthue->ngaythue = implode("-",array_reverse(explode("-",$request->ngaythue)));
        }
        $phieuthue->save();
        return redirect()->route('phieuthues.list');
    }
}
