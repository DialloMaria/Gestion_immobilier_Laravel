<?php

namespace App\Http\Controllers;

use App\Models\Bien;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class BienController extends Controller
{

    //Cette fonction affiche la vue qui permet aux utilisateurs de voir l'ensemble des biens
    public function Affichage_des_biens(){

    //  Cette ligne de code nous a permis de créer un utilisateur

        // User::create([
        //     'name' => 'sidi',
        //     'email' => 'sidi@gmail.com',
        //     'password' => Hash::make('222')
        // ]); 


        $biens= Bien::all();
        return view('/biens/bien', compact('biens'));
    }

    public function  vue_utilisateurs(){
        $biens= Bien::all();
        return view('/biens/index', compact('biens'));
    }
   
    
    public function Ajouter_des_biens(){
        return view('/biens/ajoutBien');
    }

    public function Traitement_des_biens(Request $request){
        $request->validate([
            'nom' => 'required',
            'categorie' => 'required',
            'image' => 'required',
            'description' => 'required',
            'adresse' => 'required',
            'statut' => 'required',
        ]);
        $bien = new Bien ();
        // dd($request->all());
        $bien->nom = $request->nom ;
        $bien->categorie = $request->categorie ;
        $bien->image = $request->image ;
        $bien->description= $request->description;
        $bien->adresse= $request->adresse;
        $bien->statut= $request->statut;

        $bien->save();
        return redirect('/Accueil');
    }
        public function supprimer_des_biens($id){
        $bien=Bien::find($id);
       $bien->delete();
 
        return back();
    }


    public function details($id)
    {
        $biens = Bien::findOrFail($id);
        return view('biens.detailAdmin', compact('biens'));
    }

    public function detailsbien($id)
    {
        $biens = Bien::findOrFail($id);
        return view('biens.details', compact('biens'));
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
        return redirect('/Accueil');
    }

    //Cette fonction c'est pour gerer l'affichage de notre page de contact

    public function contact()
    {
        return view('Contact');
    }

}
