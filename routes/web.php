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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/','FrontController@index');
Route::get('/game_softwa','FrontController@game_softwa_screen');
Route::get('/switch','FrontController@switch');
Route::get('/switch_lite','FrontController@switch_lite');
Route::get('/support','FrontController@support');
Route::get('/service','FrontController@service');
Route::get('/3ds','FrontController@thds');
Route::get('/amiibo','FrontController@amiibo');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::resource('game','GameController');
    Route::resource('amiibo','AmiiboController');
});
