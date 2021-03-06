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
    return view('welcome');
});

Auth::routes();
Route::get(
    'locale/{locale}',
    function ($locale) {
        Session::put('locale', $locale);
        return redirect()->
        back();
    }
);
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/product', 'ProductController@index')->middleware('auth');

Route::delete('del/{id}','ProductController@destroy');
Route::put('upd/{id}','ProductController@update');
Route::get('/history','ProductController@history')->middleware('auth');