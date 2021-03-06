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

Route::get('/', array('middleware' => 'cors', 'uses' => 'VagaController@listaVagas'));
Route::post('/cadastro', array('middleware' => 'cors', 'uses' => 'VagaController@insereVaga'));
Route::get('/altera/{id}', array('middleware' => 'cors', 'uses' => 'VagaController@mostra'));
Route::get('/remove/{id}', array('middleware' => 'cors', 'uses' => 'VagaController@remove'));
 