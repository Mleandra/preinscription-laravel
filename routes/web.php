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

Route::get('/formulaire', 'EtudiantController@index')->name('form');
Route::get('/region/{pays_id?}', 'FunctionController@region')->name('region');
Route::post('/formulaire', 'EtudiantController@index');



