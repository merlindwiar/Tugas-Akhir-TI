<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductDetailController;
use App\Models\User;
use App\Http\Controllers\AlatController;
use App\Models\Status_kekeruhan;
use App\Models\Kekeruhan;
use App\Http\Controllers\LoginController; // step 1



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

Route::middleware(['auth','ceklevel:admin'])->group(function () {
    Route::get('/data-daerah','AlatController@index')->name('data-daerah');
    Route::get('/tambah-titik','AlatController@create')->name('tambah-titik');
    Route::post('/simpan-titik','AlatController@store')->name('simpan-titik');
    Route::get('/edit-titik/{id}','AlatController@edit')->name('edit-titik');
    Route::post('/update-titik/{id}','AlatController@update')->name('update-titik');
    Route::get('/delete-titik/{id}','AlatController@destroy')->name('delete-titik');
});

Route::middleware(['auth','ceklevel:admin,user'])->group(function () {
    Route::get('/beranda', 'DashboardController@dataTerakhir');
    Route::get('/keasaman-air','PhController@index')->name('keasaman-air');
    Route::get('/rekap-asam','RekapAsamController@index')->name('rekap-asam');
    Route::post('/filter-asam','RekapAsamController@index')->name('filter-asam');
    Route::get('/kekeruhan-air','KekeruhanController@index')->name('kekeruhan-air');
    Route::get('/rekap-keruh','RekapKeruhController@index')->name('rekap-keruh');
    // Route::get('/rekap-keruh','RekapKeruhController@index')->name('rekap-keruh');
    // Route::get('/rekap-keruh','RekapKeruhController@searc')->name('search');
});

// Route::get('/keasaman-air', function () {
//     return view('content.keasaman');
// });

// Route::get('/kekeruhan-air', function () {
//     return view('content.kekeruhan');
// });


Route::get('/data-titik', function () {
    return view('content.admin');
});

// Route::get('/rekap-asam', function () {
//     return view('content.rekapasam');
// });

// Route::get('/rekap-keruh', function () {
//     return view('content.rekapkeruh');
// });

Route::get('/admin',function(){
    return view('admin.dashboardadmin');
});

Route::get('/tambah-titik', function () {
    return view('admin.tambah');
});
// Route::get('/daerah', function () {
//     return view('admin.daerah');
// });

// Route::get('/tambah-titik', function () {
//     return view('admin.tambah');
// });

// Route::resource('/daerah', AlatController::class);

Route::get('/edit-titik', function () {
    return view('admin.edit');
});

Route::get('/users/{id_user}', function ($id_user) {
    $user = User::with('role')->find($id_user);
    return response()->json($user, 200);
});

// Route::get('/status_kekeruhan/{status_kekeruhan}', function ($id_kekeruhan) {
//     $status_kekeruhan = StatusKekeruhan::with('kekeruhan')->find($id_status_kekeruhan);
//     return response()->json($status_kekeruhan, 200);
// });

// Route::get('/tes_status_keruh', 'StatusKeruhController@index');

Route::get('/login', function () {
    return view('Pengguna.Login');
})->name('login');

Route::post('/postlogin', 'LoginController@postlogin')->name('postlogin');
Route::get('/logout', 'LoginController@logout')->name('logout');
