<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

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



Route::group(['prefix' => 'entry'],function(){
    Route::get('/','FormController@index')->name('entry');
    Route::post('/confirm','FormController@confirm')->name('entry.confirm');
    Route::post('/complete','FormController@complete')->name('entry.complete');

});
