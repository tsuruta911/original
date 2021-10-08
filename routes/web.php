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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin','middleware' => 'auth' ], function() {
    Route::get('tennis/create', 'Admin\TennisController@add');
    Route::post('tennis/create', 'Admin\TennisController@create'); # 追記
    Route::get('tennis', 'Admin\TennisController@index')->middleware('auth'); // 追記
    Route::get('tennis/edit', 'Admin\TennisController@edit')->middleware('auth'); // 追記
    Route::post('tennis/edit', 'Admin\TennisController@update')->middleware('auth'); // 追記
    Route::get('tennis/delete', 'Admin\TennisController@delete')->middleware('auth');
    Route::get('tennis/about', 'Admin\TennisController@about')->middleware('auth');
});

Route::get('/', 'TennisController@index');

Route::get('events/event{event_id}', 'TennisController@show')->name("tennis.show");