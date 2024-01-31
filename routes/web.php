<?php

use App\Http\Controllers\ChartController;
use App\Http\Controllers\CreateController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SiswaControllers;
use App\Http\Controllers\CreateControllers;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//  Route::get('/', function () {
//      return view('kerangka.master');
//  });

Route::get('/', [DashboardController::class, 'landingpage']);

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/log', [LoginController::class, 'login'])->name('login.store');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/regist', [RegisterController::class, 'store'])->name('register.store');

Route::get('/liverecord', [RegisterController::class, 'index'])->name('liverecord');



Route::get('/siswa', [SiswaControllers::class, 'tampil'])->name('siswa.data');

Route::get('/siswa', [SiswaControllers::class, 'dataSiswa'])->name('data.siswa');

Route::get('/create-siswa',[SiswaControllers::class, 'inputSiswa'])->name('create.siswa');

Route::post('/post-siswa', [SiswaControllers::class, 'storeSiswa'])->name('siswa.store');

Route::get('/edit/{id}', [CreateController::class, 'editSiswa'])->name('edit.siswa');

Route::post('/update-siswa', [CreateController::class, 'updateSiswa'])->name('update.siswa');

Route::get('/delete/{id}', [CreateController::class, 'deleteSiswa'])->name('delete.siswa');

Route::get('/log-out', [registerController::class, 'logout'])->name('siswa.logout');
   

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
