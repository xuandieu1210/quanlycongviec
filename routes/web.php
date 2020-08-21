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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/pscdonvi', 'PscDonViController@index')->name('pscdonvi');
Route::resource('/congviecchinh', 'CongviecchinhController');
Route::post('search/name', 'CongviecchinhController@getSearchAjax')->name('search');
Route::post('searchcv/name', 'CvchitietController@getSearchAjax')->name('searchcv');
Route::post('congviecchinh/updatemulti', 'CongviecchinhController@updateMulti');
Route::resource('/cvchitiet', 'CvchitietController');
