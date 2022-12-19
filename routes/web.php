<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TugasController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;

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
// Route::get('/tugas1', function () {
//     return view('Tugas.tugas1', [
//         "title" => "tugas1",
//         "active" => "tugas1"
//     ]);
// });


// login
Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

// register
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// dari controller dasboard
route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
route::get('/admin', [DashboardController::class, 'admin'])->middleware('auth');

// tugas 1 2 3
    // tugas 1
route::get('/tugas1', [TugasController::class, 'tugas1'])->middleware('auth');
    // tugas 2
route::get('/tugas2', [TugasController::class, 'tugas2'])->middleware('auth');
    // tugas 3
Route::resource('pegawai', PegawaiController::class)->middleware('auth');

