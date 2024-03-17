<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('front.index');
});

Route::get('/banner', function () {
    return view('front.banner');
});

Route::get('/detail', function () {
    return view('front.detail');
});

Route::get('/form-undangan', function () {
    return view('front.form-undangan');
});
