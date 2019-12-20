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

Route::view('/', 'choose');

Route::group(['prefix'=>'user', 'middleware'=>['auth','role:member']], function() {
        Route::get('/{id}/detailevent', 'UserIndexController@detail');
        Route::get('/myevent', 'UserIndexController@myevent');
        Route::get('/event', 'UserIndexController@event');
        Route::post('/{id}/daftar', 'UserIndexController@detail');
        Route::get('/', 'UserIndexController@index');
});

Route::group(['prefix'=>'admin', 'middleware'=>['auth','role:admin']], function () {
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
        Route::get('/{id}/view','ParticipantController@view');
        Route::delete('/{id}', 'ParticipantController@destroy');
        });
       
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
