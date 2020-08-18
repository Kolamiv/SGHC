<?php

use Illuminate\Support\Facades\Route;

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


Auth::routes();
								/*-----------------------------
								   		Routes Priority
								  -----------------------------*/
Route::get('/', ['as'=>'home', 'uses'=>'HomeController@index'])->name('home');


								/*-----------------------------
								   	Modulo de Control de Islas
								  -----------------------------*/

	Route::get('control-isla/registro',['as'=>'control-isla.registro','uses'=>'HomeController@registro_islas']);

	Route::get('control-isla/carga',['as'=>'control-isla.carga','uses'=>'HomeController@carga_islas']);

	Route::get('control-isla/reporte',['as'=>'control-isla.reporte','uses'=>'HomeController@reporte_islas']);







								/*-----------------------------
								   Vista de Barra de Busqueda
								  -----------------------------*/
Route::get('/q',['as'=>'searchq', 'uses' => 'HomeController@searchq'])/*->where('searchq',"[A-Za-z]")*/;


									/*------------------------
										Vista de BusquedaQ
									-------------------------*/
Route::get('/search/{searchq?}',['as'=>'search', 'uses' => 'HomeController@search'])/*->where('searchq',"[A-Za-z]")*/;

								/*-----------------------------------------
									         Vista de Mensajes
								-----------------------------------------*/
//route::resource('formulario','MessagesController');
	
										/*------------------------
											Vista de Formulario
										-------------------------*/
	Route::get('/formulario', ['as'=>'formulario', 'uses'=>'MessagesController@create']);
		/*Vista de Formulario-Respuesta*/
		Route::post('/form', ['as'=>'formulario.ansers', 'uses'=>'MessagesController@store']);

	Route::get('/notas/todas', ['as'=>'formulario.index', 'uses'=>'MessagesController@index']);

	Route::get('/notas/{id}', ['as'=>'formulario.show', 'uses'=>'MessagesController@show']);

	Route::get('/notas/{id}/edit', ['as'=>'formulario.edit', 'uses'=>'MessagesController@edit']);

	Route::put('/notas/{id}', ['as'=>'formulario.update', 'uses'=>'MessagesController@update']);

	Route::delete('/notas/{id}', ['as'=>'formulario.destroy', 'uses'=>'MessagesController@destroy']);

										/*------------------------
											Vista de Usuarios
										-------------------------*/

	Route::get('/usuarios', ['as'=>'usuarios', 'uses'=>'UsersController@index']);





