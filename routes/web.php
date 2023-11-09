<?php

use App\Http\Controllers\PenggunaController;

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



route::get('/index', [PenggunaController::class, 'index'])->name('pengguna.index');
route::get('/pengguna/create', [PenggunaController::class, 'create'])->name('pengguna.create');
route::post('/pengguna/store', [PenggunaController::class, 'store'])->name('pengguna.store');
route::get('/pengguna/edit{data}', [PenggunaController::class, 'edit'])->name('pengguna.edit');
route::put('/pengguna/update{data}', [PenggunaController::class, 'update'])->name('pengguna.update');
route::delete('/pengguna/destroy{data}', [PenggunaController::class, 'destroy'])->name('pengguna.destroy');
route::get('/pengguna/detail{data}', [PenggunaController::class, 'detail'])->name('pengguna.detail');
