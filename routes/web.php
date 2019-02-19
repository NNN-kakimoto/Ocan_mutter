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
use \App\Mutter;

Route::get('/', function () {
	//$mutters = Mutter::orderBy('id','desc')->get();
	return view('index',[
		//'mutters' => $mutters,
	]);
});

Route::get('/mutter_demo', function(){
	return view('new');
});
Route::get('/csrf_token', function(){
	return [ 
		'token' => csrf_token(),
	];
});