<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commentaire;

class CommentaireController extends Controller
{
    public function store(Request $request)
{
    // Validation des données du formulaire
    $request->validate([
        'auteur' => 'required|string|max:255',
        'contenu' => 'required|string',
        'bien_id' => 'required|exists:biens,id', // Assurez-vous que bien_id existe dans la table biens
    ]);

    // Création d'un nouveau commentaire
    Commentaire::create($request->all());

    // Redirection ou autre logique après l'enregistrement
    return back()->with('success', 'Commentaire ajouté avec succès!');
}

public function edit($id)
    {
        $commentaire = Commentaire::findOrFail($id);
        return view('commentaires.edit', compact('commentaire'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'contenu' => 'required|string',
        ]);

        $commentaire = Commentaire::findOrFail($id);
        $commentaire->update([
            'contenu' => $validated['contenu'],
        ]);

        return redirect()->route('biens.details', $commentaire->bien_id)->with('success', 'Commentaire mis à jour avec succès!');
    }

    public function destroy($id)
    {
        $commentaire = Commentaire::findOrFail($id);
        $commentaire->delete();

        return redirect()->route('biens.details', $commentaire->bien_id)->with('success', 'Commentaire supprimé avec succès!');
    }

}
