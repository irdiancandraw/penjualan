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
    return view('home');
});

Route::get('/barang', function () {
    return view('barang.index');
});

Route::get('/kategori', function () {
    return view('kategori.index');
});

Route::get('/pembeli', function () {
    return view('pembeli.index');
});

Route::get('/pembelian', function () {
    return view('pembelian.index');
});

Route::get('/penjualan', function () {
    return view('penjualan.index');
});

Route::get('/suplayer', function () {
    return view('suplayer.index');
});


