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

Route::view('/home', 'admin.index');
Route::get('/event', function(){
    return view('event');
});
Route::get('/detailevent', function(){
    return view('detailevent');
});
Route::get('/myevent', function(){
    return view('myevent');
    });
Route::view('/editprofile', 'editprofile');    
Route::group(['prefix'=>'admin'], function () {
    Route::get('/', function(){
        return view('admin.dashboard');
    });
    Route::group(['prefix'=>'event'], function(){
        Route::get('/', 'EventController@index');
        Route::get('/create', 'EventController@create');
        Route::post('/', 'EventController@store');
        Route::get('/{id}/edit', 'EventController@edit');
        Route::post('/update/{id}', 'EventController@update');
        Route::post('/{id}', 'EventController@destroy');
    });
    Route::group(['prefix'=>'users'], function () {
        Route::get('/', 'UserController@index');
        Route::get('/create', 'UserController@create');
        Route::post('/', 'UserController@store');
        Route::get('/{id}/edit', 'UserController@edit');
        Route::post('/update/{id}', 'UserController@update');
        Route::post('/{id}', 'UserController@destroy');        
    });     
    Route::group(['prefix'=>'participant'], function () {
        Route::get('/', 'ParticipantController@index');
        Route::get('/view','ParticipantController@show');
        });
       
});