<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BienController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('Accueil', [BienController::class ,'Affichage_des_biens']);

Route::get('Accueil/ajout', [BienController::class , 'Ajouter_des_biens']);

Route::post('Accueil/ajout/traitement',[BienController::class , 'Traitement_des_biens']);

Route::delete('/biens/{id}', [BienController::class, 'supprimer_des_biens'])->name('biens.supprimer');

Route::get('/update/{id}', [BienController::class, 'modification_des_biens']);

Route::post('/update/traitement', [BienController::class, 'Traitement_pour_modifier_des_biens']);
