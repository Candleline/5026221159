<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\DosenController;

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

Route::get('/error', function () {
    return "<h1>Server Error : Ada Kesalahan di Server</h1>";
});

// route blog
Route::get('/blog', 'App\Http\Controllers\BlogController@home');
Route::get('/blog/tentang', 'App\Http\Controllers\BlogController@tentang');
Route::get('/blog/kontak', 'App\Http\Controllers\BlogController@kontak');

Route::get('dosen', 'App\Http\Controllers\DosenController@index');
Route::get('blog2', 'App\Http\Controllers\DosenController@blog');
Route::get('biodata', 'App\Http\Controllers\DosenController@biodata');

//Route::get('/pegawai/{nama}', 'App\Http\Controllers\PegawaiController@index');
Route::get('/formulir', 'App\Http\Controllers\PegawaiController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\PegawaiController@proses');

Route::get('/style2', function () {
    return view('style2');
})->name('style2');

Route::get('/style', function () {
    return view('style');
})->name('style');

Route::get('/responsive1', function () {
    return view('responsive1');
})->name('responsive1');

Route::get('/linktree', function () {
    return view('linktree');
})->name('linktree');

Route::get('/hello', function () {
    return view('hello');
})->name('hello');

Route::get('/form', function () {
    return view('form');
})->name('form');

Route::get('/5026221159', function () {
    return view('5026221159');
})->name('5026221159');


Route::get('/pegawai','App\Http\Controllers\PegawaiDBController@index'); //ganti semua route PegawaiDB
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiDBController@tambah'); //PR Tambahin edit save sama delete
Route::post('/pegawai/store','App\Http\Controllers\PegawaiDBController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiDBController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiDBController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiDBController@hapus');
Route::get('/pegawai/cari','App\Http\Controllers\PegawaiDBController@cari');


Route::get('/penggaris','App\Http\Controllers\PenggarisDBController@index2'); //ganti semua route PegawaiDB
Route::get('/penggaris/tambah2','App\Http\Controllers\PenggarisDBController@tambah2'); //PR Tambahin edit save sama delete
Route::post('/penggaris/store','App\Http\Controllers\PenggarisDBcontroller@store');
Route::get('/penggaris/edit2/{id}','App\Http\Controllers\PenggarisDBController@edit2');
Route::post('/penggaris/update','App\Http\Controllers\PenggarisDBController@update');
Route::get('/penggaris/hapus/{id}','App\Http\Controllers\PenggarisDBController@hapus');
Route::get('/penggaris/cari2','App\Http\Controllers\PenggarisDBController@cari');

use App\Http\Controllers\KeranjangBelanjaController;

Route::resource('keranjang', KeranjangBelanjaController::class);

