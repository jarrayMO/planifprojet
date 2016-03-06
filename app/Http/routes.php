<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function()
{
	return Redirect::route('projets.index');
});

Route::resource('projets', 'ProjetsController');
Route::resource('projets.taches', 'TachesController');

Route::model('projets', 'App\Projet', function()
{
	abort(404);
});

Route::model('taches', 'App\Tache', function()
{
	abort(404);
});
