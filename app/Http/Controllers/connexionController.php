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
         if ($resultat){
             return view('admin');
         }
         return back()->withInput()->withErrors([
             'email'=>'votre email ou mot de passe est incorrete',
             'password'=>'votre email ou mot de passe est incorrete'
         ]);

    }
    public  function deconnexion(){
        auth()->logout();
        return  redirect('/');
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
