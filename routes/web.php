<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RtController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RondaController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\PendudukController;
use App\Http\Controllers\HalamanUserController;

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
    return view('user.beranda');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/tes_admin', function () {
    return view('layouts.admin');
});

Route::group(['prefix' => 'adminrw'], function () {
    Route::get('/', function () {
        return view('admin.index') - name('rw_home');
    });
    Route::resource('/rt', RtController::class);
    Route::resource('/ronda', RondaController::class);
    Route::resource('/kegiatan', KegiatanController::class);
});

Route::group(['prefix' => 'admin-rt'], function () {
    Route::get('/', function () {
        return view('admin.rt.index');
    });
    Route::resource('/penduduk', PendudukController::class);
    Route::resource('/jadwal', JadwalController::class);

    Route::get('/jadwal/ronda/{ronda}', [JadwalController::class, 'ronda']);

    Route::get('/jadwal/create', [JadwalController::class, 'create']);
});

Route::get('/halamanrt', [HalamanUserController::class, 'rt']);
