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

use App\Http\Controllers\EtudiantController;


Route::get('/', function () {
    return view('index');
})->name('home');
Route::get('/preinscription', function () {
    return view('preinscription');
})->name('preinscription');

Route::get('/admin-uy1', function () {
    return view('admin');
})->name('admin');


Route::get('/etudiants', 'EtudiantController@admin')->name('admin.etudiant');
Route::get('/faculte', 'FaculteController@index')->name('admin.faculte');
Route::get('/filiere', 'FiliereController@index')->name('admin.filiere');
Route::get('/admininstrateurs', 'AdminController@index')->name('admin.admin');
Route::get('/formulaire', 'EtudiantController@index')->name('form');
Route::post('/formulaire', 'EtudiantController@store');
Route::get('/formulaire/{id}', 'EtudiantController@show')->name('etudiant.voir');
Route::get('/region/{pays_id?}', 'FunctionController@region')->name('region');
Route::get('/fillieres/{faculte_id?}', 'FunctionController@filiere')->name('filieres');
Route::get('/login', 'connexionController@connexion')->name('login');
Route::post('/login', 'connexionController@traitement');
Route::get('/deconnexion', 'connexionController@deconnexion')->name('logout');;
Route::get('/register', 'connexionController@register')->name('register');
Route::post('/register', 'connexionController@create');
