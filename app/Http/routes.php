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

Route::get('createUser', function () {
    return view('createUser');
});

Route::get('createProject', function () {
    return view('createProject');
});

Route::get('userProjects', function () {
    return view('userProjects');
});

Route::get('editProject', function () {
    return view('editProject');
});

Route::get('projectTransactions', function () {
    return view('projectTransactions');
});