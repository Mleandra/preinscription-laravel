<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class connexionController extends Controller
{
    public function connexion(){
        return view('login');
    }

    public function traitement(){
        request()->validate([
            'email'=>['required','email'],
            'password'=>['required'],
        ]);
         $resultat =auth()->attempt([
             'email' =>request('email'),
             'password' => request('password'),
         ]);
         var_dump($resultat);
        return 'lea est la';
    }
}
