<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\API\DoaController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\EmasController;
use App\Http\Controllers\MutabaahController;
use App\Http\Controllers\UserController;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// doa
Route::get('/doa', [DoaController::class, 'doa'])->name('doa');

// user
Route::get('/editprofile/{id}', [UserController::class, 'editprofile'])->name('edit');
Route::get('/updateProfile/{id}', [UserController::class, 'updateProfile'])->name('update');
Route::get('/updateProfile/{id}', [MutabaahController::class, 'store'])->name('update');

// mutabaah

Route::controller(MutabaahController::class)->group(function () {
    Route::get('/mutabaah', 'index')->name('allMutabaah');
    Route::get('/mutabaah/form', 'toForm')->name('toForm');
    Route::post('/mutabaah/form/store', 'store')->name('store');
});

// emas
Route::controller(EmasController::class)->group(function () {
    Route::get('/emas', 'index')->name('allEmas');
    Route::get('/emas/store', 'create')->name('toFormEmas');
    Route::post('/emas/store', 'store')->name('storeEmas');
});

// berita
Route::controller(BeritaController::class)->group(function () {
    Route::get('/berita', 'index')->name('allBerita');
    Route::get('/berita/create', 'toFormBerita')->name('toFormBerita');
    Route::post('/berita/store', 'store')->name('storeBerita');
});
