<?php

namespace App\Http\Controllers;

use App\Equipement;
use Illuminate\Http\Request;

class EquipementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equip = Equipement::All();
        return view('equipement.index', ['equip' => $equip]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('equipement.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $addequip = Equipement::create([
            'appareil' => $request->input('appareil'),
            'code' => $request->input('code'),
            'fabricant' => $request->input('fabricant'),
            'type' => $request->input('type'),
            'serie' => $request->input('serie'),
            'societeContacter' => $request->input('societerContacter'),
            'dateInstallation' => $request->input('dateInstallation'),
            'documentTechDispo' => $request->input('documentTechDispo'),
            'salle' => $request->input('salle'),
            'commentaire' => $request->input('commentaire'),
            'dateQualification' => $request->input('dateQualification'),
                        
        ]);

        if($addequip){
            return redirect()->route('equipement.index', ['equipements' => $addequip->id])->with('success', 'Reactif modifié avec succés');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Equipement  $equipement
     * @return \Illuminate\Http\Response
     */
    public function show(Equipement $equipement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Equipement  $equipement
     * @return \Illuminate\Http\Response
     */
    public function edit(Equipement $equipement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Equipement  $equipement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Equipement $equipement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Equipement  $equipement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Equipement $equipement)
    {
        //
    }
}
