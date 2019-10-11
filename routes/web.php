<?php

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

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;
use Illuminate\Support\Facades\Route;

// ========================== ADMIN (BACKEND) ==========================================
// Dashboard
Route::get('/admin', 'DashboardController@index');

// Profile
Route::get('/admin/profile', 'ProfileController@index');

// Kategori
Route::get('/admin/kategori', 'KategoriController@index');
Route::get('/admin/kategori/create', 'KategoriController@create');
Route::post('/admin/kategori/store', 'KategoriController@store');
Route::get('/admin/kategori/show/{id}', 'KategoriController@show');
Route::get('/admin/kategori/edit/{id}', 'KategoriController@edit');
Route::post('/admin/kategori/update/{id}', 'KategoriController@update');


// Satuan 
Route::get('/admin/satuan', 'SatuanController@index');
Route::get('/admin/satuan/create', 'SatuanController@create');
Route::post('/admin/satuan/store', 'SatuanController@store');
Route::get('/admin/satuan/edit/{id}', 'SatuanController@edit');

// Produk
Route::get('/admin/produk', 'ProdukController@index');
Route::get('/admin/produk/create', 'ProdukController@create');
Route::post('/admin/produk/store', 'ProdukController@store');

// Transaction
Route::get('/admin/transaksi', 'TransaksiController@index');
Route::get('/admin/transaksi/create', 'TransaksiController@create');


// =============================== AUTH (FRONT END) ============================================
Auth::routes(['verify' => true]);
Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');


// =============================== FRONT END ====================================================

Route::get('/', function () {
    return view('welcome');
});


// =============================== BARANG====================================================

Route::get('/admin/barang', 'BarangController@index');
Route::get('/admin/barang/create', 'BarangController@create');
Route::post('/admin/barang/store', 'BarangController@store');
Route::get('/admin/barang/show/{id}', 'BarangController@show');
Route::get('/admin/barang/edit/{id}', 'BarangController@edit');
Route::post('/admin/barang/update/{id}', 'BarangController@update');
