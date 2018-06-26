<?php

namespace App\Http\Controllers;

use App\Echantillon;
use Illuminate\Http\Request;

class EchantillonsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $echantillons = echantillon::All();
        return view('echantillons.index', ['echantillons' => $echantillons]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $echantillons = echantillon::select('id')->Where('enregistrement', '=', 0)->get()->Last();
        //dd($echantillons);
        return view('echantillons.create', ['echantillons'=>$echantillons]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $addEcha = Echantillon::create([
            'nomProduit' => $request->input('nomProduit'),
            'dateRecu' => $request->input('dateRecep'),
            'type' => $request->input('type'),
            'code' => $request->input('code'),
            'formeGalenique' => $request->input('formeGalenique'),
            'quantiteRecu' => $request->input('quantiteRecu'),
            'dateFab' => $request->input('dateFab'),
            'dateExp' => $request->input('dateExp'),
            'lieuPrelevement' => $request->input('lieuPrelevement'),
             ]);

        if($addEcha){
            return redirect()->route('echantillons.index', ['echantillons'=>$addEcha->id])->with('success', 'Reactifs ajouté avec succés');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Echantillon  $echantillon
     * @return \Illuminate\Http\Response
     */
    public function show(Echantillon $echantillon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Echantillon  $echantillon
     * @return \Illuminate\Http\Response
     */
    public function edit(Echantillon $echantillon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Echantillon  $echantillon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Echantillon $echantillon)
    {
        $reactifUpdate = Reactif::where('id', $reactif->id)->update([

        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Echantillon  $echantillon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Echantillon $echantillon)
    {
        //
    }
}