<?php


Route::get('/', 'PagesController@home');

Route::get('createUser', 'PagesController@createUser');

Route::get('createProject', 'PagesController@createProject');

Route::get('userProjects', 'PagesController@userProjects');

Route::get('editProject', 'PagesController@editProject');

Route::get('projectTransactions', 'PagesController@projectTransactions');

