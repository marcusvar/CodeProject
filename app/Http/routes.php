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

Route::get('client', 'ClientController@index');
Route::post('client', 'ClientController@store');
Route::get('client/{id}', 'ClientController@show');
Route::delete('client/{id}', 'ClientController@destroy');
Route::put('client/{id}', 'ClientController@update');

Route::get('project/{id}/note', 'ProjectNoteController@index');
Route::post('project/{id}/note', 'ProjectNoteController@store');
Route::get('project/{id}/note/{noteId}', 'ProjectNoteController@show');
Route::put('project/{id}/note/{noteId}', 'ProjectNoteController@update');
Route::delete('project/{id}/note/{noteId}', 'ProjectNoteController@destroy');

Route::get('project/{id}/task', 'ProjectTaskController@index');
Route::post('project/{id}/task', 'ProjectTaskController@store');
Route::get('project/{id}/task/{noteId}', 'ProjectTaskController@show');
Route::put('project/{id}/task/{noteId}', 'ProjectTaskController@update');
Route::delete('project/{id}/task/{noteId}', 'ProjectTaskController@destroy');

Route::get('project/{projectId}/member', 'ProjectController@members');
Route::get('project/{projectId}/member/{memberId}', 'ProjectController@member');
Route::post('project/{projectId}/member', 'ProjectController@addMember');
Route::delete('project/{projectId}/member/{memberId}', 'ProjectController@removeMember');

Route::get('project', 'ProjectController@index');
Route::post('project', 'ProjectController@store');
Route::get('project/{id}', 'ProjectController@show');
Route::delete('project/{id}', 'ProjectController@destroy');
Route::put('project/{id}', 'ProjectController@update');
