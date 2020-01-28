<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('home');
Route::get('/preinscription', function () {
    return view('preinscription');
})->name('preinscription');

Route::get('/admin-uy1', function () {
    return view('admin');
})->name('admin');
Route::get('/gestionEtudiants', function () {
    return view('etudiant');
})->name('etudiant');
Route::get('/sign in', function () {
    return view('register');
})->name('register');
Route::get('/login', 'connexionController@connexion')->name('login');
Route::get('/formulaire', 'EtudiantController@index')->name('form');
Route::post('/formulaire', 'EtudiantController@store');
Route::get('/region/{pays_id?}', 'FunctionController@region')->name('region');
Route::get('/fillieres/{faculte_id?}', 'FunctionController@filiere')->name('filieres');
Route::post('/login', 'connexionController@traitement');



