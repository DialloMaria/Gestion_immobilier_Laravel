<?php

namespace App\Http\Controllers;

use App\Models\Bien;
use Illuminate\Http\Request;

class BienController extends Controller
{
    public function Affichage_des_biens(){
        $biens= Bien::all();
        return view('/biens/bien', compact('biens'));
    }

    public function Ajouter_des_biens(){
        return view('/biens/ajoutBien');
    }

    public function Traitement_des_biens(Request $request){
        $bien = new Bien ();
        // dd($request->all());
        $bien->nom = $request->nom ;
        $bien->categorie = $request->categorie ;
        $bien->image = $request->image ;
        $bien->description= $request->description;
        $bien->adresse= $request->adresse;
        $bien->statut= $request->statut;

        $bien->save();
        return redirect()->back();
    }

    public function supprimer_des_biens($id){
        $bien=Bien::find($id);
        $bien->delete();
        return redirect()->back()->with('error', 'Erreur lors de la suppression du bien.');
    }

    public function modification_des_biens($id){
        $bien=Bien::find($id);
        return view('/biens.updateBien', compact('bien'));
    }

    public function Traitement_pour_modifier_des_biens(Request $request){
        $bien=Bien::find($request->id);
        $bien->nom = $request->nom ;
        $bien->categorie = $request->categorie ;
        $bien->image = $request->image ;
        $bien->description= $request->description;
        $bien->adresse= $request->adresse;
        $bien->statut= $request->statut;

        $bien->update();
        return view('/biens.bien');
    }
}
