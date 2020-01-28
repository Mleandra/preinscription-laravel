<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;


class connexionController extends Controller
{
    public function connexion(){
        return view('login');
    }

    public function register(){
        return view('register');
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

    public function create(){
        request()->validate([
            'email'=>['required','email','unique:users,email'],
            'password'=>['required'],
            'name'=>['required'],
            'password_confirm'=>['same:password'],
        ]);
         $resultat = new User();
         $resultat->name = request('name');
         $resultat->email = request('email');
         $resultat->password = bcrypt(request('password'));
         $resultat->save();
         var_dump($resultat);
        return redirect('/admin-uy1');
    }
}
