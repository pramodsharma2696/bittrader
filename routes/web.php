<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

// Accounts

Route::get('/account-Types', function () {
    return view('account-Types');
});
Route::get('/financial-Transparency', function () {
    return view('financial-Transparency');
});
Route::get('/standard-account', function () {
    return view('standard-account');
});
Route::get('/metaTrader-account', function () {
    return view('metaTrader-account');
});
Route::get('/raw-spread-account', function () {
    return view('raw-spread-account');
});
Route::get('/compare-account', function () {
    return view('compare-account');
});
Route::get('/execution', function () {
    return view('execution');
});
Route::get('/margin-requirements', function () {
    return view('margin-requirements');
});
Route::get('/rollover-rates', function () {
    return view('rollover-rates');
});

// Platforms and Tools


Route::get('/trading-tools', function () {
    return view('trading-tools');
});

Route::get('/currency-converter', function () {
    return view('currency-converter');
});

Route::get('/margin-and-pip-calculator', function () {
    return view('margin-and-pip-calculator');
});
Route::get('/pivot-points', function () {
    return view('pivot-points');
});


// Markets


Route::get('/trading-tools', function () {
    return view('trading-tools');
});