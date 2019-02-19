<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
use \App\Mutter;
Route::post('/mutter/store', function(Request $request){
	//dd($request);
	$mutter = new Mutter;
	$mutter->content = $request->content;
	$mutter->nickname = $request->nickname;
	$mutter->created_at = now();
	// $mutter->save();
	return [$mutter->save() ];
});
Route::get('/csrf_token', function(){
	return [ 
		'token' => csrf_token(),
	];
});