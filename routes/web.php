<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BienController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('Accueil', [BienController::class ,'Affichage_des_biens']);

Route::get('Accueil/ajout', [BienController::class , 'Ajouter_des_biens']);

Route::post('Accueil/ajout/traitement',[BienController::class , 'Traitement_des_biens']);




//C'est la route qui permet d'afficher les commentaire d'un bien
Route::get('/biens/details/{id}', [BienController::class, 'details'])->name('biens.details');