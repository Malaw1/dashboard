<?php

namespace App\Http\Controllers;

use App\Vaccin;
use Illuminate\Http\Request;

class VaccinsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vaccins = Vaccin::limit(5)->get(); // How to print a limit number of rows e.g 5 rows
        return view('vaccins.index', ['vaccins' => $vaccins]);
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
     * @param  \App\Vaccin  $vaccin
     * @return \Illuminate\Http\Response
     */
    public function show(Vaccin $vaccin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vaccin  $vaccin
     * @return \Illuminate\Http\Response
     */
    public function edit(Vaccin $vaccin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vaccin  $vaccin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vaccin $vaccin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vaccin  $vaccin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vaccin $vaccin)
    {
        //
    }
}
