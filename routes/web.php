<?php

use Illuminate\Support\Facades\Route;

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
    return view('index.index');
});

Route::get('/home_user', function () {
    return view('index.home_user');
});

Route::any('/item','Item\ItemController@index');
Route::get('/update-item/{id}','Item\ItemController@edit');
Route::any('/api-item','API\APIItemController@index');
Route::any('/create-item','Item\ItemController@create');
Route::any('/insert_item','API\APIItemController@store');
Route::get('/show_item/{id}','API\APIItemController@show');
Route::any('/edit_item','API\APIItemController@update');
Route::any('/delete_item/{id}','API\APIItemController@destroy');



Route::get('/test','FirebaseController@index');
