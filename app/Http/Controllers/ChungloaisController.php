<?php

namespace App\Http\Controllers;

use App\chungloais;
use Illuminate\Http\Request;

class ChungloaisController extends Controller
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
     * @param  \App\chungloais  $chungloais
     * @return \Illuminate\Http\Response
     */
    public function show(chungloais $chungloais)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\chungloais  $chungloais
     * @return \Illuminate\Http\Response
     */
    public function edit(chungloais $chungloais)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\chungloais  $chungloais
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, chungloais $chungloais)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\chungloais  $chungloais
     * @return \Illuminate\Http\Response
     */
    public function destroy(chungloais $chungloais)
    {
        //
    }

    public function themOrUpdate(Request $request){
        if (!isset($request->id)) {
            $chungloais = new chungloais();
            $chungloais->ten = $request->ten;
        }else{
            $chungloais = chungloais :: find($request->id);
            $chungloais->ten = $request->ten;
        }
        $chungloais->save();
        if (!isset($request->id)) {
            return redirect()->route('chungloai.show',['id'=>-1]);
        }else{
            return redirect()->route('chungloai.list');
        }
    }
}
