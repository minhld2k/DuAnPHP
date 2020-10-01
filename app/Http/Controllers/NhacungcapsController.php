<?php

namespace App\Http\Controllers;

use App\nhacungcaps;
use Illuminate\Http\Request;

class NhacungcapsController extends Controller
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
     * @param  \App\nhacungcaps  $nhacungcaps
     * @return \Illuminate\Http\Response
     */
    public function show(nhacungcaps $nhacungcaps)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\nhacungcaps  $nhacungcaps
     * @return \Illuminate\Http\Response
     */
    public function edit(nhacungcaps $nhacungcaps)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\nhacungcaps  $nhacungcaps
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, nhacungcaps $nhacungcaps)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\nhacungcaps  $nhacungcaps
     * @return \Illuminate\Http\Response
     */
    public function destroy(nhacungcaps $nhacungcaps)
    {
        //
    }

    public function themOrUpdate(Request $request){
        if (!isset($request->id)) {
            $nhacungcaps = new nhacungcaps();
            $nhacungcaps->ten = $request->ten;
        }else{
            $nhacungcaps = nhacungcaps :: find($request->id);
            $nhacungcaps->ten = $request->ten;
        }
        $nhacungcaps->save();
        if (!isset($request->id)) {
            return redirect()->route('nhacungcap.show',['id'=>-1]);
        }else{
            return redirect()->route('nhacungcap.list');
        }
    }
}
