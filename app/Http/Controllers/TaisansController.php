<?php

namespace App\Http\Controllers;

use App\nhatkys;
use App\taisans;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaisansController extends Controller
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
     * @param  \App\taisans  $taisans
     * @return \Illuminate\Http\Response
     */
    public function show(taisans $taisans)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\taisans  $taisans
     * @return \Illuminate\Http\Response
     */
    public function edit(taisans $taisans)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\taisans  $taisans
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, taisans $taisans)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\taisans  $taisans
     * @return \Illuminate\Http\Response
     */
    public function destroy(taisans $taisans)
    {
        //
    }
    public function themOrUpdate(Request $request){
        if (!isset($request->id)) {
            $taisans = new taisans();
            $taisans->ten = $request->ten;
            $taisans->nguoidungid = $request->nguoidungid;
            $taisans->chungloaiid = $request->chungloaiid;
            $taisans->nhacungcapid = $request->nhacungcapid;

        }else{
            $taisans = taisans :: find($request->id);
            $taisans->ten = $request->ten;
            $taisans->nguoidungid = $request->nguoidungid;
            $taisans->chungloaiid = $request->chungloaiid;
            $taisans->nhacungcapid = $request->nhacungcapid;
        }
        $taisans->save();

        $taisans = taisans :: find(DB::table('taisans')->max('id'));
        $nhatkys = new nhatkys();
        $nhatkys->nguoidungid = $taisans->nguoidungid;
        $nhatkys->taisanid = $taisans->id;
        $nhatkys->ngaychuyen = date('d-m-Y H:i:s');
        $nhatkys->save();
        
        if (!isset($request->id)) {
            return redirect()->route('taisan.show',['id'=>-1]);
        }else{
            return redirect()->route('taisan.list');
        }
    }
}
