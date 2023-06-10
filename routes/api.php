<?php

use App\Http\Controllers\JadwalController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\PerizinanController;
use App\Http\Controllers\UserController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('login', [UserController::class, 'login']);

Route::middleware(['auth:sanctum'])->group(function () {

    Route::get('kelas', [KelasController::class, 'index']);

    // jadwal
    Route::post('logout', [UserController::class, 'logout']);
});

Route::get('pelsmt1', [JadwalController::class, 'pelsmt1']);
Route::get('pelsmt2', [JadwalController::class, 'pelsmt2']);
Route::get('ptssmt1', [JadwalController::class, 'ptssmt1']);
Route::get('ptssmt2', [JadwalController::class, 'ptssmt2']);
Route::get('passmt1', [JadwalController::class, 'passmt1']);
Route::get('passmt2', [JadwalController::class, 'passmt2']);
Route::get('ekskul', [JadwalController::class, 'ekskul']);

// perizinan
Route::get('izin', [PerizinanController::class, 'index']);
Route::get('izin/{id}', [PerizinanController::class, 'detail']);
Route::post('izin', [PerizinanController::class, 'store']);
Route::delete('izin/{id}', [PerizinanController::class, 'destroy']);
Route::put('izin/{id}', [PerizinanController::class, 'update']);

// Nilai
Route::get('1ntugas', [NilaiController::class, 'tugassmt1']);
Route::get('2ntugas', [NilaiController::class, 'tugassmt2']);
Route::get('1npts', [NilaiController::class, 'ptssmt1']);
Route::get('2npts', [NilaiController::class, 'ptssmt2']);
Route::get('1npas', [NilaiController::class, 'passmt1']);
Route::get('2npas', [NilaiController::class, 'passmt2']);

// pengumuman
Route::get('pengumuman', [PengumumanController::class, 'pengumuman']);

// auth
Route::get('profile', [UserController::class, 'profile']);
