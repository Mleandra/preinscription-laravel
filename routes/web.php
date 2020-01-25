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
})->name('preinscription')
;Route::get('/formulaire', function () {
    return view('formPreinscription');
})->name('form')
;

