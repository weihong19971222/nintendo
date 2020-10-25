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
Route::get('/news','FrontController@news');
Route::get('/news_info_{news_id}', 'FrontController@news_info');
Route::get('/3ds','FrontController@thds');
Route::get('/amiibo','FrontController@amiibo');
Route::get('/peripherals','FrontController@peripherals');
//會員
Route::get('/member_login','FrontController@member_login');
Route::get('/member_center','FrontController@member_center');
Route::get('/member_create','FrontController@member_create');

//商品頁
Route::get('/store_main','FrontController@store_main');
Route::get('/store_page_host','FrontController@store_page_host');
Route::get('/store_page_controller','FrontController@store_page_controller');
Route::get('/store_page_amiibo','FrontController@store_page_amiibo');
Route::get('/store_page_charger','FrontController@store_page_charger');
Route::get('/store_page_other','FrontController@store_page_other');
Route::get('/store_content_{id}','FrontController@store_content');
//購物車
Route::post('/addcart', 'CartController@addcart');
Route::get('/add_shop_cart', 'CartController@add_shop_cart');
Route::post('/changeProductQty','CartController@changeProductQty');
Route::post('/DelProduct','CartController@DelProduct');
Route::get('/order', 'CartController@order');
Route::post('/send_check_out','CartController@send_check_out');
Route::get('/success','CartController@success');
//綠界
Route::prefix('cart_ecpay')->group(function(){
    Route::post('notify', 'CartController@notifyUrl')->name('notify');
    Route::post('return', 'CartController@returnUrl')->name('return');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::resource('game','GameController');
    Route::resource('amiibo','AmiiboController');
    Route::resource('products','ProductsController');
    Route::resource('order','OrderController');
    Route::resource('news','NewsController');
});
