<?php

Route::group(['middleware' => ['web']], function () {
    Route::get('/', function () {
        return view('welcome');
    })->middleware('guest');

	Route::get('projects', 'ProjectController@index');

	Route::get('projects/create', 'ProjectController@create');

	Route::post('projects', 'ProjectController@store');

	Route::get('projects/{project}/edit', 'ProjectController@edit');

		Route::patch('projects/{project}', 'ProjectController@update');

	Route::delete('/projects/{project}', 'ProjectController@destroy');
 
	Route::auth();

});