<?php

use App\Livewire\Login;
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
Route::middleware('auth')->group(function(){

    Route::get('/', function () {
        return view('karyawan.add');
    })->name('addEmployee');
    
    
    
    
    Route::get('/table', function () {
        return view('karyawan.table');
    })->name('table');
    Route::get('/edit/{id}', function ($id) {
        return view('karyawan.edit', compact('id'));
    })->name('edit');
    Route::get('/dashboard', function () {
        return view('karyawan.dashboard');
    })->name('dashboard');
    Route::get('/detail/{id}', function ($id) {
        return view('karyawan.detail',compact('id'));
    })->name('detail');
    Route::get('/logout', [Login::class, 'logout'])->name('logout');
});
// 



Route::middleware('guest')->get('/login', function () {
    return view('login');
})->name('login');
