<?php

namespace App\Http\Controllers;

use App\Reactif;
use Illuminate\Http\Request;

use App\proprietesphysiques;


class ReactifsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reactifs = Reactif::all();
        return view('reactifs.index', ['reactifs' => $reactifs]);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $reactifs = null;
        return view('reactifs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $addReactifs = Reactif::create([
            'designation' => $request->input('designation'),
            'conditionnement' => $request->input('conditionnement'),
            'lot' => $request->input('lot'),
            'fabriquant' => $request->input('fabriquant'),
            'quantite' => $request->input('quantite'),
            'dateFab' => $request->input('dateFab'),
            'dateExp' => $request->input('dateExp'),
            'quantiteUtilise' => $request->input('quantiteUtilise')
        ]);

        if($addReactifs){
            return redirect()->route('reactifs.show', ['reactif'=>$addReactifs->id])->with('success', 'Reactifs ajouté avec succés');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Reactif  $reactif
     * @return \Illuminate\Http\Response
     */
    public function show(Reactif $reactif)
    {
        //$reactif = Reactif::where('id', $reactif->id)->first();
        //return view('reactifs.show', ['reactif'=>$reactif]);

        $react = Reactif::join('proprietesphysiques', 'reactifs.id', '=', 'proprietesphysiques.reactifs_id')
            ->join('proprieteschimiques', 'proprieteschimiques.id', '=', 'proprieteschimiques.reactifs_id')
            ->select('reactifs.*', 'proprietesphysiques.*', 'proprieteschimiques.*')
             ->where('reactifs.id', $reactif->id)
            ->get();
            //dd($react);
            return view('reactifs.show', ['react' => $react]);
            
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Reactif  $reactif
     * @return \Illuminate\Http\Response
     */
    public function edit(Reactif $reactif)
    {
        $reactif = Reactif::where('id', $reactif->id)->first();
        return view('reactifs.edit', ['reactif'=>$reactif]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Reactif  $reactif
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reactif $reactif)
    {
        //save data
        $reactifUpdate = Reactif::where('id', $reactif->id)->update([
            'designation' => $request->input('designation'),
            'conditionnement' => $request->input('conditionnement'),
            'lot' => $request->input('lot'),
            'fabriquant' => $request->input('fabriquant'),
            'quantite' => $request->input('quantite'),
            'dateFab' => $request->input('dateFab'),
            'dateExp' => $request->input('dateExp'),
            'quantiteUtilise' => $request->input('quantiteUtilise')
        ]);

        if($reactifUpdate){
            return redirect()->route('reactifs.show', ['reactif'=>$reactif->id])->with('success', 'Reactif modifié avec succés');
        }
        //Redirect

        return back()->withInput();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reactif  $reactif
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reactif $reactif)
    {
        //
    }
}
