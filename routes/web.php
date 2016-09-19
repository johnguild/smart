<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

date_default_timezone_set('Asia/Manila');

Route::get('/', function () {
	if(Auth::user()){
		return redirect('/home');
	}

    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::resource('/accounts', 'AccountsController');
Route::resource('/transactions', 'TransactionsController');
Route::resource('/rates', 'RatesController');

Route::get('/transactions/create/{type}', 'TransactionsController@create');
Route::get('/accounts/{account}/balance/{type}', 'AccountsController@balance');
Route::patch('/accounts/{account}/widthraw', 'AccountsController@widthraw');
Route::patch('/accounts/{account}/deposit', 'AccountsController@deposit');
Route::get('/transactions/reports/{year}/{month}', 'TransactionsController@reports');
Route::get('/transactions/reports/{year}/{month}/{account}', 'TransactionsController@reports');