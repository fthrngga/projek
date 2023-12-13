<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pertanyaanController;
use App\Http\Controllers\universitasController;
use App\Http\Controllers\homeController;

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
    return view('welcomePage');
});

Route::resource('home', homeController::class);
Route::resource('universitas', universitasController::class);



Route::get('/pertanyaanMinat', [pertanyaanController::class, 'pertanyaan'])->name('pertanyaan.pertanyaan');
Route::get('/jurusan', [homeController::class, 'jurusan'])->name('home.jurusan');
Route::get('/get-universitas', [universitasController::class, 'getCsutomers'])->name('universitas.getCustomers');