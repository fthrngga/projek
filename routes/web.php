<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pertanyaanController;
use App\Http\Controllers\akunController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\jurusanController;

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

Route::get('/', function () {
    return redirect()->route('home.index');
});

Route::resource('home', homeController::class);
Route::resource('jurusan', jurusanController::class);
Route::resource('akun', akunController::class);



Route::get('/KompasKefrofesian', [homeController::class, 'index'])->name('home.index');

Route::get('/pertanyaanMinat', [pertanyaanController::class, 'pertanyaan'])->name('pertanyaan.pertanyaan');
Route::get('/halamanAdmin', [homeController::class, 'viewAdmin'])->name('home.viewAdmin');
Route::get('/halamanJurusan', [homeController::class, 'AdminJurusan'])->name('home.AdminJurusan');

Route::get('/FormRegistrasi', [AkunController::class, 'viewRegis'])->name('admin.regis');
Route::post('/registrasi', [AkunController::class, 'registrasi'])->name('regis');

Route::get('/halamanLogin', [AkunController::class, 'viewLogin'])->name('admin.login');
Route::post('/login', [AkunController::class, 'login'])->name('login');

