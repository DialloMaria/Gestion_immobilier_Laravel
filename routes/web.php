<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BienController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('Accueil', [BienController::class ,'Affichage_des_biens']);
