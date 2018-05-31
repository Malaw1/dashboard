<?php

namespace App\Http\Controllers;

use App\Equipement;
use Illuminate\Http\Request;

class EquipementsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equip = Equipement::All();

        return view('equipements.index', ['equip' => $equip]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('equipements.create');
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
            'etat' => $request->input('etat'),
            'salle' => $request->input('salle'),
            'commentaire' => $request->input('commentaire'),
            'dateQualification' => $request->input('dateQualification'),
            'etat' => $request->input('etat'),
                        

        ]);

        if($addequip){
            return redirect()->route('equipements.index', ['equipements' => $addequip->id])->with('success', 'Reactif modifié avec succés');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Equipement  $equipement
     * @return \Illuminate\Http\Response
     */
    public function show(Equipement $equip)
    {
        // $equip = Equipement::join('users', 'users.id', '=', 'equipements.user_id')
        //     ->join('qualifications', 'equipements.id', '=', 'qualifications.equip_id')
        //     ->select('qualifications.*', 'equipements.*', 'users.*')
        //     ->where('equipements.id', $equip->id)
        //     ->first();

            //  $equip = Equipement::join('qualifications', 'qualifications.equip_id', '=', 'equipements.id')
            //  ->select('qualifications.*', 'equipements.*')
            //  ->where('equipements.id', $equip->id)
            //  ->first();

             $equip = Equipement::join('qualifications', 'equipements.id', '=', 'qualifications.equip_id')
             ->join('users', 'users.id', '=', 'equipements.user_id')
             ->select('users.*', 'equipements.*', 'qualifications.*')
              ->where('equipements.id', $equip->id)
             ->get();
             dd($equip);

            //  return view('reactifs.show', ['react' => $react]);

            // dd($equip);
            //return view('reactifs.show', ['react' => $react]);
        return view('equipements.show', ['equip' => $equip]);
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
