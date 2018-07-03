<?php

namespace App\Http\Controllers;

use App\Sobre;
use Illuminate\Http\Request;

class SobreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('sobre.sobre');
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
     * @param  \App\Sobre  $sobre
     * @return \Illuminate\Http\Response
     */
    public function show(Sobre $sobre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sobre  $sobre
     * @return \Illuminate\Http\Response
     */
    public function edit(Sobre $sobre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sobre  $sobre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sobre $sobre)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sobre  $sobre
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sobre $sobre)
    {
        //
    }
}
