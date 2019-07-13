<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/st_admin')->group( function() {


	Route::get('/Dashboard',function(){
		return view('st_admin.dashboard');
	});

	Route::get('/Categories',function(){
		return view('st_admin.categories');
	});
	Route::resource('/Category','CategoryController');
});