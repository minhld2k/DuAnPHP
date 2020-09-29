<?php

namespace App\Http\Controllers;

use App\mayquetthes;
use Illuminate\Http\Request;

class MayquetthesController extends Controller
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
     * @param  \App\mayquetthes  $mayquetthes
     * @return \Illuminate\Http\Response
     */
    public function show(mayquetthes $mayquetthes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\mayquetthes  $mayquetthes
     * @return \Illuminate\Http\Response
     */
    public function edit(mayquetthes $mayquetthes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\mayquetthes  $mayquetthes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, mayquetthes $mayquetthes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\mayquetthes  $mayquetthes
     * @return \Illuminate\Http\Response
     */
    public function destroy(mayquetthes $mayquetthes)
    {
        //
    }

    public function themOrUpdate(Request $request){
        if (!isset($request->id)) {
            $mayquetthes = new mayquetthes();
            $mayquetthes->id = rand(0,9999999999999);
            $mayquetthes->ten = $request->ten;
        }else{
            $mayquetthes = mayquetthes :: find($request->id);
            $mayquetthes->ten = $request->ten;
        }
        $mayquetthes->save();
        if (!isset($request->id)) {
            return redirect()->route('mayquetthe.show',['id'=>-1]);
        }else{
            return redirect()->route('mayquetthe.list');
        }
    }
}
