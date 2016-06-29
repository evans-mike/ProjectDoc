<?php


Route::get('/', 'PagesController@home');

Route::get('createUser', 'PagesController@createUser');

Route::get('createProject', 'PagesController@createProject'); //simple interface to create with name

Route::get('userProjects', 'PagesController@userProjects');

Route::get('editProject', 'PagesController@editProject'); //full interface to make and save changes

Route::get('projectTransactions', 'PagesController@projectTransactions');

