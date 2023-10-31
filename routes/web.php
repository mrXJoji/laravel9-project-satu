<?php

use App\Http\Controllers\Tes_PenilaianController;
use App\Http\Controllers\Detail_PenilaianController;
use App\Http\Controllers\PenilaianController;
use App\Http\Controllers\HalamanController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\SiswaController;
use Illuminate\Contracts\Session\Session;
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


Route::get('/', [HalamanController::class, 'index']);
Route::get('/kontak', [HalamanController::class, 'kontak']);
Route::get('/tentang', [HalamanController::class, 'tentang']);

Route::resource('siswa', SiswaController::class)->middleware('isLogin');

Route::get('/sesi', [SessionController::class, 'index'])->middleware('isTamu');
Route::post('/sesi/login', [SessionController::class, 'login'])->middleware('isTamu');
Route::get('/sesi/logout', [SessionController::class, 'logout']);
Route::get('/sesi/register', [SessionController::class, 'register'])->middleware('isTamu');
Route::post('/sesi/create', [SessionController::class, 'create'])->middleware('isTamu');

Route::get('/', function () {
    return view('sesi/welcome');
})->middleware('isTamu');

Route::get('/penilaian', [PenilaianController::class, 'index']);
Route::get('/penilaian/create', [PenilaianController::class, 'create']);
Route::post('/penilaian', [PenilaianController::class, 'store']);
Route::get('/penilaian/edit/{id}', [PenilaianController::class, 'edit']);
Route::get('/penilaian/update/{id}', [PenilaianController::class, 'update']);
Route::get('/penilaian/delete/{id}', [PenilaianController::class, 'destroy']);

Route::get('/detail-penilaian', [Detail_PenilaianController::class, 'index']);
Route::get('/detail-penilaian/create', [Detail_PenilaianController::class, 'create']);
Route::post('/detail-penilaian', [Detail_PenilaianController::class, 'store']);
Route::get('/detail-penilaian/edit/{id}', [Detail_PenilaianController::class, 'edit']);
Route::get('/detail-penilaian/update/{id}', [Detail_PenilaianController::class, 'update']);
Route::get('/detail-penilaian/delete/{id}', [Detail_PenilaianController::class, 'destroy']);

Route::get('/tes-penilaian', [Tes_PenilaianController::class, 'index']);
Route::get('/tes-penilaian/create', [Tes_PenilaianController::class, 'create']);
Route::post('/tes-penilaian', [Tes_PenilaianController::class, 'store']);
Route::get('/tes-penilaian/edit/{id}', [Tes_PenilaianController::class, 'edit']);
Route::get('/tes-penilaian/update/{id}', [Tes_PenilaianController::class, 'update']);
Route::get('/tes-penilaian/delete/{id}', [Tes_PenilaianController::class, 'destroy']);
Route::get('/tes-penilaian/cetak-tes-penilaian', [Tes_PenilaianController::class, 'cetakTesPenilaian']);
