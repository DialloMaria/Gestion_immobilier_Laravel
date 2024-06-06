<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }
    public function dologin(LoginRequest $request){
        $credentals = $request->validated();
   
           if(Auth::attempt($credentals)) {
               $request->session()->regenerate();
               return redirect()->route('Accueil');
           }
   
           return to_route('auth.login')->withErrors([
               'email' => 'Email invalide'
           ])->onlyInput('email');
   
       }

       public function logout(Request $request)
       {
           Auth::logout(); // Déconnexion de l'utilisateur
           $request->session()->invalidate(); // Invalides la session de l'utilisateur
           $request->session()->regenerateToken(); // Régénère le token CSRF
           
           return redirect('/'); // Redirection vers la page d'accueil ou une autre page après la déconnexion
       }
}
