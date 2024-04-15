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
    return view('index');
});

Route::get('/atk', function () {
    return view('atk');
});

Route::get('/banner', function () {
    return view('banner');
});

Route::get('/cetak', function () {
    return view('cetak');
});

Route::get('/desain', function () {
    return view('desain');
});

Route::get('/sablon', function () {
    return view('sablon');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/undangan/erba', function () {
    return view('undangan.erba');
});

Route::get('/undangan/falah', function () {
    return view('undangan.falah');
});

Route::get('/undangan/kabinet', function () {
    return view('undangan.kabinet');
});

Route::get('/undangan/undangan-kita', function () {
    return view('undangan.undangan-kita');
});

Route::get('/undangan/website', function () {
    return view('undangan.website');
});
