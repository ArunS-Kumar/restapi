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

$api = app('Dingo\Api\Routing\Router');


Route::get('/', function () {
    return view('welcome');
});


Route::get('/todo', [
	'uses'    => '\Restapi\Http\Controllers\TodoController@getTodo',
	// 'middleware' => ['simpleauth'],
]);

Route::post('/todo', [
	'uses'    => '\App\Http\Controllers\TodoController@postTodo',
	// 'middleware' => ['simpleauth'],
]);

$api->version('v1', function($api){
	$api->get('getTodo', '\Restapi\Http\Controllers\TodoController@getTodo');
	$api->post('postTodo', '\Restapi\Http\Controllers\TodoController@postTodo');

});

