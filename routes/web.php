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
    return view('welcome');
});

Route::get('/', function(){
	return view('accueil.index');
});

Route::get('/admin', function () {
	return  view('admin.accueil.index');
});

Route::resource('type', 'TypeController');
Route::resource('jeu', 'JeuController');
Route::resource('actualite', 'ActualiteController');
Route::resource('user', 'UtilisateurController');
Route::resource('recherche', 'RechercheController');
Route::resource('messagerie','MessagerieController');
Route::post('recherche/recherche','RechercheController@recherche')->name('recherche.recherche');
Route::get('recherche/envoyerMessage/{id}','RechercheController@envoyerMessage')->name('recherche.envoyerMessage');

Auth::routes();
