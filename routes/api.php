<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SensorController;
use App\Http\Controllers\SensorTampilController;


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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/PhMasuk', [SensorController::class, 'PhMasuk']);
Route::post('/NTUMasuk', [SensorController::class, 'NTUMasuk']);
Route::post('/Masuk', [SensorController::class, 'Masuk']);
Route::get('/chart', [SensorTampilController::class, 'tampil'])->name('api.chart');
Route::get('/chartph', [SensorTampilController::class, 'tampilph'])->name('api.chartph');
// Route::get('chart', 'SensorTampilController@tampil')->name('api.chart');


