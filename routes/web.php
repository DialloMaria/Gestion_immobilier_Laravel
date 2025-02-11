<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BienController;
use App\Http\Controllers\CommentaireController;
use App\Http\Controllers\AuthController;
use App\Http\Middleware\EnsureTokenIsValid;

//Cette route permet l'affichage de tous les biens pour les utilisateurs simple (visiteurs)
Route::get('/', [BienController::class ,'vue_utilisateurs']);

//On a crée ce middleware pour restreindre l'accé aux utilisateurs pour cette pages
 
Route::middleware([EnsureTokenIsValid::class])->group(function () {

    Route::get('Accueil', [BienController::class ,'Affichage_des_biens'])->name('Accueil');
    Route::get('Accueil/ajout', [BienController::class , 'Ajouter_des_biens']);
    Route::post('ajout/traitement',[BienController::class , 'Traitement_des_biens']);
    Route::delete('/biens/{id}', [BienController::class, 'supprimer_des_biens'])->name('biens.supprimer');
    Route::get('/update/{id}', [BienController::class, 'modification_des_biens']);
    Route::post('/update/traitement', [BienController::class, 'Traitement_pour_modifier_des_biens']);
    Route::get('/biens/detailAdmin/{id}', [BienController::class, 'details'])->name('biens.detailAdmin');
    
    });


//Cette route pour afficher l'ensemble des informations conçerant un bien
Route::get('/biens/details/{id}', [BienController::class, 'detailsbien'])->name('biens.details');

//Cette route c'est pour l'ajout d'un commentaire pour un bien
Route::post('biens/details/commentaires/store', [CommentaireController::class, 'store'])->name('biens.commentaires.store');

//Ces routes nous permettent d'afficher le formulaire de modification d'un commentaire et aussi le traitementt
Route::get('/commentaires/{id}/edit', [CommentaireController::class, 'edit'])->name('commentaires.edit');
Route::put('/commentaires/{id}', [CommentaireController::class, 'update'])->name('commentaires.update');

// Définition de la route pour la suppression de commentaire
Route::delete('/commentaires/{id}', [CommentaireController::class, 'destroy'])->name('commentaires.destroy');

//Ces routes vont nou permettre de gerer l'authentification et le traitement des donnée de l'utilisateur
Route::get('/login', [AuthController::class, 'login'])->name('auth.login'); 
Route::post('/login', [AuthController::class, 'dologin']); 

//Cette route permet à l'utilisateur de se deconnecter
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

//Cette route va nous permettre d'acceder à notre page contact
Route::get('contact', [BienController::class, 'contact']);
    