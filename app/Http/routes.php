<?php

Route::group(['middleware' => ['web']], function () {
    Route::get('/', function () {
        return view('welcome');
    })->middleware('guest');

	Route::get('projects', 'ProjectController@index');

	Route::get('projects/{project}', 'ProjectController@show');



	Route::get('projects/create', 'ProjectController@create');

	Route::post('projects', 'ProjectController@store');

	Route::post('projects/{project}/edit', 'ProjectController@edit');

		Route::put('projectss/{project}', 'ProjectController@update');

	Route::delete('/projects/{project}', 'ProjectController@destroy');
 
	Route::auth();

});