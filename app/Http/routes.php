<?php

Route::group(['middleware' => ['web']], function () {
    Route::get('/', function () {
        return view('welcome');
    })->middleware('guest');

	Route::get('/projects', 'ProjectController@index');
	Route::post('/project', 'ProjectController@store');
	Route::delete('/project/{project}', 'ProjectController@destroy');

	Route::auth();

});