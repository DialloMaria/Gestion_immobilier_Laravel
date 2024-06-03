<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BienController;
use App\Http\Controllers\CommentaireController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('Accueil', [BienController::class ,'Affichage_des_biens']);

Route::get('Accueil/ajout', [BienController::class , 'Ajouter_des_biens']);

Route::post('Accueil/ajout/traitement',[BienController::class , 'Traitement_des_biens']);

Route::delete('/biens/{id}', [BienController::class, 'supprimer_des_biens'])->name('biens.supprimer');




//C'est la route qui permet d'afficher les commentaire d'un bien
Route::get('/biens/details/{id}', [BienController::class, 'details'])->name('biens.details');

//Cette route c'est pour l'ajout d'un commentaire pour un bien
Route::post('biens/details/commentaires/store', [CommentaireController::class, 'store'])->name('biens.commentaires.store');

Route::get('/commentaires/{id}/edit', [CommentaireController::class, 'edit'])->name('commentaires.edit');
Route::put('/commentaires/{id}', [CommentaireController::class, 'update'])->name('commentaires.update');