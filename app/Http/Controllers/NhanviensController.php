<?php

namespace App\Http\Controllers;

use App\nhanviens;
use Illuminate\Http\Request;

class NhanviensController extends Controller
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
     * @param  \App\nhanviens  $nhanviens
     * @return \Illuminate\Http\Response
     */
    public function show(nhanviens $nhanviens)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\nhanviens  $nhanviens
     * @return \Illuminate\Http\Response
     */
    public function edit(nhanviens $nhanviens)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\nhanviens  $nhanviens
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, nhanviens $nhanviens)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\nhanviens  $nhanviens
     * @return \Illuminate\Http\Response
     */
    public function destroy(nhanviens $nhanviens)
    {
        //
    }

    public function themOrUpdate(Request $request){
        if (!isset($request->id)) {
            $nhanviens = new nhanviens();
            $nhanviens->id = rand(0,9999999999999);
            $nhanviens->ten = $request->ten;
            $nhanviens->phongbanid = $request->phongban;
        }else{
            $nhanviens = nhanviens :: find($request->id);
            $nhanviens->ten = $request->ten;
            $nhanviens->phongbanid = $request->phongban;
        }
        $nhanviens->save();
        if (!isset($request->id)) {
            return redirect()->route('nhanvien.show',['id'=>-1]);
        }else{
            return redirect()->route('nhanvien.list');
        }
    }
}
