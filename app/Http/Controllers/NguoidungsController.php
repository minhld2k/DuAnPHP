<?php

namespace App\Http\Controllers;

use App\nguoidungs;
use Illuminate\Http\Request;

class NguoidungsController extends Controller
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
     * @param  \App\nguoidungs  $nguoidungs
     * @return \Illuminate\Http\Response
     */
    public function show(nguoidungs $nguoidungs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\nguoidungs  $nguoidungs
     * @return \Illuminate\Http\Response
     */
    public function edit(nguoidungs $nguoidungs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\nguoidungs  $nguoidungs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, nguoidungs $nguoidungs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\nguoidungs  $nguoidungs
     * @return \Illuminate\Http\Response
     */
    public function destroy(nguoidungs $nguoidungs)
    {
        //
    }

    public function themOrUpdate(Request $request){
        if (!isset($request->id)) {
            $nguoidungs = new nguoidungs();
            $nguoidungs->ten = $request->ten;
        }else{
            $nguoidungs = nguoidungs :: find($request->id);
            $nguoidungs->ten = $request->ten;
        }
        $nguoidungs->save();
        if (!isset($request->id)) {
            return redirect()->route('nguoidung.show',['id'=>-1]);
        }else{
            return redirect()->route('nguoidung.list');
        }
    }
}
