<?php

namespace App\Http\Controllers;

use App\phongbans;
use Illuminate\Http\Request;

class PhongbansController extends Controller
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
     * @param  \App\phongbans  $phongbans
     * @return \Illuminate\Http\Response
     */
    public function show(phongbans $phongbans)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\phongbans  $phongbans
     * @return \Illuminate\Http\Response
     */
    public function edit(phongbans $phongbans)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\phongbans  $phongbans
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, phongbans $phongbans)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\phongbans  $phongbans
     * @return \Illuminate\Http\Response
     */
    public function destroy(phongbans $phongbans)
    {
        //
    }

    public function themOrUpdate(Request $request){
        if (!isset($request->id)) {
            $phongbans = new phongbans();
            $phongbans->id = rand(0,9999999999999);
            $phongbans->ten = $request->ten;
        }else{
            $phongbans = phongbans :: find($request->id);
            $phongbans->ten = $request->ten;
        }
        $phongbans->save();
        if (!isset($request->id)) {
            return redirect()->route('phongban.show',['id'=>-1]);
        }else{
            return redirect()->route('phongban.list');
        }
    }
}
