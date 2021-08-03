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



Route::middleware(['auth'])->group(function () {
    Route::get('/beranda', function () {
        return view('content.dashboard');
    });
});

Route::get('/keasaman-air', function () {
    return view('content.keasaman');
});

Route::get('/kekeruhan-air', function () {
    return view('content.kekeruhan');
});


Route::get('/data-titik', function () {
    return view('content.admin');
});

Route::get('/rekap-asam', function () {
    return view('content.rekapasam');
});

Route::get('/rekap-keruh', function () {
    return view('content.rekapkeruh');
});

Route::get('/admin',function(){
    return view('admin.dashboardadmin');
});

Route::get('/daerah', function () {
    return view('admin.daerah');
});

// Route::get('/tambah-titik', function () {
//     return view('admin.tambah');
// });

Route::resource('/daerah', AlatController::class);

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
