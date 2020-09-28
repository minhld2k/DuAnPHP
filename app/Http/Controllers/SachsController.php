<?php

namespace App\Http\Controllers;

use App\sachs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SachsController extends Controller
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
     * @param  \App\sachs  $sachs
     * @return \Illuminate\Http\Response
     */
    public function show(sachs $sachs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\sachs  $sachs
     * @return \Illuminate\Http\Response
     */
    public function edit(sachs $sachs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\sachs  $sachs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, sachs $sachs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\sachs  $sachs
     * @return \Illuminate\Http\Response
     */
    public function destroy(sachs $sachs)
    {
        //
    }

    public function themOrUpdate(Request $request){
        if (!isset($request->id)) {
            $sach = new sachs();
            $sach->id = rand(0,9999999999999);
            $sach->tensach = $request->tensach;
        }else{
            $sach = sachs :: find($request->id);
            $sach->tensach = $request->tensach;
        }
        $sach->save();
        return redirect()->route('sachs.list');
    }
}
