<?php

use Illuminate\Support\Facades\Route;

use App\Http\controllers\{
    KategoriController,
    BarangController,
    SuplierController,
   PembeliController,
   PembelianController,
   PenjualanController
};

Route::get('/', function () {
    return view('home');
});
//Route Barang
Route::resource('/barang',BarangController::class);
Route::get('/barang/{id}/edit', [BarangController::class,'edit']);
Route::get('/barang/{id}/hapus', [BarangController::class,'destroy']);

//route kategori
Route::resource('/kategori',KategoriController::class);
Route::get('/kategori/edit/{id}', [kategoriController::class,'edit']);
Route::get('/kategori/hapus/{id}', [kategoriController::class,'destroy']);

//pembeli
Route::resource('/pembeli',PembeliController::class);
Route::get('/pembeli/edit/{id}', [PembeliController::class,'edit']);
Route::get('/pembeli/hapus/{id}', [PembeliController::class,'destroy']);


Route::resource('/pembelian', PembelianController::class);
Route::get('/pembelian/hapus/{id}', [PembelianController::class, 'destroy']);
Route::get('/pembelian/edit/{id}', [PembelianController::class, 'edit']);


//suplier
Route::resource('/suplier',SuplierController::class);
Route::get('/suplier/edit/{id}', [SuplierController::class,'edit']);
Route::get('/suplier/hapus/{id}', [SuplierController::class,'destroy']);


Route::resource('/penjualan',PenjualanController::class);
Route::get('/penjualan/edit/{id}', [PenjualanController::class,'edit']);
Route::get('/penjualan/hapus/{id}', [PenjualanController::class,'destroy']);