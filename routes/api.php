<?php

use App\Http\Controllers\API\BeritaController;
use App\Http\Controllers\API\EmasController;
use App\Http\Controllers\API\MutabaahController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// emas
Route::get('/allEmas', [EmasController::class, 'getEmas']);

// auth
Route::controller(AuthController::class)->group(function () {
    Route::post('/regis', 'regis');
    Route::post('/login', 'login');
});

// mutabaah
Route::controller(MutabaahController::class)->group(function () {
    Route::get('/allMutabaah', 'getMutabaah')->middleware();
});

// berita
Route::controller(BeritaController::class)->group(function () {
    Route::get('/allBerita', 'getBerita')->middleware();
});
