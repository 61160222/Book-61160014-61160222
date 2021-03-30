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
Route::get('orders/calculateprice','OrderController@CalculatePrice')->name('order.calculateprice');
Route::get('orderdetail/indelivered','OrderDetailController@INDelivered')->name('orderdetail.indelivered');
Route::get('booktype/checkrate','BookTypeController@CheckRate')->name('booktype.checkrate');


Route::resource('book','BookController');
Route::get('/', function () {
    return view('welcome');
});
Route::resource('booktype','BookTypeController');
Route::get('/', function () {
    return view('welcome');
});
Route::resource('member','MemberController');
Route::get('/', function () {
    return view('welcome');
});
Route::resource('order','OrderController');
Route::get('/', function () {
    return view('welcome');
});
Route::resource('orderdetail','OrderDetailController');
Route::get('/', function () {
    return view('welcome');
});
Route::resource('orderlist','OrderListController');
Route::get('/', function () {
    return view('welcome');
});
Route::resource('shopping','ShoppingController');
Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');