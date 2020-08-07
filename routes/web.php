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

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::post('/contact/submit', 'MessagesController@submit');
Route::get('/hatha', function () {
    return view('hatha');
});
Route::get('/vin', function () {
    return view('vin');
});
Route::get('/power', function () {
    return view('power');
});
Route::get('/quotes', function () {
    return view('quotes');
});
Route::get('/diet', function () {
    return view('diet');
});
Route::get('/ref', function () {
    return view('ref');
});
