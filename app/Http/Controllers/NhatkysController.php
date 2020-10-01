<?php

namespace App\Http\Controllers;

use App\nhatkys;
use Illuminate\Http\Request;

class NhatkysController extends Controller
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
     * @param  \App\nhatkys  $nhatkys
     * @return \Illuminate\Http\Response
     */
    public function show(nhatkys $nhatkys)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\nhatkys  $nhatkys
     * @return \Illuminate\Http\Response
     */
    public function edit(nhatkys $nhatkys)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\nhatkys  $nhatkys
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, nhatkys $nhatkys)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\nhatkys  $nhatkys
     * @return \Illuminate\Http\Response
     */
    public function destroy(nhatkys $nhatkys)
    {
        //
    }
    public function themOrUpdate(Request $request){
        $nhatkys = new nhatkys();
        $nhatkys->nguoidungid = $request->nguoidungid;
        $nhatkys->taisanid = $request->taisanid;
        $nhatkys->ngaychuyen = $request->ngaychuyen;
        $nhatkys->save();
        return redirect()->route('nhatky.show');
    }

    
}
