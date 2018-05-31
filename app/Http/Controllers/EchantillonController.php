<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\echantillon;
use Carbon\Carbon;

class EchantillonController extends Controller
{
    public function addEchanillon(Request $request){
    	if ($request->isMethod('post')){
    		$data = $request->all();
    		//$currentDate = Carbon::now()->toDateString();
            //$idnew = $echantillon->id + 1;
            //$echantillon->matricule = 'm'.'-'.$currentDate.$idnew;
    		$echantillon = new echantillon;
    		$echantillon->dateRecu = $data['dateRecu'];
    		$echantillon->nomProduit = $data['nomProduit'];
    		$echantillon->formeGalenique = $data['formeGalenique'];
    		$echantillon->quantiteRecu = $data['quantiteRecu'];
    		$echantillon->quantiteLivree = $data['quantiteLivree'];
    		$echantillon->Fournisseur = $data['Fournisseur'];
    		$echantillon->dateFab = $data['dateFab'];
    		$echantillon->dateExp = $data['dateExp'];
    		$echantillon->save();
            return redirect('/admin/voir-echantillon')->with('flash_message_success','Echantillon  ajouté avec success');

    	}
    	return view('admin.echantillons.add_echan');
    }

    public function modifierEchantillons(Request $request, $id = null){
        $echantillonsDetails = Echantillon::where(['id'=>$id])->first();
        return view('admin.echantillons.modifier_echantillons')->with(compact('echantillonsDetails'));
    }

    public function supprimerEchantillons(Request $request, $id = null){
        if (!empty($id)) {
            echantillon::where(['id'=>$id])->delete();
            return redirect()->back()->with('flash_message_success', 'Echantillon Supprimer avec succés');
        }
    }

    public function addcatEchantillons(Request $request){
        if ($request->isMethod('post')) {
            $data = $request->all();
            $categorie = new echantillon;
            $echantillon->nomCat = $data['nomCat'];
            $echantillon->description = $data['description'];
            $echantillon->save();
            return redirect('/admin/ajouter-categorie')->with('flash_message_success', 'Catégorie ajouté avec succés');

        }
        return view('admin.echantillons.ajouter-categorie');
    }

    public function voirEchantillons(){
        $echantillons = echantillon::get();
        return view('admin.echantillons.voir_echantillons')->with(compact('echantillons'));
    }
}


 