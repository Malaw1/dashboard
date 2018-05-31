<?php

namespace App\Http\Controllers;

use App\Substance;
use Illuminate\Http\Request;
use App\Substancespures;

class SubstancespuresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $substance = Substancespures::all(); 
        return view('substances.index', ['substance' => $substance]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $substance = null;
        return view('substances.create');
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
     * @param  \App\Substance  $substance
     * @return \Illuminate\Http\Response
     */
    public function show(Substance $substance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Substance  $substance
     * @return \Illuminate\Http\Response
     */
    public function edit(Substance $substance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Substance  $substance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Substance $substance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Substance  $substance
     * @return \Illuminate\Http\Response
     */
    public function destroy(Substance $substance)
    {
        //
    }
}
