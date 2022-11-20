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
    return view('top');
});
Route::get('/static/reason', function () {
    return view('static.reason');
});
Route::get('/static/calender', function () {
    return view('static.calender');
});
Route::get('/static/guarantee', function () {
    return view('static.guarantee');
});
Route::get('/static/flow', function () {
    return view('static.flow');
});
Route::get('/static/set-wari', function () {
    return view('static.set-wari');
});
Route::get('/static/repeat-wari', function () {
    return view('static.repeat-wari');
});
Route::get('/static/delivery', function () {
    return view('static.delivery');
});
Route::get('/static/payment', function () {
    return view('static.payment');
});
Route::get('/static/law', function () {
    return view('static.law');
});
Route::get('/static/company', function () {
    return view('static.company');
});
Route::get('/static/sitemap', function () {
    return view('static.sitemap');
});