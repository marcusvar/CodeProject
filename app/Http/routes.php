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

Route::get('/', function () {
    return view('welcome');
});

/*
 * Clientes
 */

//Listar
Route::get('client', 'ClientController@index');
//Salvar
Route::post('client', 'ClientController@store');
//Mostrar/Buscar
Route::get('client/{id}', 'ClientController@show');
// Excluir
Route::delete('client/{id}', 'ClientController@destroy');
//Alterar
Route::put('client/{id}', 'ClientController@update');



Route::get('project/{id}/note', 'ProjectNoteController@index');
Route::post('project/{id}/note', 'ProjectNoteController@store');
Route::get('project/{id}/note/{noteId}', 'ProjectNoteController@show');
Route::put('project/{id}/note/{noteId}', 'ProjectNoteController@update');
Route::detele('project/{id}/note/{noteId}', 'ProjectNoteController@destroy');
/*
 *  Projetos
 */

//Listar
Route::get('project', 'ProjectController@index');
//Salvar
Route::post('project', 'ProjectController@store');
//Mostrar/Buscar
Route::get('project/{id}', 'ProjectController@show');
// Excluir
Route::delete('project/{id}', 'ProjectController@destroy');
//Alterar
Route::put('project/{id}', 'ProjectController@update');


