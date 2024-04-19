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

Route::get('/detail', function () {
    return view('product-detail');
});


Route::get('/dashboard', function () {
    return view('admin.index');
});


// routes/web.php

// Route untuk halaman dashboard dan home
// Route::get('/admin/dashboard', 'AdminController@dashboard')->name('admin.dashboard');
// Route::get('/admin/home', 'AdminController@home')->name('admin.home');

// // Grup route untuk halaman admin dengan middleware 'admin'
// Route::middleware(['admin'])->group(function () {
//     // Route untuk halaman ATK
//     Route::get('/admin/atk', 'AdminController@atk')->name('admin.atk');
    
//     // Route untuk halaman banner
//     Route::get('/admin/banner', 'AdminController@banner')->name('admin.banner');
    
//     // Route untuk halaman cetak
//     Route::get('/admin/cetak', 'AdminController@cetak')->name('admin.cetak');
    
//     // Route untuk halaman desain
//     Route::get('/admin/desain', 'AdminController@desain')->name('admin.desain');
    
//     // Route untuk halaman form
//     Route::get('/admin/form', 'AdminController@form')->name('admin.form');
    
//     // Route untuk halaman sablon
//     Route::get('/admin/sablon', 'AdminController@sablon')->name('admin.sablon');
    
//     // Route untuk submenu undangan
//     Route::get('/admin/undangan/erba', 'AdminController@undanganErba')->name('admin.undangan.erba');
//     Route::get('/admin/undangan/falah', 'AdminController@undanganFalah')->name('admin.undangan.falah');
//     Route::get('/admin/undangan/kabint', 'AdminController@undanganKabint')->name('admin.undangan.kabint');
//     Route::get('/admin/undangan/kita', 'AdminController@undanganKita')->name('admin.undangan.kita');
//     Route::get('/admin/undangan/website', 'AdminController@undanganWebsite')->name('admin.undangan.website');
// });
