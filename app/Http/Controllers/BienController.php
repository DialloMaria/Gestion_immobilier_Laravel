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
}
