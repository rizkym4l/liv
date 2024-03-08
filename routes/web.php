<?php

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

Route::get('/', function () {
    return view('karyawan.add');
})->name('home');

Route::get('/table', function () {
    return view('karyawan.table');
})->name('table');
Route::get('/edit/{id}', function () {
    return view('karyawan.edit');
})->name('edit');
